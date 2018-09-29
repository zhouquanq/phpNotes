<?php 
include "./functions.php";
//显示验证码
$code = new Code(150,40,1,30);
$code->show();

 ?>