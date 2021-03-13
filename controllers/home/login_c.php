<?php
include_once("modelos/login_m.php");
class Controller {
	public $model;
	public function __construct(){
		$this->model = new Model();
	}
	public function invoke(){
		$reslt = $this->model->getlogin();
		if(@$_SESSION['loginsuccess']['action'] == 'login'){
			include 'vistas/dashboard/home_v.php';
		}else{
			include 'vistas/login/login_v.php';
		}
	}


	public function planeacion(){


	}


}




?>
