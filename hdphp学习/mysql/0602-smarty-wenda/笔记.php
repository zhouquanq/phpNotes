<?php 
1.在SmartyView.class.php里面，增加缓存配置项
2.注册局部不缓存块级标签
3.在函数文件中创建(固定写法)
function nocache($params, $content, &$smarty) {
	return $content;
}
4.使用的时候只需要{hd nocache} {hd /nocache}包裹的部分，不缓存。

5.在SmartyView.class.php里面增加is_cached方法，它会判断
缓存是否失效，这样我们在控制器中，就可以判断什么时候该查询数据库

6.创建变量调节器
(1)在libs\plugins找到modifier.开头的文件，复制一个
(2)改名为modifier.truncate_d.php
(3)修改里面的内容，用mb_substr做处理，最后return
(4)页面调用{hd $title|truncate_d:6}


7.创建函数
(1)在libs\plugins找到function.开头的文件，复制一个
(2)改名为function.js.php
(3)修改里面的内容，做处理，最后return
(4){hd js file="Js/index.js"}

8.创建块级标签
(1)在libs\plugins找到block.开头的文件，复制一个
(2)改名为block.high.php
(3)修改里面的内容，做处理，最后return
(4){hd high rows=3}内容{hd /high}

9.本日回答最多的人
$zero =  strtotime(date('Y-m-d'));
$sql = "select uid,count(*) as c from answer where time >{$zero} group by uid order by c desc limit 1";

10.后盾问答助人光荣榜
//按照用户表的采纳数排序

11.载入公共头部，为了多个页面可以公用

12.公共控制器CommonController 写它是为了可以在里面写一些公共方法，比如说topCate()

















 ?>