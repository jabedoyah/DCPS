<?php /* Smarty version Smarty-3.0.9, created on 2015-05-06 04:25:34
         compiled from "C:/wamp/www/DCPS/templates\Registrar_prediseno.tpl" */ ?>
<?php /*%%SmartyHeaderCode:800155497b9e709ca9-44876341%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0baa1eff34d6b96c63d45ad7f2b3c4a8beb9bf6' => 
    array (
      0 => 'C:/wamp/www/DCPS/templates\\Registrar_prediseno.tpl',
      1 => 1430874986,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '800155497b9e709ca9-44876341',
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