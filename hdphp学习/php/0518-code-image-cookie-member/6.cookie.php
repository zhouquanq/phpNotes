<?php 
//echo $_COOKIE['cart'];

//反序列化，把字符串转为数组
$cart = unserialize($_COOKIE['jdcart']);
var_dump($cart);

 ?>