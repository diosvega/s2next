<style>
.card-body {
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 0rem;
}
.container {
    max-width: 100%;
}
</style>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background-color: #007bff; color: #ffffff;">
                <!-- Button trigger modal -->
                <div style="max-width: 50%; float: left;">
                Menu
                </div>
                <div style="text-align: end;">
                <button style="background-color: #007C02; border-color: #000000;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal1">+ Nuevo</button>
                </div>
                </div>

                <div class="card-body">

                                    <table class="table">
                    <thead style=background-color:#6c757d;>
                        <tr style="text-align: center;">
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Menu Padre</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $datos='';
                    $count=1;
                    foreach($this->datos as $key=>$row)
                    {
                      ?>
                        <tr>
                        <th scope="row"><?php echo $row['id']; ?></th>
                        <td><?php echo $row['nombre']; ?></td>
                        <td><?php echo $row['padre']; ?></td>
                        <td><?php echo $row['descripcion']; ?></td>
                        <td style="text-align: center;">

                        <button style="background-color: #ffffff;" type="button" onclick="editar('<?php echo $row['id']; ?>')"  class="btn btn-warning fa fa-pencil" data-dismiss="modal">Editar</button>
                        <button style="background-color: #ffffff;"  type="button" onclick="eliminar('<?php echo $row['id']; ?>')" class="btn btn-warning fa fa-trash" data-dismiss="modal">Eliminar</button>
                        </td>
                        </tr>
<?php
            }
?>

                    </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Editar -->
<div class="modal fade" id="Modaledit" tabindex="-1" role="dialog" aria-labelledby="Modaledit" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Formulario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div id="Modaleditbody" class="modal-body">
<!--Inicia formulario -->

<form method="post" action="" name="formCreateUser" accept-charset="UTF-8" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data" id="form">

<div class="form-group">
  <label for="exampleFormControlSelect1">Menu Padre</label>
    <select class="form-control" id="padre1" name="padre1">
      <option>Seleccione una opción</option>

      <?php
                    foreach($this->selectform as $key=>$row1)
                    {
                      ?>
      <option><?php echo $row1['nombre']; ?></option>
<?php
                    }
?>

    </select>
  </div>

  <div class="form-group">
    <label for="name">nombre:</label>
    <input type="text" class="form-control" id="nombre1" name="nombre1" aria-describedby="nombre" placeholder="nombre">
  </div>
  <div class="form-group">
  <label for="descripcion">Descripcion:</label>
    <input type="text" class="form-control" id="descripcion1" name="descripcion1" aria-describedby="descripcion" placeholder="descripcion">
  </div>

  <div style="max-width: 50%; float: left;">
  <button type="button" class="btn btn-secondary" data-dismiss="modal">X Cerrar</button></div>
  <div style="text-align: end;">
<button type="button" onclick="crear('saludos')" class="btn btn-primary">Guardar</button>
</div>
</form>

<!-- Finaliza formulario-->
      </div>
      <div class="modal-footer">
        <!--button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save</button-->
      </div>
    </div>
  </div>
</div>
<!-- finaliza modal Editar-->



<!-- Modal -->
<div class="modal fade" id="Modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Formulario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div id="modal-body" class="modal-body">
<!--Inicia formulario -->

<form method="post" action="" name="formCreateUser" accept-charset="UTF-8" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data" id="form">

<div class="form-group">
  <label for="exampleFormControlSelect1">Menu Padre</label>
    <select class="form-control" id="padre" name="padre">
      <option>Seleccione una opción</option>
      <option></option>
      <?php
                    foreach($this->selectform as $key=>$row1)
                    {
                      ?>
      <option><?php echo $row1['nombre']; ?></option>
<?php
                    }
?>

    </select>
  </div>

  <div class="form-group">
    <label for="name">nombre:</label>
    <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="nombre" placeholder="nombre">
  </div>
  <div class="form-group">
  <label for="descripcion">Descripcion:</label>
    <input type="text" class="form-control" id="descripcion" name="descripcion" aria-describedby="descripcion" placeholder="descripcion">
  </div>

  <div style="max-width: 50%; float: left;">
  <button type="button" class="btn btn-secondary" data-dismiss="modal">X Cerrar</button></div>
  <div style="text-align: end;">
<button type="button" onclick="crear('saludos')" class="btn btn-primary">Guardar</button>
</div>
</form>

<!-- Finaliza formulario-->
      </div>
      <div class="modal-footer">
        <!--button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save</button-->
      </div>
    </div>
  </div>
</div>
<!-- finaliza modal -->



<script>

function crear() {

var urledit = "<?php echo $baseUrlIndex; ?>";


var opcionespadre = document.getElementById("padre");
var indiceSeleccionado = opcionespadre.selectedIndex;
var opcionSeleccionada = opcionespadre.options[indiceSeleccionado];
var textopadre = opcionSeleccionada.text;
var idpadre = opcionSeleccionada.value;

var nombre= $("#nombre").val();
var descripcion= $("#descripcion").val();

var formData = new FormData();
formData.append("padre", textopadre);
formData.append("nombre", nombre);
formData.append("descripcion", descripcion);


 $.ajax({
            url: urledit + 'controllers/home/crear',
            type: "post",
            dataType: "html",
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            async: false,
            success: function(response) {
location.reload();
            }
     
    });


}


function editar(id) {
var id;
var urledit = "<?php echo $baseUrlIndex; ?>";

var formData = new FormData();
formData.append("id", id);

 $.ajax({
            url: urledit + 'controllers/home/editar',
            type: "post",
            dataType: "html",
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            async: false,
            success: function(response) {
              
              var resuldatos = document.getElementById('Modaleditbody');
              resuldatos.innerHTML = response;

              $('#Modaledit').modal('show');

            }
     
    });
}

function editarsave(id) {
var id;
var urledit = "<?php echo $baseUrlIndex; ?>";

var opcionespadre = document.getElementById("padre1");
var indiceSeleccionado = opcionespadre.selectedIndex;
var opcionSeleccionada = opcionespadre.options[indiceSeleccionado];
var textopadre = opcionSeleccionada.text;
var idpadre = opcionSeleccionada.value;

var nombre= $("#nombre1").val();
var descripcion= $("#descripcion1").val();

var formData = new FormData();
formData.append("id", id);
formData.append("padre", textopadre);
formData.append("nombre", nombre);
formData.append("descripcion", descripcion);

 $.ajax({
            url: urledit + 'controllers/home/editarsave',
            type: "post",
            dataType: "html",
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            async: false,
            success: function(response) {
location.reload();

            }
     
    });

}

function eliminar(id) {

var urledit = "<?php echo $baseUrlIndex; ?>";

var id;

if (confirm('Delete record?')) {

var formData = new FormData();
formData.append("id", id);

 $.ajax({
            url: urledit + 'controllers/home/eliminar',
            type: "post",
            dataType: "html",
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            async: false,
            success: function(response) {
//alert(response);
location.reload();

            }
     
    });

}else{
alert('The record was not deleted');

}

}

</script>

