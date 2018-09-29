<?php /* Smarty version 2.6.26, created on 2015-06-04 13:36:32
         compiled from D:/wamp/www/c49/mysql/0604/1.wenda/Index/View/Index/index.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'js', 'D:/wamp/www/c49/mysql/0604/1.wenda/Index/View/Index/index.html', 10, false),array('modifier', 'truncate_d', 'D:/wamp/www/c49/mysql/0604/1.wenda/Index/View/Index/index.html', 67, false),array('block', 'high', 'D:/wamp/www/c49/mysql/0604/1.wenda/Index/View/Index/index.html', 78, false),)), $this); ?>
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
/Css/index.css" />
	<?php echo smarty_function_js(array('file' => "Js/index.js"), $this);?>

	<div class='main'>
		<div id='left'>
			<p class='left-title'>所有问题分类</p>
			<ul class='left-list'>
				<?php unset($this->_sections['t']);
$this->_sections['t']['loop'] = is_array($_loop=$this->_tpl_vars['cateData']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['t']['name'] = 't';
$this->_sections['t']['show'] = true;
$this->_sections['t']['max'] = $this->_sections['t']['loop'];
$this->_sections['t']['step'] = 1;
$this->_sections['t']['start'] = $this->_sections['t']['step'] > 0 ? 0 : $this->_sections['t']['loop']-1;
if ($this->_sections['t']['show']) {
    $this->_sections['t']['total'] = $this->_sections['t']['loop'];
    if ($this->_sections['t']['total'] == 0)
        $this->_sections['t']['show'] = false;
} else
    $this->_sections['t']['total'] = 0;
if ($this->_sections['t']['show']):

            for ($this->_sections['t']['index'] = $this->_sections['t']['start'], $this->_sections['t']['iteration'] = 1;
                 $this->_sections['t']['iteration'] <= $this->_sections['t']['total'];
                 $this->_sections['t']['index'] += $this->_sections['t']['step'], $this->_sections['t']['iteration']++):
$this->_sections['t']['rownum'] = $this->_sections['t']['iteration'];
$this->_sections['t']['index_prev'] = $this->_sections['t']['index'] - $this->_sections['t']['step'];
$this->_sections['t']['index_next'] = $this->_sections['t']['index'] + $this->_sections['t']['step'];
$this->_sections['t']['first']      = ($this->_sections['t']['iteration'] == 1);
$this->_sections['t']['last']       = ($this->_sections['t']['iteration'] == $this->_sections['t']['total']);
?>
				<li class='list-l1'>
					<div class='list-l1-wrap'>
						<h4><a href="<?php echo @__APP__; ?>
?c=List&cid=<?php echo $this->_tpl_vars['cateData'][$this->_sections['t']['index']]['cid']; ?>
"><?php echo $this->_tpl_vars['cateData'][$this->_sections['t']['index']]['title']; ?>
</a></h4>
						<ul class='list-l2'>
							<?php unset($this->_sections['s']);
$this->_sections['s']['loop'] = is_array($_loop=$this->_tpl_vars['cateData'][$this->_sections['t']['index']]['son']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['s']['name'] = 's';
$this->_sections['s']['max'] = (int)3;
$this->_sections['s']['show'] = true;
if ($this->_sections['s']['max'] < 0)
    $this->_sections['s']['max'] = $this->_sections['s']['loop'];
$this->_sections['s']['step'] = 1;
$this->_sections['s']['start'] = $this->_sections['s']['step'] > 0 ? 0 : $this->_sections['s']['loop']-1;
if ($this->_sections['s']['show']) {
    $this->_sections['s']['total'] = min(ceil(($this->_sections['s']['step'] > 0 ? $this->_sections['s']['loop'] - $this->_sections['s']['start'] : $this->_sections['s']['start']+1)/abs($this->_sections['s']['step'])), $this->_sections['s']['max']);
    if ($this->_sections['s']['total'] == 0)
        $this->_sections['s']['show'] = false;
} else
    $this->_sections['s']['total'] = 0;
if ($this->_sections['s']['show']):

            for ($this->_sections['s']['index'] = $this->_sections['s']['start'], $this->_sections['s']['iteration'] = 1;
                 $this->_sections['s']['iteration'] <= $this->_sections['s']['total'];
                 $this->_sections['s']['index'] += $this->_sections['s']['step'], $this->_sections['s']['iteration']++):
$this->_sections['s']['rownum'] = $this->_sections['s']['iteration'];
$this->_sections['s']['index_prev'] = $this->_sections['s']['index'] - $this->_sections['s']['step'];
$this->_sections['s']['index_next'] = $this->_sections['s']['index'] + $this->_sections['s']['step'];
$this->_sections['s']['first']      = ($this->_sections['s']['iteration'] == 1);
$this->_sections['s']['last']       = ($this->_sections['s']['iteration'] == $this->_sections['s']['total']);
?>
								<li><a href="<?php echo @__APP__; ?>
?c=List&cid=<?php echo $this->_tpl_vars['cateData'][$this->_sections['t']['index']]['son'][$this->_sections['s']['index']]['cid']; ?>
"><?php echo $this->_tpl_vars['cateData'][$this->_sections['t']['index']]['son'][$this->_sections['s']['index']]['title']; ?>
</a></li>
							<?php endfor; endif; ?>
						</ul>
					</div>
					<!--右侧隐藏区域子集-->
					<div class='list-more hidden'>
						<ul>
							<?php unset($this->_sections['s']);
$this->_sections['s']['loop'] = is_array($_loop=$this->_tpl_vars['cateData'][$this->_sections['t']['index']]['son']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['s']['name'] = 's';
$this->_sections['s']['start'] = (int)3;
$this->_sections['s']['show'] = true;
$this->_sections['s']['max'] = $this->_sections['s']['loop'];
$this->_sections['s']['step'] = 1;
if ($this->_sections['s']['start'] < 0)
    $this->_sections['s']['start'] = max($this->_sections['s']['step'] > 0 ? 0 : -1, $this->_sections['s']['loop'] + $this->_sections['s']['start']);
else
    $this->_sections['s']['start'] = min($this->_sections['s']['start'], $this->_sections['s']['step'] > 0 ? $this->_sections['s']['loop'] : $this->_sections['s']['loop']-1);
if ($this->_sections['s']['show']) {
    $this->_sections['s']['total'] = min(ceil(($this->_sections['s']['step'] > 0 ? $this->_sections['s']['loop'] - $this->_sections['s']['start'] : $this->_sections['s']['start']+1)/abs($this->_sections['s']['step'])), $this->_sections['s']['max']);
    if ($this->_sections['s']['total'] == 0)
        $this->_sections['s']['show'] = false;
} else
    $this->_sections['s']['total'] = 0;
if ($this->_sections['s']['show']):

            for ($this->_sections['s']['index'] = $this->_sections['s']['start'], $this->_sections['s']['iteration'] = 1;
                 $this->_sections['s']['iteration'] <= $this->_sections['s']['total'];
                 $this->_sections['s']['index'] += $this->_sections['s']['step'], $this->_sections['s']['iteration']++):
$this->_sections['s']['rownum'] = $this->_sections['s']['iteration'];
$this->_sections['s']['index_prev'] = $this->_sections['s']['index'] - $this->_sections['s']['step'];
$this->_sections['s']['index_next'] = $this->_sections['s']['index'] + $this->_sections['s']['step'];
$this->_sections['s']['first']      = ($this->_sections['s']['iteration'] == 1);
$this->_sections['s']['last']       = ($this->_sections['s']['iteration'] == $this->_sections['s']['total']);
?>
								<li><a href=""><?php echo $this->_tpl_vars['cateData'][$this->_sections['t']['index']]['son'][$this->_sections['s']['index']]['title']; ?>
</a></li>
							<?php endfor; endif; ?>
						</ul>
					</div>
				</li>
				<?php endfor; endif; ?>
			</ul>
		</div>

		<div id='center'>
			<div id='animate'>
				<div class='imgs-wrap'>
					<ul>
						<li>
							<a href=""><img src="<?php echo @__PUBLIC__; ?>
/Images/animate1.jpg" width='558' height='190'/></a>
						</li>
						<li>
							<a href=""><img src="<?php echo @__PUBLIC__; ?>
/Images/animate2.jpg" width='558' height='190'/></a>
						</li>
						<li>
							<a href=""><img src="<?php echo @__PUBLIC__; ?>
/Images/animate3.jpg" width='558' height='190'/></a>
						</li>
					</ul>
				</div>
				<ul class='ani-btn'>
					<li class='ani-btn-cur'>0学费学习<i></i></li>
					<li>超百G原创视频<i></i></li>
					<li style='border:none'>有实力做后盾<i></i></li>
				</ul>
			</div>

			<dl class='answer-list'>
				<dt>
					<span class='wait-as'>待解决问题</span>
					<a href=''>更多>></a>
				</dt>
				<?php $_from = $this->_tpl_vars['noSolve']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
				<dd>
					<a href="<?php echo @__APP__; ?>
?c=Ask&a=show&asid=<?php echo $this->_tpl_vars['v']['asid']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['v']['content'])) ? $this->_run_mod_handler('truncate_d', true, $_tmp) : smarty_modifier_truncate_d($_tmp)); ?>
</a>
					<span><?php echo $this->_tpl_vars['v']['answer']; ?>
回答</span>
				</dd>
				<?php endforeach; endif; unset($_from); ?>
			</dl>

			<dl class='answer-list'>
				<dt>
					<span class='reward-as'>高分悬赏问题</span>
					<a href=''>更多>></a>
				</dt>
				<?php $this->_tag_stack[] = array('high', array('rows' => 3)); $_block_repeat=true;smarty_block_high($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
					<dd>
						<a href=""><b>[$field.reward]</b>[$field.content]</a>
						<span>[$field.answer]回答</span>
					</dd>
				<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_high($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
			</dl>

		</div>
		<!-- 右侧 -->
		<div id='right'>
		<!--<div class='userinfo'>
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
					<td class='last'><a href="">20</a></td>
				</tr>
			</table>
			<ul>
				<li><a href="">我提问的</a></li>
				<li><a href="">我回答的</a></li>
			</ul>
		</div>-->
		
		 <div class='r-login'>
			<span class='login'><i></i>&nbsp;登录</span>
			<span class='register'><i></i>&nbsp;注册</span>
		</div> 
		
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
<!--------------------内容主体结束-------------------->
	<div class='clear'></div>
	
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