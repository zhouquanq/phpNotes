<?php 
//between 在什么之间
select * from stu where age between 22 and 33;
//查找年龄为11,22,14的同学
select * from stu where age in(11,22,14);

//查询set类型，
//方法1：find_in_set
select * from stu where find_in_set('php',hobby);
//方法2: &1
select * from stu where hobby &1;
//方法3：like (推荐指数5颗星)
select * from stu where hobby like "%php%";

//把sname从左边截取2个字符
select left(sname,2) from stu;










 ?>