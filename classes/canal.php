<?php
 
class canal extends object_standard
{
	//attributes
	
	protected $nombre;
	protected $e_mail;
	protected $descripcion;
	
	
	//components
	var $components = array();
	
	//auxiliars for primary key and for files
	var $auxiliars = array();
	
	//data about the attributes
	public function metadata()
	{
		return array("nombre" => array(), "e_mail" => array(), "descripcion" => array()); 
	}

	public function primary_key()
	{
		return array("nombre");
	}
	
	public function relational_keys($class, $rel_name)
	{
		switch($class)
		{		
			

		    default:
			break;
		}
	}

   
}

?>