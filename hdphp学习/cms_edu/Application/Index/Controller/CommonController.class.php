<?php 
/**
 * 公共控制器
 */
class CommonController extends Controller{
	public function __init(){
		//防止重复定义
		if(!defined('__TEMPLATE__')){
			define('__TEMPLATE__', __ROOT__ . '/Template/' . C('INDEX_TPL_STYLE'));
		}
	}
	/**
	 * 自定义display
	 */
	public function dis($tpl){
		//调用框架的display
		$this->display("Template/" . C('INDEX_TPL_STYLE') . "/{$tpl}");
	}
	/**
	 * 检测用户名是否存在
	 */
	public function checkUser(){
		if(!IS_AJAX) $this->error('非法请求');
		//用户名
		$username = Q('post.username_reg');
		//如果有数据，证明用户名存在
		if(K('User')->where("username='{$username}'")->find()){
			$this->ajax(array('message'=>'用户名已存在','status'=>false));
		}else{
			$this->ajax(array('message'=>'可以注册','status'=>true));
		}
	}
	
	
	
}





