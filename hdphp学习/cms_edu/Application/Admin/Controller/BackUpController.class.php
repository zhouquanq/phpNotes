<?php 
/**
 * 备份管理控制器
 */
class BackUpController extends AuthController{
	/**
	 * 备份列表
	 */
	public function index(){
		$dirArr = Dir::tree('backup');
		$this->assign('dirArr',$dirArr);
		$this->display();
	}
	/**
	 * 备份
	 */
	public function backup(){
		$config = array(
			 'size'    => 200,//分卷大小 
			 'dir'     => 'backup/' . date("Ymdhis") . '/',//备份目录 
		);
		//调动框架数据备份
		$result = Backup::backup($config);
		if($result === false){
			//备份发生错误 
			$this->error(Backup::$error, U('index')); 
		}else{
			if($result['status'] == 'success') {
				//备份完成 
				$this->success($result['message'],U('index'));
			}else{
				//备份过程中
				$this->success($result['message'], $result['url'], 0.2); 
			}
		}
	}
	/**
	 * 还原
	 */
	public function recovery(){
		if(!isset($_SESSION['dir'])){
			//备份目录
	   		$_SESSION['dir'] = Q('post.dir');
		}
	   //还原
	   $result = Backup::recovery(array('dir'=>$_SESSION['dir']));
	   //还原发生错误
	   if ($result === false) {
	   		$this->error(Backup::$error,U('index'));
	   }else{
	   		if($result['status'] == 'success'){
	   			//还原完毕
	   			unset($_SESSION['dir']);
	   			$this->success($result['message'], U('index'));
	   		}else{
	   			//还原过程中
	   			$this->success($result['message'], $result['url'], 0.2);
	   		}
	   }
	}
	
	
	
	
	
	
}


 ?>