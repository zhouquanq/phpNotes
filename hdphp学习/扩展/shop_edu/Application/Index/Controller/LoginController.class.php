<?php 
/**
 * 登录控制器
 * @author 后盾马震宇 <houdunwangmzy@163.com>
 */
class LoginController extends Controller{
    /**
     * 显示登录页面
     */
    public function index(){
    	if(IS_POST){
    	   if(Q('post.auto')){
    	   			setcookie(session_name(),session_id(),time() + 3600 * 24 * 7,'/');
    	   }
    	}
       $this->display(); 
    }
 }
 
 
 
 
 
 
 
 
 
 
 


 ?>