<?php
namespace Admin\Controller;
use Think\Controller;
class PicController extends MiddleController {
    // 图片轮奸加载模板
   public function add(){
    $this->display('Pic/add');
   }
   public function index(){
    $pic=M('pic');
    $up=new \Think\Upload();
    // 大小
    $up->naxSize=99999999999999;
    $up->exts=array('jpg','jpeg','png','gif');
    // 路径
    $up->rootPath="./Public/admin/Pic/";
    // 执行

    $ss=$up->upload();
    // var_dump($ss);die();
        if(!$ss){
            $this->error($up->getError());
        }else{
            // 便利
            foreach ($ss as $file) {
                $url=__ROOT__."/Public/admin/Pic/".$file['savepath'].$file['savename'];
                // var_dump($url);
                // echo "<img src='{$url}'>";
            }
        }
        $name['pic']=$url;
        $pic->create();
        if($pic->add($name)){
            $this->success('图片添加成功',U('Pic/doindex'));
        }else{
            $this->error('添加失败去吃屎');
        }
   }
   public function doindex(){
    $pic=M('pic');
    $list=$pic->select();
    // var_dump($list);die();
         $this->assign('list',$list);
        $this->display('Pic/doindex');
   }
   // 执行删除
   public function del(){
    $id=$_GET['id'];
    $mod=M('pic');
    $ss=$mod->find($id);
    $m=$ss['pic'];
    $c=str_replace('x09tpl/','',$m);
    $kk=".".$c;
    if($mod->delete($id)){
        unlink($kk);
        $this->success('删除成功');
    }else{
        $this->error('删除失败去吃屎');
    }
   }
}