<?php 
class Controller{
	
	protected function display(){
		$path = "./View/" . CONTROLLER . '/' . ACTION . '.html';
		if(!is_file($path)){
			die("模板" . $path . "不存在");
		}
		include $path;
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