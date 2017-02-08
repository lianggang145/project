<?php
namespace Admin\Controller;
use Think\Controller;
class ShopController extends MiddleController {
 
    public function add(){
    
    	$this->display('shop/add');
    }
    public function add1(){
    	$shop=M('shops');
    	$upload=new \Think\Upload();
    	// var_dump($upload);
    	// 大小
    	$upload->naxSize=9999999999999;
    	// 后缀类型
    	$upload->exts=array('jpg','jpeg','png','gif');
    	// 保存路径
    	
    	$upload->rootPath="./Public/Up/";
    	// 执行上穿
    	// var_dump($upload);die();
    	$ss=$upload->upload();
    		// echo "上传成功";
    	if(!$ss){
    		$this->error($upload->getError());
    	}else{
    		foreach($ss as $file){
    			$url=__ROOT__."/Public/Up/".$file['savepath'].$file['savename'];
    			//echo $url.'123';
    			// echo "<img src='{$url}'>";die();
    		}
    	}
    		
    	// var_dump($_POST);die();
    	$name=array();
    	foreach($_POST as $k=>$v){
    		$name[$k]=$v;
    	}
    	$name['time']=time();
    	$name['pic']=$url;
    	$name['time']=date('Y-m-d H:i:s');
    	$shop->create();
    	if($shop->add($name)){
    		// echo "111";
    		$this->success('商品添加成功',U('shop/index'));
    	}else{
    		$this->error('商品添加失败');
    	}
    }
    public function index(){
    	$mod=M('shops');
    	$where=array();
    		if(!empty($_GET['name'])){
       		$where['name']=array('like',"%{$_GET['name']}%");
       	}
    	$page=new \Think\Page($mod->where($where)->Count(),1);
    	$page->setConfig('peev','上一页');
    	$page->setConfig('next','下一页');
    	$list=$mod->where($where)->limit($page->firstRow,$page->listRows)->select();
    	// var_dump($list);die();
    	$this->assign('list',$list);
    	// 分配分页效果
    	$this->assign('page',$page->show());
    	$this->display('shop/index');
    }
    // 删除
    public function del(){
    	$id=$_GET['id'];
    	$mod=M('shops');
    	$ss=$mod->find($id);
    	// 替换拼接实现删除文件夹图片
    	// var_dump($ss);die();
    	$m=$ss['pic'];
    	$c=str_replace('x09tpl/','',$m);
    	$kk=".".$c;
    	// 
    	
    	// echo "<img src='{$ss['pic']}'>";
    	
    	if($mod->delete($id)){
    		unlink($kk);
    		$this->success('删除成功',U('shop/index'));
    	}else{
    		$this->error('删除失败去吃屎');
    	}
    }
    // 商品详情修改  加载模板
    public function edit(){
    	$id=$_GET['id'];
    	$mod=M('shops');
       	$list=$mod->find($id);
    	$this->assign('list',$list);
    	$this->display('shop/edit');
    	// var_dump($list);
    }
    // 执行修改
    public function update(){
    	// var_dump($_POST);
    	$upload=new \Think\Upload();
    	$upload->maxSize=99999999999999;
		$upload->exts=array('jpg','jpeg','png','gif');
		// 保存拼接路径
		$upload->rootPath="./Public/Up/";
    	$id=$_POST['id'];
    	// var_dump($id);
    	$mod=M('shops');
    	$ss=$mod->find($id);
    	$m=$ss['pic'];
    	$c=str_replace('x09tpl/','',$m);
    	$kk=".".$c;
    	// 执行上传
    	$info=$upload->upload();
    	if($info){
       		foreach($info as $file){
    			$data['pic']=__ROOT__."/Public/Up/".$file['savepath'].$file['savename'];
    			unlink($kk);
    			  // var_dump($data);die();
    	}
    }
    // 获取需要添加的信息
    $data['name']=$_POST['name'];
    $data['num']=$_POST['num'];
    $data['address']=$_POST['address'];
    $data['price']=$_POST['price'];
    $data['descr']=$_POST['descr'];
    $data['time']=date('Y:m:d H:i:s');
    $data['uid']=$_POST['uid'];
    if($mod->where("id=$id")->save($data)){
    	$this->success('修改成功',U('shop/index'));
    }else{
    	$this->error('修改失败去吃屎');
    }
   }
}