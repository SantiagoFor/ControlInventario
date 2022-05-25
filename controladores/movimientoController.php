<?php

class MovimientoController extends Database{
    public function obtenerMovimientos(){
        $query = "Select * from movimiento";
        return $this->sql_seleccionar($query);
    }
    public function crearMovimiento($movimiento){
        $query ="INSERT INTO movimiento(cantidad,tipo_movimiento,descripcion_movimiento,id_producto) VALUES (
        '".$movimiento->getcantidad()."',
        '".$movimiento->gettipo_movimiento()."',
        '".$movimiento->getdescripcion_movimiento()."',
        ".$movimiento->getid_producto().")";
        
        $validator  =$this->sql_ejecutar($query);
        if($validator){
            return "el movimiento se ha creado";
        }else {
            return "error en el proceso de creacion";
        }
    }
    public function obtenerMovimientoByID($movimiento_id)
    {
        $query = "SELECT * FROM movimiento WHERE id_movimiento=$movimiento_id";
        $movimiento = $this->sql_seleccionar($query);
        if(count($movimiento) > 0)
        {
            $movimientoFila = (object) $movimiento[0];
            $movimiento = new Movimiento();
            $movimiento->setcantidad($movimientoFila->cantidad);
            $movimiento->settipo_movimiento($movimientoFila->tipo_movimiento);
            $movimiento->setdescripcion_movimiento($movimientoFila->descripcion_movimiento);
            $movimiento->setid_producto($movimientoFila->id_producto);
            return $movimiento;

        }
        else return false;
    }
    public function actualizarMovimiento($movimiento,$movimiento_id)
    {
       
        $query = "UPDATE movimiento SET 
        cantidad=".$movimiento->getcantidad().",
        tipo_movimiento='".$movimiento->gettipo_movimiento()."',
        descripcion_movimiento='".$movimiento->getdescripcion_movimiento()."',
        id_producto=".$movimiento->getid_producto()."
        WHERE id_movimiento=".$movimiento_id."";
        echo($query);
        $validador = $this->sql_ejecutar($query);
        if($validador)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}