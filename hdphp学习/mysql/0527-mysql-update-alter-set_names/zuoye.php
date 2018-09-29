<?php
//需要创建问题表ask（包含以下字段）
//asid  主键,
//content '提问内容',
//time '提问时间',
//solve '0为没有解决，1为已经解决',
//answer '回答数',
//reward '悬赏金币',
//click  点击次数
create table ask(
	asid int unsigned primary key auto_increment,
	content varchar(500) not null default '',
	time int unsigned not null default 0,
	solve tinyint unsigned not null default 0,
	answer tinyint unsigned not null default 0,
	reward smallint unsigned not null default 0,
	click MEDIUMINT unsigned not null default 0
);
//1.向问题表ask中录制2条记录
insert into ask (content,click) values ('你说你最爱丁香花',1),('因为你的名字就是它',45);

//2.将点击次数小于20的问题，把点击次数加1
update ask set click=click+1 where click<20;	

//3.删除点击次数最少的问题
delete from ask order by click asc limit 1

//4.修改答案表content字段长度为char(100)
alter table ask modify content char(100) not null default '';

//5.创建学生表包含名字，性别，生日字段
create table stu(
	uid smallint unsigned primary key auto_increment,
	name char(20) not null default '',
	sex enum('男','女') not null default '男',
	birthday date
);
//6.修改学生姓名字段为username char(30)
 alter table stu change name username char(30) not null default ''

//7.查找所有90后的女同学
 select * from stu where sex='女' and year(birthday)>=1990;

//8.查找班级年龄最小同学(没有age字段，只有birthday字段)
select * from stu order by birthday desc limit 1;
//9.查询stu表的总数
 select count(*) from stu;
//10.查找名字包含龙的同学的总数
select count(*) from stu where username like '%龙%';















