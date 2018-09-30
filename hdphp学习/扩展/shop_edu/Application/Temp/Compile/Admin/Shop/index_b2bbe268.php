<?php if(!defined('HDPHP_PATH'))exit;C('SHOW_NOTICE',FALSE);?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title></title>
	<link rel="stylesheet" href="http://127.0.0.1/project/shop_edu/Public/Bootstrap/Css/bootstrap.min.css" />
	<link rel="stylesheet" href="http://127.0.0.1/project/shop_edu/Application/Admin/View/Public/Css/common.css" />
	<style type="text/css">
		body{
			margin-bottom: 100px;
		}
	</style>
</head>
<body>
	<div class="container-fluid">
	<div class="row-fluid">
	<div class="span12">

	<table class="table table-bordered table-hover">
		<tr>
			<th>ID</th>
			<th>商品名称</th>
			<th>价格</th>
			<th>库存</th>
			<th>点击次数</th>
			<th>添加时间</th>
			<th>操作</th>
		</tr>

		<?php foreach ($goods as $k=>$v){?>
			<tr class="info">
				<td><?php echo $v['gid'];?></td>
				<td>
					<a href="" target='_blank'><?php echo $v['gname'];?></a>
				</td>
				<td>
					<ul>
						<li>市场价：<del>&yen;<?php echo $v['marketprice'];?></del></li>
						<li>商城价：<span>&yen;<?php echo $v['shopprice'];?></span></li>
					</ul>
				</td>
				<td>
					<?php echo $v['sum'];?>
				</td>
				<td><?php echo $v['click'];?></td>
				<td><?php echo $v['time'];?></td>
				<td>
					<a href="<?php echo U('GoodsList/index',array('gid'=>$v['gid'],'tid'=>$v['tid']));?>" class="btn btn-success"><i class="icon-th icon-white"></i>货品列表</a>
					<a href="" class="btn btn-warning"><i class="icon-pencil icon-white"></i>修改</a>
					<a href="" class="btn btn-danger"><i class="icon-trash icon-white"></i>删除</a>
				</td>
			</tr>
		<?php }?>
	</table>

	</div>
	</div>
	</div>
</body>
</html>