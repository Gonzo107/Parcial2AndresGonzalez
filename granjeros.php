<?php

require('configs/include.php');

class c_multiples extends super_controller {
	
	
	public function display()
	{
	
	
	$options["granjero"]["lvl2"]="all";

	

	$cod["granjero"]["id"]=1;
	$this->orm->connect();
	$this->orm->read_data(array("granjero"),$options,$cod);
	$granjero=$this->orm->get_objects("granjero");
	
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

$call = new c_multiples();
$call->run();

?>