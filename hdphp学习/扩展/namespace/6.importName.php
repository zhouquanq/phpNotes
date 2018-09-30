<?php
//命名空间导入
//只能导入类，函数和常量是不可以导入的
namespace houdunwang;
//类名导入，下次实例化的时候就不需要前面加反斜杠，比如如果没有use \hdw\houdunwang\Test 每次想实例化外面require进来的，必须这样$obj = new \hdw\houdunwang\Test(),这样写起来不方便，为了方便就实现了导入类名
use \hdw\houdunwang\Test;

require "./test.class.php";


$obj = new Test();
$obj->index();









