<?php
/**
 * 首页控制器
 */
class IndexController extends Controller{
	/**
	 * 默认显示首页
	 */
	public function index(){
		//处理分类
		$cateData = M()->query("SELECT * FROM category WHERE pid=0");
		//处理压入子集
		foreach ($cateData as $k => $v) {
			$cateData[$k]['son'] = M()->query("SELECT * FROM category WHERE pid={$v['cid']}");
		}
		//p($cateData);die;
		$this->assign('cateData',$cateData);
		$this->display();
	}
}





