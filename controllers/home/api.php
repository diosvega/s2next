<?php


 	require_once("Rest.inc.php");
	include_once("../../modelos/funciones_m.php");

	class API extends REST {
	
		public $data = "";
		

		public function __construct(){
		$this->model = new Model();
		parent::__construct();				// Init parent contructor
		}					
		// Dynmically call the method based on the query string		 
		public function processApi(){
			$func = strtolower(trim(str_replace("/","",$_REQUEST['x'])));
			if((int)method_exists($this,$func) > 0)
				$this->$func();
			else
				$this->response('',404); // If the method not exist with in this class "Page not found".
		}

		private function eliminar(){
			$id=$_POST['id'];
			$eliminar = $this->model->eliminar($id);

		}

		private function editar(){
			$id=$_POST['id'];


			$edicionid = $this->model->edicionid($id);
			
			foreach($edicionid as $key=>$row){


			$html='<form method="post" action="" name="formCreateUser" accept-charset="UTF-8" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data" id="form">';
			$html.='<div class="form-group">';
			$html.='<label for="exampleFormControlSelect1">Menu Padre</label>';
			$html.='<select class="form-control" id="padre1" name="padre1">';
			$html.='<option selectd>'.$row['padre'].'</option>';
			$html.='</select>';
			$html.='</div>';
			$html.='<div class="form-group">';
			$html.='<label for="name">nombre:</label>';
			$html.='<input type="text" class="form-control" id="nombre1" name="nombre1" aria-describedby="nombre" value="'.$row['nombre'].'" placeholder="nombre">';
			$html.='</div>';
			$html.='<div class="form-group">';
			$html.='<label for="descripcion">Descripcion:</label>';
			$html.='<input type="text" class="form-control" id="descripcion1" name="descripcion1" aria-describedby="descripcion" value="'.$row['descripcion'].'" placeholder="descripcion">';
			$html.='</div>';
			$html.='<div style="max-width: 50%; float: left;">';
			$html.='<button type="button" class="btn btn-secondary" data-dismiss="modal">X Cerrar</button></div>';
			$html.='<div style="text-align: end;">';
			$html.='<button type="button" onclick="editarsave('.$row['id'].')" class="btn btn-primary">Guardar</button>';
			$html.='</div>';
			$html.='</form>';

			print_r($html);exit;

		}
		}

		private function editarsave(){

			$id=$_POST['id'];
			$padre=$_POST['padre'];
			$nombre=$_POST['nombre'];
			$descripcion=$_POST['descripcion'];

			//print_r($id.' '.$padre.' '.$nombre.' '.$descripcion);

			$update = $this->model->update($id,$padre,$nombre,$descripcion);


		}

		private function crear(){

			$nombre=$_POST['nombre'];
			$padre=$_POST['padre'];
			$descripcion=$_POST['descripcion'];

			print_r($nombre.' '.$padre.' '.$descripcion);

	$crear = $this->model->crear($nombre, $padre, $descripcion);

		}

	}
	
	// Initiiate Library
	$api = new API;
	$api->processApi();

?>
