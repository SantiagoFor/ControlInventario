<?php

class UsuarioController extends Database{
    public function crearUsuario($usuario){
        $query ="INSERT INTO usuario(rol,correo,clave,cargo) VALUES (
        '".$usuario->getrol()."',
        '".$usuario->getcorreo()."',
        '".$usuario->getclave()."',
        '".$usuario->getcargo()."')";
        
        $validator  =$this->sql_ejecutar($query);
        if($validator){
            return "el usuario se ha creado";
        }else {
            return "error en el proceso de creacion";
        }
    }
    public function obtenerUsuarios(){
        $query = "SELECT * FROM usuario";
        return $this->sql_seleccionar($query);
    }
    public function actualizarUsuario($usuario,$usuarioID)
    {
       
        $query = "UPDATE usuario SET 
        rol='".$usuario->getRol()."',
        correo='".$usuario->getcorreo()."',
        clave='".$usuario->getclave()."',
        cargo='".$usuario->getcargo()."'
        WHERE id_usuario='".$usuarioID."' ";
        
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
    public function obtenerUsuarioByID($user_id)
    {
        $query = "SELECT * FROM usuario WHERE id_usuario='$user_id'";
        $usuarios = $this->sql_seleccionar($query);
        if(count($usuarios) > 0)
        {
            $usuarioFila = (object) $usuarios[0];
            $usuario = new Usuario();
            $usuario->setrol($usuarioFila->rol);
            $usuario->setcorreo($usuarioFila->correo);
            $usuario->setclave($usuarioFila->clave);
            $usuario->setcargo($usuarioFila->cargo);
            return $usuario;
        }
        else return false;
    }
    
    public function validarUsuario($usuario){
        $correo = $usuario->getcorreo();
        $query = "SELECT * FROM usuario WHERE correo='$correo'";
        $consultaResultado = $this->sql_seleccionar ($query);
        if(count ($consultaResultado) > 0)
            return "El correo no se encuentra disponible";
        return "";
    }
    public function logeoUsuario($usuario){
        $correo = $usuario->getcorreo();
        $clave = $usuario->getclave();
        $query = "SELECT * FROM usuario WHERE correo='$correo' and clave='$clave'";
        $consultaResultado = $this->sql_seleccionar($query);
        if(count($consultaResultado)==1)
        {
            header("Location: index.php?view=usuarios");
        }
        else
        {
            echo "El usuario o la contraseña no estan en la base de datos";
        }
    }
}