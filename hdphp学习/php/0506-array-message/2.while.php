<?php 
$arr = array('a'=>'A','b'=>'B','c'=>'C');
$i = 0;
while ($i < count($arr)) {
	echo key($arr) . '=>' . current($arr) . '<br/>';
	next($arr);
	$i++;
}

//a=>A
//b=>B
//c=>C


 ?>