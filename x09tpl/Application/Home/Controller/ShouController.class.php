<?php
namespace Home\Controller;
use Think\Controller;
class ShouController extends Controller {
        public function index(){
            $shop=M('shops');//实例化
            $list=$shop->select();
            // $cate=M('cate');//实例化
            // $cate=$cate->where("pid=0")->select();
            $cate=self::cate(0);
            // var_dump($cate[0]);
            $_SESSION['cate']=$cate;
            // var_dump($_SESSION);
        $this->assign('list',$list);
        $this->assign('cate',$_SESSION['cate']);
        $this->display('shou/index');
    }

    // 前台退出 
    public function lout(){
        setcookie(session_name(),'',time()-1,'/');
        $_SESSION=array();
        session_destroy();
        $this->display('user/index');
    }

    // 分类
    public function cate($pid){
            $cate=M('cate');//实例化
            $shop=M('shop');//实例化
            $type=$cate->where("pid=".$pid)->select(); 
            if($type){
                foreach ($type as $k => $v) {
                    $type[$k]['cate2']=$cate->where("pid=".$v['id'])->select(); 
                            // echo 2;
                            // var_dump($type[$k]);
                            // echo "<hr>";
                         if($type[$k]['cate2']){
                            // echo 1;
                            foreach ($type[$k]['cate2'] as $key => $value) {
                                $value['cate3']=$cate->where("pid=".$value['id'])->select(); 
                                    foreach ($value['cate3'] as $key1 => $value1) {
                                        $shop->where("pid=".$value['id'])->select(); 
                                            
                                        // var_dump($value);
                                        $type[$k]['cate2'][$key]= $value;
                                    } 
                                $type[$k]['cate2'][$key]= $value;
                            }
                        }
                 }  
             }
             // var_dump($type[0][cate2][0]);
             return $type;

    }
}