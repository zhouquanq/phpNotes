<?php 
/**
 * 验证控制器
 */
class AuthController extends Controller{
	/**
	 * 自动运行
	 */
	public function __construct(){
		//调用父级构造函数,为了防止子类覆盖父类的构造方法
		parent::__construct();
		if(!isset($_SESSION['aid']) || !isset($_SESSION['adminname'])){
			$this->success('请登录',__APP__ . '?c=Login');
		}
	}
}





