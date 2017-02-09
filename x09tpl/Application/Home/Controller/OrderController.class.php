<?php
namespace Home\Controller;
use Think\Controller;
class OrderController extends MiddleController {
	// 前台用户权限，起到中间件作用
   public function index(){
   	$mod=M('user_info');
   $uid=$_SESSION['hid'];
   // 
   	$list=$mod->where("uid='{$uid}'")->find();
   	// var_dump($list);die();
   	if($list){
   		$this->display('order/index');
   	}
   $this->display('order/index');
   }
}