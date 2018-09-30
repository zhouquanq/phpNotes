<?php 
/**
 * 商品控制器
 * @author 后盾马震宇 <houdunwangmzy@163.com>
 */
class ShopController extends Controller{
    /**
     * 商品列表
     */
    public function index(){
    	$goods = K('Goods')->all();
		$this->assign('goods',$goods);
    	$this->display(); 
    }
	/**
	 * 商品添加
	 */
	public function add(){
		if(IS_POST){
		    p(Q("post."));
		    //$this->success();
		}
		//获取分类数据
		$cateData = Data::tree(K('Cate')->all(),'cname');
		$this->assign('cateData',$cateData);
		//获取品牌数据
		$brandData = K('Brand')->all();
		$this->assign('brandData',$brandData);
		
	    $this->display();
	}
	/**
	 * 异步获取规格和属性
	 */
	public function getAttrSpec(){
		if(!IS_AJAX) $this->error('非法请求');
		$tid = Q('post.tid',0,'intval');
		//通过类型属性表获得对应的数据
		$data = K('TypeAttr')->where("tid={$tid}")->all();
		foreach($data as $k => $v){
			$data[$k]['tavalue'] = explode(',', $v['tavalue']);
		}
		$this->ajax($data);
		
	}
	
	public function upload(){
	     $upload = new Upload('Upload/Content/' . date('y/m'));
		 $file = $upload->upload();
		 if (empty($file)) {
		 	$this->ajax('上传失败');
		 } else {
		 	$data = $file[0];
			$this->ajax($data);
		 }
	}
	
	
 }
 
 
 
 
 
 
 
 
 
 
 


 ?>