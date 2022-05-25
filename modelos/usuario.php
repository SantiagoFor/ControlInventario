<?php
class Usuario
{
    private $rol;
    private $correo;
    private $clave;
    private $cargo;

    function __construct()
    {
        $this->cargo=null;
        $this->clave=null;
        $this->correo=null;
        $this->rol=null;
        $this->celular=null;
    }
    function getrol(){
        return $this->rol;
    }
    function setrol($rol){
        $this->rol=$rol;
        return $this->rol;
    }
    function getcorreo(){
        return $this->correo;
    }
    function setcorreo($correo){
        $this->correo=$correo;
        return $this->correo;
    }
    function getclave(){
        return $this->clave;
    }
    function setclave($clave){
        $this->clave=$clave;
        return $this->clave;
    }
    function getcargo(){
        return $this->cargo;
    }
    function setcargo($cargo){
        $this->cargo=$cargo;
        return $this->cargo;
    }

}   