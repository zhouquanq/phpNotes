<?php 
//复制表结构
create table stu_bak like stu;
//复制表的数据
insert into stu_bak select * from stu; 
//复制表结构同时复制表的数据
create table stu_full_bak select * from stu;
 ?>