<?php
require_once('windows.php');
require_once('linux.php');
require_once('procesadorX86.php');
require_once('procesadorX64.php');  

$procesador64 = new procesadorX64();
$procesador86 = new procesadorX86();
$windows = new Windows($procesador64);
$windows->mostrarDetalles();
$windows->miProcesador();
$windows = new Windows($procesador86);
$windows->mostrarDetalles();
$windows->miProcesador();
$linux = new Linux($procesador64);
$linux->mostrarDetalles();
$linux->miProcesador();
$linux = new Linux($procesador86);
$linux->mostrarDetalles();
$linux->miProcesador();

    
?>