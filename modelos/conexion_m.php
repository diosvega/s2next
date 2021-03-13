<?php
session_start();

class Conexion {

public function query($query){


if(isset($query)){

    $link = mysqli_connect("localhost", "evaluacion", "evaluacion", "evaluacion");

    if($link === false){
        die("ERROR: Could not connect to sintegra database. " . mysqli_connect_error());
    }

mysqli_set_charset($link,"utf8mb4");
$rows = mysqli_query($link, $query);

}


return $rows;

	}



}



?>
