<?php

require ('configs/include.php');

class c_definirsoftware extends super_controller {

    public function add() {
        $software = new software($this->post);
        if (is_empty($software->get('codigo')) or is_empty($software->get('lenguaje'))) {
            throw_exception("Campos incompletos");
        } else {
            $codigo = $software->get('codigo');
            $cod['software']['codigo'] = $codigo;
            $options['software']['lvl2'] = "normal";
            $this->orm->connect();
            $this->orm->read_data(array("software"), $options, $cod);
            $software1 = $this->orm->get_objects("software");
            $_SESSION['prediseno'] = $_POST['select'];
            if (count($software1[0]) == 0) {
                $options['software']['lvl2'] = "normal";
                $this->orm->insert_data("normal", $software);
                $this->orm->close();

                $this->type_warning = "sucess";
                $this->msg_warning = "Software definido correctamente";

                $this->temp_aux = 'message.tpl';
                $this->engine->assign('type_warning', $this->type_warning);
                $this->engine->assign('msg_warning', $this->msg_warning);
            } else {
                $_SESSION['codigooriginal'] = $_POST['codigo'];
                $options['software']['lvl2'] = "normal";
                $this->orm->update_data("normal", $software);
                $this->orm->close();

                $this->type_warning = "sucess";
                $this->msg_warning = "Software actualizado correctamente";

                $this->temp_aux = 'message.tpl';
                $this->engine->assign('type_warning', $this->type_warning);
                $this->engine->assign('msg_warning', $this->msg_warning);
            }
        }
    }

    public function display() {
        $this->engine->assign('title', 'Definir Software');
        $this->engine->display($this->temp_aux);
        $this->engine->display('definirsoftware.tpl');
    }

    public function run() {
        try {
            if (!isset($this->session['id'])) {
                header('Location: login.php');
            } else {
                if ($this->session['tipo2'] == "arquitecto de software") {
                    if (isset($this->get->option)) {
                        $this->{$this->get->option}();
                    }
                }
                $options['prediseno']['lvl2'] = "all";
                $this->orm->connect();
                $this->orm->read_data(array("prediseno"), $options);
                $prediseno = $this->orm->get_objects("prediseno");
                $this->orm->close();
                $this->engine->assign('prediseno', $prediseno);
                header($this->session['header']);
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