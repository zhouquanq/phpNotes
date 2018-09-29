<?php 
/**
 * 提问管理控制器
 */
class AskController extends CommonController{
	/*
	 * 提问首页
	 */
	public function index(){
		if(IS_POST){
		 	//提问处理，给ask表插入一条数据，一定要注意cid和uid
		 	//$sql = "";
			//M()->exec($sql);
			//$this->success('提问成功',__APP__);   
		}
		//分配顶级分类
		$this->topCate();
		$this->display();
	}
	
	/**
	 * 获得子集分类
	 */
	public function getSon(){
		$cid = (int)$_POST['id'];
		//获得子集分类
		$sonData = M()->query("SELECT * FROM category WHERE pid={$cid}");
		//以json的形式返回给js
		echo json_encode($sonData);
	}
}









