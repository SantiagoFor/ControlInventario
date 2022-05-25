<?php
include('plantilla/header.html');
?>
  <div class="container">
      <div class="row col-6">
      <div class="card col  offset-md-3" style="width: 25rem;">
      <div class="card-header">
            <h2>Agregar Producto</h2>
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
                            value="<?php echo isset($productoModelo) ? $productoModelo->getnombre() : "";?>"> 
                        </div>
                        <div class="mb-3">
                            <label for="descripcion" class="form-label">Descripcion:</label>
                            <textarea name="descripcion" class="form-control" required><?php echo isset($productoModelo) ? $productoModelo->getdescripcion() : "";?></textarea> 
                        </div>
                        <div class="col-auto">
                            <label for="cantidad" class="col-form-label">Cantidad:</label>
                        </div>
                        <div class="col-auto">
                            <input type="text" class="form-control"   name="cantidad" class="col-form-label" required
                            value="<?php echo isset($productoModelo) ? $productoModelo->getcantidad() : "";?>"> 
                        </div>
                        
                        <div class="col-auto">
                            <label for="id_proveedor" class="col-form-label">id_proveedor</label>
                        </div>
                        <div class="col-auto">
                            <input type="text" id="id_proveedor"  name="id_proveedor" class="form-control" required 
                            value="<?php echo isset($productoModelo) ? $productoModelo->getid_proveedor() : "";?>"
                            >
                        </div>
                    </div>
                </div>
                <div class="col-auto">  <br/>
                    
                    <input class="btn btn-success" type="submit" name="guardar" value="Guardar">
                    <a href="index.php?view=productos" class="btn btn-danger">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
      </div>
  </div>
  <?php
include('plantilla/footer.html');
?>
    