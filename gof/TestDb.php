<?php

include_once('database.php'); 
$base=database::obtenerConexion("Work","Work.com","User","user");

echo "Singleton DB:"."\r\n".$base->dbName;
 $base1=database::obtenerConexion("","","","");
 echo $base1->dbName;





?>