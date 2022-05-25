<?php
include('plantilla/header.html');
?>
  <div class="container">
      <div class="row">
      <div class="card offset-md-3" style="width: 25rem;">
      <div class="card-header">
            <h2>Agregar Movimiento</h2>
      </div>
        <div class="card-body">
            <form action="#" method="post">
                <div class="container">
                    <div class="row g-3 align-items-center">
                        
                        <div class="col-auto">
                            <label for="cantidad" class="col-form-label">Cantidad de productos:</label>
                        </div>
                        <div class="col-auto">
                            <input type="text" name="cantidad" class="form-control" required
                            value="<?php echo isset($movimientoModelo) ? $movimientoModelo->getcantidad() : "";?>"> 
                        </div>
                        <div class="mb-3">
                            <label for="descripcion_movimiento" class="col-form-label">Descripcion del movimiento:</label>
                            <textarea class="form-control"   name="descripcion_movimiento" class="col-form-label" required><?php echo isset($movimientoModelo) ? $movimientoModelo->getdescripcion_movimiento() : "";?></textarea>  
                        </div>
                        <div class="col-auto">
                            <label for="id_producto" class="col-form-label">Producto:</label>
                            </div>
                        <div class="col-auto">
                            <input type="text" class="form-control"   name="id_producto" class="col-form-label" required
                            value="<?php echo isset($movimientoModelo) ? $movimientoModelo->getid_producto() : "";?>"> 
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                <br/>
                    <input type="radio" name="tipo_movimiento" value="Entrada" checked >Entrada 
                    <input type="radio" name="tipo_movimiento" value="Salida">Salida  <br/><br/>
                    
                    <input class="btn btn-success" type="submit" name="guardar" value="Guardar">
                    <a href="index.php?view=movimientos" class="btn btn-danger">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
      </div>
  </div>
  <?php
include('plantilla/footer.html');
?>