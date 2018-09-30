<?php
/**
 * 后台默认控制器
 */
class IndexController extends CommonController{
	
	public function __init(){
	    $this->authLogin();
	}
    /**
	 * 默认显示首页
	 */
    public function index(){
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




