<?php /* Smarty version Smarty-3.0.9, created on 2015-05-03 22:02:47
         compiled from "C:/wamp/www/proyectoDCPS/templates\lateral.tpl" */ ?>
<?php /*%%SmartyHeaderCode:245355467ee7744345-85909790%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e0a8e13117de7a2212b0b91173295cce7665a46' => 
    array (
      0 => 'C:/wamp/www/proyectoDCPS/templates\\lateral.tpl',
      1 => 1429238107,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '245355467ee7744345-85909790',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<table cellspacing="0" cellpadding="0"><tr><td>
<div class="well well-small" style="padding: 8px 0;">
<ul class="nav nav-list">
<table cellspacing="0" cellpadding="0"><tr><td>
<h4>Usuario</h4>
<div class="well well-small" style="padding: 8px 0;">
    <ul class="nav nav-list">
      <li class="nav-header">Usuario</li>
      <li <b>BIENVENIDO</br></li>
    </ul>
</div>
</td></tr></table>

<table cellspacing="0" cellpadding="0"><tr><td>
<h4>Menu</h4>
<div class="well well-small" style="padding: 8px 0;">
    <ul class="nav nav-list">
      <li class="nav-header">Menu</li>
      <li <?php ob_start();?><?php echo $_smarty_tpl->getVariable('gvar')->value['n_index'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_smarty_tpl->getVariable('active')->value==$_tmp1){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_index'];?>
">Inicio</a></li>
      <li <?php ob_start();?><?php echo $_smarty_tpl->getVariable('gvar')->value['n_contact'];?>
<?php $_tmp2=ob_get_clean();?><?php if ($_smarty_tpl->getVariable('active')->value==$_tmp2){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_contact'];?>
">Contacto</a></li>
    </ul>
</div>
</td></tr></table>
</ul>
</div>
</td></tr></table>
