<?php

class reunion extends object_standard {

    //attribute variables
    protected $codigo;
    protected $fecha;
 
    var $components = array();
    //auxiliars for primary key and for files
    var $auxiliars = array();

    //data about the attributes
    public function metadata() {
        return array( "codigo"=>array(), "fecha" => array());
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