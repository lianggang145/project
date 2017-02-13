<?php
namespace Home\Controller;
use Think\Controller;
class ShouController extends Controller {
        public function index(){
            $shops=M('shops');//实例化
            $cates=M('cate');//实例化
            $buycar=M('buycar');//实例化
            $list=$shops->select();
            // $cate=M('cate');//实例化
            // $cate=$cate->where("pid=0")->select();
            $cate=self::cate(0);
            // var_dump($cate[0]);
            $_SESSION['cate']=$cate;

        $this->assign('list',$list);
        $this->assign('cate',$_SESSION['cate']);
        $mod=M('pic');
        $pic=$mod->select();
        $this->assign('pic',$pic);
        $cate3=$cates->where("path like '%,%,%'")->select();
        foreach ($cate3 as $k => $v) {
            $cate3[$k]['shops']=$shops->where('uid = '.$v['id'])->select();
        }
        self::bc();//顶端购物车
        $this->assign('shops',$cate3);
            // var_dump($cate3[0]);
// =======
//  public function index(){
// >>>>>>> b41afbd98d0a6337fa467e4bd71e2ca13d2eb7e2
        $this->display('shou/index');
    }

public function bc(){
            $buycar=M('buycar');//实例化

                if ($_SESSION['hid']) {
                $uid=intval($_SESSION['hid']);
                $buycars=$buycar->join('shops ON shops.id=buycar.gid')->field("buycar.id as id,shops.id as gid,shops.name as name,shops.price as price,shops.descr as descr,shops.pic as pic,shops.address as address,buycar.num as num,buycar.xiaoji as xiaoji")->where("buycar.uid= ".$uid)->select();
            // var_dump($buycars);
              $_SESSION['buycar']=$buycars;
              $count=count($_SESSION['buycar']);
                $this->assign('count',$count);
                $this->assign('buycar',$buycars);
            }
}
    // 前台退出 
    public function lout(){
        setcookie(session_name(),'',time()-1,'/');
        $_SESSION=array();
        session_destroy();
        $this->display('user/index');
    }

    //商品详情页
    public function categorylist($id){
        self::bc();//顶端购物车
        $this->assign('cate',$_SESSION['cate']);//分类
        // var_dump($id);
        $a=explode(",", $id);
        // var_dump($a[2]);exit;
        // var_dump($_SESSION['cate'][$a[0]][cate2][$a[1]][cate3][$a[2]][shops]);
        $shops=$_SESSION['cate'][$a[0]][cate2][$a[1]][cate3][$a[2]][shops];//3级类别下的商品
        $path=$_SESSION['cate'][$a[0]][name].">".$_SESSION['cate'][$a[0]][cate2][$a[1]][name].">".$_SESSION['cate'][$a[0]][cate2][$a[1]][cate3][$a[2]][name];
        // var_dump($path);
        $this->assign('shops',$shops);
        $this->assign('path',$path);
        $this->display('categorylist/index');
        }
    //商品详情页
    public function product($id){
        self::bc();//顶端购物车

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
        $buycars2=$buycar->join('shops ON shops.id=buycar.gid')->field("buycar.id as id,shops.id as gid,shops.name as name,shops.price as price,shops.descr as descr,shops.pic as pic,shops.address as address,buycar.num as num,buycar.xiaoji as xiaoji")->where("buycar.uid= ".$uid)->select();
        // var_dump($buycars2);exit;
        $a=1;
        $id=0;
        foreach ($buycars2 as $key => $v) {
            if($v['gid']==intval($k)){//购物车存在该商品
                $v['num']=intval($v['num'])+$num;
                // var_dump($v['num']);
                $buycars[$key]=$v;
                $data['num']=$v['num'];
                $data['xiaoji']=$v['price']*$data['num'];
                // var_dump($data);
                // var_dump(intval($v['id']));
                $m=$buycar->where("id = ".intval($v['id']))->save($data);
                // $m=$buycar->where("gid = ".intval($v['id']))->select();
                $a=0;
                // var_dump($m);
            }
        }
            // exit;
        // echo $a;
        if($a==1){//购物车没有该商品
            $data['num']=$num;
            $data['gid']=intval($_GET['k']);
            // $data['price']=$request->input('price');
            $data['xiaoji']=$v['price']*$num;
            $data['uid']=$uid;
            // var_dump($data);exit;
            // $data['addtime']=date("Y-m-d H:i:s");
            $add=$buycar->add($data);
        }
        // var_dump($add);exit; 
        $buycars2=$buycar->join('shops ON shops.id=buycar.gid')->field("buycar.id as id,shops.id as gid,shops.name as name,shops.price as price,shops.descr as descr,shops.pic as pic,shops.address as address,buycar.num as num,buycar.xiaoji as xiaoji")->where("buycar.uid= ".$uid)->select();
        $_SESSION['buycar']=$buycars2;
        // var_dump();
        echo count($_SESSION['buycar']);
        // return (count($_SESSION['buycar']));
   }

