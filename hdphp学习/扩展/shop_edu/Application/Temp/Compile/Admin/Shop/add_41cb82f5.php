<?php if(!defined('HDPHP_PATH'))exit;C('SHOW_NOTICE',FALSE);?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title></title>
	<link rel="stylesheet" type="text/css" href="http://127.0.0.1/project/shop_edu/Static/hdjs/hdjs.css"/>
	<!--载入uploadify相关文件-->
	<script type="text/javascript" src="http://127.0.0.1/project/shop_edu/Static/uploadify/jquery-1.8.2.min.js"></script>
	<script type="text/javascript" src="http://127.0.0.1/project/shop_edu/Static/uploadify/jquery.uploadify.min.js"></script>
	<link href="http://127.0.0.1/project/shop_edu/Static/uploadify/uploadify.css" type="text/css" rel="stylesheet"></link>
	<!--异步调取规格和属性-->
	<script type="text/javascript">
		$(function(){
			$('select[name=cid]').change(function(){
				//获得选中的option的类型tid
				var tid = $(':selected').attr('tid');
				$.ajax({
					type:"post",
					url:"<?php echo U('getAttrSpec');?>",
					data:{tid : tid},
					dataType:'json',
					success:function(phpData){
						//属性
						var attr = '';
						//规格
						var spec = '';
						$.each(phpData, function(k,v) {    
							//如果是属性(不可选)	
							if(v.class == 0){
							  	attr += '<tr><td>'+v.taname+'</td><td><select name="attr['+v.taid+']"><option value="0">请选择</option>';
							  	$.each(v.tavalue, function(kk,vv) {    
							  		attr += '<option value="'+vv+'">' + vv + '</option>';                                                          
							  	});
							  	attr += '</select></td></tr>';
							}else{
								spec += '<tr><td>'+v.taname+'</td><td><select><option>请选择</option>';
							  	$.each(v.tavalue, function(kk,vv) {    
							  		spec += '<option>' + vv + '</option>';                                                          
							  	});
							  	spec += '</select></td><td><a href="">增加一项</a></td></tr>';
							}
						});
						
						$('#attr').html(attr);
						$('#spec').html(spec);
						
					}
				});
			})
		})
	</script>
