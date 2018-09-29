<?php
class CommonTag extends Tag{
    /**
     * 标签声明
     * @var array
     */
    public $Tag = array(
    	'navigate' => array('block' => 1, 'level' => 4),
        'channel' => array('block' => 1, 'level' => 4),
        'arclist' => array('block' => 1, 'level' => 4),
        'tag' => array('block' => 1, 'level' => 4),
    );
	
	public function _tag($attr,$content,&$hd){
		//截取多少条
		$rows = isset($attr['rows']) ? $attr['rows'] : 1000;
		$str = <<<str
<?php
	\$data = K('Tag')->limit($rows)->all();
	foreach(\$data as \$field):
	\$field['url'] = U('List/index',array('tid'=>\$field['tid']));
?>
{$content}
<?php
	endforeach;
?>
str;
		return $str;
	}
	
	/**
	 * 调取文章数据标签
	 */
	public function _arclist($attr,$content,&$hd){
		//不在回收站
		$where = "is_recycle=0";
		//截取多少条
		$rows = isset($attr['rows']) ? $attr['rows'] : 1000;
		//文章属性
		$arcAttr = isset($attr['attr']) ? $attr['attr'] : NULL;
		if($arcAttr){
			$arcAttr = explode(',', $arcAttr);
			//先把第一拿出来链接AND 
			$where .= " AND attr like '%{$arcAttr[0]}%'";
			//把除了第一个之外链接OR
			foreach ($arcAttr as $k => $v) {
				if($k!=0){
					$where .= " OR attr like '%$v%'";
				}
			}
		}
		//排序
		$order = isset($attr['order']) ? $attr['order'] : "sendtime DESC";
		//分类cid 如果在列表页
		if($cid = Q('get.cid',0,'intval')){
			//获得当前分类和子集分类的cid
			$model = K('Category');
			$cidArr = $model->sonCid($model->all(),$cid);
			$cidArr[] = $cid;
			$where .= " AND category_cid in (" . implode(',', $cidArr) . ")";
			
		}
		//如果有点击标签的时候
		if($tid = Q('get.tid',0,'intval')){
			//1.通过tid得到aid，然后到中间表查询
			$aidArr = K('ArcTag')->where("tag_tid={$tid}")->getField('article_aid',true);
			$where .= " AND aid in (" . implode(',', $aidArr) . ")";
		}
		
		//分页处理
		//每页显示多少条
		$pageRows = isset($attr['pageRows']) ? $attr['pageRows'] : 0;
		//显示多少个分页
		$pageNum = isset($attr['pageNum']) ? $attr['pageNum'] : 3;
		
		
		$str = <<<str
<?php
	//如果需要分页处理
	if($pageRows){
		\$pageObj = new Page(M()->join("__article__ a JOIN __category__ c ON a.category_cid=c.cid")->where("$where")->count(),$pageRows,$pageNum);
		\$data = M()->join("__article__ a JOIN __category__ c ON a.category_cid=c.cid")->order("{$order}")->where("$where")->limit(\$pageObj->limit())->all();
		\$page = \$pageObj->show();
	}else{
		//没有分页的处理
		\$data = M()->join("__article__ a JOIN __category__ c ON a.category_cid=c.cid")->order("{$order}")->where("$where")->limit($rows)->all();
	}
	foreach(\$data as \$field):
	//评论总数
	\$field['total'] = K('Comment')->where("article_aid=" . \$field['aid'])->count();
	//缩略图
	\$field['thumb'] = "__ROOT__/" . \$field['thumb'];
	//内容页地址
	\$field['url'] = getArcUrl(\$field['is_archtml'],\$field['htmldir'],\$field['aid']);
?>
{$content}
<?php
	endforeach;
?>
str;
		return $str;
	}

	/**
	 * 导航标签
	 */
	public function _navigate($attr, $content, &$hd){
		//截取多少条
		$rows = isset($attr['rows']) ? $attr['rows'] : 1000;
		//组合字符串
		$str = <<<str
<?php
	\$data = K('Category')->where("pid=0")->limit($rows)->all();
	foreach(\$data as \$field):
	//处理分类地址
	\$field['url'] = getCateUrl(\$field['is_listhtml'],\$field['htmldir'],\$field['cid']);
?>
{$content}
<?php
	endforeach;
?>
str;
		return $str;
	}
    /**
     * 分类标签
     * @param $attr 属性
     * @param $content 内容
     * @param $hd HdView模型引擎对象
     */
    public function _channel($attr, $content, &$hd){
		
    }
	
	
	
	
	
	
	
	
}