<?php 
class Father{
	//宝马车
	protected $car = 'BMW';
	
	public function drive(){
		//1.protected 类的内部能调用
		echo "I want to drive " . $this->car;
	}
	
}

//$fatherObj = new Father;
////$fatherObj->drive();
////2.protected 类的外部不能调用
//$fatherObj->car;
class Son extends Father{
	//3.protected 子类能调用父类
	public function son_drive(){
		echo "I want to drive " . $this->car;
	}
}

$sonObj = new Son();
$sonObj->son_drive();











 ?>