<?php /* Smarty version Smarty-3.0.9, created on 2015-04-17 04:36:53
         compiled from "C:/xampp/htdocs/proyectoDCPS/templates\message.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19585553071c5b3e303-96783676%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5b5d5c37eaa5c689125d2950efea1111193c40a' => 
    array (
      0 => 'C:/xampp/htdocs/proyectoDCPS/templates\\message.tpl',
      1 => 1429226986,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19585553071c5b3e303-96783676',
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
