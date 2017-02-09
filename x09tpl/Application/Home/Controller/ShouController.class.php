<?php
namespace Home\Controller;
use Think\Controller;
class ShouController extends Controller {
	public function index(){
        $this->display('shou/index');
    }
    // 前台退出
    public function lout(){
        setcookie(session_name(),'',time()-1,'/');
        $_SESSION=array();
        session_destroy();
        $this->display('user/index');
    }
}