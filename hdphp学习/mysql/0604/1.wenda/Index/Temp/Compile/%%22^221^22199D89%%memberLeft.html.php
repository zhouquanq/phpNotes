<?php /* Smarty version 2.6.26, created on 2015-06-04 13:57:06
         compiled from ../Common/memberLeft.html */ ?>
<div id='left'>
		<div class='userinfo'>
			<dl>
				<dt>
					<a href=""><img src="" width='48' height='48' alt="占位符"/></a>
				</dt>
				<dd class='username'>
					<a href=""><b>后盾网</b>
					</a>
					<a href="">
						<i class='level lv1' title='Level 1'></i>
					</a>
				</dd>
				<dd>金币：<a href="" style="color: #888888;"><b class='point'>20</b></a></dd>
				<dd>经验值：20</dd>
			</dl>
			<table>
				<tr>
					<td>回答数</td>
					<td>采纳率</td>
					<td class='last'>提问数</td>
				</tr>
				<tr>
					<td><a href="">20</a></td>
					<td><a href="">30%</a></td>
					<td class='last'><a href="">20</a></td>
				</tr>
			</table>
		</div>

	<ul>
		<li class='myhome <?php if (@ACTION == 'index'): ?>cur<?php endif; ?>'>
			<a href="<?php echo @__APP__; ?>
?c=Member&a=index">我的首页</a>
		</li>
		<li class='myask <?php if (@ACTION == 'myAsk'): ?>cur<?php endif; ?>'>
			<a href="<?php echo @__APP__; ?>
?c=Member&a=myAsk">我的提问</a>
		</li>
		<li class='myanswer'>
			<a href="">我的回答</a>
		</li>
		<li class='mylevel'>
			<a href="">我的等级</a>
		</li>
		<li class='mygold'>
			<a href="">我的金币</a>
		</li>
		<li class='myface'>
			<a href="">上传头像</a>
		</li>

		<li style="background:none"></li>
	</ul>
</div>
<!-- 左侧结束 -->