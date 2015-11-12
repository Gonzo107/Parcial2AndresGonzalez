<?php

require('configs/include.php');

class c_tareaorm extends super_controller {
	
	public function buscar() {
		
		$cod["clerk"]["id"]=$this->post->id;
	$options["clerk"]["lvl2"]="one";
        if(is_empty($this->post->id)){
        	throw_exception("Debe ingresar un id");
        }

	        
	   


	
	$this->orm->connect();
	$this->orm->read_data(array("clerk"),$options,$cod);
	$clerk=$this->orm->get_objects("clerk");
	if (count($clerk)==0) {
		throw_exception("No existe un clerk con el id ingresado");
	}
	 $this->type_warning = "success";
        $this->msg_warning = "Persona encontrada correctamente";
        
        $this->temp_aux = 'message.tpl';
        $this->engine->assign('type_warning',$this->type_warning);
        $this->engine->assign('msg_warning',$this->msg_warning);
	
	$this->engine->assign("clerk1",$clerk[0]);
	}
	public function editar(){
		settype($data,'object');
		echo $this->post->id;
		echo $this->post->name;
		echo $this->post->salary;
		echo $this->post->boss;
		$data->id=$this->post->id;	

		$data->name=$this->post->name;
		$data->salary=$this->post->salary;
		$data->boss=$this->post->boss;
		$clerk=new clerk($data);
		$clerk->auxiliars["id_aux"]=$this->post->id_v;
		
		$this->orm->connect();
		$this->orm->update_data("normal",$clerk,$auxiliars);
		$this->orm->close();

		 $this->type_warning = "success";
        $this->msg_warning = "Persona editada correctamente";
        
        $this->temp_aux = 'message.tpl';
        $this->engine->assign('type_warning',$this->type_warning);
        $this->engine->assign('msg_warning',$this->msg_warning);

	}
	
	public function display() {
		$this->engine->assign('title', "Buscar y editar un clerk");
		$this->engine->display('header.tpl');
		$this->engine->display($this->temp_aux);
		$this->engine->display('tareaorm.tpl');
		$this->engine->display('footer.tpl');
	}
	
	public function run() {
		        try {
		        if (isset($this->get->option)) {
					if ($this->get->option == "buscar")
						$this->{$this->get->option}();
				elseif ($this->get->option == "editar") {
					$this->{$this->get->option}();
				}
				else
					throw_exception("Opción ". $this->get->option." no disponible");
			}
		}
        catch (Exception $e) 
		{
			$this->error=1; $this->msg_warning=$e->getMessage();
			$this->engine->assign('type_warning',$this->type_warning);
			$this->engine->assign('msg_warning',$this->msg_warning);
			$this->temp_aux = 'message.tpl';
		}    
        

		
			
		
		$this->display();
	}
	
}

$call = new c_tareaorm();
$call->run();

?>