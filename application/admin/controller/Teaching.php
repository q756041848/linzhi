<?php
namespace app\admin\controller;

\think\Loader::import('controller/Controller', \think\Config::get('traits_path') , EXT);

use app\admin\Controller;
use think\Loader;
use think\Config;
use think\exception\HttpException;
use think\Db;
class Teaching extends Controller
{
    use \app\admin\traits\controller\Controller;
    // 方法黑名单
    protected static $blacklist = [];

    protected function filter(&$map)
    {
        if ($this->request->param('catname')) {
            $map['catname'] = ["like", "%" . $this->request->param('catname') . "%"];
        }
        if ($this->request->param('codes')) {
            $map['codes'] = ["like", "%" . $this->request->param('codes') . "%"];
        }
    }
    
    // 读取
    public function index()
    {
        $model = $this->getModel();

        // 列表过滤器，生成查询Map对象
        $map = $this->search($model, [$this->fieldIsDelete => $this::$isdelete]);

        // 特殊过滤器，后缀是方法名的
        $actionFilter = 'filter' . $this->request->action();
        if (method_exists($this, $actionFilter)) {
            $this->$actionFilter($map);
        }

        // 自定义过滤器
        if (method_exists($this, 'filter')) {
            $this->filter($map);
        }
        $this->datalist($model, $map);

        $info=db('teaching')->where('pid=0 and isdelete=0')->order('id asc')->select();
        
        foreach($info as $key => &$v){
            $v['secondlist']=db('teaching')->where('pid='.$v['id'].' and isdelete=0')->select();
            foreach($v['secondlist'] as $k => &$t){
                $t['thirdlist']=db('teaching')->where('pid='.$t['id'].' and isdelete=0')->select();
            }
        }
        $this->view->assign('info',$info);

        return $this->view->fetch();
    }

    // 添加
    public function add(){
        $controller = $this->request->controller();
        $id=input('id');
        $info=db('teaching')->where('pid=0')->select();
        foreach($info as $key => &$v){
            $v['secondlist']=db('teaching')->where('pid='.$v['id'])->select();
            foreach($v['secondlist'] as $k => &$t){
                $t['thirdlist']=db('teaching')->where('pid='.$t['id'])->select();
            }
        }
        $this->view->assign('id',$id);
        $this->view->assign('info',$info);
        
        if ($this->request->isAjax()) {
            // 插入
            $data = $this->request->except(['id']);

            // 验证
            if (class_exists($validateClass = Loader::parseClass(Config::get('app.validate_path'), 'validate', $controller))) {
                $validate = new $validateClass();
                if (!$validate->check($data)) {
                    return ajax_return_adv_error($validate->getError());
                }
            }

            // 写入数据
            if (
                class_exists($modelClass = Loader::parseClass(Config::get('app.model_path'), 'model', $this->parseCamelCase($controller)))
                || class_exists($modelClass = Loader::parseClass(Config::get('app.model_path'), 'model', $controller))
            ) {
                //使用模型写入，可以在模型中定义更高级的操作
                $model = new $modelClass();
                $ret = $model->isUpdate(false)->save($data);
            } else {
                // 简单的直接使用db写入
                Db::startTrans();
                try {
                    $model = Db::name($this->parseTable($controller));
                    $ret = $model->insert($data);
                    // 提交事务
                    Db::commit();
                } catch (\Exception $e) {
                    // 回滚事务
                    Db::rollback();

                    return ajax_return_adv_error($e->getMessage());
                }
            }

            return ajax_return_adv('添加成功');
        } else {
            // 添加
            return $this->view->fetch(isset($this->template) ? $this->template : 'edit');
        }
        
    }


    // 修改
    public function edit()
    {
        $controller = $this->request->controller();

        $info=db('teaching')->where('pid=0')->select();
        foreach($info as $key => &$v){
            $v['secondlist']=db('teaching')->where('pid='.$v['id'])->select();
            foreach($v['secondlist'] as $k => &$t){
                $t['thirdlist']=db('teaching')->where('pid='.$t['id'])->select();
            }
        }
        $id=input('id');
        $litid=db('teaching')->where('id='.$id)->find();
        $this->view->assign('litid',$litid);

        $this->view->assign('id',$id);
        $this->view->assign('info',$info);

        if ($this->request->isAjax()) {
            // 更新
            $data = $this->request->post();
            if (!$data['id']) {
                return ajax_return_adv_error("缺少参数ID");
            }

            // 验证
            if (class_exists($validateClass = Loader::parseClass(Config::get('app.validate_path'), 'validate', $controller))) {
                $validate = new $validateClass();
                if (!$validate->check($data)) {
                    return ajax_return_adv_error($validate->getError());
                }
            }

            // 更新数据
            if (
                class_exists($modelClass = Loader::parseClass(Config::get('app.model_path'), 'model', $this->parseCamelCase($controller)))
                || class_exists($modelClass = Loader::parseClass(Config::get('app.model_path'), 'model', $controller))
            ) {
                // 使用模型更新，可以在模型中定义更高级的操作
                $model = new $modelClass();
                $ret = $model->isUpdate(true)->save($data, ['id' => $data['id']]);
            } else {
                // 简单的直接使用db更新
                Db::startTrans();
                try {
                    $model = Db::name($this->parseTable($controller));
                    $ret = $model->where('id', $data['id'])->update($data);
                    // 提交事务
                    Db::commit();
                } catch (\Exception $e) {
                    // 回滚事务
                    Db::rollback();

                    return ajax_return_adv_error($e->getMessage());
                }
            }

            return ajax_return_adv("编辑成功");
        } else {
            // 编辑
            $id = $this->request->param('id');
            if (!$id) {
                throw new HttpException(404, "缺少参数ID");
            }
            $vo = $this->getModel($controller)->find($id);
            if (!$vo) {
                throw new HttpException(404, '该记录不存在');
            }

            $this->view->assign("vo", $vo);

            return $this->view->fetch();
        }
    }
    // 删除
    public function tdel()
    {
        $id=input('id');
        $flag=input('flag');
//        查询是否有子集
        $children=db('teaching')->where('pid='.$id)->select();
//        echo "<pre>";
//        print_r($children);exit;
        if(!empty($children))
        {
            if($flag==1){
                $msg=[
                    'code'=>1
                ];
            }else{
                $childid=db('teaching')->where('pid='.$id)->column('id');
                foreach ($childid as $v){
                    $childinfo=db('teaching')->where('pid='.$v)->update(['isdelete'=>1]);
                }
                $info=db('teaching')->where('pid='.$id)->update(['isdelete'=>1]);
                $info2=db('teaching')->where('id='.$id)->update(['isdelete'=>1]);
                    $msg=[
                    'code'=>2,
                    'childid'=>$childid
                ];
                return json($msg);
            }
            return json($msg);
        }else{
            $info=db('teaching')->where('id='.$id)->update(['isdelete'=>1]);
            $msg=[
                'code'=>2
            ];
            return json($msg);
        }
    }
    
}
