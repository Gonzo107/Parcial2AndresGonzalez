<?php

require('configs/include.php');

class c_agregar_parque extends super_controller {

	public function agregar(){
		$parque=new parque($this->post);
		if(is_empty($parque->get('codigo'))){
			throw_exception("Debe ingresar un codigo");
		}
		if($parque->get("nivel")=="alto"|| $parque->get("nivel")=="bajo"){
			
		}else{
			throw_exception("El nivel debe de ser alto o bajo");
		}
		if($parque->get("municipio")=="medellin"|| $parque->get("municipio")=="rionegro"|| $parque->get("municipio")=="la estrella"|| $parque->get(" municipio")=="copacabana"|| $parque->get(" municipio")=="guatape") {
			
		}else{
			throw_exception("El municipio debe de ser medellin, rionegro, la estrella, copacabana o guatape");
		}
		print_r($parque);
		$this->orm->connect();
		$this->orm->insert_data("normal", $parque);
		$this->orm->close();
		settype($data,'object');
		$data->fecha=date("y-m-d");
		$data->calificacion=0;
		$data->parque=$parque->get("codigo");
		$calificacion= new calificacion($data);
		$this->orm->connect();
		$this->orm->insert_data("normal", $calificacion);
		$this->orm->close();
		$this->type_warning="sucess";
		$this->msg_warning="parque agregado correctamente";

		$this->temp_aux='message.tpl';
		$this->engine->assign('type_warning',$this->type_warning);
		$this->engine->assign('msg_warning',$this->msg_warning);
	}

	public function display(){		
		$this->engine->display('header.tpl');
		$this->engine->display($this->temp_aux);
		$this->engine->display('agregar_parque.tpl');
		$this->engine->display('footer.tpl');
	}
	
	public function run(){
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

$call = new c_agregar_parque();
$call->run();

?>