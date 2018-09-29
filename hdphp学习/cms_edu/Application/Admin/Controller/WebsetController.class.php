<?php 
/**
 * 站点配置控制器
 */
class WebsetController extends AuthController{
	/**
	 * 显示与修改站点配置
	 */
	public function index(){
		$model = K('Webset');
		if(IS_POST){
			//更改数据库的配置项
		 	foreach (Q('post.') as $name => $value) {
		 		$model->where("name='{$name}'")->update(array('value'=>$value));
		 	}
			//重组数组，使之变成配置项的格式
			$data = $model->all();
			$temp = array();
			foreach ($data as $v) {
				$temp[$v['name']] = $v['value'];
			}
			//代码合法化
			$temp = var_export($temp,true);
			$str = <<<str
<?php
if (!defined("HDPHP_PATH"))exit('No direct script access allowed');
//更多配置请查看hdphp/Config/config.php
return {$temp};
?>
str;
			//更改配置项文件
			file_put_contents(APP_CONFIG_PATH . '/webConfig.php', $str);
			$this->success('修改成功');
		}
		//获得所有配置项，分配
		$data = $model->all();
		$this->assign('data',$data);
	    $this->display();
	}
}








