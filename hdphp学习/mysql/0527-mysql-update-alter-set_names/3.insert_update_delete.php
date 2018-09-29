<?php 
//插入数据
insert into stu set sname='王小红',sex='女';

//一次录入多条数据
insert into stu (sname,sex,age,hobby) values ('武迎收','男',22,'php'),('陈鸿','男',32,'篮球'); 

//replace 就判断sid
//1.有的话就修改
//2.没有就增加
replace into stu (sid,sname,age) values (10,'陈鸿',18);

//修改
//如果不加where条件，则修改全部，一定要注意
update stu set hobby='篮球' where sid=9;

//删除
//如果不加where条件，则删除全部，一定要注意
delete from stu;

delete from stu_bak where sid=5;
delete from stu_bak where sname='陈鸿';











 ?>