<?php

abstract class booktype{

abstract function getCount();
abstract function setCount($new_count);

abstract function addBooktype($booktype);
abstract function removeBooktype($booktype);

abstract function getInfo();

}

?>