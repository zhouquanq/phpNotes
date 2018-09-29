<?php 
/**
 * 应用类
 */
class App{
	//运行应用类的方法
	public static function run(){
		//1.初始化框架
		self::init();
		//2.设置外部路径
		
		//3.自动载入
		//给当前类的autoload方法赋予自动载入功能
		spl_autoload_register(array(__CLASS__,'autoload'));
		//4.创建一个控制器的DEMO
		self::createDemo();
		//5.实例化控制器，输出欢迎语
		self::appRun();
	}
	/**
	 * 5.实例化控制器执行应用，输出欢迎语
	 */
	private static function appRun(){
		//控制器
		$controller = isset($_GET['c']) ? ucfirst($_GET['c']) : 'Index';
		$controller .= 'Controller';
		//方法
		$action = isset($_GET['a']) ? $_GET['a'] : 'index';
		
		//实例化
		$obj = new $controller;
		$obj->$action();
	}
	
	/**
	 * 创建一个控制器的DEMO
	 */
	private static function createDemo(){
		$str = <<<str
<?php
class IndexController extends Controller{
	public function index(){
		header("Content-type:text/html;charset=utf-8");
		echo '<h2 style="padding:10px;margin:20px;">欢迎使用C49超级无敌大框架 (:</h2>';
	}
}

?>
str;
		$path = APP_CONTROLLER_PATH . '/IndexController.class.php';
		//如果已经存在则不重新创建了
		is_file($path) || file_put_contents($path, $str);
	}
	
	/**
	 * 因为spl_autoload_register 拥有了自动载入功能
	 */
	private static function autoload($className){
		require APP_CONTROLLER_PATH . "/{$className}.class.php";
	}
	
	/**
	 * 初始化框架
	 */
	private static function init(){
		//设置时候
		date_default_timezone_set('PRC');
		//如果有了session_id证明已经开启了session
		session_id() || session_start();
	}
	
	
	
	
}


 ?>