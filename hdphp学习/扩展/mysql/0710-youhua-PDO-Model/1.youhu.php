<?php 
//增加非重索引
alter table ccshop_user add unique username_key(username);
//删除非重索引
alter table ccshop_user drop index username_key;
//查看sql句执行的情况
explain select * from ccshop_user where username='mzy'\G

*************************** 1. row ***************************
           id: 1
  select_type: SIMPLE
        table: ccshop_user
         type: ALL //查看的重点，走什么索引
possible_keys: NULL
          key: NULL
      key_len: NULL
          ref: NULL
         rows: 6 //查看的重点，走多少条
        Extra: Using where
1 row in set (0.00 sec)

//给维度较高的列增加索引
//性别这样的字段不适合做索引
//维度=不重复的总数/数据总数
select count(distinct(sex))/count(*) from ccshop_user;

//前缀索引，黄金值 0.31
//这样可以减少索引文件大小,加快索引查询速度
select count(distinct(left(gname,4)))/count(*) from ccshop_goods;
//增加前缀索引
alter table ccshop_goods add index gname_index(gname(4));

//增加组合索引
alter table ccshop_category add index pid_sort(pid,sort);

//碎片整理，只支持myisam
optimize table ccshop_user;
//整理innodb表，只需要重新改表的引擎
alter table bank engine=innodb;














 ?>