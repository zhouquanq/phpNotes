<?php 
//统计总数
select count(*) from stu;

//计算生日最小的值
select min(birthday) from stu;

//计算生日最大的值
select max(birthday) from stu;

//计算所有年龄总和
select sum(age) from stu_full_bak;

//平均数
select avg(age) from stu_full_bak;

//分组和统计结合使用
//男女分组，统计总数
select sex,count(*) from stu_full_bak group by sex;


//男女分组，筛选女同学有多少个
//group 和 having 是结合使用的
select sex,count(*) from stu_full_bak group by sex having sex='女'











 ?>