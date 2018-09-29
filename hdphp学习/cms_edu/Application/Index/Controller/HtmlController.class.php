<?php 
/**
 * 静态管理控制器
 */
class HtmlController extends CommonController{
	public function __init(){
		parent::__init();
		//检测后台是否登陆
		if(!isset($_SESSION['aid']) || !isset($_SESSION['adminname'])){
			go(U('Admin/Login/index'));
		}
	}
	/**
	 * 生成首页静态
	 */
	public function index(){
		$this->createHtml('Index', './index.html');
		$this->success('生成成功',U('Admin/Index/welcome'));
	}
	/**
	 * 生成列表页静态
	 */
	public function _list(){
		//获得分表表中的htmldir静态目录
		$cateData = K('Category')->where("is_listhtml=1")->all();
		foreach ($cateData as $v) {
			//因为访问列表页要传递get参数cid
			$_GET['cid'] = $v['cid'];
			$path = 'Static/' . C('INDEX_TPL_STYLE') . '/' . $v['htmldir'] . '/index.html';
			//改变分页地址
			//{page}.html 只需要这么写，自动替换成1.html或者2.html
			Page::$staticUrl = __ROOT__ . "/Static/" . C('INDEX_TPL_STYLE') . "/" . $v['htmldir'] . '/{page}.html';
			//生成静态(里面有分页的操作)
			$this->createHtml('List', $path);
			//生成分页静态
			for ($i=1; $i <= Page::$staticTotalPage; $i++) {
				$_GET['page'] = $i; 
				$path = "Static/" . C('INDEX_TPL_STYLE') . "/" . $v['htmldir'] . "/{$i}.html";
				$this->createHtml('List', $path);
			}
		}
		
		$this->success('生成成功',U('Admin/Index/welcome'));

	}
	/**
	 * 生成内容页静态
	 */
	public function content(){
		$arcData = M()->join("__article__ a JOIN __category__ c ON a.category_cid=c.cid")->where("is_archtml=1")->all();
		foreach ($arcData as $v) {
			$_GET['aid'] = $v['aid'];
			$path = "Static/" . C('INDEX_TPL_STYLE') . "/" . $v['htmldir'] . "/arc/{$v['aid']}.html";
			$this->createHtml('Content', $path);
		}
		
		$this->success('生成成功',U('Admin/Index/welcome'));
	}
	
	public function createHtml($controller,$path){
		 ob_start();
	   //执行访问
	   A('Index/'.$controller.'/index');
	   $data = ob_get_contents();
	   ob_clean();
	   //创建目录
	   $dir = dirname($path);
	   is_dir($dir) || mkdir($dir, 0777,true);
	   //写成静态文件
	   file_put_contents($path, $data);
	   
	}
	
	
	
	
	
	
	
	
}

