<?php
class IndexController extends Controller{
	public function index(){
		
		$a = 'houdunwang';
		//分配$a变量到模板,让模板可以直接输出$a
		$this->assign('a',$a);
		$this->display();
	}
	
}

?>