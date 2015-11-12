<?php

require('configs/include.php');

class c_punto4 extends super_controller {
	
	
	public function display()
	{
	
	
	$options["canal"]["lvl2"]="all";

	

	
	$this->orm->connect();
	$this->orm->read_data(array("canal"),$options);
	$canal=$this->orm->get_objects("canal");
	
	$this->engine->assign("canal",$canal);

	$this->engine->assign("title","Punto 4");
	$this->engine->display("header.tpl");
	$this->engine->display("punto4.tpl");
	$this->engine->display("footer.tpl");
	}
	
	public function run()
	{
		$this->display();
	}
}

$call = new c_punto4();
$call->run();

?>