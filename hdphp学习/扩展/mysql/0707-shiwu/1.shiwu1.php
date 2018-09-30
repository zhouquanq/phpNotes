<?php 
//开启事务
begin;
//关闭自动提交
set autocommit=0;
//提交，当完成提交之后commit，最终结果确定下
commit;
//回滚，倒退操作
rollback;


 ?>