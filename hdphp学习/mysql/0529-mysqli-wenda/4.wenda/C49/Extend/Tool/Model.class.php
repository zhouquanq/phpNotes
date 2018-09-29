<?php 
class Model{
	//静态属性，拥有不丢失值的特性
	private static $link=NULL;
	/**
	 * 自动运行方法
	 */
	public function __construct(){
		if(is_null(self::$link)){
			$link = new Mysqli('127.0.0.1','root','','c49');
			//如果有错误输出错误
			if($link->connect_errno) die($link->connect_error);
			//设置字符集
			$link->query("SET NAMES UTF8");
			//保存到静态属性中
			self::$link = $link;
		}
	}
	
	/**
	 * 发送有结果集的操作 select
	 * 这个query是我们自己写的，不是mysqli的query
	 */
	public function query($sql){
		//调用mysqli的query
		$result = self::$link->query($sql);
		$this->error($sql);
		$rows = array();
		while ($row = $result->fetch_assoc()) {
			$rows[] = $row;
		}
		return $rows;
	}
	/**
	 * 发送没有结果集的操作 update,insert,delete
	 */
	public function exec($sql){
		self::$link->query($sql);
		$this->error($sql);
		//如果有自增id,返回自增id,否则返回受影响条数
		if(self::$link->insert_id){
			return self::$link->insert_id;
		}else{
			return self::$link->affected_rows;
		}
	}
	
	private function error($sql){
		if(self::$link->errno){
			$str = "错误信息：" . self::$link->error . '<br/>';
			$str .= "<span style='color:red'>错误的SQL：" . $sql . '</span>';
			halt($str);
		}
	}
	
}










