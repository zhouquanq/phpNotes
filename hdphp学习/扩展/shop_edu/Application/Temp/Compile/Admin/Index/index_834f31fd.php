<?php if(!defined('HDPHP_PATH'))exit;C('SHOW_NOTICE',FALSE);?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>HDSHOP 后台管理中心</title>
	<link rel="stylesheet" href="http://127.0.0.1/project/shop_edu/Application/Admin/View/Public/Css/index.css" />
	<script type="text/javascript" src='http://127.0.0.1/project/shop_edu/Application/Admin/View/Public/Js/jquery-1.8.2.min.js'></script>
	<script type="text/javascript" src='http://127.0.0.1/project/shop_edu/Application/Admin/View/Public/Js/index.js'></script>
	<base target="iframe" />
</head>
<body>
	<div id="top">
		<div class='logo'></div>
		<div class='t_title'>后台管理中心</div>
		<div class='menu'>
			<span id='map'></span>
			<ul>
				<li class='first first_cur'>
					<a href=""><span>首&nbsp;页</span></a>
				</li>
				<li class='next'>
					<a href=""><span>商品列表</span></a>
				</li>
				<li>
					<a href=""><span>订单列表</span></a>
				</li>
				<li>
					<a href=""><span>用户列表</span></a>
				</li>
				<li class='last'>
					<a href=""><span>系统设置</span><div></div></a>
				</li>
			</ul>
			<div id='user'>
				<a href="" id="web"></a>
				<span class='user_state'>当前管理员：[<span>admin</span>]</span>
				<a href="<?php echo U('Login/out');?>" id='login_out' target="_blank"></a>
			</div>
		</div>
	</div>
	<div id='left'>
		<div class='nav'>
			<div class="nav_u"><span class="pos down">商品管理</span></div>
		</div>
		<ul class='option'>
			<li><a href='<?php echo U('Shop/index');?>'>商品列表</a></li>
			<li><a href='<?php echo U('Shop/add');?>'>添加商品</a></li>
			<li><a href=''>商品分类</a></li>
		</ul>

		<div class='nav'>
			<div class="nav_u"><span class="pos down">订单管理</span></div>
		</div>
		<ul class='option'>
			<li><a href=''>订单列表</a></li>
			<li><a href=''>待审核订单</a></li>
			<li><a href=''>待发货订单</a></li>
			<li><a href=''>已完成订单</a></li>
		</ul>
	</div>
	<div id="right">
		<iframe src="<?php echo U('welcome');?>" frameborder="0" name='iframe'></iframe>
	</div>
</body>
</html>