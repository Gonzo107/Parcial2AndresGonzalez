<?php
 
class calificacion extends object_standard
{
	//attributes
	protected $fecha;
	protected $calificacion;
	protected $parque;
	

	
	//components
	var $components = array();
	
	//auxiliars for primary key and for files
	var $auxiliars = array();
	
	//data about the attributes
	public function metadata()
	{
		return array("fecha" => array(), "calificacion" => array(), "parque" =>  array("foreign_name"=>"p_c","foreign"=>"parque","foreign_attribute"=>"codigo")); 
	} 
	

	public function primary_key()
	{
		return array("parque","fecha");
	}
	
	public function relational_keys($class, $rel_name)
	{
		switch($class)
		{	
		case "parque":
			switch($rel_name)
			{
			case "p_c":
			return array("parque");
			break;
		}	
		    default:
			break;
		}
	}
}

?>