<?php 
/**
 * 文章管理控制器
 */
class ArticleController extends AuthController{
	private $model;
	public function __init(){
		parent::__init();
		$this->model = K('Article');
	}
	/**
	 * 文章列表
	 */
	public function index(){
		//分页的使用*********************
		$total = M()->join("__article__ a JOIN __category__ c ON a.category_cid=c.cid")->where("is_recycle=0")->count();
		//1.总条数 2.每页显示多少条 3.显示的页码数量
		$pageObj = new Page($total,1,3);
		//返回分页
		$page = $pageObj->show();
		$this->assign('page',$page);
		//分页类自动生成limit要截取的两个数字比如：0,1
		$limit = $pageObj->limit();
		//关联文章和分类表
		$data = M()->join("__article__ a JOIN __category__ c ON a.category_cid=c.cid")->limit($limit)->where("is_recycle=0")->all();
		$this->assign('data',$data);
	    $this->display();
	}
	/**
	 * 添加文章
	 */
	public function add(){
		if(IS_POST){
			if(!$this->model->addData()){
				$this->error($this->model->error);
			}
			//$this->success('添加成功',U('index'));  
		}
		//处理“所属分类”**********
		$cateData = Data::tree(K('Category')->all(), 'cname');
		$this->assign('cateData',$cateData);
		//处理“文章标签”************
		$this->assign('tagData',K('Tag')->all());
		
	    $this->display();
	}	
	/**
	 * 文章编辑
	 */
	public function edit(){
		if(IS_POST){
			if(!$this->model->edit()){
				$this->error($this->model->error);
			}
		 	//$this->success('修改成功',U('index'));   
		}
		$aid = Q('get.aid',0,'intval');
		//1.获得旧内容
		$oldData = M()->join('__article__ a JOIN __article_data__ ad ON a.aid=ad.article_aid')->where("aid={$aid}")->find();
		//把字符串属性变为数组重新压回去
		$oldData['attr'] = explode(',', $oldData['attr']);
		$this->assign('oldData',$oldData);
		
		//处理“所属分类”
		$cateData = Data::tree(K('Category')->all(),'cname');
		$this->assign('cateData',$cateData);
		
		//处理“文章标签”
		$tagData = K('Tag')->all();
		$this->assign('tagData',$tagData);
		
		//获得当前文章的标签id
		$tidArr = K('ArcTag')->where("article_aid={$aid}")->getField('tag_tid',true);
		$this->assign('tidArr',$tidArr);
		
		
	    $this->display();
	}
	
	
	
	/**
	 * 删除到回收站
	 */
	public function del(){
	   	
	}
	/**
	 * 真正的删除
	 */
	public function realDel(){
		$aid = Q('get.aid',0,'intval');
	    $this->model->delData($aid);
		$this->success('删除成功');
	}
}








