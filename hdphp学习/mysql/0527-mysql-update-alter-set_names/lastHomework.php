<?php 
//1.创建学生表，包含字段id(主键),学生姓名,性别,年龄
create table stu(
	sid smallint unsigned primary key auto_inc
	sname char(15) not null default '',
	sex enum('男','女') not null default '男',
	age tinyint unsigned not null default 0
);
//2.创建学生日记表，包含标题，内容，查看次数
create table diary(
	did smallint unsigned primary key auto_increment,
	tittle char(20) not null default '',
	content varchar(500) not null default '',
	readtimes smallint unsigned not null default 0
);
//3.随机显示2个餐馆
 select * from baidu order by rand() limit 2;
//4.查找所有姓李的同学
select * from stu where sname like "李%";
//5.查找学生姓名中包含雷的同学
select * from stu where sname like '%雷%';












 ?>