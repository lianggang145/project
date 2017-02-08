<?php
namespace Admin\Controller;
use Think\Controller;
class MiddleController extends Controller {
	public function index(){
        $this->display();
    }
    // 起到中间件作用
    public function _initialize(){
        // 如果session没有id存在 跳转登陆页面
        if(!$_SESSION['islogin']){
            $this->error("请先登陆",U('login/index'));
            exit;
        }
    }
   }
