<?php 
/**
 * 分类管理控制器
 */
class CategoryController extends AuthController{
	public function index(){
		$data = M()->query("SELECT * FROM category");
		$this->assign('data',$data);
		$this->display();
	}
}

 ?>