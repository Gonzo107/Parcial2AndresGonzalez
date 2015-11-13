<?php /* Smarty version Smarty-3.0.9, created on 2015-11-13 16:33:09
         compiled from "C:/wamp/www/Parcial2AndresGonzalez/templates\message.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21937564602b524c731-40521841%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '53395557f0c8b11c37e24a73e8accd53e3c81a52' => 
    array (
      0 => 'C:/wamp/www/Parcial2AndresGonzalez/templates\\message.tpl',
      1 => 1354314637,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21937564602b524c731-40521841',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div>
<div class="alert alert-<?php echo $_smarty_tpl->getVariable('type_warning')->value;?>
">
<strong><?php echo ucfirst($_smarty_tpl->getVariable('type_warning')->value);?>
</strong> <?php echo $_smarty_tpl->getVariable('msg_warning')->value;?>

</div>
</div>
