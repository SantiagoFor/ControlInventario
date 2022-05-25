<?php
class movimiento
{
    private $cantidad;
    private $tipo_movimiento;
    private $descripcion_movimiento;
    private $id_producto;
    function __construct(){
        $this-> cantidad= null;
        $this-> tipo_movimiento= null;
        $this-> descripcion_movimiento = null;
        $this-> id_producto= null;
    }
    function getcantidad(){
        return $this->cantidad;
    }
    function setcantidad($cantidad){
        $this->cantidad=$cantidad;
        return $this->cantidad;
    }
    function gettipo_movimiento(){
        return $this->tipo_movimiento;
    }
    function settipo_movimiento($tipo_movimiento){
        $this->tipo_movimiento=$tipo_movimiento;
        return $this->tipo_movimiento;
    }
    function getdescripcion_movimiento(){
        return $this->descripcion_movimiento;
    }
    function setdescripcion_movimiento($descripcion_movimiento){
        $this->descripcion_movimiento=$descripcion_movimiento;
        return $this->descripcion_movimiento;
    }
    function getid_producto(){
        return $this->id_producto;
    }
    function setid_producto($id_producto){
        $this->id_producto=$id_producto;
        return $this->id_producto;
    }
}
