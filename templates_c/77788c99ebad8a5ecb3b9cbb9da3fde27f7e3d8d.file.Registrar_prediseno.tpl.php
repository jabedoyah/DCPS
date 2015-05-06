<?php /* Smarty version Smarty-3.0.9, created on 2015-05-06 01:22:19
         compiled from "C:/wamp/www/ProyectoDCPS1/templates\Registrar_prediseno.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11594554950ab0e9277-65816934%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77788c99ebad8a5ecb3b9cbb9da3fde27f7e3d8d' => 
    array (
      0 => 'C:/wamp/www/ProyectoDCPS1/templates\\Registrar_prediseno.tpl',
      1 => 1430868136,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11594554950ab0e9277-65816934',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<form action="<?php echo $_smarty_tpl->getVariable('gvar')->value['l__global'];?>
Registrar_prediseno.php?option=Agregar_prediseno" method="post">


    <body>

        <div class="row">
            <div class="col-md-2 ll menu">
                <br/><a href="proponeridea.php"><div class="item">Proponer Idea</div></a><br/><br/>
                <br/>  <a href="calificaridea.php"><div class="item">Realizar Calificacion</div></a><br/><br/>
                <br/><a href="Modificar_idea.php"><div class="item">Modificar Idea</div></a><br/><br/>
                <br/><a href="Definir_dispositivo.php"><div class="item">Definir Dispositivo</div></a><br/>
                <br/><a href="Revisar_diseno.php"><div class="item">Revisar Diseno</div></a><br/>
                <br/><a href="Registrar_prediseno.php"><div class="item">Registrar Prediseno</div></a><br/>
            </div>

            <table>
                <thead>
                    <tr>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> Ingrese el codigo del prediseño por favor: </td>
                        <td><input type="text" name="codigo" /></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="Registrar" name="Registrar" /></td>
                    </tr>
                </tbody>
            </table>



    </body>
</form>