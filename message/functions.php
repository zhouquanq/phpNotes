<?php 
header('Content-type:text/html;charset=utf-8');
date_default_timezone_set('PRC');
function p($var){
	echo '<pre style="border:3px solid #333;padding:5px;border-radius:5px;margin-top:5px;background:#ccc;">';
	print_r($var);
	echo '</pre>';
}

//如果$_POST为空，证明用户没有提交
if(empty($_POST)){
	define('IS_POST', false);
}else{
	define('IS_POST', true);
}
/**
 * 成功提示函数
 */
function success($msg,$url){
	$str =<<<str
<script type='text/javascript'>
	alert("$msg");
	location.href='$url';
</script>;
str;
	echo $str;
	die;
}
/**
 * 错误提示函数
*/
function error($msg){
		$str = <<<str
<script type="text/javascript">
alert('{$msg}');
window.history.back();
</script>
str;
		echo $str;die;
	}

/**
 * 写入数据库
 */
function data_to_file($data,$path){
	//返回合法的PHP代码
	//如果传递第二个参数，不会直接输出，而是返回给变量
	$phpCode = var_export($data,true);
	//把字符串写入文件里面
	file_put_contents($path, "<?php return $phpCode ?>");
}

function del($dirName){
	//如果不是一个目录，返回假
	if(!is_dir($dirName)) return false;
	//循环目录下面的所有的文件和文件夹
	foreach(glob($dirName . '/*') as $v){
		//如果是目录，继续递归，不是的话，删除文件
		is_dir($v) ? del($v) : unlink($v);
	}
	//删除文件夹
	return rmdir($dirName);
}


//移动函数
function move($source,$dest){
	cp($source,$dest);
//	del($source);
}

//复制函数，包含创建文件夹，复制文件
function cp($source,$dest){
	if(!is_dir($source)) return false;
	is_dir($dest) || mkdir($dest,0777,true);
	foreach(glob($source . '/*') as $v){
		//组合新路径
		$newDest = $dest . '/' . basename($v);
		//如果是目录，则递归，否则就是复制文件
		is_dir($v) ? cp($v,$newDest) : copy($v,$newDest);
	}
}

function up($path='./Upload'){
	//重组数组
	$arr = reset_arr();
	//处理上传目录,保证右面肯定没有/
	$path = rtrim($path , '/');
	//创建上传目录
	is_dir($path) || mkdir($path,0777,true);
	//循环上传
	foreach ($arr as $v) {
		//是否是一个合法的上传文件
		if(is_uploaded_file($v['tmp_name'])){
			//获得类型
			$type = ltrim(strrchr($v['name'], '.'),'.');
			//组合目标路径
			$dest = $path . '/' . time() . mt_rand(0, 99999) . '.' . $type;
			//移动上传文件
			move_uploaded_file($v['tmp_name'], $dest);
		}
	}
}

function reset_arr(){
	$arr = array();
	foreach ($_FILES as $v) {
//		p($v);
		//多文件上传
		if(is_array($v['name'])){
			foreach ($v['name'] as $key => $value) {
				$arr[] = array(
					'name' => $value,
					'type' => $v['type'][$key],
					'tmp_name' => $v['tmp_name'][$key],
					'error' => $v['error'][$key],
					'size' => $v['size'][$key],
				);
			}
		}else{//单文件上传
			$arr[] = $v;
		}
	}
	return $arr;
}

/**
 * 实例化未找到的类，自动触发，
 * 传入未找到类的名字
 */
function __autoload($className){
	include "{$className}.class.php";
}
 ?>