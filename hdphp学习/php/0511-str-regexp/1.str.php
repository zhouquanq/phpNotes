<?php 
include "../functions.php";

//$str = "http://www.baidu.com/index.php?word=后盾网";
////转码
//$newStr = urlencode($str);
////解码
//echo urldecode($newStr);

//$str = <<<here
//<script>alert(1);</script>
//here;
////实体化，让js不可以运行
//echo htmlspecialchars($str);

//转义，对于后面的mysql,做安全处理
//$str = "abc'd";
//$newStr = addslashes($str);
//echo stripslashes($newStr);

$str = '<h2>你好</h2><span>后盾网</span><p>新校区</p>';
//echo $str;
//去除标签
//echo strip_tags($str);
//去除标签，留下h2和p标签
echo strip_tags($str,'<h2><p>');







 ?>







