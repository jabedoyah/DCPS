<?php

class software extends object_standard {

    protected $codigo;
    protected $lensguaje;
    protected $prediseno;
    var $components = array();
    var $auxiliars = array();

    public function metadata() {
        return array("codigo" => array(), "lenguaje" => array(), "prediseno" => array("foreign_name" => "s_p", "foreign" => "prediseno", "foreign_attribute" => "codigo"));
    }

    public function primary_key() {
        return array("codigo");
    }

    public function relational_keys($class, $rel_name) {
        switch ($class) {
            default:
                break;
        }
    }

}

?>