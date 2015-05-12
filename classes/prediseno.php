<?php
    class prediseno extends object_standard{
        //atribute variables
        protected $codigo;
        protected $resultado;
        protected $especialista;
        protected $gerente;
        
        //components
        var $components = array();
        
        //auxiliar for primary key and for file
        var $auxiliars = array();
        
        //data about the attributes
        public function metadata() {
            return array("codigo" => array(), "resultado" => array(), 
                "especialista" => array("foreign_name" => "e_p","foreign" => "empleado", "foreign_attribute" => "cedula"), 
                "gerente" => array("foreign_name" => "g_p","foreign" => "empleado", "foreign_attribute" => "cedula"));
        }
        
        public function primary_key() {
            return array("codigo");
        }
        
        public function relational_keys($class, $rel_name) {
            switch ($class){
                case "especialista":
                    switch ($rel_name){
                        case "e_p":
                        return array("especialista");
                        break;
                    }
                break;
            
                case "gerente":
                        switch ($rel_name){
                            case "g_p":
                            return array("gerente");
                            break;
                        }
                    break;
                
                default:
                break;
            }
        }
    }
?>