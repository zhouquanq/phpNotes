<?php
class IndexController extends Controller{
	//数据库路径
	private $path;
	//保存数据库信息
	private $db;
	
	public function __construct(){
		$this->path = ROOT_PATH	. '/data.php';
		$this->db = include $this->path;
	}
	/**
	 * 留言板首页
	 */
	public function index(){
		//把数据库变量分配到模板
		$this->assign('data',$this->db);
		$this->display();
	}
	
	/**
	 * 异步添加留言
	 */
	public function ajax_add_msg(){
		$_POST['time'] = date('Y-m-d H:i:s');
		$this->db[] = $_POST;
		//写入数据库
		data_to_file($this->db, $this->path);
		//要把$_POST转为json形式再给js返回去
		//因为js不认识php的数组，认识json
		echo json_encode($_POST);
	}
	
	
	
	
	
	
	
	
	
	
}

?>