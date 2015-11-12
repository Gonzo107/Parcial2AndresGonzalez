<?php

require('configs/include.php');

class c_tarea2 extends super_controller {
	
	public function display()
	{
		settype($data,'object');

		$data->id="1";
		$data->name="pedro";
		$data->salary="1000";
		$data->boss="1";
		settype($data1,'object');

		$data1->id="2";
		$data1->name="juan";
		$data1->salary="1005";
		$data1->boss="2";
		settype($data2,'object');

		$data2->id="3";
		$data2->name="Carlos";
		$data2->salary="2000";
		$data2->boss="1";
		settype($data3,'object');

		$data3->id="4";

		$data3->name="Luisa";
		$data3->salary="10000";
		$data3->boss="3";

		$clerk1=new clerk($data);
		$clerk2=new clerk($data1);
		$clerk3=new clerk($data2);
		$clerk4=new clerk($data3);

		$clerks=array($clerk1,$clerk2,$clerk3,$clerk4);

		$mayor=$clerk1->mayor_salario($clerks);
		$prom=clerk::promedio_salario($clerks);
		$this->engine->assign('mayor',$mayor);
$this->engine->assign('prom',$prom);
$this->engine->assign('clerks',$clerks);


		$this->engine->assign('title',$this->gvar['n_index']);
		
		$this->engine->display('header.tpl');
		
		$this->engine->display('tarea2.tpl');
		$this->engine->display('footer.tpl');
	}

	public function run()
	{
		$this->display();
	}
}

$call = new c_tarea2();
$call->run();

?>