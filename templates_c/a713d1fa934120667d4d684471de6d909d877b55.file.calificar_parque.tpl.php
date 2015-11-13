<?php /* Smarty version Smarty-3.0.9, created on 2015-11-13 17:36:29
         compiled from "C:/wamp/www/Parcial2AndresGonzalez/templates\calificar_parque.tpl" */ ?>
<?php /*%%SmartyHeaderCode:244375646118d648132-48116397%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a713d1fa934120667d4d684471de6d909d877b55' => 
    array (
      0 => 'C:/wamp/www/Parcial2AndresGonzalez/templates\\calificar_parque.tpl',
      1 => 1447432588,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '244375646118d648132-48116397',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<h1 class="title">Calificar parque</h1>
<form action="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
c_calificar_parque.php?option=calificar" method="post">
	<label for="codigo">Parque:<?php echo $_smarty_tpl->getVariable('nombre')->value;?>
 </label><br>
	<label for="codigo">Parque:<?php echo $_smarty_tpl->getVariable('codigo')->value;?>
 </label><br>
	<label for="nombre">Ingrese la calificacion del parque</label>
	<input id="calificacion" name="calificacion" type="text"/><br/>
	<input type="hidden" name="parque" value=<?php echo $_smarty_tpl->getVariable('codigo')->value;?>
/>
	<input type="hidden" name="nombre" value=<?php echo $_smarty_tpl->getVariable('nombre')->value;?>
/>
	<input type="hidden" name="option" value="calificar"/>
	<input class="btn btn-primary" type="submit" value="Calificar"/>
</form>