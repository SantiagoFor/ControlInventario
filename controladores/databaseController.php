<?php

class Database
{
    public $settings;
    public $conexion;
    public $query;
    public $error;
    public $last_id;
    public $affected_rows;

	function getSettings()
	{
		$this->settings['host'] = 'localhost';
		$this->settings['base'] = 'controlinventario';
		$this->settings['usuario'] = 'root';
		$this->settings['pass'] = '';
		
		return $this->settings;
	}

    
    function open() {
        $settings = $this->getSettings();
        $host = $settings['host'];
        $usuario = $settings['usuario'];
        $pass = $settings['pass'];
        $base = $settings['base'];

        $mysqli = new mysqli($host, $usuario, $pass, $base);
        $mysqli->set_charset("utf8");
        if ($mysqli->connect_errno) {
            $this->error = "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
            $this->conexion = false;
        }
        else
            $this->conexion = $mysqli;
    }

    function getLastId()
    {
        return $this->last_id;
    }

    function getAffectedRows()
    {
        return $this->affected_rows;
    }

    function sql_ejecutar($query)
    {
        $this->open();
        $this->conexion->query($query);
        $this->last_id = $this->conexion->insert_id;
        $this->affected_rows = $this->conexion->affected_rows;
        $retorno = $this->conexion->affected_rows;
        $this->close();
        return $retorno;
    }

    function sql_seleccionar($query)
    {
        $this->open();

        $resultado = $this->conexion->query($query);
        if($resultado)
        {
            $retorno = [];
            while($row = $resultado->fetch_assoc())
            {$retorno[] = $row;}
        }            
        else $retorno = [];

        $this->close();

        return $retorno;

    }

    function errors()
    {
        return $this->error;
    }

    function close()
    {
        $this->conexion->close();
    }

}