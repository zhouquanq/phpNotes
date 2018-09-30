<?php 
/**
 * 货品列表控制器
 * @author 后盾马震宇 <houdunwangmzy@163.com>
 */
class GoodsListController extends Controller{
    /**
     * 展示货品列表
     */
    public function index(){
   		$tid = Q('get.tid',0,'intval');
		$gid = Q('get.gid',0,'intval');
		
		//通过tid在类型属性表中查到该商品对应的规格名称
		$spec = M('type_attr')->where("class=1 AND tid={$tid}")->all();
		foreach ($spec as $k => $v) {
			$spec[$k]['option'] = M('goods_attr')->where("gid={$gid} AND taid={$v['taid']}")->all();
		}
		$this->assign('spec',$spec);
		
		//获得该商品所填写的货品列表数据
		$listData = M('goods_list')->where("gid={$gid}")->all();
		foreach ($listData as $k => $v) {
			$listData[$k]['spec'] = M('goods_attr')->where("gtid in (" . $v['combine'] . ")")->getField('gtvalue',true);
		}
		$this->assign('listData',$listData);
		
    	$this->display(); 
    }
 }
 
 
 
 
 
 
 
 
 
 
 


 ?>