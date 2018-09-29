<?php 
//清空所有记录
truncate ask;

//笛卡尔积,如果不加where条件，出来的结果是无意义的
select * from ask,category;

//必须限定where条件 cid相等
select * from ask as a,category as c where a.cid=c.cid;

//只想要asid,content,cid,cname
//a.cid 是为了标明我到底要显示哪张表的cid
select asid,content,a.cid,cname from ask as a,category as c where a.cid=c.cid;

//inner join 关联(推荐写法)，代替上面的写法
//on 是关联条件
select asid,content,a.cid,cname from ask as a inner join category as c on a.cid=c.cid;

//只查找生活的问题
select asid,content,a.cid,cname from ask as a inner join category as c on a.cid=c.cid where a.cid=2;
+------+----------------+-----+-------+
| asid | content        | cid | cname |
+------+----------------+-----+-------+
|    2 | 今天天气好晴朗 |   2 | 生活  |
|    3 | 处处好风光     |   2 | 生活  |
+------+----------------+-----+-------+

//right join 右关联，
//以join为中间点，right join偏向右边的表，无论右边的表关联条件是否成立，结果都要出来
select * from ask as a right join category as c on a.cid=c.cid;
//左关联
select * from category as c left join ask as a on a.cid=c.cid;


//查找和“处处好风光”在同一分类的下面的问题
//做法1：分两条查询
select * from ask where content="处处好风光";
select * from ask where cid=2 and content!="处处好风光";

//做法2：子查询
select * from ask where cid=(select cid from ask where content="处处好风光") and content!="处处好风光";

//做法3：自关联
//关联完毕看下结果
select a1.asid,a1.content,a1.cid,a2.asid,a2.content,a2.cid from ask as a1 inner join ask as a2 on a1.cid=a2.cid;

//看着结果加where条件
select a1.asid,a1.content,a1.cid,a2.asid,a2.content,a2.cid from ask as a1 inner join ask as a2 on a1.cid=a2.cid where a2.content="处处好风光" and a1.content!="处处好风光";




 ?>