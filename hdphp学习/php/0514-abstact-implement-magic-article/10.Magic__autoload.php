<?php 
include "../functions.php";

//实例化未找到类，自动触发functions.php里面的__autoload
$obj = new Test;
$obj->index();


 ?>