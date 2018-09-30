<?php 
/**
 * 公共控制器
 */
class CommonController extends Controller{

	/**
	 * 验证是否登录
	 */
	public function authLogin(){
		
		if(!session('aid') || !session('aname')){
			go(U('Login/index'));
		}
	}
}





