<?php 
/**
 * 标签管理控制器
 */
class TagController extends AuthController{
	private $model;
	public function __init(){
		parent::__init();
		$this->model = K('Tag');
	}
	/**
	 * 显示标签
	 */
	public function index(){
		$this->assign('data',$this->model->all());
	    $this->display();
	}
	/**
	 * 添加标签
	 */
	public function add(){
		if(IS_POST){
		 	$tagArr = explode("\r", Q('post.tagname'));   
			//执行模型的自定义添加方法
			if(!$this->model->addData($tagArr)){
				$this->error($this->model->error);
			}
			$this->success('添加成功',U('index'));
		}
	    $this->display();
	}
	/**
	 * 删除
	 */
	public function del(){
	   $this->model->delete(Q('get.tid',0,'intval'));
	   $this->success('删除成功');
	}
	/**
	 * 编辑
	 */
	public function edit(){
	    $this->display();
	}
}

 ?>