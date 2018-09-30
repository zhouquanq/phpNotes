<?php /* Smarty version 2.6.26, created on 2015-07-13 14:05:15
         compiled from /www/project/mysql/0711/1.Model/Index/View/Index/index.html */ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<table border="1" cellspacing="" cellpadding="">
			
			<tr>
				<td>商品名称</td>
				<td>商品价格</td>
				<td>
					操作
				</td>
			</tr>
			<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
			<tr>
				<td><?php echo $this->_tpl_vars['v']['gname']; ?>
</td>
				<td><?php echo $this->_tpl_vars['v']['shopprice']; ?>
</td>
				<td>
					<a href="<?php echo @__APP__; ?>
?a=edit&gid=<?php echo $this->_tpl_vars['v']['gid']; ?>
">编辑</a>
					<a href="<?php echo @__APP__; ?>
?a=del&gid=<?php echo $this->_tpl_vars['v']['gid']; ?>
">删除</a>
				</td>
			</tr>
			<?php endforeach; endif; unset($_from); ?>
		</table>
		<form action="" method="post">
			商品名称：<input type="text" name="gname" id="" />
			<br />
			市场价格：<input type="text" name="marketprice" id="" />
			<br />
			商品价格：<input type="text" name="shopprice" id="" />
			<br />
			<input type="submit" value="添加"/>
		</form>
	</body>
</html>