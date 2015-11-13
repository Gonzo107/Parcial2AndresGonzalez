<?php

require('configs/include.php');
class c_calificar_parque extends super_controller {
	
	public function calificar(){
		settype($data,'object');
		$data->fecha=date("y-m-d");
		$data->calificacion=$this->post->calificacion;
		$data->parque=$this->post->parque;
	$calificacion= new calificacion($data);
	if ($calificacion->get("calificacion") < 0|| $calificacion->get("calificacion") >5) {
		throw_exception("Debe ingresar una calificacion entre 1 y 5");
		}
		
		
		$this->orm->connect();
		$this->orm->update_data("normal", $calificacion);
		$this->orm->close();
		$this->type_warning="sucess";
		$this->msg_warning="parque calificado correctamente";

		$this->temp_aux='message.tpl';
		$this->engine->assign('type_warning',$this->type_warning);
		$this->engine->assign('msg_warning',$this->msg_warning);
	}
	public function display()
	{
	$this->engine->assign("title","Calificar parque");
	
	$this->engine->assign("codigo",$this->get->parque);
	$this->engine->assign("nombre",$this->get->nparque);
	$this->engine->display("header.tpl");
	$this->engine->display($this->temp_aux);
	$this->engine->display("calificar_parque.tpl");
	$this->engine->display("footer.tpl");
	}
	
	public function run()
	{
		try{
			if(isset($this->get->option)){
				$this->{$this->get->option}();
			}
		}catch(Exception $e){
			$this->error=1;
			$this->msg_warning=$e->getMessage();
			$this->engine->assign('type_warning',$this->type_warning);
			$this->engine->assign('msg_warning',$this->msg_warning);
			$this->temp_aux='message.tpl';
		}
		$this->display();
	}
}

$call = new c_calificar_parque();
$call->run();

?>