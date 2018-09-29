<?php 
//接口(作为了解)
interface DbInterface{
	public function connect();
	public function close();
	public function query($sql);
}
// MysqlDb类实现DbInterface接口
class MysqlDb implements DbInterface{
	public function query($sql){
		echo $sql;
	}
	public function connect(){
		echo 'lianjie';
	}
	
	public function close(){
		echo 'guanbi';
	}
}

$obj = new MysqlDb;
//$obj->connect();
//$obj->close();
$obj->query(123);







 ?>