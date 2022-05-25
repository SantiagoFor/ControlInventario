<?php
include('plantilla/header.html');
?>
  <div class="container">
      <div class="row">
      <div class="card offset-md-3" style="width: 25rem;">
      <div class="card-header">
            <h2>Agregar Usuario</h2>
      </div>
        <div class="card-body">
            <form action="#" method="post">
                <div class="container">
                    <div class="row g-3 align-items-center">
                        
                        <div class="col-auto">
                            <label for="correo" class="col-form-label">Correo:</label>
                        </div>
                        <div class="col-auto">
                            <input type="email" name="correo" class="form-control" required
                            value="<?php echo isset($usuarioModelo) ? $usuarioModelo->getcorreo() : "";?>"> 
                        </div>
                        <div class="col-auto">
                            <label for="password" class="col-form-label">Clave:</label>
                            </div>
                        <div class="col-auto">
                            <input type="password" class="form-control"   name="clave" class="col-form-label" required> 
                        </div>
                        <div class="col-auto">
                            <label for="nombre" class="col-form-label">Cargo</label>
                        </div>
                        <div class="col-auto">
                            <input type="text" id="cargo"  name="cargo" class="form-control" required 
                            value="<?php echo isset($usuarioModelo) ? $usuarioModelo->getcargo() : "";?>"
                            >
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                <br/>
                    Rol: <input type="radio" name="rol" value="Admin" checked >Administrador 
                    <input type="radio" name="rol" value="Estandar">Estandar  <br/><br/>
                    
                    <input class="btn btn-success" type="submit" name="guardar" value="Guardar">
                    <a href="index.php?view=usuarios" class="btn btn-danger">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
      </div>
  </div>
  <?php
include('plantilla/footer.html');
?>
    