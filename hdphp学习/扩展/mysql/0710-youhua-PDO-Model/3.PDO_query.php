<?php 
$dsn = "mysql:host=127.0.0.1;dbname=project";
$username = 'root';
$password = '';
//try里面如果有异常错误，会被catch接到
try {
    $pdo = new Pdo($dsn,$username,$password);
	//设置字符集
	$sql ='SET CHARACTER_SET_CLIENT=BINARY,CHARACTER_SET_CONNECTION=UTF8,CHARACTER_SET_RESULTS=UTF8';
	$pdo->query($sql);
	//获得数组结果
	$result = $pdo->query("SELECT * FROM ccshop_user");
	$rows = $result->fetchAll(PDO::FETCH_ASSOC);
	echo '<pre>';
	print_r($rows);
} catch (Exception $e) {
	//输出连接的错误
	echo "<span style='color:red'>" . $e->getMessage() . '</span>';
}







 ?>