<?php /* Smarty version Smarty-3.0.9, created on 2015-11-13 17:43:54
         compiled from "C:/wamp/www/Parcial2AndresGonzalez/templates\granjeros.tpl" */ ?>
<?php /*%%SmartyHeaderCode:248575646134aebd057-73274489%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc8bd3b20032ca99cd6da5fc587b5ec0425ec2f1' => 
    array (
      0 => 'C:/wamp/www/Parcial2AndresGonzalez/templates\\granjeros.tpl',
      1 => 1444254838,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '248575646134aebd057-73274489',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="square">
	<table border="0" width="100%" cellpadding="0" cellspacing="10">
<tr>
	
	<td><b>Granjeros</b></td>
</tr>
<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('granjero')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
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
	<td>
	<b>Id:</b><?php echo $_smarty_tpl->getVariable('granjero')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->get("id");?>
<br>
	<b>Nombre:</b><a href="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
granjeroyfinca.php?granjero=<?php echo $_smarty_tpl->getVariable('granjero')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->get("id");?>
"><?php echo $_smarty_tpl->getVariable('granjero')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->get("nombre");?>
</a><br>
	<b>Edad:</b><?php echo $_smarty_tpl->getVariable('granjero')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->get("edad");?>
<br>
	<b>Sexo:</b><?php echo $_smarty_tpl->getVariable('granjero')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->get("sexo");?>
<br>
	</td>
</tr>
<?php endfor; endif; ?>
	</table>
</div>
