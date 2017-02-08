<?php
namespace Home\Controller;
use Think\Controller;
class userController extends Controller {
	// 自动验证
	protected $rule = array(
        array('name','/^\w{6,16}$/','用户名格式错误',1,'require'),//账号 required
        array('pwd','/^\w{6,16}$/','密码格式错误',1,'require'),//密码
        array('repwd','pwd','两次密码输入不正确',1,'confirm',3,1,'require'),//重复密码
        array('email','/^([a-zA-Z0-9_\.\-]){6,}\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/','邮箱格式错误或邮箱已注册',1,'unique',3,1,'require'),//邮箱
    );
	public function Inx(){
		$this->display();
	}
	// 登陆页面
    public function index(){
  		$this->display('user/index');
    }
    
    // 加载验证码
    public function verify(){
    	// 实例化验证码类
    	$verify=new \Think\Verify();
    	// 设置信息
    	$verify->fontSize=20;//设置字体大小
    	$verify->length=4;//位数
    	// 开启干扰
    	$verify->useNoise=true;
    	// 生成验证码
    	$verify->entry();
    }
    // 注册页面
    public function registr(){
    	$this->display('user/registr');
    }
    // 检测
    public function dores(){
    	$fcode=$_POST['fcode'];
    	// 实例化验证码
    	$verify=new \Think\Verify();
    	$data=array();
    	// 用来检测验证码 和用户注册是否批匹配正则
    	if($verify->check($fcode,'')){
    		// 便利添加POST数据
    		foreach($_POST as $k=>$v){
    			$data[$k]=$v;
   			}
   			// 执行添加
   			$user=M('user');
   			// 调用自动验证方法
   			if(!$user->validate($this->rule)->create()){
   				$this->error($user->getError(),U('user/registr'));
   				exit;
   			}
    	}else{
    		$this->error('验证码有误请您去吃屎',U('user/registr'));
    	}
    	// 用户名不能跟数据库重复
    	$name=$user->where("name='{$data['name']}'")->find();
    	if($name['name']==$data['name']){
    		$this->error('用户名已存在,请重新输入',U('user/registr'));
    	}else{
            $data['pwd']=md5("!@%".$data['pwd'].'*^&*()');
            // 用unset删除多余数据
            unset($data['repwd']);
            unset($data['fcode']);
            $data['token']=md5(time()+mt_rand(1,9999999999));
            $res=$user->data($data)->add();
            if($res>0){
                $this->success('注册成功',U('user/index'));
            }else{
                $this->error('注册失败');
            }
    		
    	}
    }
    // 开始检测登陆
    // 判断用户是否激活账户
    public function login(){
        $name=$_POST['name'];
        $mod=M('user');
        $list=$mod->where("name='{$name}'")->find();
        // var_dump($list['id']);
        if($list['name']!=""){
            if($list['status']==1){
               
            }else{
                 $this->display('shou/index');
            }
        }else{
            // var_dump($list);die();                  
            $_SESSION['status']=$list['status'];
            // var_dump($_SESSION);die();
            $this->success('用户名不存',U('user/index'));
        }
    }
   
}