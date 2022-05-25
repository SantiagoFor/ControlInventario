<?php
include('plantilla/header.html');
?>
    <div class="container">
        <div class="row">
            <div class="card ">
                <div class="card-header">
                    <h2>Listado de Proveedores</h2>
                </div>
                <div class="card-body">
                <a href="index.php?view=agregarProveedor" class="btn btn-success">Agregar</a>
                <table class="table table-stripped">
                <thead>
                    <tr>
                        <td>#</td>
                        <td>Nombre</td>
                        <td>Nit</td>
                        <td>Correo</td>
                    </tr>
                </thead>
                <tbody>
                <?php
                $i = 0;
                foreach($dataProveedores as $row)
                {
                    $i++;
                    $fila = (object) $row;
                    echo "
                    <tr>
                        <td>$i </td>
                        <td>$fila->nombre</td>
                        <td>$fila->nit</td>
                        <td>$fila->correo</td>
                        <td><a href='index.php?view=actualizarProveedor&target=$fila->id_proveedor'><button class='btn btn-info'>Actualizar</button></a></td>
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