<?php
class IndexController extends Controller{
	public function index(){
		$data = M()->query("SELECT * FROM article");
		//分配
		$this->assign('data',$data);
		//载入模板
		$this->display();
	}
}

?>