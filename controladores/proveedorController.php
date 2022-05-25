<?php

class ProveedorController extends Database{
    public function crearProveedor($proveedor){
        $query ="INSERT INTO proveedor(nombre,nit,correo) VALUES (
        '".$proveedor->getnombre()."',
        '".$proveedor->getnit()."',
        '".$proveedor->getcorreo()."')";
        
        $validator  =$this->sql_ejecutar($query);
        if($validator){
            return "el proveedor se ha creado";
        }else {
            return "error en el proceso de creacion";
        }
    }
    public function obtenerProveedores(){
        $query = "SELECT * FROM proveedor";
        return $this->sql_seleccionar($query);
    }
    public function validarProveedor($proveedor){
        $nombre = $proveedor->getnombre();
        $query = "SELECT * FROM proveedor WHERE nombre='$nombre'";
        $consultaResultado = $this->sql_seleccionar ($query);
        if(count ($consultaResultado) > 0)
            return "El correo no se encuentra disponible";
        return "";
    }
    public function obtenerProveedorByID($proveedor_id)
    {
        $query = "SELECT * FROM proveedor WHERE id_proveedor=$proveedor_id";
        $proveedor = $this->sql_seleccionar($query);
        if(count($proveedor) > 0)
        {
            $proveedorFila = (object) $proveedor[0];
            $proveedor = new Proveedor();
            $proveedor->setnombre($proveedorFila->nombre);
            $proveedor->setnit($proveedorFila->nit);
            $proveedor->setcorreo($proveedorFila->correo);
            return $proveedor;
        }
        else return false;
    }
    public function actualizarProveedor($proveedor,$proveedorID)
    {

        $query = "UPDATE proveedor SET 
        nombre='".$proveedor->getnombre()."',
        nit='".$proveedor->getnit()."',
        correo='".$proveedor->getcorreo()."'
        WHERE id_proveedor='".$proveedorID."' ";
        
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