<?php 
class Model{
	//静态属性，拥有不丢失值的特性
	private static $link=NULL;
	private $table;
	//构建整体sql语句的零件
	private $opt;
	/**
	 * 自动运行方法
	 */
	public function __construct($table){
		if(is_null(self::$link)){
			$link = new Mysqli(C('DB_HOST'),C('DB_USER'),C('DB_PASSWORD'),C('DB_NAME'));
			//如果有错误输出错误
			if($link->connect_errno) die($link->connect_error);
			//设置字符集
			$sql ='SET CHARACTER_SET_CLIENT=BINARY,CHARACTER_SET_CONNECTION=UTF8,CHARACTER_SET_RESULTS=UTF8';
			$link->query($sql);
			//保存到静态属性中
			self::$link = $link;
		}
		//表名保存到属性
		$this->table = C('DB_PREFIX') . $table;
		$this->_opt();
	}
	
	private function _opt(){
		$this->opt = array(
			'field' => '*',
			'limit' => '',
			'order' => '',
			'where' => ''
		);
	}
	public function add($data=NULL){
		if(is_null($data)) $data = $_POST; 
		//字段
		$field = array_keys($data);
		$field = implode(',', $field);
		//要插入的值
		$value = array_values($data);
		$value = '"' . implode('","', $value) . '"';
		
		$sql = "INSERT INTO " . $this->table . "(" . $field . ") VALUES (" . $value . ")";
		
		return $this->exec($sql);
	}
	
	public function delete(){
		if(empty($this->opt['where'])){
			halt('删除语句必须有where条件');
		}
		$sql = "DELETE FROM " . $this->table . $this->opt['where'];
		return $this->exec($sql);
	}
	
	public function update($data=NULL){
		
		if(empty($this->opt['where'])){
			halt('修改语句必须有where条件');
		}
		if(is_null($data)) $data = $_POST;
		$set = ' SET ';
		foreach ($data as $field => $value) {
			$set .= $field . "='" . $value . "',";
		}
		$set = rtrim($set,',');
//		"UPDATE ccshop_goods SET gname='123',price='2' WHERE gid=3"
		$sql = "UPDATE " . $this->table . $set . $this->opt['where'];
		return $this->exec($sql);
		
	}
	public function save($data=NULL){
		return $this->update($data);
	}
	
	
	public function where($where){
		$this->opt['where'] = " WHERE {$where}";
		return $this;
	}
	public function order($order){
		$this->opt['order'] = " ORDER BY {$order}";
		return $this;
	}
	public function field($field){
		$this->opt['field'] = $field;
		return $this;	
	}
	
	public function limit($limit){
		$this->opt['limit'] = " LIMIT {$limit}";
		return $this;
	}
	
	public function all(){
		$sql = "SELECT " . $this->opt['field'] . " FROM " . $this->table . $this->opt['where'] . $this->opt['order'] .  $this->opt['limit'];
		echo $sql;
		return $this->query($sql);
	}
	public function find(){
		$data = $this->limit(1)->all();
		//返回当前单元，把2维数组变为1维数组
		return current($data);
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
	/**
	 * 错误提示
	 */
	private function error($sql){
		if(self::$link->errno){
			$str = "错误信息：" . self::$link->error . '<br/>';
			$str .= "<span style='color:red'>错误的SQL：" . $sql . '</span>';
			halt($str);
		}
	}
	
}










