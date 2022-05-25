<?php

class ProductoController extends Database{
    public function obtenerProductos(){
        $query = "Select * from producto";
        return $this->sql_seleccionar($query);
    }
    public function crearProducto($producto){
        $query ="INSERT INTO producto(descripcion,cantidad,nombre,id_proveedor) VALUES (
        '".$producto->getdescripcion()."',
        ".$producto->getcantidad().",
        '".$producto->getnombre()."',
        ".$producto->getid_proveedor().")";
        
        $validator  =$this->sql_ejecutar($query);
        if($validator){
            return "el producto se ha creado";
        }else {
            return "error en el proceso de creacion";
        }
    }
    public function validarProducto($producto){
        $nombre = $producto->getnombre();
        $query = "SELECT * FROM producto WHERE nombre='$nombre'";
        $consultaResultado = $this->sql_seleccionar ($query);
        if(count ($consultaResultado) > 0)
            return "El correo no se encuentra disponible";
        return "";
    }
    public function obtenerProductoByID($producto_id)
    {
        $query = "SELECT * FROM producto WHERE id_producto=$producto_id";
        $producto = $this->sql_seleccionar($query);
        if(count($producto) > 0)
        {
            $productoFila = (object) $producto[0];
            $producto = new Producto();
            $producto->setnombre($productoFila->nombre);
            $producto->setdescripcion($productoFila->descripcion);
            $producto->setcantidad($productoFila->cantidad);
            $producto->setid_proveedor($productoFila->id_proveedor);
            return $producto;
        }
        else return false;
    }
    public function actualizarProducto($producto,$productoID)
    {
       
        $query = "UPDATE producto SET 
        nombre='".$producto->getnombre()."',
        descripcion='".$producto->getdescripcion()."',
        cantidad=".$producto->getcantidad().",
        id_proveedor=".$producto->getid_proveedor()."
        WHERE id_producto='".$productoID."' ";
        
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