<?php 
//创建视图
create view bankview as select name from bank;
//查看视图
select * from bankview;
//删除视图
drop view bankview;
//修改视图
alter view bankview as select money from bank;

 ?>