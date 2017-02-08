<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends MiddleController {
	// 使用动态放的自动验证添加信息
	protected $rule        =   array(
        array('name','/^\w{6,16}$/','用户名格式错误',1,'require'),//账号 required
        array('pwd','/^\w{6,16}$/','密码格式错误',1,'require'),//密码
        array('repwd','pwd','两次密码输入不正确',1,'confirm',3,1,'require'),//重复密码
        array('email','/^([a-zA-Z0-9_\.\-]){6,}\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/','邮箱格式错误或邮箱已注册',1,'unique',3,1,'require'),//邮箱
    );
	public function Inx(){
		$this->display();
	}
    public function index(){
        $where=array();
       	if(!empty($_GET['name'])){
       		$where['name']=array('like',"%{$_GET['name']}%");
       	}
    $li=M('user');
    // $list=$li->select();
    // 制作分页
    $page=new \Think\Page($li->where($where)->Count(),2);
   // var_dump($page);
    $page->setConfig('prev','上一页');
    $page->setConfig('next','下一页');
    $list=$li->where($where)->limit($page->firstRow,$page->listRows)->select();
    // var_dump($list);die();
    $this->assign('list',$list);
    // 分配分页输出变量
    $this->assign('page',$page->show());
    $this->display('user/index');
    }
    public function add(){
    	$this->display('user/add');
    }
    public function insert(){
    	$name=array();

    	foreach($_POST as $k=>$v){
    		$name[$k]=$v;
    	}
    	// 执行添加
    	$user=M('user');
    	// 调用上面写好的自动验证方法  validdate($this->rule)，错误则终止代码
    	if(!$user->validate($this->rule)->create()){
    		$this->error($user->getError(),U('user/add'));
    		exit;
    	}
    	// 使用md5密码加密

    	$name['pwd']=md5("!@$%".$name['pwd'].'*^&*()');
    	// Ttoken值
    	// var_dump($name['pwd']);die(
    	// $name['repwd']=null;
    	unset($name['repwd']);
    	$name['token']=md5(time()+mt_rand(1,9999999999));
    	// 返回插入会员ID当做件自动过滤

    	// var_dump($name);die();
    	$res=$user->data($name)->add();
    	// var_dump($res);die();
    	if($res>0){
    		$this->success('用户添加成功');
    	}else{
    		$this->error('用户添加失败');
    	}
    }
    // 执行删除
    public function del(){
    	$id=$_GET['id'];
    	$mod=M('user');
    	if($mod->delete($id)){
    		$this->success('删除成功',U('user/index'));
    	}else{
    		$this->error('删除失败');
    	}
    }
    // 用户修改
    public function edit(){
    	$id=$_GET['id'];
    	// find获取修改的数据
    	$mod=M('user');
    	$name=$mod->find($id);
    	// 加载修改页面分配数据执行修改
    	$this->assign('name',$name);
    	$this->display('user/edit');
    }
    // 执行修改
    public function update(){
    	$mod=M('user');
    	// var_dump($mod);die();
    	if(!$mod->validate($this->rule)->create()){
    		$this->error($mod->getError(),U('user/edit'));
    		exit;
    	}
    $mod->create();
    // 执行修改
    if($mod->save()){
    	$this->success('修改成功',U('user/index'));
    }else{
    	$this->error('修改失败去吃屎');
    }
    }
   }
