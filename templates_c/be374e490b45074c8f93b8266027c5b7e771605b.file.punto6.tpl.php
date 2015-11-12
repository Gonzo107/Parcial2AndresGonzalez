<?php /* Smarty version Smarty-3.0.9, created on 2015-10-09 18:28:18
         compiled from "C:/wamp/www/glight/templates\punto6.tpl" */ ?>
<?php /*%%SmartyHeaderCode:61205617eb22dc47d3-71994625%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be374e490b45074c8f93b8266027c5b7e771605b' => 
    array (
      0 => 'C:/wamp/www/glight/templates\\punto6.tpl',
      1 => 1444408087,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '61205617eb22dc47d3-71994625',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="square">
<?php if (isset($_smarty_tpl->getVariable('video',null,true,false)->value)){?>
	<table border="0" width="100%" cellpadding="0" cellspacing="10">
<tr>
	
	<td><b>Titulo: </b><?php echo $_smarty_tpl->getVariable('video')->value[0]->get("titulo");?>
<br>
	<b>Descripcion: </b><?php echo $_smarty_tpl->getVariable('video')->value[0]->get("descripcion");?>
<br>
	<b>Fecha de subida: <?php echo $_smarty_tpl->getVariable('video')->value[0]->get("fecha_subida");?>
</b><?php echo $_smarty_tpl->getVariable('video')->value[0]->get("descripcion");?>
<br>
</td>
</tr>

	</table>
<?php }?>
<h1 class="title">Buscar canal</h1>
<form action="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
punto6.php?option=buscar" method="post">
	<label for="id">Ingrese la url del video: </label>
	<input id="url" name="url" type="text" placeholder="Url del video"
	
	
	<input type="hidden" name="option" value="buscar"/>
	<input class="btn btn-primary" type="submit" value="Buscar"/>
</form>
</div>