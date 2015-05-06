<?php

class idea extends object_standard {

    //attribute variables

    protected $nombre;
    protected $descripcion;
    protected $etapa;
    protected $cliente;
    protected $miembro;
    protected $necesidad;
    //components
    var $components = array();
    //auxiliars for primary key and for files
    var $auxiliars = array();

    //data about the attributes
    public function metadata() {
        return array("nombre" => array(), "descripcion" => array(),"etapa" => array(), "cliente" => array(), "miembro" => array(),"necesidad" => array());
    }

    public function primary_key() {
        return array("nombre");
    }

    public function relational_keys($class, $rel_name) {
        switch ($class) {
            default:
                break;
        }
    }

}

?>