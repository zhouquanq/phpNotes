<?php 
/**
 * 用户表模型
 */
class UserModel extends Model{
	//指定当前模型是要操作user表
	public $table = 'user';
	
	//自动验证
	public $validate = array(
		//1.要验证的表单的name名称 2.规则 3.错误之后提示的信息 4.验证条件 5.验证时机
		array('username','nonull','用户名不能为空',2,3),
		array('password','nonull','密码不能为空',2,3),
		array('code','nonull','验证码不能为空',2,3)
	);
	
	/**
	 * 登录操作
	 */
	public function login(){
		//如果验证失败
		if(!$this->create()) return false;
		//判断验证码错误
		if(strtoupper($_POST['code']) != $_SESSION['code']){
			$this->error = '验证码错误';
			return false;
		}
		//判断用户名和密码是否正确
		$username = Q('post.username');
		//如果$userInfo为假，证明用户名不存在
		$userInfo = $this->where("username='{$username}'")->find();
		if(!$userInfo || $userInfo['password']!=Q('post.password','','md5')){
			$this->error = '用户名或者密码错误';
			return false;
		}
		//返回用户信息
		return $userInfo;
	}
}








