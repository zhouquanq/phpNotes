<?php 
//载入Smarty
require ORG_PATH . "/Smarty/Smarty.class.php";
/**
 * 框架与Smarty的桥梁
 */
class SmartyView{
	private static $smarty = NULL;
	/**
	 * 自动运行方法，构造函数
	 */
	public function __construct(){
		if(!is_null(self::$smarty)) return;
		//配置Smarty
		$smarty = new Smarty;
		//模版目录
		$smarty->template_dir = APP_VIEW_PATH . '/' . CONTROLLER;
		//编译目录 
		$smarty->compile_dir = APP_COMPILE_PATH; 
		//缓存目录
		$smarty->cache_dir = APP_CACHE_PATH;
		//是否缓存
		$smarty->caching = C('CACHE_ON');
		//缓存时间
		$smarty->cache_lifetime = C('CACHE_TIME');
		//注册不缓存块(固定写法)
		$smarty->register_block("nocache", "nocache", false);
		//开始定界符
		$smarty->left_delimiter = C("LEFT_DELIMITER");
		//结束定界符
		$smarty->right_delimiter = C("RIGHT_DELIMITER");
		//保存到静态属性中
		self::$smarty = $smarty;
	}
	
	/**
	 * 载入模板
	 */
	protected function display(){
		//组合模板路径
		$file = APP_VIEW_PATH . '/' . CONTROLLER . '/' . ACTION . '.html';
		if(!is_file($file)) halt("{$file} 模板不存在 ): ");
		//调用smarty载入模板
		self::$smarty->display($file);
	}
	
	/**
	 * 分配变量
	 */
	protected function assign($var,$value){
		//调用smarty分配变量
		self::$smarty->assign($var,$value);
	}
	
	/**
	 * 检测缓存是否失效
	 */
	protected function is_cached(){
		//组合模板路径
		$file = APP_VIEW_PATH . '/' . CONTROLLER . '/' . ACTION . '.html';
		if(!is_file($file)) halt("{$file} 模板不存在 ): ");
		//调用Smarty的is_cached，判断缓存是否失效
		return self::$smarty->is_cached($file);
	}
}







