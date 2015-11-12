<?php
include_once('abstractBookType.php'); 

class severalbooks extends booktype {

public $severalbooks = array();
private $count;

public function __construct() {
$this->setCount(0);
}

public function getCount() {
return $this->count;
}

public function setCount($new_count) {
$this->count = $new_count;
}

public function addBooktype($booktype) {
$this->setCount($this->getCount() + 1);
$this->severalbooks[$this->getCount()] = $booktype;
}

public function removeBooktype($booktype) {
$counter = 0;
while ($counter <= $this->getCount()) {
if ($booktype == $this->severalbooks[$counter]) {
for ($x = $counter; $x < $this->getCount(); $x++) {
$this->severalbooks[$x] = $this->severalbooks[$x + 1];
}
$this->setCount($this->getCount() - 1);
}
$counter = counter + 1; 
}
}

public function getInfo(){


foreach ($this->severalbooks as $book) {
 	 echo $book->getInfo();
 	
 }
}

}
?>