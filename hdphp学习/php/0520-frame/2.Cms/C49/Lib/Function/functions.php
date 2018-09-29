<?php 

function p($var){
	echo '<pre style="border:3px solid #333;padding:5px;border-radius:5px;margin-top:5px;background:#ccc;">';
	print_r($var);
	echo '</pre>';
}

/**
 * 打印框架所有定义常量
 */
function print_const(){
	$const = get_defined_constants(true);
	p($const['user']);
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


















 ?>