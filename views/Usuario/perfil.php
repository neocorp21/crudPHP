<?php include_once('views/templates/header.php'); ?>

<?php include_once('views/templates/nav.php'); ?>
<section>
<div class="container">
<h1 class="text-center">Listado</h1>
<div class="card text-center">
  <div class="card-header">
Datos del Usuario
  </div>
  <div class="card-body">
  <div class="row no-gutters">
    <div class="col-md">
      <img src="././recursos/pp.jpg" width="250" height="250" >
      
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Contenido del producto </h5>
        <p class="card-text"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. At, quisquam consequu serunt. Eaque excepturi esse est sit velit.</p>
       
        <p class="card-text"><small class="text-muted">Etiqueta</small></p>
      </div>
    </div>
  </div>
  </div>
</div>


<div class="card mb-3" style="max-width: 540px;">
   
</div>


<table class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">nombre</th>
      <th scope="col">clave</th>
      <th scope="col">nombre</th>
      <th scope="col">telefono</th>
      <th scope="col">saldoactual</th>
      <th scope="col">saldoaqu</th>
      
    </tr>
  </thead>
  <tbody>
  <?php /* var_dump($this->MODEL->listarZapatos()) */ ?>
                <?php foreach ($this->MODEL->listar() as $new) : ?>
                  <tr>
                    
                    <td><?php echo $new->idusuario; ?></td>
                    <td><?php echo $new->correo; ?></td>
                    <td><?php echo $new->clave; ?></td>
                    <td><?php echo $new->nombre; ?></td>
                    <td><?php echo $new->telefono; ?></td>
                    <td><?php echo $new->saldoactual; ?></td>
                    <td><?php echo $new->saldoaqu; ?></td>
                    

                  </tr>
                <?php endforeach; ?>
 
  </tbody>
</table>
 
  
</section>
<div class="form-group">
                                        

  <?php include_once('views/templates/footer.php'); ?>