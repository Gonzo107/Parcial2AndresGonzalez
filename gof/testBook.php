<?php

include_once('abstractBookType.php'); 
include_once("sb.php");
include_once('book.php');

$libro1 = new book('libro1','Juan');
$libro2 = new book('libro2','Pedro');
$libro3 = new book('libro3','julian');
$libro4 = new book('libro4','Domingo');
$libro5 = new book('libro5','Placido');
$edicionEspecial = new severalbooks();
$edicionEspecial->addBooktype($libro3);
$edicionEspecial->addBooktype($libro4);
$edicionEspecial->addBooktype($libro5);
$librosPrincipales = new severalbooks();
$librosPrincipales->addBooktype($libro1);
$librosPrincipales->addBooktype($libro2);
$librosPrincipales->addBooktype($edicionEspecial);

 $librosPrincipales->getInfo();
?>