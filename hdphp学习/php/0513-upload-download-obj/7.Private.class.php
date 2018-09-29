<?php 
class Father{
	//老婆
	private function wife(){
		return 'rose';
	}
	
	public function kiss(){
		//1.private 类的内部能调用
		echo "I want to kiss " . $this->wife();
	}
	
}

//$fatherObj = new Father;
////$fatherObj->kiss();
////2.private 类的外部不能调用
//$fatherObj->wife();

class Son extends Father{
	//3.private 子类不能调用父类
	public function son_kiss(){
		echo "I want to kiss " . $this->wife();
	}
}

$sonObj = new Son();
$sonObj->son_kiss();











 ?>