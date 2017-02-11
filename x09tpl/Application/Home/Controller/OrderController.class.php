<?php
namespace Home\Controller;
use Think\Controller;
class OrderController extends MiddleController {
	protected $rule        =   array(
        array('phone','/^\d{11}$/','请填写正确手机号格式',1,'require'),//账号 required
        array('email','/^([a-zA-Z0-9_\.\-]){6,}\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/','邮箱格式错误或邮箱已注册',1,'unique',3,1,'require'),//邮箱
    );

	// 前台用户权限，起到中间件作用
   public function index(){
   	$mod=M('user_info');
   $uid=$_SESSION['hid'];
   // 
   	$list=$mod->where("uid='{$uid}'")->find();
   	// var_dump($list);die();
   	if($list['uid']==$uid){
   		$_SESSION['list']=$list;
   		$this->display('order/doindex');
   	}else{
   		$this->error('你的资料还不完全请去完善资料吧',U('order/add'));
   	}
   }
   // 加载添加模板
   public function add(){
   	$this->display('order/index');
   }

   // 执行添加
   public function insert(){
   	// var_dump($_POST);die();
   $user=M('user_info');
   // var_dump($user);
    	// 调用上面写好的自动验证方法  validdate($this->rule)，错误则终止代码
    	if(!$user->validate($this->rule)->create()){
    		$this->error($user->getError(),U('order/add'));
    		exit;
    	}
   $upload=new \Think\Upload();
   $upload->exts=array('jpg','jpeg','png','gif');
   // 保存路径
   $upload->rootPath="./Public/Up/";
   // 执行上传
   $ss=$upload->upload();
   if(!$ss){
   	$this->error($upload->getError());
   }else{
   	foreach ($ss as $file) {
   		$url=__ROOT__."/Public/Up/".$file['savepath'].$file['savename'];
   	}
   }
   $name=array();
   foreach($_POST as $k=>$v){
   	$name[$k]=$v;
   }
   $name['uid']=$_SESSION['hid'];
   $name['pic']=$url;
   // 返回数据ID
   $res=$user->data($name)->add();
   $list=$user->where("id='{$res}'")->find();
   if($res>0){
   	// 添加成功 在加载模板的同时将数据传递过去
   		$_SESSION['list']=$list;
   		// var_dump($_SESSION['list']);die();
   		$this->success('添加成功',U('order/doindex'));
   }else{
   		$this->error('信息添加失败');
   }
   }
   // 加载修改信息模板
   public function update(){
   	$this->display('order/update');
   }
   // 执行修改
   public function doupdate(){
   	$upload=new \Think\Upload();
   	$upload->maxSize=99999999999999;
   	$upload->exts=array('jpg','jpeg','png','gif');
   	// 保存路径
   	$upload->rootPath="./Public/Up/";
   	$id=$_POST['id'];
   	$mod=M('user_info');
   	$ss=$mod->find($id);
   	$m=$ss['pic'];
   	// 存数据库的时候存的是完整路径，在修改的时候要把x09tpl替换掉才可以删除文件夹原图片
   	$c=str_replace('x09tpl/','',$m);
   	$kk=".".$c;
   	// 执行上传
   	$info=$upload->upload();
   	if($info){
   		foreach ($info as $file) {
   			$data['pic']=__ROOT__."/Public/Up/".$file['savepath'].$file['savename'];
   			unlink($kk);
   		}
     }
     // 获取新信息
     $data['name']=$_POST['name'];
     $data['sex']=$_POST['sex'];
     $data['age']=$_POST['age'];
     $data['phone']=$_POST['phone'];
     $data['email']=$_POST['email'];
     $id=$_SESSION['list']['id'];
    if($mod->where("id=$id")->save($data)){
    	self::index();
    	// $this->success('修改成功');
    }else{
    	$this->error('修改失败去吃屎');
    }
   }

}