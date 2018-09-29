<?php 
class LoginController extends Controller{
	/**
	 * 登陆首页
	 */
	public function index(){
		$this->display();
	}
	public function code(){
		$code = new Code();
		$code->show();
	}
}

 ?>