<?php 
class Upload{
	//保存上传错误信息
	public $error;
	/**
	 * 提供给外部上传
	 */
	public function up(){
		//1.重组数组
		$arr = $this->resetArr();
		//2.循环数组，如果有不符合规则的不允许上传
		foreach ($arr as $v) {
			//3.筛选
			if(!$this->filter($v)){
				return false;
			}
		}
		//4.遍历上传
		foreach($arr as $v){
			$this->move($v);
		}
		return true;
	}
	/**
	 * 移动上传
	 */
	private function move($v){
		$path = './upload';
		$path = rtrim($path, '/');
		is_dir($path) || mkdir($path, 0777, true);
		$type = ltrim(strrchr($v['name'], '.'),'.');
		$fullPath = $path . '/' . time() . mt_rand(0, 99999) . '.' . $type;
		//移动上传
		move_uploaded_file($v['tmp_name'], $fullPath);
	}
	/**
	 * 筛选
	 */
	private function filter($v){
		//获得类型
		$type = ltrim(strrchr($v['name'], '.'),'.');
		switch (true) {
			//1.文件没有上传
			case $v['error'] == 4:
				$this->error = '没有文件上传';
				return false;
				
			//2.不是一个合法的上传文件
			case !is_uploaded_file($v['tmp_name']):
				$this->error = '不是一个合法的上传文件';
				return false;
			
			//3.文件类型不允许
			case !in_array($type, array('jpg','png','gif')):
				$this->error = '文件类型不允许';
				return false;
				
			//4.文件超过网站配置大小
			case $v['size'] > 2000000:
				$this->error = '文件超过网站配置大小';
				return false;
				
			//5.3种错误类型（作业补全）
				
			default:
				return true;
		}
		
		
		
		
		
	}
	
	
	/**
	 * 重组数组
	 */
	private function resetArr(){
		$arr = array();
		foreach ($_FILES as $v) {
			//多文件上传
			if(is_array($v['name'])){
				foreach ($v['name'] as $key => $value) {
					$arr[] = array(
						'name' => $value,
						'type' => $v['type'][$key],
						'tmp_name' => $v['tmp_name'][$key],
						'error' => $v['error'][$key],
						'size' => $v['size'][$key],
					);
				}
			}else{//单文件上传
				$arr[] = $v;
			}
		}
		return $arr;
	}
	
	
}









 ?>