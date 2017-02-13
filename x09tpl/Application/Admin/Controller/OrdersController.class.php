<?php
namespace Admin\Controller;
use Think\Controller;
class OrdersController extends Controller {
    public function index(){
    	$orders=M('orders');
    	$order=$orders->where('userid='.$_SESSION['hid'])->select();
    	var_dump($order);
    	$this->assign("list",$order);
    	$this->display('/order/index');
    }
}