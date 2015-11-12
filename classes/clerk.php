<?php
 
class clerk extends object_standard
{
	//attributes
	protected $id;
	protected $name;
	protected $salary;
	protected $boss;
	
	
	//components
	var $components = array();
	
	//auxiliars for primary key and for files
	var $auxiliars = array();
	
	//data about the attributes
	public function metadata()
	{
		return array("id" => array(), "name" => array(), "salary" => array(), "boss" => array("foreign_name"=>"b_c","foreign"=>"boss","foreign_attribute"=>"id")); 
	}

	public function primary_key()
	{
		return array("id");
	}
	
	public function relational_keys($class, $rel_name)
	{
		switch($class)
		{		
			case "boss":
			switch($rel_name)
			{
			case "b_c":
			return array("boss");
			break;
		}
			

		    default:
			break;
		}
	}

   public function mayor_salario($clerks)
   {
   	$mayor=$clerks[1]->salary;
foreach ($clerks as $clerk ) 
{
	if ($clerk->salary>$mayor) 
	{
		$mayor=$clerk->salary;
	}
}
return $mayor;
   }
   static public function promedio_salario($clerks)
   {
$sum=0;
$prom=0;
foreach ($clerks as $clerk ) 
{
	$sum=$sum+$clerk->salary;
}
$prom=$sum/count($clerks);
return $prom;
   }
}

?>