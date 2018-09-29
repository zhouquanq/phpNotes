<?php 
/**
 * 分类管理控制器
 */
class CategoryController extends AuthController{
	private $model;
	/**
	 * 初始化函数
	 */
	public function __init(){
		parent::__init();
		$this->model = K('Category');
	}
	/**
	 * 显示分类列表
	 */
	public function index(){
		//获得所有分类
		$data = $this->model->all();
		//获得树状结构的数据
		$data = Data::tree($data, 'cname','cid','pid');
		$this->assign('data',$data);		
		$this->display();
	}
	/**
	 * 获得子集分类cid
	 */
	public function getSon(){
		if(!IS_AJAX) $this->error('非法请求',U('Admin/Index/index'));
		$cid = Q('post.cid',0,'intval');
		//获得$cid所对应的所有的子集分类
		$data = $this->model->all();
		$sonCid = $this->model->sonCid($data,$cid);
		//返回给js数据
		$this->ajax($sonCid);
	}
	
	/**
	 * 分类添加
	 */
	public function add(){
		if(IS_POST){
			//调用模型的添加，里面包含自动验证
		 	if(!$this->model->addData()){
		 		$this->error($this->model->error);
		 	} 
			$this->success('添加成功',U('Admin/Category/index'));
		}
		$this->display();
	}
	/**
	 * 添加子分类
	 */
	public function addSon(){
		if(IS_POST){
		 	if(!$this->model->addData()){
		 		$this->error($this->model->error);
		 	}   
			$this->success('添加成功',U('Admin/Category/index'));
		}
		$cid = Q('get.cid',0,'intval');
		//处理“所属分类”
		$fatherCate = $this->model->field('cid,cname')->where("cid={$cid}")->find();
		$this->assign('fatherCate',$fatherCate);
	    $this->display();
	}
	
	/**
	 * 编辑
	 */
	public function edit(){
		if(IS_POST){
			$cid = Q('post.cid',0,'intval');
			$this->model->where("cid={$cid}")->update();
		 	$this->success('修改成功',U('index'));   
		}
		$cid = Q('get.cid',0,'intval');
		//处理“所属分类”把所有分类获取出来******
		//不能选择自己和自己的子集的分类
		//(1)找到自己和自己的子集
		$cateData = $this->model->all();
		$sonCid = $this->model->sonCid($cateData,$cid);
		$sonCid[] = $cid;
		//(2) 排除掉自己和自己的子集
		$cateData = $this->model->where("cid NOT IN(" . implode(',', $sonCid) . ")")->all();
		$cateData = Data::tree($cateData, 'cname');
		$this->assign('cateData',$cateData);
		
		//获得旧数据***************
		$oldData = $this->model->where("cid={$cid}")->find();
		$this->assign('oldData',$oldData);
	    $this->display();
	}
	/**
	 * 删除
	 */
	public function del(){
		$cid = Q('get.cid',0,'intval');
		//判断该分类下面是否有子集分类
		if($this->model->where("pid={$cid}")->find()){
			$this->error('请先删除该分类的子分类');
		}
		//模型删除
		$this->model->where("cid={$cid}")->delete();
		$this->success('删除成功');
	}
}









