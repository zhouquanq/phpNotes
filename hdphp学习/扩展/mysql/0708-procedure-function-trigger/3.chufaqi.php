<?php 
//删除班级之后再删除学生
create trigger del_class_stu after delete on class
for each row
begin
	delete from stu where cid=old.cid;
end
$

//同时操作
create trigger setDefault before insert on class
for each row
begin
	if new.com is null then
	set new.com='我是默认的';
	end if;
end
$

//删除触发器
drop trigger setDefault$

//查看触发器状态
show triggers$










 ?>