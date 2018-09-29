<?php 
//抽象类，作为了解
abstract class Tool{
	//抽象方法(没有花括号)，子类必须重写
	abstract protected function sport();
	//抽象类可以有普通方法
	protected function test(){
		echo 'test';
	}
}
//不能实例化抽象类
//$tool = new Tool;

class Plane extends Tool{
	//重写抽象类的方法
	public function sport(){
		echo 'fly';
	}

	public function run(){
		$this->test();
	}
}

$obj = new Plane;
$obj->run();







 ?>