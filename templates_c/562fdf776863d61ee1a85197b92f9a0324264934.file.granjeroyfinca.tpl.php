<?php /* Smarty version Smarty-3.0.9, created on 2015-10-08 00:30:59
         compiled from "C:/wamp/www/glight/templates\granjeroyfinca.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2418356159d23f1f6d4-33947109%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '562fdf776863d61ee1a85197b92f9a0324264934' => 
    array (
      0 => 'C:/wamp/www/glight/templates\\granjeroyfinca.tpl',
      1 => 1444257059,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2418356159d23f1f6d4-33947109',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="square">
	<table border="0" width="100%" cellpadding="0" cellspacing="10">
<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['j']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('granjero')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['name'] = 'j';
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total']);
?>
<tr>
	
	<td><b>Fincas del granjero:<?php echo $_smarty_tpl->getVariable('granjero')->value[$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]->get("nombre");?>
 - con id: <?php echo $_smarty_tpl->getVariable('granjero')->value[$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]->get("id");?>
</b></td>
</tr>

<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('granjero')->value[$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]->components["finca"]["g_f"]) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
	<b>Id:</b><?php echo $_smarty_tpl->getVariable('granjero')->value[$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]->components["finca"]["g_f"][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->get("id");?>
<br>
	<b>Nombre:</b><?php echo $_smarty_tpl->getVariable('granjero')->value[$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]->components["finca"]["g_f"][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->get("nombre");?>
<br>
	<b>Valor:</b><?php echo $_smarty_tpl->getVariable('granjero')->value[$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]->components["finca"]["g_f"][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->get("valor_propiedad");?>
<br>
	<b>Gallinas:</b><?php echo $_smarty_tpl->getVariable('granjero')->value[$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]->components["finca"]["g_f"][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->get("cantidad_gallinas");?>
<br>
	<b>Vacas:</b><?php echo $_smarty_tpl->getVariable('granjero')->value[$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]->components["finca"]["g_f"][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->get("cantidad_vacas");?>
<br>
	</td>
</tr>
<?php endfor; endif; ?>
<?php endfor; endif; ?>

<?php if (count($_smarty_tpl->getVariable('granjero')->value[0]->components["finca"]["g_f"])==0){?>
<tr>
<td><b>Este granjero no tiene fincas</b></td>
</tr>
<?php }?>
	</table>
	<a href="http://localhost/glight/granjeros.php">Volver a los granjeros</a>
</div>
