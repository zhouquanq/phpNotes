<?php 
include "../functions.php";
if(IS_POST){
	//http://www.baidu.com
	//https://www.baidu.com
	//www.baidu.com
	//bbs.baidu.com
	//baidu.com
	//ftp://www.baidu.com
	//网址正则
	$urlPreg = "/^((http|https|ftp):\/\/)?([a-z]{1,6}\.)?[a-z0-9-_]+\.(com|cn|net|gov|com\.cn)$/i";
	
	if(!preg_match($urlPreg, $_POST['website'])){
		success('网址格式不正确', './zuoye1.php');
	}
	//邮箱正则
	//houdunwangmzy@163.com
	//houdun-wangmzy@163.com
	//houdun_wangmzy@163.com
	//houdun_wangmzy@sina.com.cn
	//410004417@qq.com
	$emailPreg = "/^[a-z0-9]+[-_]?[a-z0-9]+@[a-z0-9]{2,6}\.(com|cn|com\.cn|net)$/";
	if(!preg_match($emailPreg, $_POST['email'])){
		success('邮箱不正确', './zuoye1.php');
	}
	
	
}

 ?>
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
 <head>
 	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
 	<title>Document</title>
 </head>
 <body>
 	<form action="" method="post">
 		网址：<input type="text" name="website" id="" />
 		<br />
 		邮箱：<input type="text" name="email" id="" />
 		<br />
 		<input type="submit" value="提交"/>
 	</form>
 	
 	
 	
 	
 	
 	
 	
 	
 	
 </body>
 </html>