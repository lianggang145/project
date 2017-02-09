<?php
namespace Admin\Controller;
use Think\Controller;
class TypeController extends Controller {
    //调整类别顺序
	public static function Cates(){

		// 实例化model
    	$mod=M('cates');
    	//获取数据总条数
    	$tot=$mod->Count();
    	// var_dump($tot);
    	// exit;
    	//实例化分页类
    	$page=new \Think\Page($tot,5);
    	
    	//firstRow 其实总条数  listRow 每页显示的条数
    	// $list=$mod->limit($page->firstRow,$page->listRows)->select();

        //加载用户模块  分配变量（用自带的模板引擎技术）
        //            变量名  分配值
        // $this->assign('list',$list);
        // $this->assign('page',$page->show());

        // $list=DB::table('cate')->select(DB::raw('*,concat(path,",",id) as paths'))->where('name','like','%'.$this->request->input('keywords').'%')->orderBy('paths')->paginate(3);
    	$list=$mod->field("*,concat(path,',',id) as paths")->limit($page->firstRow,$page->listRows)->order('paths')->select();
    	// var_dump($list);
    	// exit;
		//遍历
        foreach($list as $key=>$value){
            // var_dump($value);
            // var_dump($key);
            // exit;
            //根据path中的逗号来判断是否为父类
            $s=$value['paths'];
            // var_dump($s);
            // exit;
            //转换维数组
            $arr=explode(',',$s);
            // var_dump($arr);
            // exit;
            //获取数组的长度
            $length=count($arr);
            //获取逗号的个数
            $dhs=$length-1;
            //在类名前拼接分隔符   str_repeat('要重复的内容',要重复的个数)重复字符串
            if($value['pid']==0){
            	//为了实现当类别为父类时name没有|--
            $list[$key]['name']=$value['name'];

        }else{
            $list[$key]['name']=str_repeat('|——',$dhs).$value['name'];

        }
        //    分类名        分隔符（几个逗号几个分隔符）  $value是一整条数据，调用它下面的name即为没有拼接前的类名
            // var_dump($list[$key]); 
            // exit; 
            // 一整条数据（和$value一样）
            // var_dump($value);

        }
        return $list;

        // var_dump($page);
        // exit;
	}
	//类别列表
    public function index(){
    	// 实例化model
    	$mod=M('cates');
    	//获取数据总条数
    	$tot=$mod->Count();
    	// var_dump($tot);
    	// exit;
    	//实例化分页类
    	$page=new \Think\Page($tot,5);
    	$page->setConfig('prev','← Prev');
    	$page->setConfig('next','Next → ');

    	$cate=self::Cates();
    	// var_dump($cate);
    	// exit;
    	//加载模板 分配变量
    	$this->assign('cate',$cate);
        $this->assign('page',$page->show());
        $this->display('type/index');
    }

    //类别添加
    public function add(){
    	$cate=self::Cates();
    	// var_dump($cate);
    	// exit;
    	//加载添加模板  分配数据
    	$this->assign('cate',$cate);
    	$this->display('type/add');
    }
    //执行添加操作
    public function insert(){
    	// var_dump($_POST);
    	//实例化model
    	$mod=M('cates');
    	//把获取的数据封装在$mod里
    	// var_dump($mod->create());
    	// exit;
    	$list=$mod->create();
    	//有两种情况，一是添加的为父类，一种是添加的为子类
    	//获取的是这个对象的pid，即添加页面的pid,==0为父类
    	$pid=$list['pid'];
    	// var_dump($pid);
    	// exit;
    	//添加类别是顶级分类
    	if($pid==0){
    		$list['path']='0';
    	}else{
    		//子类
    		$id=$pid;
    		//获取需要修改的信息
    		$info=$mod->find($id);
    		// var_dump($info);
    		// exit;
    		// dd($info);
    		//拼接添加类别的path
    		$list['path']=$info['path'].','.$info['id'];
    	}
    	// var_dump($list);
    	// exit;
    	//执行数据库的添加
    	if($mod->add($list)){
    		//页面跳转
    		$this->success('添加成功',U('type/index'));
    	}else{
    		$this->error('类别失败',U('type/add'));
    	}
    	
    }

    //执行删除
    public function delete(){
    	$id=$_GET['id'];
    	// echo $id;
    	//实例化model类
    	$mod=M('cates');
    	$info=$mod->where("pid='{$id}'")->count();
    	// var_dump($info);
    	// exit;
    	//判断删除的是子类还是父类
    	if($info>0){
    		$this->error('请先删除子类',U('type/index'));
    	}else{
    		if($mod->delete($id)){
    			$this->success('删除成功',U('type/index'));
    		}else{
    			$this->error('删除失败',U('type/index'));
    		}
    	}
    	
    }

    //加载修改模板
    public function edit(){
    	$id=$_GET['id'];
    	// echo $id;
    	//实例化model类
    	$mod=M('cates');
    	//获取获得的信息
    	$info=$mod->find($id);
    	$cate=self::Cates();
    	// var_dump($info);
    	//加载模板  分配数据
    	$this->assign('info',$info);
    	$this->assign('cate',$cate);
    	$this->display('type/edit');
    }

    //执行类别修改
    public function update(){
    	// var_dump($_POST);
    	//实例化model类
    	$mod=M('cates');
    	//把获取的数据封装在$mod里
    	// var_dump($mod->create());
    	// exit;
    	$list=$mod->create();
    	//有两种情况，一是添加的为父类，一种是添加的为子类
    	//获取的是这个对象的pid，即添加页面的pid,==0为父类
    	$pid=$list['pid'];
    	// var_dump($pid);
    	// exit;
    	//添加类别是顶级分类
    	if($pid==0){
    		$list['path']='0';
    	}else{
    		//子类
    		$id=$pid;
    		//获取需要修改的信息
    		$info=$mod->find($id);
    		// var_dump($info);
    		// exit;
    		// dd($info);
    		//拼接添加类别的path
    		$list['path']=$info['path'].','.$info['id'];
    	}
    	// var_dump($list);
    	// exit;
    	//执行数据库的添加
    	if($mod->save($list)){
    		//页面跳转
    		$this->success('修改成功',U('type/index'));
    	}else{
    		$this->error('修改失败',U('type/add'));
    	}
    }
}