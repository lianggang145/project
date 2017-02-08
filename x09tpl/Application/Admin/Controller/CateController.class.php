<?php
namespace Admin\Controller;
use Think\Controller;
class CateController extends MiddleController {
    // 分类添加先加载页面 
	public function add(){
        $this->display('Cate/add');
    }
   }
