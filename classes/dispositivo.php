<?php

class dispositivo extends object_standard {

    //attribute variables
    protected $codigo;
    protected $costo;
    protected $funcion;
    protected $prediseno;
    //components
    var $components = array();
    //auxiliars for primary key and for files
    var $auxiliars = array();

    //data about the attributes
    public function metadata() {
        return array("codigo" => array(), "costo" => array(), "funcion" => array(),
            "prediseno" => array("foreign_name" => "p_d", "foreign" => "prediseno", "foreign_attribute" => "codigo"));
    }

    public function primary_key() {
        return array("codigo");
    }

    public function relational_keys($class, $rel_name) {
        switch ($class) {
            case "prediseno":
                switch ($rel_name) {
                    case "p_d":
                        return array("prediseno");
                        break;
                }
                break;


            default:
                break;
        }
    }

}

?>