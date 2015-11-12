<?php

require('configs/include.php');

class c_cursos_estudiante extends super_controller {
	
	public function display()
	{
		$cod['estudiante']['id']=1;
		$options['estudiante']['lvl2']="one";

		// $cod['matricula']['estudiante']=1;
		// $options['matricula']['lvl2']="by_estudiante";

		$options['matricula']['lvl2']="all";

		$options['curso']['lvl2']="all";

		$components['estudiante']['matricula']=array("e_m");
		$components['matricula']['curso']=array("c_m");

		$this->orm->connect();
		$this->orm->read_data(array("estudiante","matricula","curso"), $options,$cod);
		$estudiante = $this->orm->get_objects("estudiante",$components);

		$this->engine->assign('estudiante',$estudiante[0]);

		$this->engine->assign('title','Cursos Estudiante');
		$this->engine->display('header.tpl');
		$this->engine->display('cursos_estudiante.tpl');
		$this->engine->display('footer.tpl');
	}
	
	public function run()
	{
		$this->display();
	}
}

$call = new c_cursos_estudiante();
$call->run();

?>