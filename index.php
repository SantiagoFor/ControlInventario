<?php
include("controladores/databaseController.php");
include("modelos/usuario.php");
include("modelos/producto.php");
include("modelos/movimiento.php");
include("modelos/proveedor.php");
include("controladores/usuarioController.php");
include("controladores/productoController.php");
include("controladores/proveedorController.php");
include("controladores/movimientoController.php");
session_start();

if(!isset($_GET["view"]))
{
    header("Location: index.php?view=login");
    exit();
}
$obj_usuario = new UsuarioController();
$obj_producto = new productoController();
$obj_proveedor = new proveedorController();
$obj_movimiento= new MovimientoController();
switch($_GET["view"])
{
    case "usuarios":
        $dataUsuarios = $obj_usuario->obtenerUsuarios();
        include("vistas/listadoUsuarios.php");
        break;
    case "productos":
        $dataProductos = $obj_producto->obtenerProductos();
        include("vistas/listadoProductos.php");
        break;
    case "proveedores":
        $dataProveedores = $obj_proveedor->obtenerProveedores();
        include("vistas/listadoProveedores.php");
        break;
    case "movimientos":
        $dataMovimientos = $obj_movimiento->obtenerMovimientos();
        include("vistas/listadomovimientos.php");
        break;
    case "actualizarUsuario":
        if(empty($_GET["target"]))
        {
            header("Location: index.php?view=usuarios");
        }
        $target = $_GET["target"];
        $usuarioModelo = $obj_usuario->obtenerUsuarioByID($target);
        if($usuarioModelo)
        {
            if(isset($_POST["correo"]))
            {
                $usuario = new Usuario();
                $usuario->setcorreo($_POST["correo"]);
                $usuario->setClave(md5($_POST["clave"]));
                $usuario->setRol($_POST["rol"]);
                $usuario->setcargo($_POST["cargo"]);
                $retorno = $obj_usuario->actualizarUsuario($usuario,$target);

                if($retorno)
                {
                    header("Location: index.php?view=usuarios");
                }
                else
                {
                    echo "Ha ocurrido un problema durante el proceso, intenta más tarde";
                }
            }
            include("vistas/nuevoUsuario.php");
        }
        else
        {
            echo "Ese registro no existe";
        }
        break;
    case "actualizarProducto":
        if(empty($_GET["target"]))
        {
            header("Location: index.php?view=productos");
        }
        $target = $_GET["target"];
        $productoModelo = $obj_producto->obtenerProductoByID($target);
        if($productoModelo)
        {
            if(isset($_POST["nombre"]))
        {
                $producto = new Producto();
                $producto->setnombre($_POST["nombre"]);
                $producto->setdescripcion($_POST["descripcion"]);
                $producto->setcantidad($_POST["cantidad"]);
                $producto->setid_proveedor($_POST["id_proveedor"]);
                $retorno = $obj_producto->actualizarProducto($producto,$target);

                if($retorno)
                {
                    header("Location: index.php?view=productos");
                }
                else
                {
                    echo "Ha ocurrido un problema durante el proceso, intenta más tarde";
                }
            }
            include("vistas/nuevoProducto.php");
        }
        else
        {
            echo "Ese registro no existe";
        }
        break;
    case "actualizarProveedor":
        if(empty($_GET["target"]))
        {
            header("Location: index.php?view=Proveedores");
        }
        $target = $_GET["target"];
        $ProveedorModelo = $obj_proveedor->obtenerProveedorByID($target);

        if($ProveedorModelo)
        {
            
            if(isset($_POST["nombre"]))
            {
                $proveedor = new Proveedor();
                $proveedor->setnombre($_POST["nombre"]);
                $proveedor->setnit($_POST["nit"]);
                $proveedor->setcorreo($_POST["correo"]);
                
                $retorno = $obj_proveedor->actualizarProveedor($proveedor,$target);
                
                
                if($retorno)
                {
                    header("Location: index.php?view=proveedores");
                }
                else
                {
                    echo "Ha ocurrido un problema durante el proceso, intenta más tarde";
                }
            }
            include("vistas/nuevoProveedor.php");
        }
        else
        {
            echo "Ese registro no existe";
        }
        break;
    case "actualizarMovimiento":
        if(empty($_GET["target"]))
        {
            header("Location: index.php?view=movimientos");
        }
        $target = $_GET["target"];
        $movimientoModelo = $obj_movimiento->obtenerMovimientoByID($target);
        if($movimientoModelo)
        {
            if(isset($_POST["tipo_movimiento"]))
            {
                $movimiento = new Movimiento();
                $movimiento->setcantidad($_POST["cantidad"]);
                $movimiento->setdescripcion_movimiento($_POST["descripcion_movimiento"]);
                $movimiento->settipo_movimiento($_POST["tipo_movimiento"]);
                $movimiento->setid_producto($_POST["id_producto"]);
                $retorno = $obj_movimiento->actualizarMovimiento($movimiento,$target);

                if($retorno)
                {
                    header("Location: index.php?view=movimientos");
                }
                else
                {
                    echo "Ha ocurrido un problema durante el proceso, intenta más tarde";
                }
            }
            include("vistas/nuevoMovimiento.php");
        }
        else
        {
            echo "Ese registro no existe";
        }
        break;
    case "agregarUsuario":
        if(isset($_POST["correo"]))
        {
            $usuario = new Usuario();
            $usuario->setcorreo($_POST["correo"]);
            $usuario->setClave(md5($_POST["clave"]));
            $usuario->setRol($_POST["rol"]);
            $usuario->setcargo($_POST["cargo"]);
            $validador = $obj_usuario->validarUsuario($usuario);
            if($validador == "")
            {
                $retorno = $obj_usuario->crearUsuario($usuario);
                if($retorno)
                    header("Location: index.php?view=usuarios");
                else
                    echo "Ha ocurrido un problema durante el proceso, intenta mástarde";
            }else{
                echo $validador;
            }
            
            
        }
        include ("vistas/nuevoUsuario.php");
        break;
    case "agregarMovimiento":
        if(isset($_POST["tipo_movimiento"]))
        {
            $movimiento = new Movimiento();
            $movimiento->setcantidad($_POST["cantidad"]);
            $movimiento->settipo_movimiento($_POST["tipo_movimiento"]);
            $movimiento->setdescripcion_movimiento($_POST["descripcion_movimiento"]);
            $movimiento->setid_producto($_POST["id_producto"]);
            $retorno = $obj_movimiento->crearMovimiento($movimiento);
            if($retorno)
                header("Location: index.php?view=movimientos");
            else
                echo "Ha ocurrido un problema durante el proceso, intenta más tarde";
 
        }
        include ("vistas/nuevoMovimiento.php");
        break;
    case "agregarProducto":
        if(isset($_POST["nombre"]))
        {
            $producto = new Producto();
            $producto->setnombre($_POST["nombre"]);
            $producto->setdescripcion($_POST["descripcion"]);
            $producto->setcantidad($_POST["cantidad"]);
            $producto->setid_proveedor($_POST["id_proveedor"]);
            $validador = $obj_producto->validarProducto($producto);
            if($validador == "")
            {
                $retorno = $obj_producto->crearProducto($producto);
                if($retorno)
                    header("Location: index.php?view=productos");
                else
                    echo "Ha ocurrido un problema durante el proceso, intenta mástarde";
            }else{
                echo $validador;
            }
        }
        include ("vistas/nuevoProducto.php");
        break;
    case "agregarProveedor":
        if(isset($_POST["nombre"]))
        {
            $proveedor = new Proveedor();
            $proveedor->setnombre($_POST["nombre"]);
            $proveedor->setnit($_POST["nit"]);
            $proveedor->setcorreo($_POST["correo"]);
            $validador = $obj_proveedor->validarProveedor($proveedor);
            if($validador == "")
            {
                $retorno = $obj_proveedor->crearProveedor($proveedor);
                if($retorno)
                    header("Location: index.php?view=proveedores");
                else
                    echo "Ha ocurrido un problema durante el proceso, intenta mástarde";
            }else{
                echo $validador;
            }
        }
        include ("vistas/nuevoProveedor.php");
        break;
    case "login":
       
        if(isset($_POST["correo"]))
        {
            $usuario = new Usuario();
            $usuario->setCorreo($_POST["correo"]);
            $usuario->setClave(md5($_POST["clave"]));
            $retorno = $obj_usuario->logeoUsuario($usuario);
            echo($retorno);
                if($retorno)
                {
                    header("Location: index.php?view=usuarios");
                }
        }     
        include("vistas/login.php");
        break;    

    default:
        header("Location: index.php?view=login");
        break;
}
