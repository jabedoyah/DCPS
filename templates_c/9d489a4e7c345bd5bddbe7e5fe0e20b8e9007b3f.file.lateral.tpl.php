<?php /* Smarty version Smarty-3.0.9, created on 2015-04-17 04:36:53
         compiled from "C:/xampp/htdocs/proyectoDCPS/templates\lateral.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16488553071c585c567-66556086%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d489a4e7c345bd5bddbe7e5fe0e20b8e9007b3f' => 
    array (
      0 => 'C:/xampp/htdocs/proyectoDCPS/templates\\lateral.tpl',
      1 => 1429238107,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16488553071c585c567-66556086',
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
