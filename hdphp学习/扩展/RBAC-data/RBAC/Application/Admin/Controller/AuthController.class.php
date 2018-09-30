<?php 
/**
 * 验证控制控制器
 * @author 后盾马震宇 <houdunwangmzy@163.com>
 */
class AuthController extends Controller{
    /**
     * 构造函数
     */
    public function __init(){
    		
    		//如果没有登录，跳转到登录
       if(!Rbac::isLogin()){
       		go(U('Login/index'));
       }
	   if(!Rbac::checkAccess()){
	   		$this->error('您没有权限',U('Index/index'));
	   }
    }
 }
 
 
 
 
 
 
 
 
 
 
 



 ?>