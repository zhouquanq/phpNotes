<?php 
//查询表的数据
select sid,sname from stu;
//起别名 给sname起个别名
select sid,sname as name from stu;
//只查找女同学
select * from stu where sex='女';
//查找喜欢php的女同学
select * from stu where sex='女' and hobby='php';

//查找女同学或者是喜欢篮球的同学
select * from stu where sex='女' or hobby='篮球';

//了解内容 连接
select concat(sname,'-',sex) from stu;

//了解内容 查询结果与自身比较
select age,age>22 from stu;

//把年龄字段 去掉重复
select distinct(age) from stu;

//查找test字段为Null的数据
select * from stu where test is null;

//if语句
select sname,age,if(age>22,'老年人','年轻人') from stu;


//排名
create table baidu(
	bid int unsigned primary key auto_increment,
	company char(120) not null default '',
	sort smallint unsigned not null default 0
);
//自己插入数据


//按照sort 降序排序 sort大的在最前面
select * from baidu order by sort desc;
//按照sort 升序排序 sort小的在最前面
select * from baidu order by sort asc;

//截取，从0开始截取2条
select * from baidu order by sort desc limit 0,2;

//直接截取2条
select * from baidu order by sort desc limit 2;

//随机出来一个餐馆
select * from baidu order by rand() limit 1;
//查找所有姓李的同学
select * from stu where sname like "李%";
//查找所有姓李的，并且是两个字的 同学
select * from stu where sname like "李_";










 ?>