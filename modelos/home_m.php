<?php
include_once("modelos/conexion_m.php");

class Model {
	public $model;
	public function __construct()
        {
            $this->conexion = new Conexion();

	}
        

public function menu()
        {

$query="SELECT
id,
nombre,
padre,
descripcion
FROM menu
order by 1 asc;";

	$result = $this->conexion->query($query);
	$num_rows=mysqli_num_rows($result);
    
    return($result);
}

public function selectform()
        {

$query='SELECT
id,
nombre,
padre,
descripcion
FROM menu
where
padre = ""
order by 1 asc;
';

	$result = $this->conexion->query($query);
	$num_rows=mysqli_num_rows($result);
    
    return($result);
}



}

   
