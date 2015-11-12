<?php /* Smarty version Smarty-3.0.9, created on 2015-10-09 18:38:53
         compiled from "C:/wamp/www/glight/templates\punto5.tpl" */ ?>
<?php /*%%SmartyHeaderCode:36235617ed9d21a6a9-55819750%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c4db5a08264b64b6b742b33b15ff5af56d8c2de' => 
    array (
      0 => 'C:/wamp/www/glight/templates\\punto5.tpl',
      1 => 1444408727,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '36235617ed9d21a6a9-55819750',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="square">
<?php if (isset($_smarty_tpl->getVariable('canal',null,true,false)->value)){?>
	<table border="0" width="100%" cellpadding="0" cellspacing="10">
<tr>
	
	<td><b>Videos del canal: <?php echo $_smarty_tpl->getVariable('canal')->value[0]->get("nombre");?>
</b></td>
</tr>
<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('canal')->value[0]->components["video"]["c_v"]) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
	<b>Titulo: </b><?php echo $_smarty_tpl->getVariable('canal')->value[0]->components["video"]["c_v"][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->get("titulo");?>
<br>
	<b>Descripcion: </b><?php echo $_smarty_tpl->getVariable('canal')->value[0]->components["video"]["c_v"][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->get("descripcion");?>
<br>
	<b>URL: </b><?php echo $_smarty_tpl->getVariable('canal')->value[0]->components["video"]["c_v"][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->get("url");?>
<br>
	<b>Fecha de subida: </b><?php echo $_smarty_tpl->getVariable('canal')->value[0]->components["video"]["c_v"][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->get("fecha_subida");?>
<br>
	</td>
</tr>
<?php endfor; endif; ?>
	</table>
<?php }?>
<h1 class="title">Buscar canal</h1>
<form action="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
punto5.php?option=buscar" method="post">
	<label for="id">Ingrese el nombre del canal: </label>
	<input id="canal" name="canal" type="text" placeholder="Nombre del canal"
	<?php if (isset($_smarty_tpl->getVariable('nombre_canal',null,true,false)->value)){?>value="<?php echo $_smarty_tpl->getVariable('nombre_canal')->value;?>
"<?php }?>/><br/>
	
	<input type="hidden" name="option" value="buscar"/>
	<input class="btn btn-primary" type="submit" value="Buscar"/>
</form>
</div>