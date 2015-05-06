<?php
class calificacion extends object_standard
{
	//attribute variables
	protected $id;
	protected $puntaje;
	protected $idea;
	protected $cliente;
	
	//components
	var $components = array();
	
	//auxiliars for primary key and for files
	var $auxiliars = array();
	
	//data about the attributes
	public function metadata()
	{
		return array("id" => array(), "puntaje" => array(), "idea" => array("foreign_name" => "c_i", "foreign" => "idea", "foreign_attribute" => "nombre"),"cliente" => array("foreign_name" => "c_c", "foreign" => "cliente", "foreign_attribute" => "identifacion"));
	}
	
	public function primary_key()
	{
		return array("id");
	}
	public function relational_keys($class, $rel_name)
	{
	switch($class)
			{
				case "idea":
					switch($rel_name)
					{
						case "c_i":
							return array("idea");
							break;
					}
					break;
					
				case "cliente":
				switch($rel_name)
				{
					case "c_c":
					return array("cliente");
					break;
				}
				break;
				
								
				default:
				break;
			}
	}
}