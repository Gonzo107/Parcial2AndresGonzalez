<?php
public class comboFamiliar extends combo{

public comboFamiliar(){
$this->$descripcion="Hamburguesa gigante,Papas grandes, Gaseosa grande,Salsa,Queso,";
}
public getDescription(){
return $this->descripcion;
}
public setDescripcion($descripcion){
	$this->descripcion=$descripcion;
}
public getPrecio(){
return 20000;
}
}
?>