<?php
public class comboEspecial extends combo{

public combo_especial(){
$this->$descripcion="Hamburguesa grande,Papas grandes,Gaseosa grande,Salsa,Queso,Pepinillos,";
}
public getDescription(){
return $this->$descripcion;
}
public setDescripcion($descripcion){
	$this->descripcion=$descripcion;
}
public getPrecio(){
return 15000;
}
}
?>