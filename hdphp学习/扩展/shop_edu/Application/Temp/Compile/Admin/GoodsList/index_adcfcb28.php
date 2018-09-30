<?php if(!defined('HDPHP_PATH'))exit;C('SHOW_NOTICE',FALSE);?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="http://127.0.0.1/project/shop_edu/Static/hdjs/hdjs.css"/>
	<link rel="stylesheet" href="http://127.0.0.1/project/shop_edu/Application/Admin/View/Public/Css/common.css" />
	<script type="text/javascript" src='http://127.0.0.1/project/shop_edu/Application/Admin/View/Public/Js/jquery-1.7.2.min.js'></script>
</head>
<body>
	<div class="container-fluid">
	<div class="row-fluid">
	<div class="span12">

	<form action="" method='post'>
		<table class='table table-bordered table-hover'>
			<tr>
				<th>货品ID</th>
				<?php foreach ($spec as $k=>$v){?>
					<th><?php echo $v['taname'];?></th>
				<?php }?>
				<th>库存</th>
				<th>货号</th>
				<th>操作</th>
			</tr>
			<?php foreach ($listData as $k=>$v){?>
			<tr>
				<td><?php echo $v['glid'];?></td>
				<?php foreach ($v['spec'] as $kk=>$vv){?>
					<td><?php echo $vv;?></td>
				<?php }?>
				<td>库存</td>
				<td>货号</td>
				<td>
					<a href="">修改</a>
					<a href="">删除</a>
				</td>
			</tr>
			<?php }?>
			<tr>
				<td>添加</td>
				<?php foreach ($spec as $k=>$v){?>
				<td>
					<select name="">
						<option value="">请选择</option>
						<?php foreach ($v['option'] as $kk=>$vv){?>
						<option value=""><?php echo $vv['gtvalue'];?></option>
						<?php }?>
					</select>
				</td>
				<?php }?>
				<td>
					<input type="text" name="" id="" />
				</td>
				<td>
					<input type="text" name="" id="" />
				</td>
				<td>
					
				</td>
			</tr>
		</table>
		<input type="submit" value='保存添加' class="hd-btn" style="height: 50px;"/>
	</form>

	</div>
	</div>
	</div>
</body>
</html>