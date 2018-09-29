<?php 
class Controller{
	private $var = array();
	/**
	 * 分配变量
	 */
	protected function assign($var,$value){
		//$this->var['a'] = 'houdunwang';
		$this->var[$var] = $value;
	}
	/**
	 * 载入模板
	 */
	protected function display(){
		$file = APP_VIEW_PATH . '/' . CONTROLLER . '/' . ACTION . '.html';
		if(!is_file($file)) halt("{$file} 模板不存在 ): ");
		
		//extract
		//把数组的键名变为变量名
		//把数组的键值变为变量值
		//把$this->var 变为 $a = 'houdunwang';
		extract($this->var);
		include $file;
	}
	
	/**
	 * 成功方法
	 */
	protected function success($msg,$url){
		$str = <<<str
<script type="text/javascript">
alert('{$msg}');
location.href="{$url}";
</script>
str;
		echo $str;die;
	}
	
	/**
	 * 错误方法
	 */
	protected function error($msg){
		$str = <<<str
<script type="text/javascript">
alert('{$msg}');
window.history.back();
</script>
str;
		echo $str;die;
	}
	
	
	
	
	
	
	
	
	
}

 ?>