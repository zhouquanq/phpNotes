<?php 
/**
 * 单入口载入它
 * 启动的框架的核心类
 */
class C49{
	/**
	 * 类外部调用执行方法
	 */
	public static function run(){
		//1.设置常量,设置路径
		self::setConst();
		//2.创建用户所需文件夹
		self::createDir();
		//3.载入框架核心文件
		self::loadCore();
		//4.应用类执行
		App::run();
	}
	/**
	 * 设置常量路径
	 */
	private static function setConst(){
		//把\ 换成 / 为了保证linux和windows路径都能正常使用 
		$path =  str_replace('\\', '/', __FILE__);
		//定义框架目录
		define('C49_PATH', dirname($path));
		//定义Lib目录
		define('LIB_PATH', C49_PATH . '/Lib');
		//定义Core目录
		define('CORE_PATH', LIB_PATH . '/Core');
		//定义Function目录
		define('FUNCTION_PATH', LIB_PATH . '/Function');
		//定义项目根目录
		define('ROOT_PATH', dirname(C49_PATH));
		//定义应用目录
		define('APP_PATH', ROOT_PATH . '/' . APP_NAME);
//		echo APP_PATH;
		//定义控制器Controller目录
		define('APP_CONTROLLER_PATH', APP_PATH . '/Controller');
		//定义配置项Config目录
		define('APP_CONFIG_PATH', APP_PATH . '/Config');
		//定义视图View目录
		define('APP_VIEW_PATH', APP_PATH . '/View');
		//如果$_POST为空，证明用户没有提交
		if(empty($_POST)){
			define('IS_POST', false);
		}else{
			define('IS_POST', true);
		}
	}
	/**
	 * 创建用户所需文件夹
	 */
	private static function createDir(){
		$dirArr = array(
			APP_CONTROLLER_PATH,
			APP_CONFIG_PATH,
			APP_VIEW_PATH
		);
		foreach ($dirArr as $v) {
			is_dir($v) || mkdir($v,0777,true);
		}
	}
	
	
	/**
	 * 载入框架核心文件
	 */
	private static function loadCore(){
		$coreArr = array(
			//载入总控制器
			CORE_PATH . '/Controller.class.php',
			//载入APP类
			CORE_PATH . '/App.class.php',
			//载入函数
			FUNCTION_PATH . '/functions.php',
		
		);
		foreach ($coreArr as $v) {
			require_once $v;
		}
		
	}
	
}

C49::run();








 ?>