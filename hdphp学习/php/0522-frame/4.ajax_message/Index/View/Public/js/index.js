$(function(){
	//表单提交触发异步
	$('form').submit(function(){
		//jq方法抓取表单所有内容，序列化
		var formData = $(this).serialize();
		$.ajax({
			//post方式请求
			type:"post",
			//请求地址
			url: APP + "?a=ajax_add_msg",
			//发送到服务器的数据
			data:formData,
			//因为php返回json ,所以在ajax这边必须指定返回类型
			dataType:'json',
			//服务器返回
			success:function(phpData){
				var html = '<dl><dt><img src="' + PUBLIC + '/images/' +phpData.face+'"/></dt><dd class="head">';
					html += '<span>'+phpData.username+'</span> <i>'+phpData.sex+'</i><b>发表于：</b> <i>'+phpData.time+'</i></dd>';
					html += '<dd class="con">' + phpData.content;
					html += '<div style="float: right;"><a href="" class="btn btn-info">修改</a> <a href="" class="btn btn-danger" >删除</a>';
					html += '</div></dd></dl>';
				$('.content').append(html);		
				
			}
		});
		//表单不提交，就是不刷新
		return false;
	})
	
	
	
	
	
	
	
	
})
