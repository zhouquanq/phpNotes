<?php 
/**
 * 登录管理控制器
 */
class LoginController extends Controller{
	/**
	 * 登录首页
	 */
	public function index(){
		if(IS_POST){
			$_SESSION['aid'] = 1;
			$_SESSION['adminname'] = 'admin';
			$this->success('登录成功',__APP__);
		}
		$this->display();
	}
	public function code(){
		$code = new Code();
		$code->show();
	}
}






