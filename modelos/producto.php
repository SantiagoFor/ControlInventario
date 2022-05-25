<?php
class Producto
{
    private $descripcion;
    private $cantidad;
    private $nombre;
    private $id_proveedor;
    function __construct(){
        $this->descripcion=null;
        $this->cantidad=null;
        $this->nombre=null;
        $this->id_proveedor=null;
        
    }
    function getdescripcion(){
        return $this->descripcion;
    }
    function setdescripcion($descripcion){
        $this->descripcion=$descripcion;
        return $this->descripcion;
    }
    function getcantidad(){
        return $this->cantidad;
    }
    function setcantidad($cantidad){
        $this->cantidad=$cantidad;
        return $this->cantidad;
    }

    function getnombre(){
        return $this->nombre;
    }
    function setnombre($nombre){
        $this->nombre=$nombre;
        return $this->nombre;
    }

    function getid_proveedor(){
        return $this->id_proveedor;
    }
    function setid_proveedor($id_proveedor){
        $this->id_proveedor=$id_proveedor;
        return $this->id_proveedor;
    }
}    