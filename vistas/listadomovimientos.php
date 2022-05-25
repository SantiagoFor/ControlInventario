<?php
include('plantilla/header.html');
?>
    <div class="container">
        <div class="row">
            <div class="card ">
                <div class="card-header">
                    <h2>Listado de Movimientos</h2>
                </div>
                <div class="card-body">
                <a href="index.php?view=agregarMovimiento" class="btn btn-success">Agregar</a>
                <table class="table table-stripped">
                <thead>
                    <tr>
                        <td>#</td>
                        <td>Cantidad</td>
                        <td>Tipo movimiento</td>
                        <td>Descripcion movimiento</td>
                        <td>id_producto</td>
                        <td>Actualización</td>
                    </tr>
                </thead>
                <tbody>
                <?php
                $i = 0;
                foreach($dataMovimientos as $row)
                {
                    $i++;
                    $fila = (object) $row;
                    echo "
                    <tr>
                        <td>$i </td>
                        <td>$fila->cantidad</td>
                        <td>$fila->tipo_movimiento</td>
                        <td>$fila->descripcion_movimiento</td>
                        <td>$fila->id_producto</td>
                        <td><a href='index.php?view=actualizarMovimiento&target=$fila->id_movimiento'><button class='btn btn-info'>Actualizar</button></a></td>
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