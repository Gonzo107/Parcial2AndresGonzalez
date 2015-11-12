<?php
 
class video extends object_standard
{
	//attributes
	protected $titulo;
	protected $descripcion;
	protected $url;
	protected $fecha_subida;
	protected $canal;
	
	
	//components
	var $components = array();
	
	//auxiliars for primary key and for files
	var $auxiliars = array();
	
	//data about the attributes
	public function metadata()
	{
		return array("titulo" => array(), "descripcion" => array(), "url" => array(), "fecha_subida" => array(),"canal" => array("foreign_name"=>"c_v","foreign"=>"canal","foreign_attribute"=>"nombre")); 
	}

	public function primary_key()
	{
		return array("id");
	}
	
	public function relational_keys($class, $rel_name)
	{
		switch($class)
		{		
			case "canal":
			switch($rel_name)
			{
			case "c_v":
			return array("canal");
			break;
		}
			break;
			default:
			break;
		}
	}

   
}

?>