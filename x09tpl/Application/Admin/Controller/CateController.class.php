<?php
namespace Admin\Controller;
use Think\Controller;
class CateController extends MiddleController {
    // 分类添加先加载页面 
	public function add(){
        $this->display('Cate/add');
    }
    // 处理添加
    // 制作一个公共的分类方法

    public function index(){
           $cate=M('cate');
        var_dump($cate);die();
    }
   }
