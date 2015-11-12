<?php

include_once('abstractBookType.php');

class book extends booktype {

public $name;
public $author;

function __construct($nombre, $autor) 
{
$this->name = $nombre;
$this->author = $autor;
}

function getCount() {
return 1;
}

function setCount($new_count) {
return FALSE;
}

function addBooktype($booktype) {
return FALSE;
}

function removeBooktype($booktype) {
return FALSE;
}

function getInfo(){
return 'Nombre: ' . $this->name . ', Autor: ' . $this->author." <br>  " ; 
}

}

?>