<?php 

/**
 * 方便打印函数
 */
function p($data){
    echo "<pre style='font-size:14px;padding:10px 20px;background:#FFB7DD'>";
    print_r($data);
    echo "</pre>";
}


//生成兑奖码
// $db = M("tb_gift2","","mysql://root:123456@192.168.0.20:3306/ygo_login");
function verifyCode($db,$code = null){
    $newCode = createCode();
    //判断兑奖码是否重复，重复就递归生成
    $re = $db->field('ID')->where("Code = '{$newCode}'")->find();
    if (empty($re)) {
        return $newCode;
    } else{
        return $this->verifyCode($db);
    }
}

//生成一个兑奖码(默认9位)
function createCode($len=9){
    $str = array_merge(range('a','z'),range('0','9'),range('A','Z')); 
    $count = count($str)-1;
    shuffle($str);
    $code = '';
    for ($i = 0; $i < $len; $i++) {  
        $code .= $str[mt_rand(0, $count)];  
    } 
    // $code = implode('',array_slice($str,0,9));
    return $code; 
}


/**
 * 求两个日期之间相差的天数
 * (针对1970年1月1日之后，求之前可以采用泰勒公式)
 * @param string $day1
 * @param string $day2
 * @return number
 */
function diffBetweenTwoDays($day1, $day2)
{
    $second1 = strtotime($day1);
    $second2 = strtotime($day2);

    if ($second1 < $second2) {
        $tmp = $second2;
        $second2 = $second1;
        $second1 = $tmp;
    }
    return ($second1 - $second2) / 86400;
}

/**
 * 参数过滤
 */
function filter_default(&$value){
    $value = htmlspecialchars($value);
    $value = strip_tags($value);
    return $value;
}

/**
 * 返回前一个页面
 */
function go_back(){
    redirect($_SERVER['HTTP_REFERER']);
}

/**
 * 设置提示信息
 */
function set_msg($msg){
    session('msg',$msg);
}

/**
 * 获取提示信息
 */
function get_msg(){
    $msg = session('msg');
    session('msg',null);                    
    return empty($msg)   ?  '' : $msg;
}

/**
 * 生成唯一字符序列
 */
function produce_unique_string(){
    return md5(uniqid(mt_rand(), true));
}

/**
 * 获取域名与端口组合的字符串
 */
function get_domain_and_port(){
    return $_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT'];
}

/**
 * 测试是否是超级管理员
 */
function is_admin(){
    $user = session('user_auth');
    if(empty($user)){
        log_out(gettext("会话已过期，请重新登录"));
    }
    return $user['is_admin'] == 1 ? true : false;
}

/**
 * 退出系统
 */
function log_out($msg=''){
    session_destroy();
    session_start();
    if($msg!=''){
        set_msg($msg);
    }
    redirect('/index.php/Public/login/');
}

/**
 * 正则判断是否为时间格式
 */

function is_time($time){
    $pattern = '/^[\d]{4}-[\d]{2}-[\d]{2}[\s]{1}(([2][0-3])|([0-1][0-9])):[0-5][0-9]:[0-5][0-9]$/';
    return preg_match($pattern, $time);
}

/**
 * 检测字符串的长度是否在指定范围内
 */
function check_string_rang($str,$start,$end){
    $strLength = strlen($str);
    return ($strLength >= $start && $strLength<=$end) ? true : false;
}

/**
 * @检测一维数组值的类型(测试的是同一类型) 如值是否都为数字类型
 * @param unknown $array 需要检测的数组
 * @param string $function  需要检测的方法(用php内置函数 如is_int)
 * @return boolean 数组为空或者类型正确则返回true,否则返回false
 */
function check_array_val_type($array,$function){
    if(!function_exists($function)){
        throw_exception(gettext("函数不存在"));
    }
    if(is_array($array) && $array){
        foreach ($array as $val){
            if(!call_user_func($function,$val)){
                return false;
            }
        }
    }
    return true;
}

/**
 * @读取一个中所有的文件[不包括子目录文件]
 * @param string $dir
 * @return array
 */
function get_dir_file($dir){
    $files = array();
    if($dh = opendir($dir)){
        while ( ($file = readdir($dh)) !== false ) {
            if($file == "." || $file == ".."){
                continue;
            }
            $files[] = $file;
        }
        closedir($dh);
    }else{
        throw_exception($dir.L('path_not_find'));
    }
    return $files;
}

/**
 * @对象转换成数组
 * @param object $objParam
 * @return array
 */
function object_to_array($objParam) {
    $obj_param = ( array )$objParam;
    foreach ($obj_param as $key => $value) {
        if (is_object($value)) {
            object_to_array($value);
            $obj_param [$key] = ( array )$value;
        }
    }
    return $obj_param;
}

/**
 * @将二维数组中的某个键的值作为键,其余的不变
 * @param array $list
 * @param string $key
 * @return array
 */
function two_array_chang(array $list,$key){
    if(!empty($list)){
        foreach ($list as $k=>$val){
            $list[$val[$key]] = $val;
            unset($list[$k]);
        }
    }
    return $list;
}

/**
 * @合并数组,且相同键的数组会被合并到同一个键中数组中<br/>
 * 如果键中的数组有重复的键,后者会覆盖前者
 * @param array $array
 * @param array $addArray
 * @return multitype:
 */
function two_array_combine(array $array,array $addArray){
    if(!empty($array)){
        foreach ($array as $k=>$val){
            if(array_key_exists($k, $addArray)){
                $keys = array_keys($addArray[$k]);
                foreach ($keys as $value){
                    $array[$k][$value] = $addArray[$k][$value];
                }
                unset($addArray[$k]);
            }
        }
    }else{
        $array = array();
    }
    return array_merge($array,$addArray);
}

/**
 * 
 *使用json_encode出现中文乱码。
 *解决办法是在使用json_encode之前把字符用函数urlencode()处理一下，
 *然后再json_encode，输出结果的时候在用函数urldecode()转回来 
 * @param array $arr
 */
function encode_json($str='') {
    return urldecode(json_encode(url_encode($str)));    
}
function url_encode($str) {
    if(is_array($str)) {
        foreach($str as $key=>$value) {
            $str[urlencode($key)] = url_encode($value);
        }
    } else {
        $str = urlencode($str);
    }

    return $str;
}

/**
 * 在数组中进行模糊搜索，仅限一维数组
 * @param string $str 要查询的字符
 * @param array $arr 一维数组
 * @param boolean $index 是否按键名搜索
 * @return $key 键名
 */
function arr_search($str,$arr,$index=false){
    $key = '';     
    foreach($arr as $k=>$v){        
        if(stripos($v,$str)!==false && $index==false){
            $key = $k;
            break;
        }elseif($index==true && stripos($k,$str)!==false){
            $key = $k;
            break;
        }
    }
    return $key;
}

/**
 * php强制下载文件
 */
function download($filename){ 
    if ((isset($filename))&&(file_exists($filename))){ 
        header("Content-length: ".filesize($filename)); 
        header('Content-Type: application/octet-stream'); 
        header('Content-Disposition: attachment; filename="' . $filename . '"'); 
        readfile("$filename"); 
    } else { 
        echo "Looks like file does not exist!"; 
    } 
}

/**
 * php防止SQL注入
 */
function injCheck($sql_str) {  
    $check = preg_match('/select|insert|update|delete|/*|*|../|./|union|into|load_file|outfile/', $sql_str);
    if ($check) { 
        echo '非法字符！！'; 
        exit; 
    } else { 
        return $sql_str; 
    } 
}






 ?>