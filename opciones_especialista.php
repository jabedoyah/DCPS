<?php

require('configs/include.php');

class c_opciones_especialista extends super_controller {

    public function display() {

        $this->engine->display('header.tpl');
        $this->engine->display('opciones_especialista.tpl');
        $this->engine->display('fondo_perro.tpl');
        $this->engine->display('footer.tpl');
    }

    public function run() {
        if (isset($this->get->option)) {

            $this->{$this->get->option}();
        }

        $this->display();
    }

}

$ob = new c_opciones_especialista();
$ob->run();
?>