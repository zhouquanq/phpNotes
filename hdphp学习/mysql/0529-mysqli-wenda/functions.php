<?php 
header('Content-type:text/html;charset=utf-8');
function p($var){
	echo '<pre>';
	print_r($var);
	echo '</pre>';
}

function M(){
	$model = new Model();
	return $model;
}

 ?>