<?php /* Smarty version Smarty-3.0.9, created on 2015-04-17 04:36:41
         compiled from "C:/xampp/htdocs/proyectoDCPS/templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19971553071b9a7f9c7-18336376%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb4302da3d032ec29b822173fb947b4adbe41fd8' => 
    array (
      0 => 'C:/xampp/htdocs/proyectoDCPS/templates\\login.tpl',
      1 => 1429226986,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19971553071b9a7f9c7-18336376',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<link rel="stylesheet" href="css/login.css">
<form action="<?php echo $_smarty_tpl->getVariable('gvar')->value['l__global'];?>
login.php?option=validarlogin" method="post">

<div class="container">
    <div class="row login_box">
        <div class="col-md-12 col-xs-12" align="center">
            <div class="line"><h1>Satrack</h1></div>
            <div class="outter"><img src="images/perro.jpg" class="image-circle"/></div>   
            <h3>Bienvenido</h3>
        </div>
      
        <div class="col-md-12 col-xs-12 login_control">
                
                <div class="control">
                    <input type="text" class="form-control" name="Usuario" placeholder="Usuario"/>
                </div>
                
                <div class="control">
                    <input type="password" class="form-control" name="Contrasena" placeholder="Contraseña"/>
                </div>
                <div align="center">
                    
                    <a href="analista.tpl"><button class="btn btn-orange">Login</button></a>
                     <?php if ($_smarty_tpl->getVariable('lo')->value->auxiliars['tipo']==1){?>
                     <form action="<?php echo $_smarty_tpl->getVariable('gvar')->value['l__global'];?>
analista.php" method="post">
                     <?php }?>
                </div>
                
        </div>
        
        
            
    </div>
</div>