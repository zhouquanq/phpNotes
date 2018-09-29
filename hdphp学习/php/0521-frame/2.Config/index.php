<?php 
include "../../functions.php";
//系统配置
$sysConfig = array(
	'CODE_LEN'  => 4,
	'CODE_SIZE' => 16
);
//用户配置
$userConfig = array(
	'CODE_LEN'  => 1
);
//1.加载配置项
C($sysConfig);
C($userConfig);
//2.获得配置项
//echo C('CODE_SIZE');
//3.临时改变配置项
//C('CODE_SIZE',30);
//echo C('CODE_SIZE');
//4.获得所有配置项
p(C());


function C($var=NULL,$value=NULL){
	static $config = array();
	//加载配置项
	if(is_array($var)){
		$config = array_merge($config,$var);
	}
	//获得配置项
	if(is_string($var)){
		//如果第二个值不为空
		if(!is_null($value)){
			//临时改变配置项
			$config[$var] = $value;
		}else{
			return isset($config[$var]) ? $config[$var] : NULL;
		}
		
	}
	//获得所有配置项
	if(is_null($var) && is_null($value)){
		return $config;
	}
}










 ?>