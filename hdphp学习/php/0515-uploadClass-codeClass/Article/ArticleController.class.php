<?php 
/**
 * 文章管理控制器
 */
class ArticleController extends Controller{
	private $db;
	/**
	 * 构造方法
	 */
	public function __construct($data){
		//把数据库赋值给私有属性
		$this->db = $data;
	}
	/**
	 * 默认访问首页
	 */
	public function index(){
		include "./tpl/index.html";
	}
	/**
	 * 添加
	 */
	public function add(){
		if(IS_POST){
			$_POST['time'] = date('Y-m-d H:i:s');
			//增加文章
			$this->db[] = $_POST;
			//写入数据库
			data_to_file($this->db, './data.php');
			//成功
			$this->success('添加成功', './index.php');
		}
		include "./tpl/addShow.html";
	}
	/**
	 * 删除
	 */
	public function del(){
		$id = (int)$_GET['id'];
		unset($this->db[$id]);
		data_to_file($this->db, './data.php');
		success('删除成功', './index.php');
	}
	
	/**
	 * 编辑
	 */
	public function edit(){
		$id = (int)$_GET['id'];
		if(IS_POST){
			$_POST['time'] = date('Y-m-d H:i:s');
			$this->db[$id] = $_POST;
			data_to_file($this->db, './data.php');
			$this->success('修改成功','./index.php');
		}
		//获得旧数据
		$oldData = $this->db[$id];
		include "./tpl/editShow.html";
	}
	
	/**
	 * 显示文章
	 */
	public function show(){
		$id = (int)$_GET['id'];
		$data = $this->db[$id];
		include "./tpl/show.html";
	}
	
	
	
	
	
	
}


 ?>