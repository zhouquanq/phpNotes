<?php 
/**
 * 标签管理模型
 */
class TagModel extends Model{
	public $table = 'tag';
	
	public $validate = array(
		array('tagname','nonull','标签不能为空',2,3)
	);
	
	/**
	 * 数据库添加
	 */
	public function addData($tagArr){
		if(!$this->create()) return false;
		foreach($tagArr as $v){
			//去除空白字符
			$v = trim($v);
			//不为空的插入到数据
			if(!empty($v)){
				$data = array(
					'tagname' => $v
				);
				$this->add($data);
			}
		}
		return true;
	}
	
	
}

 ?>