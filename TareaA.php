<?php

require('configs/include.php');

class c_tarea extends super_controller {
	
	public function crear_campos(){
		$this->engine->assign('ncampos',$this->post->ncampos);
	}
	public function calcular(){
		$suma = 0;
		$campos = $this->post->campos;
		foreach ($campos as $c) {
			$suma = $suma + $c;
		}
		$prom = $suma/sizeof($campos);
		$this->engine->assign('campos',$campos);
		$this->engine->assign('suma',$suma);
		$this->engine->assign('prom',$prom);
	}

	public function display()
	{
		$this->engine->assign('title','Tarea');
		$this->engine->display('header.tpl');
		$this->engine->display('TareaA.tpl');
		$this->engine->display('footer.tpl');
	}
	
	public function run()
	{
		if(isset($this->post->option)){
			$this->{$this->post->option}();
		}

		$this->display();
	}
}

$call = new c_tarea();
$call->run();

?>