<?php
/**
 * phpQuery基础使用
 */

header('Content-Type: text/html; charset=UTF-8');

require_once "./phpQuery.php";

phpQuery::newDocumentFile('https://www.helloweba.net/php/index-1.html');

$artlist = pq(".blog_li");
$cont = array();

foreach ($artlist as $k => $v){
	$cont[$k] = array(
		'title'	=> pq($v)->find('h2')->html(),
		'digest'=> pq($v)->find('.abstracts')->html(),
	);
}

p($cont);

function p($data){
    echo "<pre style='font-size:14px;padding:10px 20px;background:#FFB7DD'>";
    print_r($data);
    echo "</pre>";
}