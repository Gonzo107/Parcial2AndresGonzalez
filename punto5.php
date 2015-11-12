<?php

require('configs/include.php');

class c_punto5 extends super_controller {
	
	public function buscar() {
		
		$cod["canal"]["nombre"]=$this->post->canal;
	$options["canal"]["lvl2"]="one";

	$cod["video"]["canal"]=$this->post->canal;
	$options["video"]["lvl2"]="by_canal";

	$components["canal"]["video"]=array("c_v");
	$this->orm->connect();
	$this->orm->read_data(array("canal","video"),$options,$cod);
	$canal=$this->orm->get_objects("canal",$components);
	
	$this->engine->assign("canal",$canal);
	}
	
	public function display() {
		$this->engine->assign('title', "Conversor");
		$this->engine->display('header.tpl');
		$this->engine->display($this->temp_aux);
		$this->engine->display('punto5.tpl');
		$this->engine->display('footer.tpl');
	}
	
	public function run() {
		
			if (isset($this->get->option)) {
				if ($this->get->option == "buscar")
					$this->{$this->get->option}();
				else
					throw_exception("Opción ". $this->get->option." no disponible");
			}
		
		$this->display();
	}
	
}

$call = new c_punto5();
$call->run();

?>