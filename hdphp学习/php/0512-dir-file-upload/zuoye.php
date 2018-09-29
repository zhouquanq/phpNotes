<?php 
//试一下rename看能不能移动？

//把整个a目录，移动到b目录下面
move('./a','./b/a');
//移动函数
function move($source,$dest){
	cp($source,$dest);
//	del($source);
}

//复制函数，包含创建文件夹，复制文件
function cp($source,$dest){
	
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



 ?>