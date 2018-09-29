<?php
class IndexController extends Controller{
	public function index(){
		if(IS_POST){
			$upload = new Upload();
			$path = $upload->up();
			$sql = "UPDATE user SET face='{$path[0]}' WHERE uid=1";
			M()->exec($sql);
			$this->success('上传成功',__APP__);
		}
		
		$userInfo = M()->query("SELECT * FROM user WHERE uid=1");
		$this->assign('userInfo',$userInfo);
		
		
		$this->display();
	}
}

?>