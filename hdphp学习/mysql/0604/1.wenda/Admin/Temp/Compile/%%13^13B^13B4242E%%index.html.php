<?php /* Smarty version 2.6.26, created on 2015-06-04 15:03:05
         compiled from D:/wamp/www/c49/mysql/0604/1.wenda/Admin/View/Category/index.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title></title>
	<link rel="stylesheet" href="<?php echo @__PUBLIC__; ?>
/Css/public.css" />
	<script type="text/javascript" src="<?php echo @__PUBLIC__; ?>
/Js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="<?php echo @__PUBLIC__; ?>
/Js/public.js"></script>
</head>

<body>
	<table class="table">
		<tr>
			<td class="th" colspan="20">分类列表</td>
		</tr>
		<tr class="tableTop">
			<td class="tdLittle1">ID</td>
			<td>分类名称</td>
			<td class="tdLtitle7">操作</td>
		</tr>
		<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
		<tr>
			<td><?php echo $this->_tpl_vars['v']['cid']; ?>
</td>
			<td><?php echo $this->_tpl_vars['v']['title']; ?>
</td>
			
			<td>
				[<a href="">添加子分类</a>][
				<a href="">修改</a>][
				<a href="" class="del">删除</a>]
			</td>
		</tr>
		<?php endforeach; endif; unset($_from); ?>
	</table>

</body>
</html>