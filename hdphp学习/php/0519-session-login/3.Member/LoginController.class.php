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
		//判断是否登陆
		if(isset($_SESSION['uname'])){
			$this->success('您已经登陆', './index.php');
		}
		if(IS_POST){
			//先判断验证码（把验证码存入session）
			
			//接收用户数据
			$username = $_POST['username'];
			$password = md5($_POST['password']);
			//判断用户名和密码是否正确（未来我们学习mysql的时候，千万不要用这样的写法）
			foreach ($this->db as $v) {
				if($v['username'] == $username && $v['password'] == $password){
					//存session(注意要开启session)
					$_SESSION['uname'] = $username;
					//是否是7天自动登陆
					if(isset($_POST['auto'])){
						setcookie(session_name(),session_id(),time() + 3600 * 24 * 7,'/');
					}else{
						setcookie(session_name(),session_id(),0,'/');
					}
					$this->success('登陆成功','./index.php');
				}
			}
			//登陆失败
			$this->error('登陆失败');
		}
		$this->display();
	}
	/**
	 * 退出登陆
	 */
	public function out(){
		//清除session变量$_SESSION
		session_unset();
		//清除服务器session文件
		session_destroy();
		$this->success('退出成功', './index.php');
	}
	
	/**
	 * 显示验证码
	 */
	public function code(){
		
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