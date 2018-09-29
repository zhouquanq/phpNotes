<?php 
/**
 * 内容页控制器
 */
class ContentController extends CommonController{
	/**
	 * 显示内容页
	 */
	public function index(){
		$aid = Q('get.aid',0,'intval');
		//通过文章aid获得数据
		$data = M()->join('__article__ a JOIN __category__ c ON a.category_cid=c.cid JOIN __article_data__ ad ON a.aid=ad.article_aid')->where("aid={$aid}")->find();
		$data['total'] = K('Comment')->where("article_aid={$aid}")->count();
		$this->assign('c49cms',$data);
		$this->dis('content');
	}
}


 

 
 
 
 
 
 