<?php

class Usuario
{
     
    private $idusuario;
    private $nombre;
   

    function __construct()
    {
        $this->idusuario = 0;
        $this->nombre  = "";
     
    }

    function getIdUsuario(){
        return $this->idusuario;
    }

    function getNombre(){
        return $this->nombre;
    }

     
    function setIdUsuario($idusuario){
        $this->idusuario = $idusuario;
    }

    function setNombre($nombre){
        $this->nombre = $nombre;
    }
 
}
