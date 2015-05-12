<?php
class software extends object_standard
{
		//attribute variables
		protected $codigo;
		protected $lenguaje;
		protected $prediseno;
	
		//components
		var $components = array();
	
		//auxiliars for primary key and for files
		var $auxiliars = array();
	
		//data about the attributes
		public function metadata()
		{
			return array("codigo" => array(), "lenguaje" => array(), "prediseno" => array("foreign_name" => "p_s", "foreign" => "prediseno", "foreign_attribute" => "codigo"));
		}
	
		public function primary_key()
		{
			return array("codigo");
		}
		public function relational_keys($class, $rel_name)
		{
			switch($class)
			{
				case "prediseno":
				switch($rel_name)
				{
					case "p_s":
					return array("prediseno");
					break;
				}
				break;
				
				default:
				break;
			}
		}
}
