<?php if(!defined('HDPHP_PATH'))exit;C('SHOW_NOTICE',FALSE);?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<link rel="stylesheet" type="text/css" href="http://127.0.0.1/project/shop_edu/Static/animate.css"/>
		<script src="http://127.0.0.1/project/shop_edu/Static/js/jquery-1.8.2.min.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript">
			$(function(){
				$('.spec a').click(function(){
					$(this).parents('li').find('a').removeClass('red');
					$(this).addClass('red');
					//点击中两个之后做处理
					if($('.red').length>=2){
						var id = '';
						$.each($('.red'), function() {    
							 id += $(this).attr('specId') + ',';                                                       
						});
						alert(id);
					}
				})
			})
		</script>
		<style type="text/css">
			li{
				list-style: none;
			}
			a{
				text-decoration: none;
			}
			.good{
				width: 320px;
				height: 300px;
				text-align: center;
				line-height: 300px;
				border: 1px solid red;
				float: left;
			}
			.spec{
				width: 450px;
				height: 200px;
				float: left;
				margin-top: 100px;
				
			}
			.spec ul{
				margin-top: 100px;
			}
			.spec li{
				margin-top: 10px;
			}
			.spec li a{
				border: 1px solid #999;
				padding: 0 5px;
			}
			.spec li a.red{
				border: 1px solid red;
			}
		</style>
	</head>
	<body>
		<div class="good animated rotateIn">
			商品
		</div>
		<div class="spec animated zoomInDown">
			<ul>
				<li>
					<span>尺码：</span>
					<a href="javascript:;" specId="107">X</a>
					<a href="javascript:;" specId="108">M</a>
					<a href="javascript:;" specId="109">L</a>
				</li>
				<li>
					<span>颜色：</span>
					<a href="javascript:;" specId="110">红色</a>
					<a href="javascript:;" specId="111">白色</a>
					<a href="javascript:;" specId="112">蓝色</a>
				</li>
			</ul>
		</div>
	</body>
</html>
