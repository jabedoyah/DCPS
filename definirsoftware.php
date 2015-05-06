<?php

require ('configs/include.php');

class c_definirsoftware extends super_controller {

    public function add() {


        if ($this->post->prediseno == "prediseno") {
            $message1 = "Seleccione el codigo del prediseno por favor. ";
        }
        if (!is_empty($message1))
            throw_exception($message1);
        if (is_empty($this->post->codigo)) {
            $message2 = "Seleccione lel codigo del software por favor.";
        }
        if (!is_empty($message2))
            throw_exception($message2);

        if ($this->post->lenguaje == "lenguaje") {
            $message3 = "Seleccione el lenguaje de porgramacion por favor..";
            // $this->engine->assign('fecha', $this->post->fecha);
        }


        if (!is_empty($message1) || !is_empty($message2) || !is_empty($message3))
            throw_exception($message1 . $message2 . $message3);


        $soft = new software($this->post);


        $this->orm->connect();
        $this->orm->insert_data("insert_software", $soft);
        $this->orm->close();
        $this->msg_warning = "Programacion de la reunion con Exito";
        $this->temp_aux = 'message.tpl';
        $this->type_warning = "Completo";
        $this->engine->assign('type_warning', $this->type_warning);
        $this->engine->assign('msg_warning', $this->msg_warning);
    }

    public function display() {


        $options['prediseno']['lvl2'] = "alll";
        $this->orm->connect();
        $this->orm->read_data(array("prediseno"), $options);
        $prediseno = $this->orm->get_objects("prediseno");
        $this->orm->close();

        $this->engine->assign('prediseno', $prediseno);
        $this->engine->assign('title', 'Definir Software');
        $this->engine->display($this->temp_aux);
        $this->engine->display('definirsoftware.tpl');
    }

    public function run() {
        try {
            if (isset($this->get->option)) {
                $this->{$this->get->option}();
            }
        } catch (Exception $e) {
            $this->error = 1;
            $this->msg_warning = $e->getMessage();
            $this->engine->assign('type_warning', $this->type_warning);
            $this->engine->assign('msg_warning', $this->msg_warning);
            $this->temp_aux = 'message.tpl';
        }
        $this->display();
    }

}

$call = new c_definirsoftware();
$call->run();
?>