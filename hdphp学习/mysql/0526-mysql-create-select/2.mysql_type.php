<?php 
create table stu(
	sid tinyint(2) zerofill unsigned,
	sname char(3),
	money decimal(5,2)
);
//zerofill 前导零
//unsigned 非负，把字段类型的范围，指定为正数范围


//smallint(1) 不代表只能存一位数字,它只是结合zerofill来实现前导零
//char(3) 代表只能存3个字符


//插入数据
insert into stu set sid=1,sname='李强',money=100;

//查询数据
select * from stu;

//char 定长，速度比varchar更快，但是不如varchar省空间
//varchar 变长，速度不如char快，但是比char省空间

//枚举类型enum 单选
create table stu(
	sid smallint unsigned,
	sname char(15),
	sex enum("男","女")
);
insert into stu set sex='男';

//set 类型 多选
create table stu(
	sid smallint unsigned,
	sname char(15),
	sex enum("男","女"),
	hobby set("拳皇97","php","mysql","英雄联盟","篮球")
);
//插入数据
insert into stu set sid=2,sname='贺雷雷',sex='男',hobby='php,篮球';

//查看表结构
 desc stu;










 ?>