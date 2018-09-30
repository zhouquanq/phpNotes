<?php 
//存储函数******
//设置变量
set @name='李四';
//输出变量
select @name;

//改变结束符
\d $

//创建一个存储过程
create procedure get_name(in id int)
begin
	select name from bank where bid=id;
end
$
//调用存储过程
call get_name(1);

//声明一个局部变量
// DECLARE a int;
create procedure test_in()
begin
	DECLARE a int;
	set a = 1;
	select a;
end
$

// //把t1表的一条数据里面的id,data放入x,y变量
// SELECT id,data INTO x,y FROM t1 LIMIT 1;

create procedure test_in()
begin
	DECLARE x smallint;
	DECLARE y char(20);
	SELECT bid,name INTO x,y FROM bank LIMIT 1;
	select x,y;
end
$

//删除存储过程
drop procedure test_in$

//in 
//可以输出外面的变量
//不可以改变外面的变量
create procedure test_in(in id tinyint)
begin
	select id;
end
$

create procedure test_in(in id int)
begin
	set id=200;
end
$

//out
//不可以输出外面的变量
//可以改变外面的变量
create procedure test_out(out id int)
begin
	select id;
end
$

//inout
//可以输出外面的变量
//可以改变外面的变量

//查看存储过程状态
show procedure status$















 ?>