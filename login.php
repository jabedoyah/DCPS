<?php
require('configs/include.php');
require('modules/m_phpass/PasswordHash.php');

class c_login extends super_controller {


    public function validarlogin() {


        $hasher = new PasswordHash(8, FALSE);
        $code['empleado']['cedula'] = $this->post->Usuario;
        $code['cliente']['identificacion'] = $this->post->Contrasena;
        $code['cliente']['nombre'] = $this->post->Usuario;
        $options['empleado']['lvl2'] = "validar";
        $options['cliente']['lvl2'] = "validar";
        $this->orm->connect();
        $this->orm->read_data(array("empleado","cliente"), $options, $code);
        $cliente = $this->orm->get_objects("cliente");
        $empleado = $this->orm->get_objects("empleado");
        $this->orm->close();        
        if (isset($cliente[0])) {
            $_SESSION['id']=$cliente[0]->get('identificacion');
            $_SESSION['tipo1']="cliente";
            $_SESSION['header']='Location: cliente.php';
            $this->session = $_SESSION;
            header('Location: cliente.php');
        } elseif (isset($empleado[0]) && $hasher->CheckPassword($this->post->Contrasena, $empleado[0]->get('contrasena')))  {
            $_SESSION['id']=$empleado[0]->get('cedula');
            $_SESSION['tipo1']=$empleado[0]->get('tipo1');
            if ($empleado[0]->get('tipo1') == 'miembro') {
                $_SESSION['tipo2']=$empleado[0]->get('tipo2');
                if ($empleado[0]->get('tipo2') == 'especialista en desarrollo del producto') {
                    $_SESSION['header']='Location: opciones_especialista.php';
                    header('Location: opciones_especialista.php');
                } elseif ($empleado[0]->get('tipo2') == 'analista de negocios') {
                    $_SESSION['header']='Location: opciones_analista.php';
                    header('Location: opciones_analista.php');
                } elseif ($empleado[0]->get('tipo2') == 'gerente de negocios') {
                    $_SESSION['header']='Location: opciones_gerente.php';
                    header('Location: opciones_gerente.php');
                } elseif ($empleado[0]->get('tipo2') == 'ingeniero de hardware') {
                    $_SESSION['header']='Location: opciones_ingeniero.php';
                    header('Location: opciones_ingeniero.php');
                } elseif ($empleado[0]->get('tipo2') == 'arquitecto de software') {
                    $_SESSION['header']='Location: opciones_arquitecto.php';
                    header('Location: opciones_arquitecto.php');
                }
            }else{
                $_SESSION['header']='Location: disenador.php';
                header('Location: disenador.php');
            }
            $this->session = $_SESSION;
        } else {
            if($this->post->Usuario == "" || $this->post->Contrasena == ""){
                $this->engine->assign(alerta, "ms.alertify()");
            }else{
                $this->engine->assign(alerta, "ms.alertify()");
            }
        }
    }

    public function display() {
        //if (is_object($this->em[0]) || is_object($this->cl[0])) {
         //   $this->engine->display($this->temp);
            //  $this->engine->display('login.tpl');
       // } else {

            $this->engine->display('login.tpl');
                    
        //}
    }

    public function run() {

        if (isset($this->get->option)) {
            $this->{$this->get->option}();
        }
        $this->display();
    }

}

$ob = new c_login();
$ob->run();
?>