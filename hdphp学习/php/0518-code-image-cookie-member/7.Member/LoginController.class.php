<?php 
/**
 * 登陆控制器
 */
class LoginController extends Controller{
	private $db;
	public function __construct($data){
		$this->db = $data;
	}
	/**
	 * 默认登陆首页
	 */
	public function index(){
		$this->display();
	}
	/**
	 * 退出登陆
	 */
	public function out(){
		
	}
	
	/**
	 * 注册
	 */
	public function register(){
		if(IS_POST){
			$username = $_POST['username'];
			//用户名是否存在
			foreach ($this->db as $v) {
				if($v['username'] == $username){
					$this->error('用户名已存在');
				}
			}
			//增加一个用户
			$this->db[] = array(
				'username' => $username,
				'password' => md5($_POST['password']),
				'time'	   => date('Y-m-d H:i:s')
			);
			//写入数据库
			data_to_file($this->db, './data.php');
			$this->success('注册成功', './index.php');
		}
		$this->display();
	}
	
	
	
	
}


 ?>