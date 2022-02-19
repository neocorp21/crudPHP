<?php

//IMPORTANDO La entidad
include_once('./entidad/Usuario.php');

//IMPORTANDO DATOS-Consulta
include_once('./datos/UsuarioDao.php');


class Control
{

  public $MODEL;

  public function __construct()
  {
    $this->MODEL = new Usuario(); //Entidad
  }

  //VISTA POR DEFECTO
  public function index()
  {
    include_once('views/Usuario/perfil.php');
  }

  public function lista()
  {
    include_once('views/Usuario/perfil.php');
  }

 
}
