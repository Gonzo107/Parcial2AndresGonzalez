<?php /* Smarty version Smarty-3.0.9, created on 2015-11-13 17:10:26
         compiled from "C:/wamp/www/Parcial2AndresGonzalez/templates\listar_parques.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2782556460b72168127-66892041%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0aa61f7ec46d55038860f5d8302ca0d9ab087507' => 
    array (
      0 => 'C:/wamp/www/Parcial2AndresGonzalez/templates\\listar_parques.tpl',
      1 => 1447431021,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2782556460b72168127-66892041',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<table border="1" cellpadding="5" style="border-collapse:collapse">

<tr>
        <th>Codigo</td>
        <th>Nombre</td>
        <th>Municipio</td>
       
        
        
    </tr>
<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('parque')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
        <td><?php echo $_smarty_tpl->getVariable('parque')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->get("codigo");?>
</td>
        <td><a href="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
c_calificar_parque.php?parque=<?php echo $_smarty_tpl->getVariable('parque')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->get("codigo");?>
&nparque=<?php echo $_smarty_tpl->getVariable('parque')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->get("nombre");?>
"><?php echo $_smarty_tpl->getVariable('parque')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->get("nombre");?>
</a></td>
        <td><?php echo $_smarty_tpl->getVariable('parque')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->get("municipio");?>
</td>
        
        
    </tr>
    <?php endfor; endif; ?>
  

</table>