<?php
namespace app\admin\controller;
\think\Loader::import('controller/Controller', \think\Config::get('traits_path'), EXT);
use think\Session;
use app\admin\Controller;
use think\Loader;
use think\Config;
use think\Db;
class StuApply extends Controller
{
    use \app\admin\traits\controller\Controller;
    // 方法黑名单
    protected static $blacklist = [];
    //搜索
    protected function filter(&$map)
    {

        if ($this->request->param("name")) {
            $map['name'] = ["like", "%" . $this->request->param("name") . "%"];
        }
        if ($this->request->param("class")) {
            $map['class'] = ["like", "%" . $this->request->param("catname3") . "%"];
        }
        if ($this->request->param("phone")) {
            $map['phone'] = ["like", "%" . $this->request->param("phone") . "%"];
        }
    }
    //详情
    public function show()
    {
        $id = input('id');
        $map['s.id'] = $id;
        $list = db('stu_apply')
            ->alias('s')
            ->join('teaching t', 't.id=s.college')
            ->join('teaching ta', 'ta.id=s.department')
            ->join('teaching tas', 'tas.id=s.class')
            ->field('s.*,t.catname catname1,ta.catname catname2,tas.catname catname3')
            ->where($map)
            ->find();
        $list['exper'] = db('experience')->where('sid="' . $id . '"')->select();
        $list['honor'] = db('honor')->where('sid="' . $id . '"')->select();
        if (empty($list['photo'])) {
            $list['photo'] = '/static/admin/images/touxaing.png';
        }
        $this->view->assign('vo', $list);
        return $this->view->fetch();
    }
    //首页
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
        $quanxian = db('admin_role_user')->where('user_id='.Session::get('iu_id'))->find();
        switch ($quanxian['role_id'])
        {
            case 1: //学生处   1
                $this->view->assign('quanxian',1);
                $where = '1=1';
                break;
            case 6://二级学院   2
                $this->view->assign('quanxian',2);
                $where = 'college='.Session::get('coll');
                break;
            default://管理员   0
                $this->view->assign('quanxian',0);
                $where = '1=1';
        }
        $map['s.isdelete'] = 0;
        $map['s.status'] = 0;
        unset($map['isdelete']);
        $page = 10;  //分页
        //学院系班级
        $list = db('stu_apply')->alias('s')
            ->join('teaching t', 't.id=s.college')
            ->join('teaching ta', 'ta.id=s.department')
            ->join('teaching tas', 'tas.id=s.class')
            ->field('s.*,t.catname catname1,ta.catname catname2,tas.catname catname3')
            ->where($map)
            ->where($where)
            ->order('s.id desc')
            ->paginate($page);
        $this->view->assign('page', $list->render());    //分页
        $this->view->assign('list', $list);
        $this->view->assign('count', $list->total());   //数据条数
        return $this->view->fetch();
    }
// 状态 通过退回 编号
    public function status()
    {
        //状态
        $data['id'] = input('id');
        $data['status'] = input('status');
        $sdata = [
            'sid' => $data['id'],
            'addtime' => time()
        ];
        $info = db('stu_apply')->where('id=' . $data['id'])->field('college,department,class')->find();
        $data['serialnumber'] = $info['college'] . $info['department'] . $info['class'] . db('increase')->insertGetId($sdata);
        $info = db('stu_apply')->update($data);
    }
    //修改
    public function edit()
    {
        $id = input('id');
        $map['s.id'] = $id;
        $map['s.isdelete'] = 0;
        $map['s.status'] = 0;
        $list = db('stu_apply')
            ->alias('s')
            ->join('teaching t', 't.id=s.college')
            ->join('teaching ta', 'ta.id=s.department')
            ->join('teaching tas', 'tas.id=s.class')
            ->field('s.*,t.catname catname1,ta.catname catname2,tas.catname catname3')
            ->where($map)
            ->select();
        foreach ($list as $key => $value) {
            $v1 = $value['catname1'];
            $v2 = $value['catname2'];
            $v3 = $value['catname3'];
        }
        $this->view->assign('list1', $v1);
        $this->view->assign('list2', $v2);
        $this->view->assign('list3', $v3);
        //学院
        $college = db('teaching')
            ->where('pid=0')
            ->where('id>1')
            ->select();
        //专业
        $department = db('teaching')
            ->where('pid>0&&pid<8')
            ->select();
        //班级
        $class = db('teaching')
            ->where('pid>7')
            ->select();
        $this->view->assign('class', $class);
        $this->view->assign('college', $college);
        $this->view->assign('department', $department);
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
