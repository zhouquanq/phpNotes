<?php
/**
 * 使用CURL提交GET数据
 */
header ( "Content-type:text/html;charset=utf-8" );
$curl = curl_init (); // 创建资源
curl_setopt ( $curl, CURLOPT_URL, "http://www.webxml.com.cn/WebServices/TrainTimeWebService.asmx/getStationAndTimeByStationName?StartStation=".$_GET['start']."&ArriveStation=".$_GET['end']."&UserID=" ); // 设置请求的url
curl_setopt ( $curl, CURLOPT_RETURNTRANSFER, 1 ); // 获得文本内容
curl_setopt ( $curl, CURLOPT_HEADER, 0 ); // 头信息以文本内容返回

//执行curl
$response = curl_exec ( $curl );
if ($response === false) {
	echo curl_errno ( $curl );
}
echo $response;







?>