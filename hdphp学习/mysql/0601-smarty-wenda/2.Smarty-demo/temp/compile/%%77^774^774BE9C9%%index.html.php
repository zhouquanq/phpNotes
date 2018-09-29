<?php /* Smarty version 2.6.26, created on 2015-06-01 16:27:07
         compiled from index.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'index.html', 25, false),array('modifier', 'default', 'index.html', 30, false),array('modifier', 'upper', 'index.html', 37, false),array('modifier', 'lower', 'index.html', 37, false),array('modifier', 'truncate', 'index.html', 40, false),)), $this); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<!--载入公共头部-->
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "./header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<!--我是注释-->
				<hr />
		<?php echo $this->_tpl_vars['houdun']; ?>

		<hr />
		<?php echo $this->_tpl_vars['data']['title']; ?>
 - <?php echo $this->_tpl_vars['data']['time']; ?>
 - <?php echo $this->_tpl_vars['data']['info']['url']; ?>

		<hr />
		<!--获得get参数写法-->
		<?php echo $_GET['id']; ?>

		<hr />
		<!--调用常量-->
		<?php echo @ROOT_PATH; ?>

		<hr />
		<!--获得当前时间戳-->
		<?php echo time(); ?>

		<hr />
		<!--格式化当前时间戳-->
		<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%y-%m-%d %H:%M:%S') : smarty_modifier_date_format($_tmp, '%y-%m-%d %H:%M:%S')); ?>

		<hr />
		<!--设置默认值-->
		<script type="text/javascript">
		//如果session里面的uid不存在则默认值为0
			var uid = <?php echo ((is_array($_tmp=@$_SESSION['uid'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
;
			if(!uid){
				alert('请登录');
			}
		</script>
		<hr />
		<!--变量调节器可以多个一起使用-->
		<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['letter'])) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)))) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)))) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)); ?>

		<hr />
		<!--截取字符串(截取汉字bug,非常不方便)-->
		<?php echo ((is_array($_tmp=$this->_tpl_vars['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 7, '-') : smarty_modifier_truncate($_tmp, 7, '-')); ?>

		<hr />
		<!--包裹的部分，不做smarty解析-->
		<?php echo '
			{hd $title|truncate:7:\'-\'}
		'; ?>

		<hr />
		<!--if使用-->
		<?php if ($this->_tpl_vars['data']['title'] == '今天消防演习了'): ?>
			是的
		<?php else: ?>
			不是
		<?php endif; ?>
		<hr />
		<!--foreach循环-->
		<table border="1" cellspacing="" cellpadding="">
			<tr>
				<th>aid</th>
				<th>标题</th>
			</tr>
			<?php $_from = $this->_tpl_vars['arcData']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
			<tr>
				<td><?php echo $this->_tpl_vars['v']['aid']; ?>
</td>
				<td><?php echo $this->_tpl_vars['v']['title']; ?>
</td>
			</tr>
			<?php endforeach; endif; unset($_from); ?>
		</table>
		<hr />
		<!--section循环-->
		<table border="1" cellspacing="" cellpadding="">
			<tr>
				<th>aid</th>
				<th>标题</th>
			</tr>
			<?php unset($this->_sections['x']);
$this->_sections['x']['loop'] = is_array($_loop=$this->_tpl_vars['arcData']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['x']['name'] = 'x';
$this->_sections['x']['show'] = true;
$this->_sections['x']['max'] = $this->_sections['x']['loop'];
$this->_sections['x']['step'] = 1;
$this->_sections['x']['start'] = $this->_sections['x']['step'] > 0 ? 0 : $this->_sections['x']['loop']-1;
if ($this->_sections['x']['show']) {
    $this->_sections['x']['total'] = $this->_sections['x']['loop'];
    if ($this->_sections['x']['total'] == 0)
        $this->_sections['x']['show'] = false;
} else
    $this->_sections['x']['total'] = 0;
if ($this->_sections['x']['show']):

            for ($this->_sections['x']['index'] = $this->_sections['x']['start'], $this->_sections['x']['iteration'] = 1;
                 $this->_sections['x']['iteration'] <= $this->_sections['x']['total'];
                 $this->_sections['x']['index'] += $this->_sections['x']['step'], $this->_sections['x']['iteration']++):
$this->_sections['x']['rownum'] = $this->_sections['x']['iteration'];
$this->_sections['x']['index_prev'] = $this->_sections['x']['index'] - $this->_sections['x']['step'];
$this->_sections['x']['index_next'] = $this->_sections['x']['index'] + $this->_sections['x']['step'];
$this->_sections['x']['first']      = ($this->_sections['x']['iteration'] == 1);
$this->_sections['x']['last']       = ($this->_sections['x']['iteration'] == $this->_sections['x']['total']);
?>
			<tr>
				<td><?php echo $this->_tpl_vars['arcData'][$this->_sections['x']['index']]['aid']; ?>
</td>
				<td><?php echo $this->_tpl_vars['arcData'][$this->_sections['x']['index']]['title']; ?>
</td>
			</tr>
			<?php endfor; endif; ?>
		</table>
		<hr />
		<table border="1" cellspacing="" cellpadding="">
			<tr>
				<th>aid</th>
				<th>标题</th>
			</tr>
			<!--
			loop 要循环的数组
			name 下标
			start 从哪里开始，默认从0开始
			max 取多少条
			step 跳多少条
			-->
			<?php unset($this->_sections['x']);
$this->_sections['x']['loop'] = is_array($_loop=$this->_tpl_vars['arcData']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['x']['name'] = 'x';
$this->_sections['x']['start'] = (int)1;
$this->_sections['x']['max'] = (int)10;
$this->_sections['x']['step'] = ((int)2) == 0 ? 1 : (int)2;
$this->_sections['x']['show'] = true;
if ($this->_sections['x']['max'] < 0)
    $this->_sections['x']['max'] = $this->_sections['x']['loop'];
if ($this->_sections['x']['start'] < 0)
    $this->_sections['x']['start'] = max($this->_sections['x']['step'] > 0 ? 0 : -1, $this->_sections['x']['loop'] + $this->_sections['x']['start']);
else
    $this->_sections['x']['start'] = min($this->_sections['x']['start'], $this->_sections['x']['step'] > 0 ? $this->_sections['x']['loop'] : $this->_sections['x']['loop']-1);
if ($this->_sections['x']['show']) {
    $this->_sections['x']['total'] = min(ceil(($this->_sections['x']['step'] > 0 ? $this->_sections['x']['loop'] - $this->_sections['x']['start'] : $this->_sections['x']['start']+1)/abs($this->_sections['x']['step'])), $this->_sections['x']['max']);
    if ($this->_sections['x']['total'] == 0)
        $this->_sections['x']['show'] = false;
} else
    $this->_sections['x']['total'] = 0;
if ($this->_sections['x']['show']):

            for ($this->_sections['x']['index'] = $this->_sections['x']['start'], $this->_sections['x']['iteration'] = 1;
                 $this->_sections['x']['iteration'] <= $this->_sections['x']['total'];
                 $this->_sections['x']['index'] += $this->_sections['x']['step'], $this->_sections['x']['iteration']++):
$this->_sections['x']['rownum'] = $this->_sections['x']['iteration'];
$this->_sections['x']['index_prev'] = $this->_sections['x']['index'] - $this->_sections['x']['step'];
$this->_sections['x']['index_next'] = $this->_sections['x']['index'] + $this->_sections['x']['step'];
$this->_sections['x']['first']      = ($this->_sections['x']['iteration'] == 1);
$this->_sections['x']['last']       = ($this->_sections['x']['iteration'] == $this->_sections['x']['total']);
?>
			<tr>
				<td><?php echo $this->_tpl_vars['arcData'][$this->_sections['x']['index']]['aid']; ?>
</td>
				<td><?php echo $this->_tpl_vars['arcData'][$this->_sections['x']['index']]['title']; ?>
</td>
			</tr>
			<?php endfor; endif; ?>
		</table>
		<hr />
		<table border="1" cellspacing="" cellpadding="">
			<tr>
				<th>aid</th>
				<th>标题</th>
			</tr>
			<!--
			把第一条记录描红
			-->
			<?php unset($this->_sections['x']);
$this->_sections['x']['loop'] = is_array($_loop=$this->_tpl_vars['arcData']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['x']['name'] = 'x';
$this->_sections['x']['show'] = true;
$this->_sections['x']['max'] = $this->_sections['x']['loop'];
$this->_sections['x']['step'] = 1;
$this->_sections['x']['start'] = $this->_sections['x']['step'] > 0 ? 0 : $this->_sections['x']['loop']-1;
if ($this->_sections['x']['show']) {
    $this->_sections['x']['total'] = $this->_sections['x']['loop'];
    if ($this->_sections['x']['total'] == 0)
        $this->_sections['x']['show'] = false;
} else
    $this->_sections['x']['total'] = 0;
if ($this->_sections['x']['show']):

            for ($this->_sections['x']['index'] = $this->_sections['x']['start'], $this->_sections['x']['iteration'] = 1;
                 $this->_sections['x']['iteration'] <= $this->_sections['x']['total'];
                 $this->_sections['x']['index'] += $this->_sections['x']['step'], $this->_sections['x']['iteration']++):
$this->_sections['x']['rownum'] = $this->_sections['x']['iteration'];
$this->_sections['x']['index_prev'] = $this->_sections['x']['index'] - $this->_sections['x']['step'];
$this->_sections['x']['index_next'] = $this->_sections['x']['index'] + $this->_sections['x']['step'];
$this->_sections['x']['first']      = ($this->_sections['x']['iteration'] == 1);
$this->_sections['x']['last']       = ($this->_sections['x']['iteration'] == $this->_sections['x']['total']);
?>
				<!--如果是第一条记录-->
				<?php if ($this->_sections['x']['first']): ?>
					<tr style="color: red;">
						<td><?php echo $this->_tpl_vars['arcData'][$this->_sections['x']['index']]['aid']; ?>
</td>
						<td><?php echo $this->_tpl_vars['arcData'][$this->_sections['x']['index']]['title']; ?>
</td>
					</tr>
				<?php else: ?>
					<tr>
						<td><?php echo $this->_tpl_vars['arcData'][$this->_sections['x']['index']]['aid']; ?>
</td>
						<td><?php echo $this->_tpl_vars['arcData'][$this->_sections['x']['index']]['title']; ?>
</td>
					</tr>
				<?php endif; ?>
			<?php endfor; endif; ?>
		</table>
		<hr />
		<table border="1" cellspacing="" cellpadding="">
			<tr>
				<th>aid</th>
				<th>标题</th>
			</tr>
			<!--
			把前3条记录描红
			-->
			<?php unset($this->_sections['x']);
$this->_sections['x']['loop'] = is_array($_loop=$this->_tpl_vars['arcData']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['x']['name'] = 'x';
$this->_sections['x']['show'] = true;
$this->_sections['x']['max'] = $this->_sections['x']['loop'];
$this->_sections['x']['step'] = 1;
$this->_sections['x']['start'] = $this->_sections['x']['step'] > 0 ? 0 : $this->_sections['x']['loop']-1;
if ($this->_sections['x']['show']) {
    $this->_sections['x']['total'] = $this->_sections['x']['loop'];
    if ($this->_sections['x']['total'] == 0)
        $this->_sections['x']['show'] = false;
} else
    $this->_sections['x']['total'] = 0;
if ($this->_sections['x']['show']):

            for ($this->_sections['x']['index'] = $this->_sections['x']['start'], $this->_sections['x']['iteration'] = 1;
                 $this->_sections['x']['iteration'] <= $this->_sections['x']['total'];
                 $this->_sections['x']['index'] += $this->_sections['x']['step'], $this->_sections['x']['iteration']++):
$this->_sections['x']['rownum'] = $this->_sections['x']['iteration'];
$this->_sections['x']['index_prev'] = $this->_sections['x']['index'] - $this->_sections['x']['step'];
$this->_sections['x']['index_next'] = $this->_sections['x']['index'] + $this->_sections['x']['step'];
$this->_sections['x']['first']      = ($this->_sections['x']['iteration'] == 1);
$this->_sections['x']['last']       = ($this->_sections['x']['iteration'] == $this->_sections['x']['total']);
?>
				<?php if ($this->_sections['x']['index'] < 3): ?>
					<tr style="color: red;">
						<td><?php echo $this->_tpl_vars['arcData'][$this->_sections['x']['index']]['aid']; ?>
</td>
						<td><?php echo $this->_tpl_vars['arcData'][$this->_sections['x']['index']]['title']; ?>
</td>
					</tr>
				<?php else: ?>
					<tr>
						<td><?php echo $this->_tpl_vars['arcData'][$this->_sections['x']['index']]['aid']; ?>
</td>
						<td><?php echo $this->_tpl_vars['arcData'][$this->_sections['x']['index']]['title']; ?>
</td>
					</tr>
				<?php endif; ?>
			<?php endfor; endif; ?>
		</table>
		
		
		
		
		
		
	</body>
</html>