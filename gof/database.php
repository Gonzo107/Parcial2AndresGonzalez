<?php
class database {
     
    public $dbName = null, $dbHost = null, $dbPass = null, $dbUser = null;
    private static $instance = null;
     
    private function __construct($name,$host,$user,$pass) {
         
        // Constructor de la clase
         
        $this->dbName = $name;
        $this->dbHost = $host;
        $this->dbUser = $user;
        $this->dbPass = $pass;
 
       
    }
     
    public static function obtenerConexion($name,$host,$user,$pass) {
         
        // Check if instance is already exists      
        if(static::$instance == null) {
            static::$instance = new database($name,$host,$user,$pass);
        }
         
        return static::$instance;
         
    }
    private function insertar()
    {

    }
    private function eliminar()
    {

    }
     
    private function actualizar()
    {

    }
     
   
     
}
?>