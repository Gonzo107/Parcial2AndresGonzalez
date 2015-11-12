<?php /* Smarty version Smarty-3.0.9, created on 2015-09-29 23:19:35
         compiled from "C:/wamp/www/glight/templates\conversor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6754560b0067edf375-38794467%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '36f5e63598be3e16beab8e97c921b4d55c24455f' => 
    array (
      0 => 'C:/wamp/www/glight/templates\\conversor.tpl',
      1 => 1443561556,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6754560b0067edf375-38794467',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="square">
<?php if (isset($_smarty_tpl->getVariable('resultado',null,true,false)->value)){?>
	<p><b>El resultado es: </b><?php echo $_smarty_tpl->getVariable('resultado')->value;?>
</p>
<?php }?>
<h1 class="title">Conversor de Divisas</h1>
<form action="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
conversor.php?option=conversion" method="post">
	<label for="id">Ingrese la tasa de conversión: </label><input id="tasa" name="tasa" type="text" placeholder="Tasa de Conversion"
	<?php if (isset($_smarty_tpl->getVariable('tasa',null,true,false)->value)){?>value="<?php echo $_smarty_tpl->getVariable('tasa')->value;?>
"<?php }?>/><br/>
	<label for="usd">Ingrese el valor en Dólares a convertir: </label>
	<input id="usd" name="dolares" type="text" placeholder="Dolares" 
	<?php if (isset($_smarty_tpl->getVariable('dolares',null,true,false)->value)){?>value="<?php echo $_smarty_tpl->getVariable('dolares')->value;?>
"<?php }?>/><br/>
	<input type="hidden" name="option" value="conversion"/>
	<input class="btn btn-primary" type="submit" value="Conversion"/>
</form>
</div>