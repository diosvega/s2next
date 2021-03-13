$(document).ready(function() {
    $("#cambio_datos").on('click', function(event) {


        /*if ((actual == "") && (nueva == "") && (rnueva == "")) {
         
         var mensaje = 'Ingresa los datos';
         document.getElementById("mpassword").innerHTML = mensaje;
         return false;
         
         } */


        var f = $(this);
        var formData = new FormData(document.getElementById("save-complaint")); //id boton de actualizar

        formData.append("dato", "valor");

        var nombre = $("#cambiar_nombre").val();
        var aPaterno = $("#cambiar_apaterno").val();
        var aMaterno = $("#cambiar_amaterno").val();
        var imagen = $("#subirimg").val();
        
//        if (imagen == "") {
//            var mensaje = 'Formato de imagen no valido';
//            document.getElementById("mdatos").innerHTML = mensaje;
//            return false;
//        }

        if (nombre == "" && aPaterno != "" && aMaterno != "") {
            var mensaje = 'Ingresa tu nombre';
            document.getElementById("mdatos").innerHTML = mensaje;
            return false;
        }

        if (nombre != "" && aPaterno == "" && aMaterno != "") {
            var mensaje = 'Ingresa tu apellido paterno';
            document.getElementById("mdatos").innerHTML = mensaje;
            return false;
        }

        if (nombre != "" && aPaterno != "" && aMaterno == "") {
            var mensaje = 'Ingresa tu apellido materno';
            document.getElementById("mdatos").innerHTML = mensaje;
            return false;
        }

        if (nombre == "" && aPaterno == "" && aMaterno != "") {
            var mensaje = 'Ingresa tu nombre y apellido paterno';
            document.getElementById("mdatos").innerHTML = mensaje;
            return false;
        }

        if (nombre == "" && aPaterno != "" && aMaterno == "") {
            var mensaje = 'Ingresa tu nombre y apellido materno';
            document.getElementById("mdatos").innerHTML = mensaje;
            return false;
        }

        if (nombre != "" && aPaterno == "" && aMaterno == "") {
            var mensaje = 'Ingresa tus apellidos paterno y materno';
            document.getElementById("mdatos").innerHTML = mensaje;
            return false;
        }

        if (nombre == "" && aPaterno == "" && aMaterno == "") {
            var mensaje = 'Ingresa tus datos';
            document.getElementById("mdatos").innerHTML = mensaje;
            return false;
        }
        var BaseUrl = "<?php echo $this->url; ?>";
        $.ajax({
//            url: BaseUrl + '/controladores/actualizarDatos',
            url: 'actualizarDatos',
            type: "post",
            dataType: "html",
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            async: false,
            success: function(response) {
                $("#datos_perfil").html(response);
            }
        });


    });
});

/*function cambiaDatos(valorCaja1, valorCaja2, valorCaja3) {
 var parametros = {
 "nombre": valorCaja1,
 "aPaterno": valorCaja2,
 "aMaterno": valorCaja3
 };
 $.ajax({
 data: parametros,
 url: 'actualizar_nombres_perfil.php',
 type: 'post',
 beforeSend: function() {
 $("#datos_perfil").html("Procesando, espere por favor...");
 },
 success: function(response) {
 $("#datos_perfil").html(response);
 
 }
 });
 }*/



function cambiaPassword(valorCaja1, valorCaja2, valorCaja3) {

    var actual = $("#actual").val();
    var nueva = $("#nueva").val();
    var rnueva = $("#rnueva").val();

    if ((actual == "") && (nueva == "") && (rnueva == "")) {

        var mensaje = 'Ingresa los datos';
        document.getElementById("mpassword").innerHTML = mensaje;
        return false;

    }

    if ((actual == "") && (nueva == "") && (rnueva != "")) {

        var mensaje = 'Completa los datos';
        document.getElementById("mpassword").innerHTML = mensaje;
        return false;

    }

    if ((actual == "") && (nueva != "") && (rnueva != "")) {

        var mensaje = 'Ingresa la contraseña actual';
        document.getElementById("mpassword").innerHTML = mensaje;
        return false;

    }

    if ((actual != "") && (nueva == "") && (rnueva == "")) {

        var mensaje = 'Ingresa una contraseña';
        document.getElementById("mpassword").innerHTML = mensaje;
        return false;

    }

//    if ((actual != "") && (nueva != "") && nueva.length < 8) {
//
//        var mensaje = 'La contraseña debe contener al menos 8 caracteres';
//
//
//        document.getElementById("mpassword").innerHTML = mensaje;
//        return false;
//    }

    if ((actual != "") && (nueva != "") && (rnueva == "")) {

        var mensaje = 'Confirma la nueva contraseña';
        document.getElementById("mpassword").innerHTML = mensaje;
        return false;

    }

    if ((actual == "") && (nueva != "") && (rnueva == "")) {

        var mensaje = 'Completa los datos';
        document.getElementById("mpassword").innerHTML = mensaje;
        return false;

    }

    if ((actual != "") && (nueva == "") && (rnueva != "")) {

        var mensaje = 'Ingresa la contraseña para confirmar';
        document.getElementById("mpassword").innerHTML = mensaje;
        return false;

    }


    if (nueva != rnueva) {

        var mensaje = 'La confirmación de contraseñas no coincide';


        document.getElementById("mpassword").innerHTML = mensaje;
        return false;
    }





    var parametros = {
        "actual": valorCaja1,
        "nueva": valorCaja2,
        "rnueva": valorCaja3
    };
    $.ajax({
        data: parametros,
        url: 'actualizarPassword',
        type: 'post',
        beforeSend: function() {
            $("#cambio_password").html("Procesando, espere por favor...");
        },
        success: function(response) {
            $("#cambio_password").html(response);

        }
    });
}



