<?php
namespace Home\Controller;
use Think\Controller;
class ShouController extends Controller {
        public function index(){
            $shops=M('shops');//实例化
            $cates=M('cate');//实例化
            $list=$shops->select();
            // $cate=M('cate');//实例化
            // $cate=$cate->where("pid=0")->select();
            $cate=self::cate(0);
            // var_dump($cate[0]);
            $_SESSION['cate']=$cate;
            // var_dump($cate[0]);
        $this->assign('list',$list);
        $this->assign('cate',$_SESSION['cate']);
        $mod=M('pic');
        $pic=$mod->select();
        $this->assign('pic',$pic);
        $cate3=$cates->where("path like '%,%,%'")->select();
        foreach ($cate3 as $k => $v) {
            $cate3[$k]['shops']=$shops->where('uid = '.$v['id'])->select();
        }
        $this->assign('shops',$cate3);
            // var_dump($cate3[0]);
// =======
//  public function index(){
// >>>>>>> b41afbd98d0a6337fa467e4bd71e2ca13d2eb7e2
        $this->display('shou/index');
    }

    // 前台退出 
    public function lout(){
        setcookie(session_name(),'',time()-1,'/');
        $_SESSION=array();
        session_destroy();
        $this->display('user/index');
    }


    //商品详情页
    public function product($id){
            $shops=M('shops');//实例化
            $shop=$shops->where("id= ".$id)->find();
            // var_dump($shop);
            // var_dump($_SESSION);
            $this->assign('shop',$shop);
           $this->assign('cate',$_SESSION['cate']);
            $this->display('product/index');
   }

//添加商品
   public function buycaradd(){
        $uid=intval($_SESSION['hid']);
        $k=intval($_GET['k']);
        $shops=M('shops');//实例化
        $shop=$shops->where("id= ".$k)->find();
        $num=intval($_GET['num']?$_GET['num']:1);
        $buycar=M('buycar');//实例化
        // $buycars=$buycar->join('shops ON shops.id=buycar.gid')->where("buycar.uid= ".$uid)->find();
        $buycars2=$buycar->join('shops ON shops.id=buycar.gid')->where("buycar.uid= ".$uid)->select();
        // var_dump($k);exit;
        $a=1;
        $id=0;
        foreach ($buycars2 as $key => $v) {
            if($v['gid']==$k){//购物车存在该商品
                $v['num']=$v['num']+$num;
                $buycars[$key]=$v;
                // $data['price']=$request->input('price');
                $data['num']=$v['num'];
                $data['xiaoji']=$v['price']*$data['num'];
                // var_dump($data);
                // var_dump(intval($v['id']));
                $m=$buycar->where("gid = ".intval($v['id']))->save($data);
                // $m=$buycar->where("gid = ".intval($v['id']))->select();
                $a=0;
                // var_dump($m);
            }
        }
            // exit;
        // echo $a;
        if($a==1){//购物车没有该商品
            $data['num']=$num;
            $data['gid']=intval($buycars['id']);
            // $data['price']=$request->input('price');
            $data['xiaoji']=$v['price']*$num;
            $data['uid']=$uid;
            // var_dump($data);exit;
            // $data['addtime']=date("Y-m-d H:i:s");
            $add=$buycar->add($data);
        }
        // var_dump($add);exit; 
        $buycars=$buycar->join('shops ON shops.id=buycar.gid')->where("buycar.uid= ".$uid)->select();
        session(['buycar'=>$buycars]);

        return (count(session('buycar')));
   }

   //购物车
   public function buycar(){
            $uid=intval($_SESSION['hid'],10);
            // var_dump($uid);
            $buycar=M('buycar');//实例化

            $shop=$buycar->where("uid = ".$uid)->select();
            $this->display('buycar/index');
   }

    // 分类
    public function cate($pid){
            $cate=M('cate');//实例化
            $shops=M('shops');//实例化
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
                                    // foreach ($value['cate3'] as $key1 => $value1) {
                                        // $value['cate3'][$key1]['shops']=$shops->where("uid=".$value1['id'])->select(); 
                                            
                                        // var_dump($value['id']);
                                        // $type[$k]['cate2'][$key]= $value;
                                    // } 
                                $type[$k]['cate2'][$key]= $value;
                            }
                        }
                 }  
             }
             // var_dump($type[0][cate2][0][cate3][0][shops]);
             return $type;

    }
}