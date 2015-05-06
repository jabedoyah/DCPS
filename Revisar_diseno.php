<?php

require('configs/include.php');

class c_opciones extends super_controller {

    public function display() {

        $this->engine->display('header.tpl');
        $this->engine->display('Revisar_diseno.tpl');
        $this->engine->display('footer.tpl');
    }

    public function run() {


        $this->display();
    }

}

$ob = new c_opciones();
$ob->run();
?>