<?php

require('configs/include.php');

class c_punto6 extends super_controller {
	
	public function buscar() {
		
		$cod["video"]["url"]=$this->post->url;
	$options["video"]["lvl2"]="one";

	

	
	$this->orm->connect();
	$this->orm->read_data(array("video"),$options,$cod);
	$video=$this->orm->get_objects("video");
	
	$this->engine->assign("video",$video);
	}
	
	public function display() {
		$this->engine->assign('title', "Conversor");
		$this->engine->display('header.tpl');
		$this->engine->display($this->temp_aux);
		$this->engine->display('punto6.tpl');
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

$call = new c_punto6();
$call->run();

?>