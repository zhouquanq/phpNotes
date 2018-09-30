<?php 
$dsn = "mysql:host=127.0.0.1;dbname=project";
$username = 'root123';
$password = '';
//try里面如果有异常错误，会被catch接到
try {
    $pdo = new Pdo($dsn,$username,$password);
} catch (Exception $e) {
	//输出连接的错误
	echo "<span style='color:red'>" . $e->getMessage() . '</span>';
}







 ?>