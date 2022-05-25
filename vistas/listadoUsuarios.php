<?php
include('plantilla/header.html');
?>
    <div class="container">
        <div class="row">
            <div class="card ">
                <div class="card-header">
                    <h2>Listado de usuarios</h2>
                </div>
                <div class="card-body">
                <a href="index.php?view=agregarUsuario" class="btn btn-success">Agregar</a>
                <table class="table table-stripped">
                <thead>
                    <tr>
                        <td>#</td>
                        <td>Correo</td>
                        <td>Rol</td>
                        <td>Cargo</td>
                        <td>Actualización</td>
                    </tr>
                </thead>
                <tbody>
                <?php
                $i = 0;
                foreach($dataUsuarios as $row)
                {
                    $i++;
                    $fila = (object) $row;
                    echo "
                    <tr>
                        <td>$i </td>
                        <td>$fila->correo</td>
                        <td>$fila->rol</td>
                        <td>$fila->cargo</td>
                        <td><a href='index.php?view=actualizarUsuario&target=$fila->id_usuario'><button class='btn btn-info'>Actualizar</button></a></td>
                    </tr>
                    ";
                }
                ?>
                </tbody>
            </table>
                </div>
            </div>

        </div>
    </div>
    <?php
include('plantilla/footer.html');
?>