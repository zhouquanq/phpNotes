<?php
class IndexController extends Controller{
	public function index(){
		if(IS_POST){
			M('goods')->add();
			$this->success('添加成功','./index.php');
		}
		
//		$data = M('user')->all();
//		p($data);
		
//		$data = M('user')->find();
//		p($data);
	
//		$data = M('user')->where('uid>1')->field('username')->limit(3)->order('uid ASC')->all();
//		p($data);
		
		
		$data = M('goods')->all();
		$this->assign('data',$data);
		$this->display();
		
	}
	public function edit(){
		if(IS_POST){
		    M('goods')->where("gid={$_POST['gid']}")->save();
		    $this->success('修改成功','./index.php');
		}
		//获得旧数据
		$oldData = M('goods')->where("gid={$_GET['gid']}")->find();
		$this->assign('oldData',$oldData);
		$this->display();
	}
	
	public function del(){
		$id = $_GET['gid'];
		M('goods')->where("gid={$id}")->delete();
		$this->success('删除成功','./index.php');
	}
	
	
	
	
	
	
	
	
	
	
	
	
}

?>