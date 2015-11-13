<?php

require('configs/include.php');

class c_promedio_nivel extends super_controller {
	
	
	public function display()
	{
	
	
	$options["parque"]["lvl2"]="by_nivel";
	$options["calificacion"]["lvl2"]="all";
	

	$cod["parque"]["nivel"]="alto";
	$components["parque"]["calificacion"]=array("p_c");
	$this->orm->connect();
	$this->orm->read_data(array("parque","calificacion"),$options,$cod);
	$granjero=$this->orm->get_objects("parque",$components);
	print_r2($granjero);
	$this->engine->assign("granjero",$granjero);

	$this->engine->assign("title","Datos Multiples");
	$this->engine->display("header.tpl");
	$this->engine->display("granjeros.tpl");
	$this->engine->display("footer.tpl");
	}
	
	public function run()
	{
		$this->display();
	}
}

$call = new c_promedio_nivel();
$call->run();

?>