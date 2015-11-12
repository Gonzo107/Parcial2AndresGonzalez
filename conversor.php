<?php

require('configs/include.php');

class c_conversor extends super_controller {
	
	public function conversion() {
		if (is_empty($this->post->tasa)) {
			$message1 = "La Tasa de Conversión es obligatoria. ";
			$this->engine->assign('dolares', $this->post->dolares);
		}
		if (is_empty($this->post->dolares)) {
			$message2 = "Los dólares son obligatorios";
			$this->engine->assign('tasa', $this->post->tasa);
		}
		if (!is_empty($message1) || !is_empty($message2))
			throw_exception($message1.$message2);
		if (!is_numeric($this->post->tasa)) {
			$message1 = "La Tasa de conversión debe ser un número. ";
			$this->engine->assign('dolares', $this->post->dolares);
		}
		if (!is_numeric($this->post->dolares)) {
			$message2 = "Los dólares deben ser un número";
			$this->engine->assign('tasa', $this->post->tasa);
		}
		if (!is_empty($message1) || !is_empty($message2))
			throw_exception($message1.$message2);
		
		$this->msg_warning = "Éxito";
		$this->temp_aux = 'message.tpl';
		$this->type_warning = "success";
		$this->engine->assign('type_warning',$this->type_warning);
		$this->engine->assign('msg_warning',$this->msg_warning);
		$this->engine->assign('resultado', $this->post->tasa * $this->post->dolares);
	}
	
	public function display() {
		$this->engine->assign('title', "Conversor");
		$this->engine->display('header.tpl');
		$this->engine->display($this->temp_aux);
		$this->engine->display('conversor.tpl');
		$this->engine->display('footer.tpl');
	}
	
	public function run() {
		try {
			if (isset($this->get->option)) {
				if ($this->get->option == "conversion")
					$this->{$this->get->option}();
				else
					throw_exception("Opción ". $this->get->option." no disponible");
			}
		} catch (Exception $e) {
			$this->error=1;
			$this->msg_warning=$e->getMessage();
			$this->temp_aux = 'message.tpl';
			$this->engine->assign('type_warning',$this->type_warning);
			$this->engine->assign('msg_warning',$this->msg_warning);
		}
		$this->display();
	}
	
}

$call = new c_conversor();
$call->run();

?>