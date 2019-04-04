<?php
namespace app\admin\controller;

\think\Loader::import('controller/Controller', \think\Config::get('traits_path') , EXT);

use app\admin\Controller;
use think\Config;
use think\Db;
use think\Loader;
use think\Session;
use think\File;
class AdminArticle extends Controller
{
    use \app\admin\traits\controller\Controller;
    // 方法黑名单
    protected static $blacklist = [];

    protected function filter(&$map)
    {
        if ($this->request->param("title")) {
            $map['title'] = ["like", "%" . $this->request->param("title") . "%"];
        }
    }
    //列表页
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
        unset($map['isdelete']);
        $map['aa.isdelete']=0;
        if(Session::get('coll')!=1 and Session::get('coll')!=0){
            $map['aa.coll']=Session::get('coll');
            $count=db('admin_article')->where('isdelete=0 and coll='.Session::get('coll'))->count();
            $this->view->assign('count',$count);
        }
        //print_r($map);return $this->view->fetch();exit;
        $user=db('admin_user')->select();
        $teaching=db('teaching')->select();
        $list=db('admin_article')
            ->alias('aa')
            ->join('teaching t','aa.p_id=t.id','LEFT')
            ->join('admin_user au','aa.issuer=au.id','LEFT')
            ->where($map)
            ->field('aa.*,t.catname,au.realname')
            ->order('aa.id desc')
            ->select();
        $this->view->assign('list',$list);
        $issuer=Session::get('issuer');
        $this->view->assign('issuer',$issuer);
        $coll=Session::get('coll');
        $this->view->assign('coll',$coll);
        $this->view->assign('user',$user);
        $this->view->assign('teaching',$teaching);
        return $this->view->fetch();
    }
    //回收站
    public function recycleBin(){
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

        $map['aa.isdelete']=1;
        unset($map['isdelete']);

        $list=db('admin_article')
            ->alias('aa')
            ->join('teaching t','aa.p_id=t.id','LEFT')
            ->join('admin_user au','aa.issuer=au.id','LEFT')
            ->where($map)
            ->field('aa.*,t.catname,au.realname')
            ->order('aa.id desc')
            ->select();
        $this->view->assign('list',$list);
        $issuer=Session::get('issuer');
        $this->view->assign('issuer',$issuer);
        $coll=Session::get('coll');
        $this->view->assign('coll',$coll);
        $user=db('admin_user')->select();
        $this->view->assign('user',$user);
        $count=db('admin_article')->where('isdelete=1')->count();
        //echo $count;exit;
        $this->view->assign('count',$count);
        return $this->view->fetch();
    }
    //修改
    public function edit()
    {
        $controller = $this->request->controller();
        $data=input('post.');
        if($data){
            if (!$data['id']) {
                return ajax_return_adv_error("缺少参数ID");
            }
            //print_r($data);exit;
            $file=request()->file('adjunct');
//            print_r($file);exit;
            if($file){
                $delete=db('admin_article')->where('id='.$data['id'])->find();
                if($delete['adjunct']){
                    unlink("static/admin/uploads/".$delete['adjunct']);
                }
                $info=$file->validate(['size'=>10000000,'ext'=>'doc,docx,xls,xlsx,ppt,pptx,rar,zip'])->move(ROOT_PATH.'public'.DS.'static/admin/uploads');
                $data['adjunct']=$info->getSaveName();
            }
            $data['content']=htmlspecialchars_decode($data['content']);
            $info=db('admin_article')->where('id='.$data['id'])->find();
            if($data['content']==''){
                $data['content']=$info['content'];
            }
            $msg=db('admin_article')->update($data);
            if($msg){
                return json($msg);
            }
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
    //添加
    public function add()
    {
        $data=input('post.');
        if($data){
            //print_r($data);exit;
            $file=request()->file('adjunct');
            //print_r($file);exit;
            if($file){
                $info=$file->validate(['size'=>10000000,'ext'=>'doc,docx,xls,xlsx,ppt,pptx,rar,zip'])->move(ROOT_PATH.'public'.DS.'static/admin/uploads');
                $data['adjunct']=$info->getSaveName();
            }
            $data['content']=htmlspecialchars_decode($data['content']);
            $data['issuer']=Session::get('issuer');
            $data['date']=strtotime('now');
            $data['p_id']=Session::get('coll');
            $data['coll']=Session::get('coll');
            $msg=db('admin_article')->insert($data);
            if($msg){
                return json($msg);
            }
        }else{
            return $this->view->fetch('edit');
        }
    }
    //详情
    public function details(){
        $id=input('id');
        $list=db('admin_article')
            ->alias('aa')
            ->join('admin_user au','aa.issuer=au.id','LEFT')
            ->where('aa.id='.$id)
            ->find();
        $this->view->assign('list',$list);
        return $this->view->fetch();
    }
    //评分
    public function grade(){
            $id=input('id');
            $data=db('admin_article')->where('id='.$id)->find();
            $this->view->assign('data',$data);
            //print_r($data);exit;
            return $this->view->fetch();
    }
    //审核
    public function check()
    {
        $controller = $this->request->controller();

        if ($this->request->isAjax()) {
            // 更新
            $data = $this->request->post();
            $data['check_date']=time();
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
    //进行评分
    public function grade_check(){
        $data=input('post.');
        //echo $data;
        //print_r($data);exit;
        $info=db('admin_article')->update($data);
        if($info){
            return ajax_return_adv("编辑成功");
        }
    }
}
