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
}







