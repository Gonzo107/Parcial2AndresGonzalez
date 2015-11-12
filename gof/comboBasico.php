<?php
public class comboBasico extends combo{

public combo_basico(){
$this->$descripcion="Hamburguesa, Gaseosa, Papas, Salsa";
}
public getDescription(){
return $this->$descripcion;
}
public setDescripcion($descripcion){
	$this->descripcion=$descripcion;
}
public getValor(){
return 10000;
}
}
?>