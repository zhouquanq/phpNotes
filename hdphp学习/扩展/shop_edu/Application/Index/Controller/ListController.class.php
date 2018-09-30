<?php 
/**
 * 列表页控制器
 * @author 后盾马震宇 <houdunwangmzy@163.com>
 */	
class ListController extends Controller{
    /**
     * 显示列表页
     */
    public function index(){
    	//顶级分类
    	$topCate = K('Cate')->where('pid=0')->all();
		$this->assign('topCate',$topCate);
		//通过分类获得商品gid		
		$cid = Q('get.cid',0,'intval');
		//获得当前分类的子集cid
		$cids = $this->_getSon($cid);
		$gids = K('Goods')->where("cid in(" . implode(',', $cids) . ")")->getField('gid',true);
		//如果分类下面有商品的时候
		if($gids){
			//通过商品gid得到属性
			$attr = K('GoodsAttr')->where("gid in(" . implode(',', $gids) . ")")->group('gtvalue')->all();
			//以下两个临时数组为重组列表页需要的属性
			$tempAttr = array();
			foreach ($attr as $v) {
				$tempAttr[$v['taid']][] = $v;
			}
			$tempFinalAttr = array();
			//组合有名称name的属性
			foreach ($tempAttr as $taid => $value) {
				$tempFinalAttr[] = array(
					'name' => K('TypeAttr')->where("taid=" . $taid)->getField('taname'),
					'value' => $value
				);
			}
			$this->assign('tempFinalAttr',$tempFinalAttr);
			//List/index/cid/1/param/0_0_0_0_0
			$num = count($tempFinalAttr);
			$param = isset($_GET['param']) ? explode('_', $_GET['param']) : array_fill(0, $num, 0);
			$this->assign('param',$param);
			//进行筛选
			foreach ($param as $v) {
				if($v){
					$filterGids[] = M()->join('__goods_attr__ g1 JOIN __goods_attr__ g2 ON g1.gtvalue=g2.gtvalue')->where("g1.gtid={$v}")->getField('g2.gid',true);
				}
			}
			//如果有筛选的gid
			if(isset($filterGids)){
				//取交集
				$finalGids = $filterGids[0];
				foreach ($filterGids as $v) {
					$finalGids = array_intersect($finalGids, $v);
				}
				//属性获得交集gid之后，再和分类下面的商品gid再取交集
				$finalGids = array_intersect($finalGids,$gids);
				
			}else{
				//全部不限的时候，就是当前分类下面的所有商品gid
				$finalGids = $gids;
			}
			
		}else{
			//如果分类下面没有商品,把gid赋值为空数组
			$finalGids = array();
		}
		//最后的gid O(∩_∩)O~
		p($finalGids);
		
		$this->display();
	}
	
	private function _getSon($cid){
		$data = K('Cate')->all();
		$cids = $this->_getSonCid($data,$cid);
		$cids[] = $cid;
		return $cids;
	}
	
	private function _getSonCid($data,$cid){
		$temp = array();
		foreach ($data as $v) {
			if($v['pid'] == $cid){
				$temp[] = $v['cid'];
				$temp = array_merge($temp,$this->_getSonCid($data, $v['cid']));
			}
		}
		return $temp;
	}
	
	
	
	
 }
 
 
 
 

 
 
 
 
 
 


 ?>