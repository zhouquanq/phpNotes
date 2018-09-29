<?php /* Smarty version 2.6.26, created on 2015-06-01 16:59:44
         compiled from D:/wamp/www/c49/mysql/0601/3.Smarty-frame/Index/View/Index/index.html */ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		首页
		<table border="1" cellspacing="" cellpadding="">
			<tr>
				<th>aid</th>
				<th>标题</th>
			</tr>
			<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
				<tr>
					<td><?php echo $this->_tpl_vars['v']['aid']; ?>
</td>
					<td><?php echo $this->_tpl_vars['v']['title']; ?>
</td>
				</tr>
			<?php endforeach; endif; unset($_from); ?>
		</table>
		
		
		
		
		
		
		
		
	</body>
</html>