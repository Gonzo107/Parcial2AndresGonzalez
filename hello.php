﻿<?php

require('configs/include.php');

class c_hello extends super_controller {
	
	public function sumar($a,$b)
	{
		return $a+$b;
	}
	public function display()
	{
		echo "Hello world!</br>";
		echo $this->sumar(4,3);	}
	
	public function run()
	{
		$this->display();
	}
}

$call = new c_hello();
$call->run();

?>