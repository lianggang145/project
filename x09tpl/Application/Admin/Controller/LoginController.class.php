<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
	public function index(){
        $this->display('Login/index');
    }
    // 执行登陆处理
    public function dologin(){
        $name=$_POST['name'];
        $pwd=md5("!@$%".$_POST['pwd'].'*^&*()');
        $mod=M('user');
        $list=$mod->where("name='{$name}'")->find();
        // var_dump($list);
        if(empty($list)||$list['pwd']!=$pwd){
            $data['email']=$name;
            $ll=$mod->where($data)->find();
            // var_dump($ll);
            if(empty($ll)||$ll['pwd']!=$pwd){

                $this->error('账号或者密码不错误，请去吃屎',U('Login/index'));
            }else{
                $_SESSION['islogin']=2;
                $_SESSION['name']=$name;
           $this->success("登陆成功",U('user/index'));
            }
        }else{
                $_SESSION['islogin']=2;
                $_SESSION['name']=$name;
            $this->success("登陆成功",U('user/index'));
        }
    }
    // 退出
    public function logout(){
      setcookie(session_name(),'',time()-1,'/');
      $_SESSION=array();
      session_destroy();
      $this->success('退出成功',U('Login/index'));
    }
   }
