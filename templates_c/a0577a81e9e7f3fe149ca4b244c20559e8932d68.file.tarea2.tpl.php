<?php /* Smarty version Smarty-3.0.9, created on 2015-10-07 01:39:42
         compiled from "C:/wamp/www/glight/templates\tarea2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:283156145bbe648075-65242509%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0577a81e9e7f3fe149ca4b244c20559e8932d68' => 
    array (
      0 => 'C:/wamp/www/glight/templates\\tarea2.tpl',
      1 => 1444174276,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '283156145bbe648075-65242509',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<h1>Lista de clerks</h1>
<table>
	<td><b>ID  </b></td>
	<td><b>name  </b></td>
	<td><b>salary  </b></td>
	<td><b>boss  </b></td>


<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('clerks')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
<tr>
	<td><?php echo $_smarty_tpl->getVariable('clerks')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->get("id");?>
</td>
	<td><?php echo $_smarty_tpl->getVariable('clerks')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->get("name");?>
</td>
	<td><?php echo $_smarty_tpl->getVariable('clerks')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->get("salary");?>
</td>
	<td><?php echo $_smarty_tpl->getVariable('clerks')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->get("boss");?>
</td>
</tr>

<?php endfor; endif; ?>
</table>
<br>
<H3>Mayor salario:</H3><?php echo $_smarty_tpl->getVariable('mayor')->value;?>
<br>
<H3>Promedio salario:</H3><?php echo $_smarty_tpl->getVariable('prom')->value;?>
<br>
