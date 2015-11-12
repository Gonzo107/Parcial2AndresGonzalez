<?php
require_once('implementorProcesador.php');

class ProcesadorX64 implements procesador{ 
    public function getProcesador(){ echo " 64 bits<br>"; }
}
?>