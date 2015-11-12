<?php
public abstract class carne extends decorator{
protected combo $combo;
public carne(combo $combo){
$this->combo=$combo;
}
public abstract getDescription(){
return $this->combo->getdescripcion()+ "porcion de carne";
}
public abstract getvalor(){
return 2000+$this->combo->getvalor();
}
}
?>