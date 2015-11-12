<?php
require_once('implementorProcesador.php');

class ProcesadorX86 implements procesador{ 
    public function getProcesador(){ echo " 86 bits<br>"; }
}
?>