<?php 
/**
 * 文章管理模型
 */
class ArticleModel extends Model{
	public $table = 'article';
	//自动验证
	public $validate = array(
		array('title','nonull','文章标题不能为空',2,3),
		array('category_cid','regexp:/^[1-9]\d*$/','必须选择分类',2,3),
		array('content','nonull','文章内容不能为空',2,3)
	);
	//自动完成
	public $auto = array(
		array('sendtime','time','function',2,1),
		array('user_uid','_uid','method',2,1),
		array('attr','_attr','method',2,3),
		array('thumb','_thumb','method',2,3),
	);
	
	
	public function _thumb(){
		//如果有文件上传
		if(isset($_FILES['thumb']) && $_FILES['thumb']['error']!=4){
			//1.上传
		   $upload = new Upload();
		   $files = $upload->upload();
		   //如果上传失败
		   if(!$files){
		   		//把上传的错误压入的模型的错误
		   		$this->error = $upload->error;
		   }else{
			  //2.缩略
			  $img = new Image();
			  //返回路径给数据库
			  return $img->thumb($files[0]['path']);
		   }
		}else{
			//把隐藏域提交过来返回给数据库
			return Q('post.thumb');
		}
	   
	}
	
	public function _attr(){
		//因为attr提交过来是数组，需要转为字符串才能插入到数据库
		return implode(',', Q('post.attr',array()));
	}
	
	public function _uid(){
		//当前方法返回的值，会存入user_uid字段
		return $_SESSION['aid'];
	}
	
	//添加文章数据
	public function addData(){
		if(!$this->create()) return false;
		//如果有上传错误
		if($this->error) return false;
	    //1.article 文章表
	    //执行添加返回自增id
	   	$aid = $this->add();
	    //2.article_data 文章数据表
	    $data = array(
			'keywords' => Q('post.keywords'),
			'description' => Q('post.description'),
			'content' => $_POST['content'],
			'article_aid' => $aid
		);
	    K('ArcData')->add($data);
	    //3.article_tag 文章标签中间表
//	    [tagname] => Array
//      (
//          [0] => 47
//          [1] => 48
//          [2] => 49
//      )
		$arcTagModel = K('ArcTag');
		foreach (Q('post.tagname',array()) as $v) {
			$data = array(
				'article_aid' => $aid,
				'tag_tid' => $v,
				'category_cid' => Q('post.category_cid')
			);
			$arcTagModel->add($data);
		}
	    
	    return true;
	}
	
	/**
	 * 删除文章操作
	 */
	public function delData($aid){
	   //分析删除几张表？
	   
	   
	   
	   
	}
	
	/**
	 * 文章编辑处理
	 */
	public function edit(){
		if(!$this->create()) return false;
		$aid = Q('post.aid',0,'intval');
		//1.article表修改
		$this->update();
		//2.article_data
		K('ArcData')->where("article_aid={$aid}")->update();
		//3.article_tag 文章标签中间表
		$arcTagModel = K('ArcTag');
		//先删除
		$arcTagModel->where("article_aid={$aid}")->delete();
		//再添加
		foreach(Q('post.tagname',array()) as $v){
			$data = array(
				'article_aid' => $aid,
				'tag_tid' => $v,
				'category_cid' => Q('post.category_cid')
			);
			$arcTagModel->add($data);
		}
		
		return true;
	}
	
}









