<?php 
/**
 * 验证控制器
 */
class AuthController extends Controller{
	/**
	 * 自动运行方法
	 */
	public function __init(){
		//如果没有登录
		if(!isset($_SESSION['aid']) || !isset($_SESSION['adminname'])){
			go(U('Admin/Login/index'));
		}
	}
}








