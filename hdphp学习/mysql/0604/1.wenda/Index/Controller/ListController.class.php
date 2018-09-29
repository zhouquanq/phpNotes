<?php 
/**
 * 列表页控制器
 */
class ListController extends CommonController{
	/**
	 * 列表页首页
	 */
	public function index(){
		//问题库处理(顶级分类)
		$this->topCate();
		
		//获得子集分类
		$cid = (int)$_GET['cid'];
		$sql = "SELECT * FROM category WHERE pid={$cid}";
		$sonCate = M()->query($sql);
		//如果没有子分类
		if(!$sonCate){
			//停留在当前那级
			$pid = M()->query("SELECT pid FROM category WHERE cid={$cid}");
			$pid = $pid[0]['pid'];
			$sonCate = M()->query("SELECT * FROM category WHERE pid={$pid}");
		}
		$this->assign('sonCate',$sonCate);
		
		//处理面包屑导航
		$data = M()->query("SELECT * FROM category");
		//获得父级分类
		$fatherCate = $this->getFather($data, $cid);
		//数组反转
		$fatherCate = array_reverse($fatherCate);
		$this->assign('fatherCate',$fatherCate);
				
		//处理不同情况显示不同问题
		$w = isset($_GET['w']) ? $_GET['w']	: 0;
		switch ($w) {
			//待解决
			case 0:
				$sql = "SELECT * FROM ask AS a JOIN category AS c ON a.cid=c.cid WHERE c.cid={$cid} AND solve=0";
				break;
			
			//case 1,2是作业
			
			//零回答
			case 3:
				$sql = "SELECT * FROM ask AS a JOIN category AS c ON a.cid=c.cid WHERE c.cid={$cid} AND answer=0";
				break;
		}
		$askData = M()->query($sql);
		$this->assign('askData',$askData);
		
		$this->display();
	}
	
	/**
	 * 获得父级分类
	 */
	private function getFather($data,$cid){
		static $temp = array();
		foreach ($data as $v) {
			if($v['cid'] == $cid){
				$temp[] = $v;
				$this->getFather($data, $v['pid']);
			}
		}
		return $temp;
	}
	
}










