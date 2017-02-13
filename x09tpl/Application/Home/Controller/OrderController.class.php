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
   // 收货地址
   public static function Alladdress($id){
        return DB::table('address')->where('user_id','=',$id)->get();
      } 
   // 收货地址
   public function address(){
    $id=$_SESSION['hid'];

    $mod=M('address');
    $list=$mod->where("user_id=$id")->select();
    // var_dump($list);
    // exit;
    $this->assign('list',$list);
    $this->display('address/address');

   }
   public function address2(){
    // var_dump($_POST);exit;
    $data=$_POST;
    $mod=M('address');
    $ss=$mod->add($data);
    // var_dump($ss);exit;
    if($ss>0){
      $this->success('添加成功',U('order/address'));
    }else{
      $this->error('添加失败');
    }
   }
   // 收货地址修改
   public function addressedit(){
    $id=$_GET['id'];
    // var_dump($id);
    $mod=M('address');
    $ss=$mod->where("id=$id")->find();
    // var_dump($ss);
    $this->assign('ss',$ss);
    $this->display('address/addressedit');
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
      $this->success('修改成功',U('order/address'));
    }else{
      // echo 0;
      $this->success('修改失败');
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
   // 加载订单模板

   public function orders(){
        $status[1]="订单未确认";
        $status[2]="订单已确认,等待发货";
        $status[3]="已发货";
        $status[4]="货到，已付款";
        $status[5]="订单完成";
        $_SESSION['orderstatus']=$status;
    $mod=M('orders');
    $orders=$mod->where("userid=".intval($_SESSION['hid']))->select();
    // var_dump($orders);
    $this->assign('orders',$orders);
    $this->assign('status',$_SESSION['orderstatus']);
    $this->display('orders/index');

   }

    //个人中心-订单状态
  public function orderstatus(){
    $id=$_GET['id'];
    $sta=$_GET['sta'];
    // dd($orders);
    if($sta==1){
      $sta=2;
      $data['status']=$sta;
     $mod=M('orders');
      $mod->where('id ='.$id)->save($data);
    }elseif($sta==3){
      $sta=4;
      $data['status']=$sta;
      $mod->where('id='.$id)->save($data);
    }
    echo $_SESSION['orderstatus'][$sta];
      
    }

  //个人中心-订单-取消订单
    public function orderdel($id){
     $mod=M('orders');
    $mod->where('id='.$id)->delete();
    $mod->where('id='.$id)->delete();
    }

    //订单详情
    public function orderdetail($id){
    $mod=M('orders');
    $order=$mod->where('id='.$id)->find();
    // $detail=$buycar->join('shops ON shops.id=ord_goods.gid')->field("ord_goods.id as id,shops.id as gid,shops.name as name,shops.price as price,shops.descr as descr,shops.pic as pic,shops.address as address,ord_goods.num as num,ord_goods.xiaoji as xiaoji")->where("ord_goods.uid= ".$uid)->select();
    $detail=$mod->join("ord_goods ON ord_goods.oid=orders.id")->join("shops ON shops.id=ord_goods.gid")->join("cate ON shops.uid=cate.id")->field("ord_goods.id as id,shops.name as name,shops.price as price,shops.descr as descr,shops.pic as pic,ord_goods.num as num,cate.name as cate")->select();
    // var_dump($order);
    $this->assign('order',$order);
    $this->assign('detail',$detail);
    $this->display('orders/detail');
    }


}