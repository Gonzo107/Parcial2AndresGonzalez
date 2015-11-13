<?php /* Smarty version Smarty-3.0.9, created on 2015-11-13 16:32:58
         compiled from "C:/wamp/www/Parcial2AndresGonzalez/templates\agregar_parque.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9930564602aa417471-73032001%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e44b43771eb4e2c8a2b2d6edca4cae8e58c75d31' => 
    array (
      0 => 'C:/wamp/www/Parcial2AndresGonzalez/templates\\agregar_parque.tpl',
      1 => 1447428777,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9930564602aa417471-73032001',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<h1 class="title">Agregar Parque</h1>
<form action="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
c_agregar_parque.php?option=agregar" method="post">
	<label for="codigo">Ingrese el codigo del parque </label>
	<input id="codigo" name="codigo" type="text"/><br/>
	<label for="nombre">Ingrese el nombre del parque</label>
	<input id="nombre" name="nombre" type="text"/><br/>
	<label for="nombre">Ingrese el municipio del parque</label>
	<input id="municipio" name="municipio" type="text"/><br/>
	<label for="nombre">Ingrese el nivel del parque</label>
	<input id="nivel" name="nivel" type="text"/><br/>
	<input type="hidden" name="option" value="agregar"/>
	<input class="btn btn-primary" type="submit" value="Agregar"/>
</form>