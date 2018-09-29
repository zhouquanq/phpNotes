<?php
class IndexController extends Controller{
	public function index(){
		header("Content-type:text/html;charset=utf-8");
		echo '<h2 style="padding:10px;margin:20px;">欢迎使用C49超级无敌大框架 (:</h2>';
	}
}

?>