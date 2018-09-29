<?php 
include "../functions.php";
//声明人类
class Human{
	//有头发
	public $hair;
	//有眼睛
	public $eyes;
	//有名字
	public $name;
	
	//思考
	public function think(){
		echo "我的名字叫：" . $this->name . '<br/>';
		echo "我的头发是："  . $this->hair . '<br/>';
		echo "我的眼睛是：" . $this->eyes . '<br/>';
		echo '我在思考为什么我长这样？<br/>';
	}
	
	//跑
	public function run(){
		
	}
}

//实例化对象
//实例化出来一个武迎收
$wuyingshou = new Human;
//给对象的属性赋值
$wuyingshou->hair = '短的黑色';
$wuyingshou->eyes = '两个蓝色';
$wuyingshou->name = '武迎收';
$wuyingshou->think();

//实例化出来一个陈鸿
$chenhong = new Human;
$chenhong->hair = '长的红色';
$chenhong->eyes = '两个绿色';
$chenhong->name = '陈鸿';
$chenhong->think();
















 ?>