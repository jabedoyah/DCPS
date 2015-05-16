<?php

require('configs/include.php');

class c_Registrar_prediseno extends super_controller {

    public function Agregar_prediseno() {
        if (is_empty($this->post->codigo)) {
            $message1 = "Ingrese el codigo por favor. ";
        }
        if (!is_empty($message1))
            throw_exception($message1);

        if (!is_numeric($this->post->codigo)) {
            $message2 = "El codigo del prediseño debe ser numerico";
        }
        if (!is_empty($message2))
            throw_exception($message2);

        if (!$this->select_prediseno() == 0) {
            $message3 = "Ya existe un prediseño con este codigo";
        }
        if (!is_empty($message1) || !is_empty($message2) || !is_empty($message3))
            throw_exception($message1 . $message2 . $message3);

        $pred = new prediseno($this->post);
        $this->orm->connect();
        $this->orm->insert_data("insert", $pred);
        $this->orm->close();
        $this->msg_warning = "Programacion de la reunion con Exito";
        $this->temp_aux = 'message.tpl';
        $this->type_warning = "Completo";
        $this->engine->assign('type_warning', $this->type_warning);
        $this->engine->assign('msg_warning', $this->msg_warning);
        
      
    }

    public function select_prediseno() {
        $options['prediseno']['lvl2'] = "all";
        $cod['prediseno']['Codigo'] = $this->post->codigo;
        $this->orm->connect();
        $this->orm->read_data(array("prediseno"), $options, $cod);
        $predise = $this->orm->get_objects("prediseno");

        return count($predise);
    }
    public function actualizar_ideas(){
        $options['calificacion']['lvl2']="prom";
        $this->orm->connect();
        $this->orm->read_data(array("calificacion"), $options);
        $califica = $this->orm->get_objects("calificacion");
        print_r2($califica);
        foreach ($califica as $key => $cal) {
            if($cal->get('valor') < 3){
                $result = 'No aceptada';
            }else{
                $result = 'Aceptada';
            }
            $cod['idea']['nombre'] = $cal->get('idea');
            $options['idea']['lvl2']= "one";
            $this->orm->read_data(array("idea"), $options, $cod);
            $ii = $this->orm->get_objects("idea");
            $ii->set('etapa',$result);
            $this->orm->update_data("normal",$ii);
        }

    }

    public function display() {
    
        $this->engine->display($this->temp_aux);
        $this->engine->display('cu9-Registrar_prediseno.tpl');
    }

    public function run() {
        try {
            if (isset($this->get->option)) {
                $this->{$this->get->option}();
            }
            $this->actualizar_ideas();
            $options['idea']['lvl2'] = "all";
            $this->orm->connect();
            $this->orm->read_data(array("idea"), $options, $cod);
            $ideas = $this->orm->get_objects("idea");
            $this->engine->assign('ideas',$ideas);
        } catch (Exception $e) {
            $this->error = 1;
            $this->msg_warning = $e->getMessage();
            $this->temp_aux = 'message.tpl';
            $this->engine->assign('type_warning', $this->type_warning);
            $this->engine->assign('msg_warning', $this->msg_warning);
        }
        $this->display();
    }

}
$call = new c_Registrar_prediseno();
$call->run();
?>