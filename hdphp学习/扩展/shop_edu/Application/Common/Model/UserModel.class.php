<?php 
/**
 * 用户表模型
 * @author 后盾马震宇 <houdunwangmzy@163.com>
 */
class UserModel extends Model{
	
    public $table = 'user';
    
    public $auto = array();
    
    public $validate = array(
		array('username','nonull','用户名不能为空',2,3),
		array('password','nonull','密码不能为空',2,3),
	);
    
	public function loginValidate(){
		if(!$this->create()) return false;
		if(!$code = Q('post.code')){
			$this->error = '验证码必须填写';
			return false;
			
		}
		return true;
	}
    
 }
 
 
 
 
 
 
 
 
 
 
 


 ?>