<?php /* Smarty version Smarty-3.0.9, created on 2015-05-06 07:08:50
         compiled from "C:/wamp/www/DCPS/templates\Definir_software.tpl" */ ?>
<?php /*%%SmartyHeaderCode:220635549a1e2436b17-36337860%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '859d192ed3e6cbe76b14bfa320badf762f8c328f' => 
    array (
      0 => 'C:/wamp/www/DCPS/templates\\Definir_software.tpl',
      1 => 1430888925,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '220635549a1e2436b17-36337860',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<form action="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
Definir_software.php?option=add" method="post">
    <p>
        <label for="select">Seleccione el prediseno:</label>


        <select name="prediseno" >
            <option value="prediseno">Prediseno</option>
            <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('prediseno')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
                <option value=<?php echo $_smarty_tpl->getVariable('prediseno')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->get('Codigo');?>
><?php echo $_smarty_tpl->getVariable('prediseno')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->get('Codigo');?>
</option>
            <?php endfor; endif; ?>
        </select>


    </p>
    <p>
        <label for="textfield2">Codigo para el software:</label>
        <input type="text" name="codigo">
    </p>
    <p>
        <label for="textfield3">Definir lenguaje de programacion:</label>

        <select name="lenguaje" >
            <option value="lenguaje">lenguaje</option>
            <option value="C++" >C++</option>
            <option value="C#" >C#</option>
            <option value="Java" >Java</option>
            <option value="Ruby" >Ruby</option>

        </select>

    </p>
    <p>
        <input type="submit" name="submit" id="submit" value="Definir Software">
    </p>
</form>