<?php 
$dsn = "mysql:host=127.0.0.1;dbname=project";
$username = 'root';
$password = '';
//try里面如果有异常错误，会被catch接到
try {
    $pdo = new Pdo($dsn,$username,$password);
	//把错误设置成警告类型，就会直接输出
	//$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
	//把错误设置成异常类型，就会被下面的catch接到
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	//设置字符集
	$sql ='SET CHARACTER_SET_CLIENT=BINARY,CHARACTER_SET_CONNECTION=UTF8,CHARACTER_SET_RESULTS=UTF8';
	$pdo->query($sql);
	//执行无结果操作(delete update insert)
	$pdo->exec("DE1LETE FROM ccshop_user WHERE username='mzy'");
	
} catch (Exception $e) {
	//输出连接的错误
	echo "<span style='color:red'>" . $e->getMessage() . '</span>';
}







 ?>