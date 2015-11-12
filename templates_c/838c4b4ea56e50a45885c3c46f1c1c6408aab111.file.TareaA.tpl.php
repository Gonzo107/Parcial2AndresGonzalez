<?php /* Smarty version Smarty-3.0.9, created on 2015-10-07 23:43:20
         compiled from "C:/wamp/www/glight/templates\TareaA.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30534561591f893b7f9-44193713%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '838c4b4ea56e50a45885c3c46f1c1c6408aab111' => 
    array (
      0 => 'C:/wamp/www/glight/templates\\TareaA.tpl',
      1 => 1444084109,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30534561591f893b7f9-44193713',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php if (isset($_smarty_tpl->getVariable('ncampos',null,true,false)->value)){?>
		
		<form action="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
TareaA.php" method="post">
			Por favor llene los siguientes campos. <br>
			<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->getVariable('ncampos')->value+1 - (1) : 1-($_smarty_tpl->getVariable('ncampos')->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
				<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
.
				<input type="decimal" name="campos[]" required> <br>
			<?php }} ?>
			<input type="hidden" name="option" value="calcular" >
			<input type="submit" value="calcular" class="btn">
		</form>
	<?php }elseif(isset($_smarty_tpl->getVariable('prom',null,true,false)->value)){?>
		Los numeros ingresados son: 
			<?php  $_smarty_tpl->tpl_vars['n'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('campos')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['n']->key => $_smarty_tpl->tpl_vars['n']->value){
?>
				<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
 &nbsp;
			<?php }} ?>
		<br>
		La suma de los numeros es: <?php echo $_smarty_tpl->getVariable('suma')->value;?>
<br>
		El promedio es: <?php echo $_smarty_tpl->getVariable('prom')->value;?>
 <br>
		<a class="btn" href="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
TareaA.php">Probar de nuevo</a>
	<?php }else{ ?>
		<form action="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
TareaA.php" method="post">
			Nro de campos a crear: 
			<input type="number" name="ncampos" required min="1">
			<input type="hidden" name="option" value="crear_campos" ><br>
			<input type="submit" value="crear campos" class="btn" >
		</form>
	<?php }?>
</body>
</html>