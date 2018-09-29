<?php 
//修改表名 把stu_bak 改成 student
alter table stu_bak rename student;

//修改字段名称，同时修改字段类型 change
alter table student change sname username char(20) not null default '';

//只修改字段类型 modify
alter table student modify username char(15) not null default '';

//增加字段
alter table student add is_admin tinyint not null default 0;

//把test字段放到username的后面
alter table student add test char(20) not null default '' after username;

//删除student中的test字段
alter table student drop test;

//删除主键************************
//自增必须加在主键的上面，如果不是主键，不能自增
//1.去掉自增
alter table student modify sid smallint unsigned;
//2.去掉主键
alter table student drop primary key;


//增加主键****************************
//给sid增加主键
alter table student add primary key(sid);
//增加自增
alter table student modify sid smallint unsigned auto_increment;











