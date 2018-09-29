<?php
/**
 * 后台管理控制器
 */
class IndexController extends AuthController{
    /**
	 * 默认显示后台首页
	 */
    public function index(){
    	//打印框架所有常量
    	//print_const();
        //显示视图
        $this->display();
    }
	/**
	 * 欢迎界面
	 */
	public function welcome(){
	    $this->display();
	}
}









