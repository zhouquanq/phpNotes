<?php /* Smarty version 2.6.26, created on 2015-06-04 13:42:40
         compiled from D:/wamp/www/c49/mysql/0604/1.wenda/Index/View/Ask/show.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>后盾问答</title>
	<meta name="keywords" content="后盾问答"/>
	<meta name="description" content="后盾问答"/>
	<link rel="stylesheet" href="<?php echo @__PUBLIC__; ?>
/Css/question.css" />
	<script type="text/javascript" src="<?php echo @__PUBLIC__; ?>
/Js/question.js"></script>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../Common/header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<div id='location'>
		<a href="">全部分类</a>
			&gt;&nbsp;电脑&nbsp;&nbsp;
			&gt;&nbsp;<a href="">硬件</a>&nbsp;&nbsp;
	</div>
	
<!--------------------中部-------------------->
	<div id='center-wrap'>
		<div id='center'>
			<div id='left'>
				<div id='answer-info'>
					<!-- 如果没有解决用wait -->
					<div class='ans-state wait'></div>
					<div class='answer'>
						<p class='ans-title'>什么牌子电脑好？
							<b class='point'>20</b>
						</p>
					</div>
					<ul>
						<li><a href="">houdunwang.com</a></li>
						<li><i class='level lv1' title='Level 1'></i></li>
						<li>1900.1.1</li>
				
					</ul>
					<div class='ianswer'>
						<form action="" method='POST'>
							<p>我来回答</p>
							<textarea name="content"></textarea>
							<input type="hidden" name='qid' value=''>
							<input type="submit" value='提交回答' id='anw-sub'/>
						</form>
					</div>
					<!-- 满意回答 -->
					<div class='ans-right'>
						<p class='title'><i></i>满意回答<span></span></p>
						<p class='ans-cons'>很不错！</p>
						<dl>
							<dt>
								<a href=""><img src="<?php echo @__PUBLIC__; ?>
/Images/noface.gif" width='48' height='48'/></a>
							</dt>
							<dd>
								<a href="">用户</a>
							</dd>
							<dd><i class='level lv1'></i></dd>
							<dd>20%</dd>
						</dl>
					</div>
					<!-- 满意回答 -->
				</div>

				<div id='all-answer'>
					<div class='ans-icon'></div>
					<p class='title'>共 <strong>20</strong> 条回答</p>
					<ul>
						<li>
							<div class='face'>
								<a href="">
									<img src="<?php echo @__PUBLIC__; ?>
/Images/noface.gif" width='48' height='48'/>
								</a>
							</div>
							<div class='cons blue'>
								<p>真不错啊！<span style='color:#888;font-size:12px'>&nbsp;&nbsp;(1900.1.1)</span></p>
							</div>
							
								<a href="" class='adopt-btn'>采纳</a>
							
						</li>

						<li>
							<div class='face'>
								<a href="">
									<img src="<?php echo @__PUBLIC__; ?>
/Images/noface.gif" width='48' height='48'/>
								</a>
							</div>
							<div class='cons blue'>
								<p>真不错啊！<span style='color:#888;font-size:12px'>&nbsp;&nbsp;(1900.1.1)</span></p>
							</div>
							
								<a href="" class='adopt-btn'>采纳</a>
							
						</li>
					</ul>
				</div>
				<div id='other-ask'>
					<p class='title'>待解决的相关问题</p>
					<table>
						<tr>
							<td class='t1'><a href="">什么牌子电脑好？</a></td>
							<td>20&nbsp;回答</td>
							<td>1900.1.1</td>
						</tr>
					</table>
				</div>
			</div>
		<!-- 右侧 -->
		<div id='right'>
		<div class='userinfo'>
			<dl>
				<dt>
					<a href=""><img src="" width='48' height='48' alt="占位符"/></a>
				</dt>
				<dd class='username'>
					<a href="">
						<b></b>
					</a>
					<a href="">
						<i class='level lv1' title='Level 1'></i>
					</a>
				</dd>
				<dd>金币：<a href="" style="color: #888888;">20<b class='point'></b></a></dd>
				<dd>经验值：200</dd>
			</dl>
			<table>
				<tr>
					<td>回答数</td>
					<td>采纳率</td>
					<td class='last'>提问数</td>
				</tr>
				<tr>
					<td><a href="">200</a></td>
					<td><a href="">20%</a></td>
					<td class='last'><a href="">回答数</a></td>
				</tr>
			</table>
			<ul>
				<li><a href="">我提问的</a></li>
				<li><a href="">我回答的</a></li>
			</ul>
		</div>
		<!-- <div class='r-login'>
			<span class='login'><i></i>&nbsp;登录</span>
			<span class='register'><i></i>&nbsp;注册</span>
		</div> -->
	<div class='clear'></div>
	<div class='star'>
		<p class='title'>后盾问答之星</p>
		<span class='star-name'>本日回答问题最多的人</span>
			<div class='star-info'>
				<div>
					<a href="" class='star-face'>
						<img src="" width='48px' height='48px' alt="头像站位"/>
					</a>
					<ul>
						<li><a href="">后盾网</a></li>
						<i class='level lv1' title='Level 1'></i>
					</ul>
				</div>
				<ul class='star-count'>
					<li>回答数：<span>100</span></li>
					<li>采纳率：<span>20%</span></li>
				</ul>
			</div>
		<span class='star-name'>历史回答问题最多的人</span>

		<div class='star-info'>
			<div>
				<a href="" class='star-face'>
					<img src="" width='48px' height='48px' alt="头像站位"/>
				</a>
				<ul>
					<li><a href="">后盾网</a></li>
					<i class='level lv1' title='Level 1'></i>
				</ul>
			</div>
			<ul class='star-count'>
				<li>回答数：<span>200</span></li>
				<li>采纳率：<span>100%</span></li>
			</ul>
		</div>
	</div>
	<div class='star-list'>
		<p class='title'>后盾问答助人光荣榜</p>
		<div>
			<ul class='ul-title'>
				<li>用户名</li>
				<li style='text-align:right;'>帮助过的人数</li>
			</ul>
			<ul class='ul-list'>
				<li>
					<a href=""><i class='rank r1'></i>houdunwang.com</a>
					<span>100</span>
				</li>
				<li>
					<a href=""><i class='rank r2'></i>houdunwang.com</a>
					<span>100</span>
				</li>
				<li>
					<a href=""><i class='rank r3'></i>houdunwang.com</a>
					<span>100</span>
				</li>				
			</ul>
		</div>
	</div>
</div>
<!-- ---右侧结束---- -->
			
		</div>

	</div>
	
<!--------------------中部结束-------------------->

<!-- 底部 -->
	<div id='bottom'>
		<p>Copyright © 2013 Qihoo.Com All Rights Reserved 后盾网</p>
		<p>京公安网备xxxxxxxxxxxx</p>
	</div>
<!--[if IE 6]>
    <script type="text/javascript" src="<?php echo @__PUBLIC__; ?>
/Js/iepng.js"></script>
    <script type="text/javascript">
    	DD_belatedPNG.fix('.logo','background');
        DD_belatedPNG.fix('.nav-sel a','background');
        DD_belatedPNG.fix('.ask-cate i','background');
    </script>
<![endif]-->
</body>
</html>
<!-- 底部结束 -->