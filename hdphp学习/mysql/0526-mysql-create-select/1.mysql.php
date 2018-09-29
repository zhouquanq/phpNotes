<?php 
//连接mysql
mysql -uroot -p
//退出
exit;
//查看数据库
show databases;
//创建数据库
create database c49 charset utf8;
//选中库（打开文件夹）
use c49;
//创建表
create table stu(sid smallint,sname char(20));
//查看表
show tables;
//删除库
drop database c49;
//删除表
drop table stu;











 ?>