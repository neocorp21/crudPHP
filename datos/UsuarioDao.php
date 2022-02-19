<?php

//IMPORTAMOS LA CONEXION
include_once('./config/Conexion.php');

//OPCIONAL YA QUE TU CONTROLLADOR TIENE A LOS DATOS
include_once('./entidad/Usuario.php');

class UsuarioDAO
{

  public $PDO;

  public function __construct()
  {
    try {  //inializamos la clase conexion
      $this->PDO = new Conexion();
    } catch (\Throwable $th) {
      throw $th;
    }
  }

  public function registrar(Usuario $data)
  {
    try {
      $query = "INSERT INTO usuario ( correo, clave, nombre, telefono,foto ,saldoactual, saldoaqu) VALUES(?,?,?,?,?,0,0)";
      $stm = $this->PDO->ConectarBD()->prepare($query)->execute(
        array(
          $data->getCorreo(),
          $data->getClave(),
          $data->getNombre(),
          $data->getFoto(),
          $data->getTelefono(),
          $data->getSaldoActual(),
          $data->getSaldoAqu() 

          
          $resultado = $this->MODEL->registrar($alm);
        )
      );
      return $stm;
    } catch (\Throwable $th) {
      throw $th;
    }
  }

  public function listar()
  {
    try {
      $query = " Select * from usuario";
      $stm = $this->PDO->ConectarBD()->prepare($query);
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_OBJ);
    } catch (\Throwable $th) {
      throw $th;
    }
  }
 

  public function success($message ="") {
    $resultado = '
    <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Message!</strong> '.$message.'
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    ';
    echo $resultado;
  }

  public function error($message='') {
    $resultado = '
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
         <strong>Message!</strong> '.$message.'
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    ';
    echo $resultado;
  }
}
