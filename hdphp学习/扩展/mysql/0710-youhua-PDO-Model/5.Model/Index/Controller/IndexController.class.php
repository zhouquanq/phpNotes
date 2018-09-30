<?php
class IndexController extends Controller{
	public function index(){
//		$data = M('user')->all();
//		p($data);
		
//		$data = M('user')->find();
//		p($data);
	
		$data = M('user')->where('uid>1')->field('username')->limit(3)->order('uid ASC')->all();
		p($data);
		
		
		
	}
}

?>