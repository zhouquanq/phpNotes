<?php 
class Controller{
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