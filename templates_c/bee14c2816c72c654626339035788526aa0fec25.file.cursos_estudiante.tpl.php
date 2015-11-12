<?php /* Smarty version Smarty-3.0.9, created on 2015-10-09 15:04:34
         compiled from "C:/wamp/www/glight/templates\cursos_estudiante.tpl" */ ?>
<?php /*%%SmartyHeaderCode:82495617bb62425565-17545916%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bee14c2816c72c654626339035788526aa0fec25' => 
    array (
      0 => 'C:/wamp/www/glight/templates\\cursos_estudiante.tpl',
      1 => 1444395796,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '82495617bb62425565-17545916',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<table>    
	<b>Matriculas del estudiante: <?php echo $_smarty_tpl->getVariable('estudiante')->value->get('nombre');?>
 con id: <?php echo $_smarty_tpl->getVariable('estudiante')->value->get('id');?>
</b><br/><br/>    
  	<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('estudiante')->value->components['matricula']['e_m']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
		<b>Id Curso: </b> <?php echo $_smarty_tpl->getVariable('estudiante')->value->components['matricula']['e_m'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->components['curso']['c_m'][0]->get('id');?>
<br/>
		<b>Nombre Curso: </b> <?php echo $_smarty_tpl->getVariable('estudiante')->value->components['matricula']['e_m'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->components['curso']['c_m'][0]->get('nombre');?>
<br/>
		<b>Nota Final: </b> <?php echo $_smarty_tpl->getVariable('estudiante')->value->components['matricula']['e_m'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->get('nota_final');?>
<br/><br/>
    <?php endfor; endif; ?>
</table>