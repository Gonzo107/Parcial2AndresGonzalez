<?php /* Smarty version Smarty-3.0.9, created on 2015-10-13 21:29:01
         compiled from "C:/wamp/www/glight/templates\tareaorm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16331561d5b7d16c3a5-20092707%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '54faba62ae4ca5e9111cea467be9074ef7e2fcdc' => 
    array (
      0 => 'C:/wamp/www/glight/templates\\tareaorm.tpl',
      1 => 1444764488,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16331561d5b7d16c3a5-20092707',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="square">
<?php if (isset($_smarty_tpl->getVariable('clerk1',null,true,false)->value)){?>
<h1 class="title">Editar clerk</h1>
	<form action="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
tareaorm.php?option=editar" method="post">
	<label for="id">Ingrese el id del clerk: </label>
	<input id="id" name="id" type="text" value=<?php echo $_smarty_tpl->getVariable('clerk1')->value->get("id");?>
><br>
	<label for="id">Ingrese el nombre del clerk: </label>
	<input id="name" name="name" type="text" value=<?php echo $_smarty_tpl->getVariable('clerk1')->value->get("name");?>
><br>
	<label for="id">Ingrese el salario del clerk: </label>
	<input id="salary" name="salary" type="text" value=<?php echo $_smarty_tpl->getVariable('clerk1')->value->get("salary");?>
><br>
	<label for="id">Ingrese el jefe del clerk: </label>
	<input id="boss" name="boss" type="text" value=<?php echo $_smarty_tpl->getVariable('clerk1')->value->get("boss");?>
>	<br>
	<input type="hidden" name="option" vvalue="editar"/>
	<input type="hidden" name="id_v" value=<?php echo $_smarty_tpl->getVariable('clerk1')->value->get("id");?>
>
	<input class="btn btn-primary" type="submit" value="Editar"/>
</form>
<?php }?>
<h1 class="title">Buscar clerk</h1>
<form action="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
tareaorm.php?option=buscar" method="post">
	<label for="id">Ingrese el id del clerk: </label>
	<input id="id" name="id" type="text" placeholder="ID del clerk"/>	
	<input type="hidden" name="option" value="buscar"/>
	<input class="btn btn-primary" type="submit" value="Buscar"/>
</form>
</div>