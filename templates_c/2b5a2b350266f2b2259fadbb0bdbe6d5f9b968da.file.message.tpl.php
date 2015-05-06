<?php /* Smarty version Smarty-3.0.9, created on 2015-05-06 03:59:13
         compiled from "C:/wamp/www/DCPS/templates\message.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2152655497571aa24b5-57849760%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b5a2b350266f2b2259fadbb0bdbe6d5f9b968da' => 
    array (
      0 => 'C:/wamp/www/DCPS/templates\\message.tpl',
      1 => 1430874987,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2152655497571aa24b5-57849760',
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
