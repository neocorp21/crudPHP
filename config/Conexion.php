<?php
class Conexion {

    private $conexionBD ;
    private $CONTROLADOR ;
    private $SERVIDOR ;
    private $BASE_DATOS ;
    private $PUERTO ;
    private $USUARIO ;
    private $CLAVE ;
    private $CODIFICACION ;

    private $configuracion = [
     'drive'    => 'mysql',
     'host'     => 'localhost',
     'database' => 'basededatos',
     'port'     => '3306',
     'username' => 'root',
     'password' => '',
     'charset'  => 'utf8mb4'
    ];

    //constructor
    public function __construct()
    {
      $this->CONTROLADOR  = $this->configuracion['drive'];
      $this->SERVIDOR     = $this->configuracion['host'];
      $this->BASE_DATOS   = $this->configuracion['database'];
      $this->PUERTO       = $this->configuracion['port'];
      $this->USUARIO      = $this->configuracion['username'];
      $this->CLAVE        = $this->configuracion['password'];
      $this->CODIFICACION = $this->configuracion['charset'];
    }

    //Funcion conexcion
    public function ConectarBD(){
        try{      
          $url = "{$this->CONTROLADOR}:host={$this->SERVIDOR}:{$this->PUERTO};"."dbname={$this->BASE_DATOS};charset={$this->CODIFICACION}";
          //conexion a la base
          $this->conexionBD = new PDO($url,$this->USUARIO,$this->CLAVE);
          //Mensaje
          return $this->conexionBD;
        }catch (\Throwable $th) {
          throw $th;
        }
    }
}
