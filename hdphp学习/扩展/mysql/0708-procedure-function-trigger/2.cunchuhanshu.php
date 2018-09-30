<?php 
//存储函数******
create function get_bid(n char(20))
returns int
reads sql data
begin
	return (select bid from bank where name=n);
end
$

//调用输出
select get_bid('黄信强')$
//在sql语句中可以输出
select * from bank where bid=get_bid('黄信强')$













 ?>