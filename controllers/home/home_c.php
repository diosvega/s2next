<?php

include_once("modelos/home_m.php");

class Controller{
	public $model;

	public function __construct(){
		$this->model = new Model();		
	}


	public function invoke(){

	$datos = $this->model->menu();
	$selectform = $this->model->selectform();
	$this->datos=$datos;
	$this->selectform = $selectform;
	$this->view('vistas/home/home_v.php');

}
	public function view($view){

	$this->view = $view;
	include 'vistas/layouts/header.php';

	}

}

?>





