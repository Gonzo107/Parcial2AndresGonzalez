<?php

require('configs/include.php');

class c_multiples extends super_controller {
	
	
	public function display()
	{
	
	$cod["granjero"]["id"]=$this->get->granjero;
	$options["granjero"]["lvl2"]="one";

	$cod["finca"]["granjero"]=$this->get->granjero;
	$options["finca"]["lvl2"]="by_granjero";

	$components["granjero"]["finca"]=array("g_f");
	$this->orm->connect();
	$this->orm->read_data(array("granjero","finca"),$options,$cod);
	$granjero=$this->orm->get_objects("granjero",$components);
	print_r2($granjero);
	$this->engine->assign("granjero",$granjero);

	$this->engine->assign("title","Datos Multiples");
	$this->engine->display("header.tpl");
	$this->engine->display("granjeroyfinca.tpl");
	$this->engine->display("footer.tpl");
	}
	
	public function run()
	{
		$this->display();
	}
}

$call = new c_multiples();
$call->run();

?>