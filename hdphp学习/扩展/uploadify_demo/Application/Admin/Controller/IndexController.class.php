<?php
//测试控制器类
class IndexController extends Controller{
    //动作方法
    public function index(){
    	if(IS_POST){
    	    p(Q("post."));
    	    //$this->success();
    	}
        //显示视图
        $this->display();
    }
	/**
	 * uploadify上传
	 */
	public function upload(){
	     $upload = new Upload('Upload/Content/' . date('y/m'));
		 $file = $upload->upload();
		 if (empty($file)) {
		 	$this->ajax('上传失败');
		 } else {
		 	//来这个地方可以缩略图处理
			
			
		 	$data = $file[0];
			$this->ajax($data);
		 }
	}
	
	/**
	 * 异步删除图片
	 */
	public function delImg(){
	    $path = Q('post.path');
		//删除图片
		unlink($path);
		
	}
	
	
	
	
	
	
	
	
	
}
