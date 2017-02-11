<?php
namespace Admin\Controller;
use Think\Controller;
class LinkController extends MiddleController {
	// 使用动态放的自动验证添加信息
	protected $rule        =   array(
        array('name','/^\W{2,10}$/','用户名格式错误',1,'require'),//账号 链接名
        // array('http','/^\w{}$/','网址格式错误',1,'require'),//小梁，匹配网址正则我不会。。。
       
        array('phone','/^d{7,11}$/','联系电话错已有人注册',1,'unique',3,1,'require'),//电话
    );
	// 加载有钱链接添加模板
    public function add(){
        $this->display('Link/add');
    }


    public function insert(){
    	$list=array();

    	foreach($_POST as $k=>$v){
    		$list[$k]=$v;
    	}
    	// 调用自动验证
    	$link=M('link');
    	// 调用上面写好的自动验证方法  validdate($this->rule)，错误则终止代码
    	if(!$link->validate($this->rule)->create()){
    		$this->error($link->getError(),U('Link/add'));
    		exit;
    	}
    $up=new \Think\Upload();
    $up->naxSize=99999999999;
    $up->exts=array('jpg','jpeg','png','gif');
    $up->rootPath="./Public/admin/link/";
    $ss=$up->upload();
    if(!$ss){
        $this->error($up->getError());
    }else{
        foreach($ss as $file){
            $url=__ROOT__."/Public/admin/link/".$file['savepath'].$file['savename'];
            
        }
    }
    // 执行添
    $list['pic']=$url;
    $res=$link->data($list)->add();
    // var_dump($res);die();
    if($res>0){
        $this->success('链接添加成功',U('Link/index'));
    }else{
        $this->error('添加失败去吃屎');
    }
    }
   
   // 列表演显示
    public function index(){
        $mod=M('link');
        $list=$mod->select();
        $this->assign('list',$list);
        $this->display('Link/index');
    }
    // 修改加载模板
    public function edit(){
    $id=$_GET['id'];
    $mod=M('link');
    $list=$mod->find($id);
    $this->assign('list',$list);
    $this->display('Link/edit');
    }
    // 执行修改
    public function update(){
        $pic=new \Think\Upload();
        $pic->maxSize=999999999999;
        $pic->exts=array('jpg','jpeg','pen','gif');
        $pic->rootPath="./Public/admin/link/";
        $id=$_POST['id'];
        $mod=M('link');
        $ss=$mod->find($id);
        $m=$ss['pic'];
        $c=str_replace('x09tpl/','',$m);
        $kk=".".$c;
        $info=$pic->upload();
        if($info){
            foreach ($info as $file) {
               $data['pic']=__ROOT__."/Public/admin/Link/".$file['savepath'].$file['savename'];
               unlink($kk);
            }
        }
        // 调用上面写好的自动验证方法  validdate($this->rule)，错误则终止代码
        if(!$mod->validate($this->rule)->create()){
            $this->error($mod->getError(),U('Link/edit'));
            exit;
        }
        $data['name']=$_POST['name'];
        $data['phone']=$_POST['phone'];

        $data['http']=$_POST['http'];
        // var_dump($data);die;
        if($mod->where("id=$id")->save($data)){
            $this->success('修改成功',U('Link/index'));
        }else{
            $this->error('修改失败去吃屎');
        }
    }
    // 删除
    public function del(){
        $id=$_GET[' id'];
        $mod=M('link');
        $list=$mod->find($id);
        // var_dump($list);die
       $ss=str_replace('x09tpl/','',$list['pic']);
       $kk=".".$ss;
       if($mod->delete($id)){
            unlink($kk);
            $this->success('删除成功');
       }else{
        $this->error('删除失败去吃屎');
       }
    }
   }
