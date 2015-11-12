<?php
require_once('abstractPlataforma.php');

class Windows extends Plataforma{ 
      
    public function __construct(procesador $procesador){
        parent::__construct($procesador);
    }
   
    public function mostrarDetalles(){    
        echo "Plataforma Windows ";
    }
}
?>