<?php
include_once("../../modelos/conexion_m.php");

class Model {
	public $model;
	public function __construct()
        {
            $this->conexion = new Conexion();

	}
        
public function eliminar($id)
        {

$query="DELETE FROM menu WHERE (id = '".$id."');";

	$result = $this->conexion->query($query);
	$num_rows=mysqli_num_rows($result);
    
    return($result);

}

public function edicionid($id)
        {

$query="SELECT
id,
nombre,
padre,
descripcion
FROM menu
where
id = ".$id.";";

	$result = $this->conexion->query($query);
	$num_rows=mysqli_num_rows($result);
    
    return($result);

}

public function crear($nombre, $padre, $descripcion)
        {

$query="INSERT INTO menu (`nombre`, `padre`, `descripcion`) VALUES ('".$nombre."', '".$padre."', '".$descripcion."');";

	$result = $this->conexion->query($query);
	$num_rows=mysqli_num_rows($result);
    
    return($result);

}

public function update($id,$padre,$nombre,$descripcion)
        {
$query="UPDATE menu SET `nombre` = '".$nombre."', `padre` = '".$padre."', `descripcion` = '".$descripcion."' WHERE (`id` = '".$id."');";

	$result = $this->conexion->query($query);
	$num_rows=mysqli_num_rows($result);
    
    return($result);

}

}

   
