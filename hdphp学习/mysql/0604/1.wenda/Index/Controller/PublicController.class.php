<?php 
/*
 * 登录，注册管理控制器
 */
class PublicController extends Controller{
	/**
	 * 登录
	 */
	public function login(){
		if(IS_POST){
			//获得用户数据通过$_POST,下面只是我的例子
			$username = $_POST['username'];
			$password = md5($_POST['pwd']);
			
			//组合sql
			$sql = "SELECT * FROM user WHERE username='{$username}'";
			//查询用户
			$data = M()->query($sql);
			if(!$data){
				$this->error('用户不存在');
			}
			//比对用户和密码
			if($password != $data[0]['passwd']){
				$this->error('密码错误');
			}
			//存入session
			$_SESSION['uname'] = $username;
			$_SESSION['uid'] = $data[0]['uid'];
			
			//登录成功
			$this->success('登录成功', __APP__);
		}
	}
	
	/**
	 * 注册
	 */
	public function register(){
		if(IS_POST){
			if(strtoupper($_POST['code']) != $_SESSION['code']){
				$this->error('验证码错误');
			}
			//获得用户提交的数据
			$username = $_POST['username'];
			//密码
			$password = md5($_POST['pwd']);
			//注册时间
			$resTime = time();
			
			//组合SQL
		 	$sql = "INSERT INTO user SET username='{$username}',passwd='{$password}',restime={$resTime}";
			//执行插入
			M()->exec($sql);
			$this->success('注册成功',__APP__);
		}
	}
	
	/**
	 * 验证码
	 */
	public function code(){
		$code = new Code();
		$code->show();
	}
	
	/**
	 * 退出
	 */
	public function out(){
		session_unset();
		session_destroy();
		$this->success('退出成功',__APP__);
	}
	
	
	
	
	
}


 ?>