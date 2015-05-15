<?php

require('configs/include.php');

class c_Programar_reunion extends super_controller {

    public function agregar_reunion() {
   
        if (is_empty($this->post->fecha)) {
            $message1 = "Seleccione la fecha por favor. ";
            //   $this->engine->assign('ddl', $this->post->ddl);
        }
        if (is_empty($this->post->codigo)) {
            $message2 = "Ingrese el codigo por favor.";
            // $this->engine->assign('fecha', $this->post->fecha);
        }
        if (is_empty($this->post->ddl)) {
            $message3 = "Seleccione la idea por favor.";
            // $this->engine->assign('fecha', $this->post->fecha);
        }
        if (!is_empty($message1) || !is_empty($message2) || !is_empty($message3))
            throw_exception($message1 . $message2 . $message3);

        $reun = new reunion($this->post);
        $idear = new idea();
        $idear->set('nombre', $this->post->ddl);
        $idear->set('reunion', $this->post->codigo);



        $this->orm->connect();
        $this->orm->insert_data("normal", $reun);
        $this->orm->update_data("reunion", $idear);
        $this->orm->close();
        $this->msg_warning = "Programacion de la reunion con Exito";
        $this->temp_aux = 'message.tpl';
        $this->type_warning = "success";
        $this->engine->assign('type_warning', $this->type_warning);
        $this->engine->assign('msg_warning', $this->msg_warning);
    }

    public function selectideas() {

        $options['idea']['lvl2'] = 'Por revisar';
        $this->orm->connect();
        $this->orm->read_data(array("idea"), $options);
        $idea = $this->orm->get_objects("idea");
        $this->orm->close();
        $this->engine->assign('ide', $idea);
        //echo $idea[1]->get('nombre');
        //print_r2($idea);
    }

    public function selectreuniones() {
        $options['reunion']['lvl2'] = "all";
        $auxiliars['reunion'] = array("Nombre_de_la_idea");
        $this->orm->connect();
        $this->orm->read_data(array("reunion"), $options);
        $reuniones = $this->orm->get_objects("reunion", NULL, $auxiliars);
        $this->engine->assign('reuniones', $reuniones);
    }

    public function display() {
        // $this->selectreuniones();
        $this->engine->display($this->temp_aux);
        $this->engine->display('Programar_reunion.tpl');
    }

    public function run() {
        try {
            if(!isset($this->session['id'])){header('Location: login.php');}
            elseif($this->session['tipo2']=="gerente de negocios"){
                if (isset($this->get->option)) {
                    //if ($this->get->option == "conversion")
                    $this->{$this->get->option}();
                    //else {
                    //throw_exception("OpciÃ³n ". $this->get->option." no disponible");
                    //}
                }
            }else{
                header($this->session['header']);
            }
        } catch (Exception $e) {
            $this->error = 1;
            $this->msg_warning = $e->getMessage();
            $this->temp_aux = 'message.tpl';
            $this->engine->assign('type_warning', $this->type_warning);
            $this->engine->assign('msg_warning', $this->msg_warning);
        }
        $this->selectideas();
        $this->display();
    }

}

$call = new c_Programar_reunion();
$call->run();
?>