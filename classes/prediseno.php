<?php

class prediseno extends object_standard {

    //attribute variables
    protected $Codigo;
    protected $Resultado;
    var $components = array();
    //auxiliars for primary key and for files
    var $auxiliars = array();

    //data about the attributes
    public function metadata() {
        return array("Codigo" => array(), "Resultado" => array());
    }

    public function primary_key() {
        return array("Codigo");
    }

    public function relational_keys($class, $rel_name) {
        switch ($class) {
            default:
                break;
        }
    }

}

?>