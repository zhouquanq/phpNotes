<?php 
class Controller extends SmartyView{
	
	/**
	 * 成功方法
	 */
	protected function success($msg,$url){
		header('Content-type:text/html;charset=utf-8');
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
		header('Content-type:text/html;charset=utf-8');
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