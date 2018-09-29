<?php
/**
 * 首页控制器
 */
class IndexController extends CommonController{
	/**
	 * 默认显示首页
	 */
	public function index(){
		
		//如果缓存失效了******
		if(!$this->is_cached()){
			//重新查询数据库处理*****
			//处理分类
			$cateData = M()->query("SELECT * FROM category WHERE pid=0");
			//处理压入子集
			foreach ($cateData as $k => $v) {
				$cateData[$k]['son'] = M()->query("SELECT * FROM category WHERE pid={$v['cid']}");
			}
			//p($cateData);die;
			$this->assign('cateData',$cateData);
			
			//问题库处理(顶级分类)
			$this->topCate();
			
			//处理待解决的问题
			$noSolve = M()->query("SELECT * FROM ask WHERE solve=0");
			$this->assign('noSolve',$noSolve);
			
		}
		
		$this->display();
	}
}





