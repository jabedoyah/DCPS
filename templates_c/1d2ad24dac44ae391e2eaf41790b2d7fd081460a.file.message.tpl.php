<?php /* Smarty version Smarty-3.0.9, created on 2015-05-04 21:52:47
         compiled from "C:/wamp/www/proyectoDCPS/templates\message.tpl" */ ?>
<?php /*%%SmartyHeaderCode:111225547ce0fd63a39-24083459%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d2ad24dac44ae391e2eaf41790b2d7fd081460a' => 
    array (
      0 => 'C:/wamp/www/proyectoDCPS/templates\\message.tpl',
      1 => 1429226986,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '111225547ce0fd63a39-24083459',
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
