<?php
// 文章表 inner join 中间表 inner join 标签表

//需要3张表 ，做作业考虑几张表关联
//article 文章表
create table article(
	aid int unsigned primary key auto_increment,
	title char(120) not null default '',
	content text
);
//article_tag 中间表
create table article_tag(
	aid int unsigned not null default 0,
	tid smallint unsigned not null default 0
);
//tag 标签表
create table tag(
	tid smallint unsigned primary key auto_increment,
	tname char(10) not null default ''
);

// 作业：
//1.检索出文章的标签id
select a.title,at.tid from article as a inner join article_tag as at on a.aid=at.aid;

//2.检索出“明天是周六”都对应的标签名
select a.aid,title,at.tid,tname from article as a inner join article_tag as at on a.aid=at.aid inner join tag as t on at.tid=t.tid where a.title="明天是周六";

//3.检索出和“明天是周六”拥有一样标签的文章（不要求完全一样）

//获得“明天是周六”所对应的标签id
select at.tid from article as a inner join article_tag as at on a.aid=at.aid where a.title='明天是周六';

//通过标签id找到对应的文章，排除自己，再按照标题分组去掉重复的
select title,at.tid from article as a inner join article_tag as at on a.aid=at.aid where at.tid in (2,3,5,7) and title!='明天是周六' group by title;


//4.检索出每篇文章所对应的标签
select a.title,t.tname from article as a inner join article_tag as at on a.aid=at.aid inner join tag as t on at.tid=t.tid;

//5.检索出每个标签所对应文章的数量
select t.tname,count(*) from article as a inner join article_tag as at on a.aid=at.aid inner join tag as t on at.tid=t.tid group by t.tid;
















