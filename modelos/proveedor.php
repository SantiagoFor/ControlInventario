<?php
class proveedor
{
    private $nombre;
    private $nit;
    private $correo;
    function __construct(){
        $this->nombre=null;
        $this->nit=null;
        $this->correo=null;
    }
    function getnombre(){
        return $this->nombre;
    }
    function setnombre($nombre){
        $this->nombre=$nombre;
        return $this->nombre;
    }
    function getnit(){
        return $this->nit;
    }
    function setnit($nit){
        $this->nit=$nit;
        return $this->nit;
    }
    function getcorreo(){
        return $this->correo;
    }
    function setcorreo($correo){
        $this->correo=$correo;
        return $this->correo;
    }
}