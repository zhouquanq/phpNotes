<?php 
/**
 * 列表页控制器
 */
class ListController extends CommonController{
	/**
	 * 列表页首页
	 */
	public function index(){
		//问题库处理(顶级分类)
		$this->topCate();
		$this->display();
	}
}










