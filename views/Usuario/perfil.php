 include

<section>
  <div class="container">
    <h1 class="text-center">Lista de zapatos</h1>
    <div class="row">
      <div class="col-md-10 mx-auto">
  
        <div class="card">
          <div class="card-body">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>Id</th>
               
                </tr>
              </thead>

              <tbody>
                <?php /* var_dump($this->MODEL->listarZapatos()) */ ?>
                <?php foreach ($this->MODEL->listarUsuario() as $new) : ?>
                  <tr>
                    <td><?php echo $new->idusuario; ?></td>
                    
                     
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


 