   //购物车
   public function buycar(){
            $uid=intval($_SESSION['hid'],10);
            $buycar=M('buycar');//实例化

        $shop=$buycar->join('shops ON shops.id=buycar.gid')->field("buycar.id as id,shops.id as gid,shops.name as name,shops.price as price,shops.descr as descr,shops.pic as pic,shops.address as address,buycar.num as num,buycar.xiaoji as xiaoji")->where("buycar.uid= ".$uid)->select();
            // var_dump($shop);
                    $_SESSION["buycar"]=$shop;

            $this->assign('buycar',$shop);
            $this->display('buycar/index');
   }

    //购物车-删除
    public function buycardel($k){
            $buycar=M('buycar');//实例化
            $buycars=$buycar->where('id','=',$_SESSION['buycar'][$k]->id)->delete();
            $buycars=$buycar->where('uid','=',intval($_SESSION['hid']))->get();
            $_SESSION["buycar"]=$buycars;
        // dd($a);
        // dd(session('buycar'));
    }

    //购物车-选中
    public function checked(){
        $v=array();
        $v2=array();
        if($_GET['id']==""){
            echo 1;
            return 0;
        }else{
        $buy=$_GET['id'];
        // $buy=intval($GET['id']);
        $zj=explode("￥", $_GET['zj']);
        // var_dump($zj);exit;
        $_SESSION['zj']=intval($zj['1']);
        foreach ($_SESSION['buycar'] as $key => $value) {
            if(in_array($key, $buy)){
                $v[]=$value;
                // return $buy;
            }else{
                $v2[]=$value;
            }
        }
        $_SESSION['buy']=$v;
        $_SESSION['buyid']=$buy;
        $_SESSION['buycar']=$v2;
        // return "1";
         }
    }

    //购物车-变更
    public function shuliangbiangeng(){
            $buycar=M('buycar');//实例化
        $k= intval($_GET['k']);
        $a=$_SESSION['buycar'][$k];
        $a['num']=$_GET['shuliang'];
        $a['xiaoji']=intval($_GET['shuliang'])*$_SESSION["buycar"][$k]['price'];
        // var_dump($a);exit;
        $_SESSION['buycar'][$k]=$a;
        $data['num']=$a['num'];        
        $data['xiaoji']=$a['xiaoji'];     
        // var_dump($data);   
        $m=$buycar->where("id = ".intval($a['id']))->save($data);
    }
    // //确认订单
    // public function buycartwo(){
    //         $this->assign('buy',$_SESSION['buy']);
    //         $this->display('buycar/two');
    // }

