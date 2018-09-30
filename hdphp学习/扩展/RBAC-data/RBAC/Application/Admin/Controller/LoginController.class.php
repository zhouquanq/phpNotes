<?php 
/**
 * 登陆控制器
 * @author 后盾马震宇 <houdunwangmzy@163.com>
 */
class LoginController extends Controller{
    /**
     * 
     */
    public function index(){
    		if(IS_POST){
    		  	if(!Rbac::login(Q('post.username'),Q('post.password','','md5'),'admin')){
    		  		$this->error(Rbac::$error);
    		  	}
      		$this->success('登陆成功',U('Index/index'));
    		}
       $this->display(); 
    }
	
	public function out(){
		session(NULL);
		$this->success('退出成功');
	}
 }
 
 
 
 
 
 
 
 
 
 
 



 ?>