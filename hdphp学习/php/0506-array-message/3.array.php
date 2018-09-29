<?php 
include "../functions.php";
//如果是索引数组，直接累加
//$arr1 = array('a','b','c');
//$arr2 = array('d','e','f');
//$newArr = array_merge($arr1,$arr2);
//p($newArr);

//如果是关联数组，如果键名相同，后面的优先级会更高
//$arr1 = array('a'=>'A','b'=>'B','c'=>'C');
//$arr2 = array('a'=>'AA','d'=>'D','e'=>'E');
//$newArr = array_merge($arr1,$arr2);
//p($newArr);

//$arr = array('A'=>'AA','D'=>'D','E'=>'E');
////键名转为小写
//$newArr = array_change_key_case($arr,CASE_LOWER);
////键名转为大写
//$newArr = array_change_key_case($newArr,CASE_UPPER);
//p($newArr);














 ?>
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
 <head>
 	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
 	<title>Document</title>
 	<script src="../jquery-1.7.2.min.js" type="text/javascript" charset="utf-8"></script>
 	<script type="text/javascript">
 		$(function(){
// 			$('select[name=city]').change(function(){
// 				alert($(this).val());
// 			})
 		})
 	</script>
 </head>
 <body>
 	<select name="city">
 		<option value="1">北京</option>
 		<option value="2">上海</option>
 	</select>
 </body>
 </html>












