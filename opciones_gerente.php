<?php

require('configs/include.php');

class c_opciones extends super_controller {

    public function display() {

        $this->engine->display('header.tpl');
        $this->engine->display('opciones_gerente.tpl');
        $this->engine->display('fondo_perro.tpl');
        $this->engine->display('footer.tpl');
    }

    public function run() {
    	if(!isset($this->session['id'])){
    		header('Location: login.php');
    	}elseif($this->session['tipo2']!= "gerente de negocios"){
    		header($this->session['header']);
    	}else{
    		
    	}
        $this->display();
    }

}

$ob = new c_opciones();
$ob->run();
?>