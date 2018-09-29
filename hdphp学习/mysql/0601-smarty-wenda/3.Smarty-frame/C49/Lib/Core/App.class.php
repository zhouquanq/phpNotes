<?php 
/**
 * 应用类
 */
class App{
	//运行应用类的方法
	public static function run(){
		//1.初始化框架
		self::init();
		//2.设置外部路径(css,js,image,a链接地址的传递)
		self::setUrl();
		//3.自动载入
		//给当前类的autoload方法赋予自动载入功能
		spl_autoload_register(array(__CLASS__,'autoload'));
		//4.创建一个控制器的DEMO
		self::createDemo();
		//5.实例化控制器，输出欢迎语
		self::appRun();
	}
	private static function setUrl(){
		$url = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['SCRIPT_NAME'];
		$url = str_replace('\\', '/', $url);
		//定义应用路径
		define('__APP__', $url);
		//定义项目路径
		define('__ROOT__', dirname(__APP__));
		//定义VIEW 路径
		define('__VIEW__', __ROOT__ . '/' . APP_NAME . '/View');
		//定义PUBLIC路径
		define('__PUBLIC__', __VIEW__ . '/Public');
		
	}
	/**
	 * 5.实例化控制器执行应用，输出欢迎语
	 */
	private static function appRun(){
		//控制器
		$controller = isset($_GET['c']) ? ucfirst($_GET['c']) : 'Index';
		//定义控制器常量
		define('CONTROLLER', $controller);
		$controller .= 'Controller';
		//方法
		$action = isset($_GET['a']) ? $_GET['a'] : 'index';
		//定义方法常量
		define('ACTION', $action);
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
		//IndexController
		//如果是控制器
		if(strlen($className)>10 && substr($className, -10) == 'Controller'){
			//载入控制器
			$file = APP_CONTROLLER_PATH . "/{$className}.class.php";
			if(!is_file($file)) halt("{$file} 控制器不存在 ):");
		}else{
			//载入工具类
			$file = TOOL_PATH . "/{$className}.class.php";
			if(!is_file($file)) halt("{$file} 工具类不存在 ):");
		}
		require $file;
		
	}
	
	/**
	 * 初始化框架
	 */
	private static function init(){
		//加载配置项********
		//系统配置项
		$sysConfigPath = CONFIG_PATH . '/Config.php';
		//用户配置项
		$userConfigPath = APP_CONFIG_PATH . '/Config.php';
		$userConfig = <<<str
<?php
//配置项=>配置值
return array();
?>
str;
		is_file($userConfigPath) || file_put_contents($userConfigPath, $userConfig);
		
		C(include $sysConfigPath);
		C(include $userConfigPath);
		
		//设置时区
		date_default_timezone_set(C('DATE_TIMEZONE'));
		//如果有了session_id证明已经开启了session
		session_id() || session_start();
	}
	
	
	
	
}


 ?>