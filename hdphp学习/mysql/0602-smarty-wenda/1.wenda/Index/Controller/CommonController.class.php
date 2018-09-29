<?php 
/**
 * 公共控制器
 */
class CommonController extends Controller{
	/**
	 * 分配顶级分类
	 */
	public function topCate(){
		//问题库处理(顶级分类)
		$topCate = M()->query("SELECT * FROM category WHERE pid=0");
		$this->assign('topCate',$topCate);
	}
}





