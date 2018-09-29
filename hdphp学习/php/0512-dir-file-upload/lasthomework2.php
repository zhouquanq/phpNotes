<?php 
include '../functions.php';
$str = <<<str
<div>
	<img src="./1.jpg">
	<a href="http://www.baidu.com">百度</a>
</div>
<div>
	<a href="http://www.sina.com">sina</a>
</div>
<span><a href="http://www.sina.com">sina</a></span>
<a href="http://www.sina.com">sina</a>
str;

//将html文档中的所有包含在div中的a链接的网址替换为http://www.houdunwang.com
$preg = '/<div>(.*?)<a.*?>/is';
echo  preg_replace($preg,'<div>\1<a href="http://www.houdunwang.com">', $str);












 ?>