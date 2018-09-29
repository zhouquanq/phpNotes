<?php 
/**
 * 登录管理控制器
 */
class LoginController extends Controller{
	/**
	 * 登录显示界面
	 */
	public function index(){
		if(IS_POST){
			//模型保存到变量
			$model = K('User');
			//调用UserModel里面的login方法，它会返回真假
		 	if(!$userInfo = $model->login()){
		 		//如果返回假，证明验证失败，需要输出错误
		 		$this->error($model->error);
		 	}
			$_SESSION['aid'] = $userInfo['uid'];
			$_SESSION['adminname'] = $userInfo['username'];
			
			$this->success('登录成功',U('Admin/Index/index'));
		}
		$this->display();
	}
	/**
	 * 显示验证码
	 */
	public function code(){
	    $code = new Code();
		$code->show();
	}
	
	/**
	 * 退出
	 */
	public function out(){
	   session(null);
	   $this->success('退出成功',U('Admin/Login/index'));
	}
}