</head>
<body>
	<div class="container-fluid">
	<div class="row-fluid">
	<div class="span12">
	<form action="" method='post'>
			<h2 class="hd-title-header">添加商品</h2>
			<table class='hd-table hd-table-form'>
				<thead>
					<tr>
						<th colspan="2" class="btn btn-primary">基本信息</th>
					</tr>
				</thead>
				<tbody>
					<tr class="info">
						<td>所属分类</td>
						<td>
							<select name="cid">
								<option value="0">-请选择-</option>
								<?php foreach ($cateData as $k=>$v){?>
									<option value="<?php echo $v['cid'];?>" tid="<?php echo $v['tid'];?>"><?php echo $v['_name'];?></option>
								<?php }?>
							</select>
						</td>
					</tr>
					<tr class="info">
						<td>所属品牌</td>
						<td>
							<select name="bid">
								<option value="0">-请选择-</option>
								<?php foreach ($brandData as $k=>$v){?>
									<option value="<?php echo $v['bid'];?>"><?php echo $v['bname'];?></option>
								<?php }?>
							</select>
						</td>
					</tr>
					<tr class="info">
						<td>商品名称</td>
						<td>
							<input type="text" name='gname'/>
						</td>
					</tr>
					<tr class="info">
						<td>单位</td>
						<td>
							<input type="text" name='unit' value='件'/>
						</td>
					</tr>
					<tr class="info">
						<td>市价场</td>
						<td>
							<input type="text" name='marketprice'/>
						</td>
					</tr>
					<tr class="info">
						<td>商城价</td>
						<td>
							<input type="text" name='shopprice'/>
						</td>
					</tr>
					<tr class="info">
						<td>点击次数</td>
						<td>
							<input type="text" name='click'/>
						</td>
					</tr>
				</tbody>
			</table>

			<p class="hd-title-header">商品属性</p>
			<table class="hd-table hd-table-form" id='attr'>
				
			</table>
			<p class="hd-title-header">商品规格</p>
			<table class="hd-table hd-table-form" id='spec'>
				
			</table>
			
			<p class="hd-title-header">列表图</p>
			<table class='hd-table hd-table-form'>
				<tr class="info">
					<td>上传图片</td>
					<td>
						 <input id="file" type="file" multiple="true" name="thumb">
	            <span>类型: *.jpg,*.png 大小: 2000KB 数量: 10</span>
	            <script type="text/javascript">
	                $(function() {
	                    $('#file').uploadify({
	                        'formData'     : {//POST数据
	                            '<?php echo session_name();?>' : '<?php echo session_id();?>',
	                        },
	                        'fileTypeDesc' : '上传文件',//上传描述
	                        'fileTypeExts' : '*.jpg;*.png',
	                        'swf'      : 'http://127.0.0.1/project/shop_edu/Static/uploadify/uploadify.swf',
	                        'uploader' : '<?php echo U("upload");?>',
	                        'buttonText':'选择文件',
	                        'fileSizeLimit' : '2000KB',
	                        'uploadLimit' : 1000,//上传文件数
	                        'width':65,
	                        'height':25,
	                        'successTimeout':10,//等待服务器响应时间
	                        'removeTimeout' : 0.2,//成功显示时间
	                        'onUploadSuccess' : function(file, data, response) {
	                            data=$.parseJSON(data);
	                            var imageUrl = data.image?data.url:'http://127.0.0.1/project/shop_edu/Static/image/default.png';
	                            var li="<li path='"+data.path+"' url='"+data.url+"'><img src='"+imageUrl+"' class='hd-w80 hd-h70'/>X</li>";
	                            $("#pic-list").prepend(li);
	                        }
	                    });
	                });
	            </script>
					</td>
					<td id='pic-list'>
						
					</td>
				</tr>
			</table>
			<p class="hd-title-header">商品图册</p>
			<table class='hd-table hd-table-form'>
				<tr class="info">
					<td>上传图片</td>
					<td>
						<input id="pic" type="file" multiple="true">
	            <span>类型: *.jpg,*.png 大小: 2000KB 数量: 10</span>
	            <script type="text/javascript">
	                $(function() {
	                    $('#pic').uploadify({
	                        'formData'     : {//POST数据
	                            '<?php echo session_name();?>' : '<?php echo session_id();?>',
	                        },
	                        'fileTypeDesc' : '上传文件',//上传描述
	                        'fileTypeExts' : '*.jpg;*.png',
	                        'swf'      : 'http://127.0.0.1/project/shop_edu/Static/uploadify/uploadify.swf',
	                        'uploader' : '<?php echo U("upload");?>',
	                        'buttonText':'选择文件',
	                        'fileSizeLimit' : '2000KB',
	                        'uploadLimit' : 1000,//上传文件数
	                        'width':65,
	                        'height':25,
	                        'successTimeout':10,//等待服务器响应时间
	                        'removeTimeout' : 0.2,//成功显示时间
	                        'onUploadSuccess' : function(file, data, response) {
	                            data=$.parseJSON(data);
	                            var imageUrl = data.image?data.url:'http://127.0.0.1/project/shop_edu/Static/image/default.png';
	                            var li="<li path='"+data.path+"' url='"+data.url+"'><img src='"+imageUrl+"' class='hd-w80 hd-h70'/>X</li>";
	                            $("#photo-list").prepend(li);
	                        }
	                    });
	                });
	            </script>
					</td>
					<td id='photo-list'></td>
				</tr>
			</table>
			<p class="hd-title-header">商品详细</p>
			<table class='hd-table hd-table-form'>
				<tr class="hide info">
					<td>
						<textarea name="intro" id="intro"></textarea>
					</td>
				</tr>
			</table>
			<p class="hd-title-header">售后服务</p>
			<table class='table'>
				<tr class="hide info">
					<td>
						<textarea name="service" id="service"></textarea>
					</td>
				</tr>
			</table>
			<input type="submit" value="确认添加" class="hd-btn hd-btn-primary" />
	</form>

	</div>
	</div>
	</div>
</body>
</html>