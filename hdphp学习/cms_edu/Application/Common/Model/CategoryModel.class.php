<?php 
/**
 * 分类管理模型
 */
class CategoryModel extends Model{
	public $table = 'category';
	
	//自动验证
	public $validate = array(
		array('cname','nonull','分类名称不能为空',2,3),
		array('cname','maxlen:20','分类名称不能超过20位',2,3),
		array('ctitle','nonull','分类标题不能为空',2,3),
		array('csort','num:1,65535','分类排序必须为数字',2,3),
		//把剩余的验证补全(注意 静态目录 规则)
		
		
		
		
		
	);
	
	/**
	 * 添加数据
	 */
	public function addData(){
		if(!$this->create()) return false;
		//执行添加,返回自增id
		return $this->add();
	}
	
	/**
	 * 获得cid对应的子集分类
	 */
	public function sonCid($data,$cid){
	    $temp = array();
		foreach ($data as $v) {
			if($v['pid'] == $cid){
				$temp[] = $v['cid'];
				$temp = array_merge($temp,$this->sonCid($data, $v['cid']));
			}
		}
		return $temp;
	}
	
}









