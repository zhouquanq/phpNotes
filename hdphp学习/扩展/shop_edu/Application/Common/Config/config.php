<?php
if (!defined("HDPHP_PATH"))exit('No direct script access allowed');
//更多配置请查看hdphp/Config/config.php
return array(
    /********************************基本参数********************************/
    'AUTO_LOAD_FILE'                => array(),     //自动加载文件
    /********************************数据库********************************/
    'DB_DRIVER'                     => 'mysqli',    //驱动
    'DB_CHARSET'                    => 'utf8',      //字符集
    'DB_HOST'                       => '127.0.0.1', //主机
    'DB_PORT'                       => 3306,        //端口
    'DB_USER'                       => 'root',      //帐号
    'DB_PASSWORD'                   => '',          //密码
    'DB_DATABASE'                   => 'cc',          //数据库
    'DB_PREFIX'                     => 'ccshop_',          //表前缀
    /********************************模板参数********************************/
    'TPL_PATH'                      => 'View',      //目录
    'TPL_FIX'                       => '.html',     //文件扩展名
    'TPL_TAGS'                      => array(),     //标签类
    /********************************URL路由********************************/
    'ROUTE'                         => array(
		'/^l_(\d+)$/' => 'Index/List/index/cid/#1'
	),     //路由配置
	'HTML_SUFFIX'                   => '.html',
	'URL_REWRITE'=>true
);












?>