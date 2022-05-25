<?php
include('plantilla/header.html');
?>
  <div class="container">
      <div class="row col-6">
      <div class="card col  offset-md-3" style="width: 25rem;">
      <div class="card-header">
            <h2>Agregar Proveedor</h2>
      </div>
        <div class="card-body">
            <form action="#" method="post">
                <div class="container">
                    <div class="row g-3 align-items-center">
                  
                        <div class="col-auto">
                            <label for="nombre" class="col-form-label">Nombre:</label>
                        </div>
                        <div class="col-auto">
                            <input type="text" class="form-control"   name="nombre" class="col-form-label" required
                            value="<?php echo isset($ProveedorModelo) ? $ProveedorModelo->getnombre() : "";?>"> 
                        </div>
                        <div class="col-auto">
                            <label for="nit" class="col-form-label">Nit:</label>
                        </div>
                        <div class="col-auto">
                            <input type="text" class="form-control"   name="nit" class="col-form-label" required
                            value="<?php echo isset($ProveedorModelo) ? $ProveedorModelo->getnit() : "";?>"> 
                        </div>
                        
                        <div class="col-auto">
                            <label for="id_proveedor" class="col-form-label">Correo:</label>
                        </div>
                        <div class="col-auto">
                            <input type="text" id="correo"  name="correo" class="form-control" required 
                            value="<?php echo isset($ProveedorModelo) ? $ProveedorModelo->getcorreo() : "";?>"
                            >
                        </div>
                    </div>
                </div>
                <div class="col-auto">  <br/>
                    
                    <input class="btn btn-success" type="submit" name="guardar" value="Guardar">
                    <a href="index.php?view=proveedores" class="btn btn-danger">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
      </div>
  </div>
  <?php
include('plantilla/footer.html');
?>
    