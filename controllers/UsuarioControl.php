<?php

//IMPORTANDO La entidad
include_once('./entidad/Usuario.php');

//IMPORTANDO DATOS-Consulta
include_once('./datos/UsuarioDao.php');


class UsuarioControl
{

  public $MODEL;

  public function __construct()
  {
    $this->MODEL = new UsuarioDAO(); //Datos
  }

  //VISTA POR DEFECTO
  public function index()
  {
    include_once('views/Usuario/perfil.php');//listado
  }

  public function lista()
  {
    include_once('views/Usuario/perfil.php');
  }

  //GUARDAR ZAPATO
  public function guardar()
  {
  
    try {
      $alm = new Usuario(); //INSTANCIA DE MI CLASE Zapato Class
     
      $alm->setCorreo($_POST['txtcorreo']);
      $alm->setClave($_POST['txtclave']);
      $alm->setNombre($_POST['txtnombre']);
      $alm->setFoto($_POST['txtfoto']);
      $alm->setTelefono($_POST['txttelefono']);
       



      $resultado = $this->MODEL->registrar($alm);
      if ($resultado) {
        $msg = "Correctamente";
        echo $this->MODEL->success($msg);
        include_once('views/zapato/lista.php');
      }
    } catch (\Throwable $th) {
      throw $th;
    }
  }
 
}
