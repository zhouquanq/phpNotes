<?php 
//===============1:1==============
//在1对1的情况下，关联字段在哪张表里面都可以
// 城市表 city
cid     cname    
 1      北京        
 2      太原        
 3      贵阳        
 4      海口        
 5      吉林        

//区号表   code
coid       num       cid
 1        0531        4
 2        0431        5
 3        010         1
 4        0594        3
 5        0351        2


//================1:N====================
//一对多
//关联字段，多的保存少的
// 分类表 category
cid      cname       
 1        衣服         
 2        电器        
 3        食品

//问题表  ask
asid      content 					cid
 1        阿迪达斯这款衣服怎么样?      1
 2        食堂的饭好不好吃？           3
 3        手电筒算电器吗？             2
 4        电冰箱贵吗？                 2
 5        优乐美好喝吗？               3

//=============N:N=======================
//多对多
// 文章表 article
aid     title              
 1      php真简单啊          
 2      mysql真好学啊
 3      马老师讲的真好啊
 4      后盾真棒啊

// 中间表 article_tag
 aid      tid
  1        1
  1        3
  1        4
  1        7
  1        8
  1        5
  2        7
  2        8
  2        5


//标签表 tag
 tid      tagname          
  1        php               
  2        mysql             
  3        后盾            
  4        马老师
  5        赞
  6        热门
  7        瞎扯
  8        假的


 ?>