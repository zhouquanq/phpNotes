<?php if(!defined('HDPHP_PATH'))exit;C('SHOW_NOTICE',FALSE);?>
<!DOCTYPE html>
	<html>
	<head>
	    <meta charset="UTF-8">
	    <title>Uploadify</title>
	<script type="text/javascript" src="http://127.0.0.1/project/uploadify_demo/Static/uploadify/jquery-1.8.2.min.js"></script>
	<script type="text/javascript" src="http://127.0.0.1/project/uploadify_demo/Static/uploadify/jquery.uploadify.min.js"></script>
	<link href="http://127.0.0.1/project/uploadify_demo/Static/uploadify/uploadify.css" type="text/css" rel="stylesheet"></link>
	<script type="text/javascript">
		//点击x删除图片
		$('.del-img').live('click',function(){
			var liObj = $(this).parents('li');
			//找到父级li里面的地址
			var path = liObj.attr('path');
			//发异步到服务器删除
			$.ajax({
				type:"post",
				url:"<?php echo U('delImg');?>",
				data:{path:path},
				success:function(data){
					//移除图片
					liObj.remove();
				}
			});
		})
	</script>
	</head>
	<body>
		<form action="" method="post">
			
	    <div lab="uploadFile">
	            <input id="file" type="file" multiple="true">
	            <span>类型: *.jpg,*.png 大小: 2000KB 数量: 10</span>
	            <script type="text/javascript">
	                $(function() {
	                    $('#file').uploadify({
	                        'formData'     : {//POST数据
	                            '<?php echo session_name();?>' : '<?php echo session_id();?>',
	                        },
	                        'fileTypeDesc' : '上传文件',//上传描述
	                        'fileTypeExts' : '*.jpg;*.png',
	                        'swf'      : 'http://127.0.0.1/project/uploadify_demo/Static/uploadify/uploadify.swf',
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
	                            var imageUrl = data.image?data.url:'http://127.0.0.1/project/uploadify_demo/Static/image/default.png';
	                            var li="<li path='"+data.path+"' url='"+data.url+"'><img src='"+imageUrl+"' style='width:100px;heigth:100px;'/><a href='javascript:;' style='color:red' class='del-img'>X</a>";
	                            //把地址放到隐藏域，这样可以提交到服务器了
	                            li += '<input type="hidden" name="thumb" value="'+data.path+'"/>';
	                            li += '</li>';
	                            $("#uploadList ul").prepend(li);
	                        }
	                    });
	                });
	            </script>
	            <div id="uploadList">
	                <ul>
	 
	                </ul>
	            </div>
	        </div>
	        	<input type="submit" value="添加"/>
		</form>
	</body>
	</html>