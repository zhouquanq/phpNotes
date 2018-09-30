<?php if(!defined('HDPHP_PATH'))exit;C('SHOW_NOTICE',FALSE);?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
		<title>Document</title>
		<link rel="stylesheet" href="http://127.0.0.1/project/shop_edu/Application/Index/View/Public/Less/list.css" />
	</head>
	<body>
		<div id="box-menu">
			<div class="menu">
				<ul>
					<li><a href="<?php echo U('Index/index');?>">首页</a>
					</li>
					<?php foreach ($topCate as $k=>$v){?>
					<li>
						<a href="<?php echo U('List/index',array('cid'=>$v['cid']));?>"     <?php if($_GET['cid']==$v['cid']){ ?>class="hover"<?php } ?>><?php echo $v['cname'];?></a>
					</li>
					<?php }?>
				</ul>
			</div>
		</div>
		<div id="attr-box">
			<div class="attr">
				<ul>
					<?php foreach ($tempFinalAttr as $k=>$v){?>
						<li class="attr-border">
							<h2><?php echo $v['name'];?>：</h2>
							<ul class="attr-content">
								<?php 
									//赋值给临时变量为了不破坏$param
									$temp = $param;
									//为了不限而准备的
									$temp[$k] = 0;
								 ?>
								<li>
									<a href="<?php echo U('List/index',array('cid'=>$_GET['cid'],'param'=>implode('_',$temp)));?>"     <?php if($param[$k]==0){ ?>class="hover"<?php } ?> >不限</a>
								</li>
								<?php foreach ($v['value'] as $kk=>$vv){?>
								<?php 
									$temp[$k] = $vv['gtid'];
								 ?>
								<li>
									<a href="<?php echo U('List/index',array('cid'=>$_GET['cid'],'param'=>implode('_',$temp)));?>"     <?php if($param[$k]==$vv['gtid']){ ?>class="hover"<?php } ?> ><?php echo $vv['gtvalue'];?></a>
								</li>
								<?php }?>
							</ul>
						</li>
					<?php }?>
				</ul>
			</div>
		</div>
		<div id="content">
			<ul>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
			</ul>
		</div>

	</body>

</html>