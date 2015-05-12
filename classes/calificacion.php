<?php
class calificacion extends object_standard
{
	//attribute variables
	protected $id;
	protected $valor;
	protected $idea;
	protected $miembro;
	
	//components
	var $components = array();
	
	//auxiliars for primary key and for files
	var $auxiliars = array();
	
	//data about the attributes
	public function metadata()
	{
		return array("id" => array(), "valor" => array(), "idea" => array("foreign_name" => "i_c", "foreign" => "idea", "foreign_attribute" => "nombre"),
			"miembro" => array("foreign_name" => "m_c", "foreign" => "empleado", "foreign_attribute" => "cedula"));
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
						case "i_c":
							return array("idea");
							break;
					}
					break;
					
				case "miembro":
				switch($rel_name)
				{
					case "m_c":
					return array("empleado");
					break;
				}
				break;
				
								
				default:
				break;
			}
	}
}