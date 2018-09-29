$(function(){
	// 顶部二级菜单
	$('#top_dark_box #top_dark #menu>li').hover(function(){
		$(this).find('.top_menu').addClass('cur');
		$(this).find('.second').show();
	},function(){
		$(this).find('.top_menu').removeClass('cur');
		$(this).find('.second').hide();
	})

		

	// 中间区域活跃读者效果
	$('#main .center .head_portrait li').hover(function(){
		$(this).find('.hide_box').show();
		$('#main .center .head_portrait li').stop();
		$(this).css('z-index','5').fadeTo(0,1).siblings('li').css('z-index','0').fadeTo(400,0.5);
	},function(){
		$(this).find('.hide_box').hide();
		$(this).siblings('li').fadeTo(0,1);
	})

	// 内容页留言列表隔行变色
	$('#page_main .left .msg_list li:odd').css('background','#FDFDFD');
	$('#page_main .left .msg_list li>.reply_box .reply_box:even').css('background','#fff');
	//标签颜色相关
	(function(){
		var tagColors = ['#000000','#fb5088','#72f6f4','#f5756e','#4a4451','#e764c0'];
		$('#tagBox a').each(function(i){
			var color = tagColors[i%tagColors.length];
			$(this)[0].style.background = color;
		})
	
	})()	
	
})

function showLoginBox(){
	$('.login_hide_box').show();
	$('.reg_hide_box').hide();
}

function showRegBox()
{
	$('.login_hide_box').hide();
	$('.reg_hide_box').show();
}
	
