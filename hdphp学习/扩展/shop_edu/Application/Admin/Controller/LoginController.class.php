<?php 
class LoginController extends Controller{
	public function index(){
		if(IS_POST){
			$model = K('User');
			if(!$model->loginValidate()){
				$this->error($model->error);
			}
			session('aid',1);
			session('aname','admin');
		 	$this->success('登录成功',U('Index/index'));   
		}
	    $this->display();
	}
	public function code(){
	   $code = new Code();
	   $code->show();
	}
	public function out(){
	    session(null);
		$this->success('退出成功',U('index'));
	}
}
 ?>