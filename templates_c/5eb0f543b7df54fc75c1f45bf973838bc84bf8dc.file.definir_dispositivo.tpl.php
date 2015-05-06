<?php /* Smarty version Smarty-3.0.9, created on 2015-05-06 00:36:30
         compiled from "C:/wamp/www/ProyectoDCPS1/templates\definir_dispositivo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:79215547ef0c42fc12-54722326%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5eb0f543b7df54fc75c1f45bf973838bc84bf8dc' => 
    array (
      0 => 'C:/wamp/www/ProyectoDCPS1/templates\\definir_dispositivo.tpl',
      1 => 1430500784,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '79215547ef0c42fc12-54722326',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="square">
<form action="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
definir_dispositivo.php?option=add" method="post">
<table width="100%" border="0" cellpadding="0" cellspacing="5">
<tr><td>
<b>Definir dispositivo</b><br /><br />
<b>Ingrese el codigo:</b><input type="text" name="codigo" /><br />
<b>Ingrese el costo:</b> <input type="text" name="costo" /><br />
<b>Ingrese la funcion:</b> <input type="text" name="funcion" /><br />
<input class="btn btn-primary" type="submit" value="Registrar" />
</td></tr></table>
</form>
</div>