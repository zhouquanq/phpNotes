<?php /* Smarty version 2.6.26, created on 2015-06-03 15:39:43
         compiled from D:/wamp/www/c49/mysql/0603/1.wenda/Index/View/List/index.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'D:/wamp/www/c49/mysql/0603/1.wenda/Index/View/List/index.html', 66, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>后盾问答</title>
	<meta name="keywords" content="后盾问答"/>
	<meta name="description" content="后盾问答"/>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../Common/header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<link rel="stylesheet" href="<?php echo @__PUBLIC__; ?>
/Css/list.css" />
	

	<div id='location'>
		<a href="<?php echo @__APP__; ?>
?c=List&cid=0">全部分类</a>
			<?php unset($this->_sections['f']);
$this->_sections['f']['loop'] = is_array($_loop=$this->_tpl_vars['fatherCate']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['f']['name'] = 'f';
$this->_sections['f']['show'] = true;
$this->_sections['f']['max'] = $this->_sections['f']['loop'];
$this->_sections['f']['step'] = 1;
$this->_sections['f']['start'] = $this->_sections['f']['step'] > 0 ? 0 : $this->_sections['f']['loop']-1;
if ($this->_sections['f']['show']) {
    $this->_sections['f']['total'] = $this->_sections['f']['loop'];
    if ($this->_sections['f']['total'] == 0)
        $this->_sections['f']['show'] = false;
} else
    $this->_sections['f']['total'] = 0;
if ($this->_sections['f']['show']):

            for ($this->_sections['f']['index'] = $this->_sections['f']['start'], $this->_sections['f']['iteration'] = 1;
                 $this->_sections['f']['iteration'] <= $this->_sections['f']['total'];
                 $this->_sections['f']['index'] += $this->_sections['f']['step'], $this->_sections['f']['iteration']++):
$this->_sections['f']['rownum'] = $this->_sections['f']['iteration'];
$this->_sections['f']['index_prev'] = $this->_sections['f']['index'] - $this->_sections['f']['step'];
$this->_sections['f']['index_next'] = $this->_sections['f']['index'] + $this->_sections['f']['step'];
$this->_sections['f']['first']      = ($this->_sections['f']['iteration'] == 1);
$this->_sections['f']['last']       = ($this->_sections['f']['iteration'] == $this->_sections['f']['total']);
?>
				<!--如果是最后一条-->
				<?php if ($this->_sections['f']['last']): ?>
					&gt;&nbsp;<?php echo $this->_tpl_vars['fatherCate'][$this->_sections['f']['index']]['title']; ?>
&nbsp;&nbsp;
				<?php else: ?>
					&gt;&nbsp;<a href="<?php echo @__APP__; ?>
?c=List&cid=<?php echo $this->_tpl_vars['fatherCate'][$this->_sections['f']['index']]['cid']; ?>
"><?php echo $this->_tpl_vars['fatherCate'][$this->_sections['f']['index']]['title']; ?>
</a>&nbsp;&nbsp;
				<?php endif; ?>
			<?php endfor; endif; ?>
	</div>

<!--------------------中部-------------------->
	<div id='center'>
		<div id='left'>
			<div id='cate-list'>
				<p class='title'>按分类查找</p>
				<ul>
					<?php $_from = $this->_tpl_vars['sonCate']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
						<li>
							<a href="<?php echo @__APP__; ?>
?c=List&cid=<?php echo $this->_tpl_vars['v']['cid']; ?>
"><?php echo $this->_tpl_vars['v']['title']; ?>
</a>
						</li>
					<?php endforeach; endif; unset($_from); ?>
				</ul>
			</div>
			<div id='answer-list'>
				<ul class='ans-sel'>
					<li <?php if ($_GET['w'] == 0): ?>class="on"<?php endif; ?>>
						<a href="<?php echo @__APP__; ?>
?c=List&cid=<?php echo $_GET['cid']; ?>
&w=0">待解决问题</a>
					</li>
					<li <?php if ($_GET['w'] == 1): ?>class="on"<?php endif; ?>>
						<a href="<?php echo @__APP__; ?>
?c=List&cid=<?php echo $_GET['cid']; ?>
&w=1">已解决</a>
					</li>
					<li <?php if ($_GET['w'] == 2): ?>class="on"<?php endif; ?>>
						<a href="<?php echo @__APP__; ?>
?c=List&cid=<?php echo $_GET['cid']; ?>
&w=2">高悬赏</a>
					</li>
					<li <?php if ($_GET['w'] == 3): ?>class="on"<?php endif; ?>>
						<a href="<?php echo @__APP__; ?>
?c=List&cid=<?php echo $_GET['cid']; ?>
&w=3">零回答</a>
					</li>
				</ul>
				<!-- 待解决问题 -->
				<table>
					<tr>
						<th class='t1'>标题</th>
						<th>回答数</th>
						<th>时间</th>
					</tr>
					<?php $_from = $this->_tpl_vars['askData']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
						<tr>
							<td class='t1 cons'>
								<a href="">
									<b><?php echo $this->_tpl_vars['v']['reward']; ?>
</b><?php echo $this->_tpl_vars['v']['content']; ?>
</a>&nbsp;&nbsp;[<?php echo $this->_tpl_vars['v']['title']; ?>
]
							</td>
							<td><?php echo $this->_tpl_vars['v']['answer']; ?>
</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['v']['time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%y-%m-%d %H:%I:%S') : smarty_modifier_date_format($_tmp, '%y-%m-%d %H:%I:%S')); ?>
</td>
						</tr>
					<?php endforeach; endif; unset($_from); ?>
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