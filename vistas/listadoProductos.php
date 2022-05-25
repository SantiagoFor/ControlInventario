<?php
include('plantilla/header.html');
?>
    <div class="container">
        <div class="row">
            <div class="card ">
                <div class="card-header">
                    <h2>Listado de Productos</h2>
                </div>
                <div class="card-body">
                <a href="index.php?view=agregarProducto" class="btn btn-success">Agregar</a>
                <table class="table table-stripped">
                <thead>
                    <tr>
                        <td>#</td>
                        <td>Nombre</td>
                        <td>Descripcion</td>
                        <td>Cantidad</td>
                        <td>id_proveedor</td>
                        <td>Actualización</td>
                    </tr>
                </thead>
                <tbody>
                <?php
                $i = 0;
                foreach($dataProductos as $row)
                {
                    $i++;
                    $fila = (object) $row;
                    echo "
                    <tr>
                        <td>$i </td>
                        <td>$fila->nombre</td>
                        <td>$fila->descripcion</td>
                        <td>$fila->cantidad</td>
                        <td>$fila->id_proveedor</td>
                        <td><a href='index.php?view=actualizarProducto&target=$fila->id_producto'><button class='btn btn-info'>Actualizar</button></a></td>
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