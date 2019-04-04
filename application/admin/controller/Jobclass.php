<?php
namespace app\admin\controller;

\think\Loader::import('controller/Controller', \think\Config::get('traits_path') , EXT);

use app\admin\Controller;
use think\Db;
use think\Loader;
use think\exception\HttpException;
use think\Config;

class Jobclass extends Controller
{
    use \app\admin\traits\controller\Controller;
    // 方法黑名单
    protected static $blacklist = [];

    protected function filter(&$map)
    {
        if ($this->request->param("id")) {
            $map['id'] = ["like", "%" . $this->request->param("id") . "%"];
        }
        if ($this->request->param("pname")) {
            $map['pname'] = ["like", "%" . $this->request->param("pname") . "%"];
        }
        if ($this->request->param("describe")) {
            $map['describe'] = ["like", "%" . $this->request->param("describe") . "%"];
        }
    }
    /**
     * 首页
     * @return mixed
     */
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

//        $this->datalist($model, $map);

        // $map['p.isdelete']=0;
        // unset($map['isdelete']);
        $dlist=db('jobclass')->where('isdelete=1')->paginate(5);
 
        $clist=db('jobclass')->where('pid=0 and isdelete=0')->select();
        foreach ($clist as $key=>&$v){
            $v['secondlist']=db('jobclass')->where('pid='.$v['id'].' and isdelete=0')->select();
            foreach ($v['secondlist'] as $key=>&$t){
                $t['thirdlist']=db('jobclass')->where('pid='.$t['id'].' and isdelete=0')->select();
            }
        }
        $this->view->assign('clist', $clist);       
        $this->view->assign('dlist', $dlist);
        $this->view->assign("count", $dlist->total());
        return $this->view->fetch();
    }

    //    删除
    public function ldel()
    {
        $flag=input('flag');//获取flag值
        $id=input('id');//获取要删除的id
        $children=db('jobclass')->where('pid='.$id)->select();//要删除的id下是否存在子类,
        if (!empty($children)){
            if ($flag==1){ //如果有子类则判断html传来的值,值为1则返回1让html界面在进一步判断
                $msg=['code'=>1];
            }else{
                //flag的值不为1,则说明将 要删除的类下的子类一起删除
                $childid=db('jobclass')->where('pid='.$id)->column('id');//获取子类
      //          echo "<pre>";
			   // print_r($childid);
                foreach ($childid as $v){//遍历子类
                    $childinfo=db('jobclass')->where('pid='.$v)->update(['isdelete'=>1]);//删除子类
                }
                $info=db('jobclass')->where('pid='.$id)->update(['isdelete'=>1]);//删除子类
                $info2=db('jobclass')->where('id='.$id)->update(['isdelete'=>1]);

                $msg=[
                    'code'=>2,
                     'childid'=>$childid
                    ];
                return json($msg);
            }
            return json($msg);
        }else{
            $info=db('jobclass')->where('id='.$id)->update(['isdelete'=>1]);
            echo db('jobclass')->getLastSql();
            $msg=['code'=>2];
            return json($msg);
        }
    }


    /**
     * 添加
     * @return mixed
     */
    public function add()
    {
        $plist=db('jobclass')->where('pid=0 and isdelete=0')->select();
        foreach ($plist as $key=>&$v){
            $v['secondlist']=db('jobclass')->where('pid='.$v['id'].' and isdelete=0')->select();
        }
        $this->view->assign('plist',$plist);
        $controller = $this->request->controller();

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

    /**
     * 编辑
     * @return mixed
     */
    public function edit()
    {
        $plist=db('jobclass')->where('pid=0 and isdelete=0')->select();
        foreach ($plist as $key=>&$v){
            $v['secondlist']=db('jobclass')->where('pid='.$v['id'].' and isdelete=0')->select();
        }
        $this->view->assign('plist',$plist);
        $controller = $this->request->controller();

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
            $ids=input('id');
            $litid=db('jobclass')->where('id='.$ids)->find();
            $this->view->assign('litid',$litid);
            
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

}
