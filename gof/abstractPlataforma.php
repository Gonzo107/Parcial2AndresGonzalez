<?php

abstract class Plataforma{
    protected $procesador;
    
    protected function __construct(procesador $procesador){
        $this->procesador = $procesador;
    }
    
    public function miProcesador(){
        $this->procesador->getProcesador();
    }
    public abstract function mostrarDetalles();
}
?>