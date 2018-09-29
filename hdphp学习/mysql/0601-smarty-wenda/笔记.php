<?php 
//1.把smarty放入到框架Extend/Org目录

//2.建立smarty与框架的桥梁 (在Lib/Core/建立SmartyView.class.php)

//3.载入Smarty.class.php需要路径，所以到C49.php里面的setConst方法补充ORG_PATH路径

//4.在SmartyView.class.php里面的构造方法配置Smarty,缺少Temp/compile Temp/cache 目录，又去C49.php 补充路径 ，再去createDir创建相对应的目录

//5.把左右定界符，写到配置项

//6.在SmartyView里面写display与assign，其实就是调用Smarty的display与assign

//7.把Controller里面的display与assign删除掉，让其继承SmartyView

//8.在C49.php里面的loadCore方法载入SmartyView.class.php

//9.完毕










 ?>