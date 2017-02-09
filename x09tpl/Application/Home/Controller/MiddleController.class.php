<?php
namespace Home\Controller;
use Think\Controller;
class MiddleController extends Controller {
	// 前台用户权限，起到中间件作用
    public function _initialize(){
        if(!$_SESSION['islogin']){
            $this->error("请先登陆",U('user/index'));
            exit;
        }
    }
}