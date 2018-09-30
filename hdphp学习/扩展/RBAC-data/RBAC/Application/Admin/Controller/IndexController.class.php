<?php
//测试控制器类
class IndexController extends AuthController{
    //动作方法
    public function index(){
    		p($_SESSION);
        //显示视图
        $this->display();
    }
}
