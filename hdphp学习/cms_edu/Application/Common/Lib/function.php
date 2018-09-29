<?php 
/**
 * 获得分类地址
 * @param $isHtml 是否是静态
 * @param $htmlDir 静态目录
 * @param $cid 分类的cid
 */
function getCateUrl($isHtml,$htmlDir,$cid){
	//如果是静态
	if($isHtml){
		$path = __ROOT__ . "/Static/" . C('INDEX_TPL_STYLE') . "/{$htmlDir}/index.html";
	}else{
		//如果是动态地址
		$path = U('List/index',array('cid'=>$cid));
	}
	return $path;
}

function getArcUrl($isHtml,$htmlDir,$aid){
	//如果是静态
	if($isHtml){
		$path = __ROOT__ . "/Static/" . C('INDEX_TPL_STYLE') . "/{$htmlDir}/arc/{$aid}.html";
	}else{
		//如果是动态地址
		$path = U('Content/index',array('aid'=>$aid));
	}
	return $path;
}







