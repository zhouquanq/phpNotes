<?php 
//存生日，用date类型
create table stu(
	sid smallint unsigned primary key auto_increment,
	sname char(15) not null default '',
	birthday date
)

insert into stu set sname='丁清峰',birthday='1990-1-1';

//获得当前时间
select now();

//获得学生生日的年份
select sname,year(birthday) from stu;
+--------+----------------+
| sname  | year(birthday) |
+--------+----------------+
| 丁清峰 |           1990 |
| 杜泽同 |           1992 |
+--------+----------------+









 ?>