 // 收货地址
     public function address(){
    $id=$_SESSION['hid'];

    $mod=M('address');
    $list=$mod->where("user_id=$id")->select();
    // var_dump($list);
    // exit;
    $this->assign('list',$list);
    $this->display('shou/address');

   }
   // 添加收货地址
   public function dizhi(){
    // var_dump($_POST);exit;
    $data=$_POST;
    $mod=M('address');
    $ss=$mod->add($data);
    // var_dump($ss);exit;
    if($ss>0){
      $this->success('添加成功',U('shou/address'));
    }else{
      $this->error('添加失败');
    }
   }
       //修改订单收货地址
    public function xdizhi($id){
     $mod=M('address');
        
        $data=$mod->where('id='.$id)->find();
        $_SESSION['data']=$data;
       // echo 1;
        var_dump($_SESSION['data']);
        // return $data;  

    }
    // 收货地址修改
   public function addressedit(){
    $id=$_GET['id'];
    // var_dump($id);
    $mod=M('address');
    $ss=$mod->where("id=$id")->find();
    // var_dump($ss);
    // $this->assign('ss',$ss);
    $this->display('shou/addressedit');
   }
    public function addressupdate(){
    $data['user_name']=$_POST['user_name'];
    $data['phone']=$_POST['phone'];
    $data['profile_email']=$_POST['profile_email'];
    $data['profile_address']=$_POST['profile_address'];
    $data['code']=$_POST['code'];
    $id=$_POST['id'];
    $mod=M('address');
    if($mod->where("id=$id")->save($data)){
      // echo 1;
      $this->success('修改成功',U('shou/buycartwo'));
    }else{
      // echo 0;
      $this->error('修改失败');
    }
    // var_dump($data);
   }
   public function addressdel(){
    $id=$_GET['id'];
    $mod=M('address');
    if($mod->where("id=$id")->delete()){
      // echo 1;
      $this->success('删除成功',U('order/address'));
    }else{
      // echo 0;
      $this->error('删除失败');
    }

   }
    //确认订单
    public function buycartwo(){
         $mod=M('address');
        $address=$mod->where("user_id=".intval($_SESSION['hid']))->select();
        // var_dump($address);
        session('address',$address);
            $this->assign('address',$address);
            $this->assign('buy',$_SESSION['buy']);
            $this->display('buycar/two');
    }
    // 产生订单号
    public function addorders(){
        $id=$_GET['id'];
        $sb=session('address');
        foreach($sb as $v){
            $aa=$v['profile_address'];
            $code=$v['code'];
            $name=$v['user_name'];
            $phone=$v['phone'];
        }
        // var_dump($name);
        $list=session('buy');
        
        $as=session('zj'); 
        $ss=session('hid');  
        $data['oid']=date('Ymd').rand(1,9999999999);
        $data['userid']=$ss;
        $data['likeman']=$name;
        $data['address']=$aa;
        $data['code']=$code;
        $data['phone']=$phone;
        $data['addtime']=date('Y-m-d H:i:s');
        $data['total']=$as;
        $data['status']=1;
        $mod=M('orders');
        if($mod->add($data)){
            // echo 1;
            $this->success('',U('shou/orders'));
        }else{
            echo 0;
        }
    }
    // 订单生成
    public function orders(){
        $mod=M('orders');
        $id=intval(session('hid'));
        // var_dump($id);exit;
        $list=$mod->where("userid=$id")->find();
        // var_dump($list);
        $this->assign('list',$list);
        $this->display('orders/orders');
    }
    public function myorder(){
        $id=session('hid');
        $mod=M('orders');
        $list=$mod->where("userid=$id")->select();
        // var_dump($list);
        $this->assign('list',$list);
        $this->display('orders/index');
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
                                    foreach ($value['cate3'] as $key1 => $value1) {
                                        $value['cate3'][$key1]['shops']=$shops->where("uid=".$value1['id'])->select(); 
                                            
                                        // var_dump($value['id']);
                                        $type[$k]['cate2'][$key]= $value;
                                    } 
                                $type[$k]['cate2'][$key]= $value;
                            }
                        }
                 }  
             }
             // var_dump($type[0][cate2][0][cate3][0][shops]);
             return $type;

    }
}