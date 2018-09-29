<?php 
//not null default 就是结合一起用的
create table stu(
	sid smallint unsigned ,
	sname char(15) not null default '',
	sex enum('男','女') not null default '男',
	hobby set('php','mysql','篮球')  not null default 'php'
);


//unique 非重， 唯一
create table user(
	uid smallint unsigned,
	username char(20) unique not null default '',
	password char(32) not null default ''
);
//插入数据
insert into user set username='admin',password=md5('admin');

//最完整版本***************
//主键 primary key 自增 auto_increment
create table stu(
	sid smallint unsigned primary key auto_increment,
	sname char(15) not null default '',
	sex enum('男','女') not null default '男',
	hobby set('php','mysql','篮球')  not null default 'php'
);








 ?>