<?php 
function p($var){
	echo '<pre>';
	print_r($var);
	echo '</pre>';
}
function query($sql){
	$link = new Mysqli('127.0.0.1','root','','c49');
	$link->query("SET NAMES UTF8");
	$result = $link->query($sql);
	$rows = array();
	while ($row = $result->fetch_assoc()) {
		$rows[] = $row;
	}
	return $rows;
}


 ?>