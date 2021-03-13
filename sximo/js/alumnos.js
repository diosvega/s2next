

function habilitaInhabilitaDiagnostico(form) {

    if (document.getElementById("barreras").value != 3) {
        // habilitamos
        document.getElementById("diagnostico").disabled = false;
//        document.getElementById("eDiagObligatorio").style.visibility = "visible";
//        document.getElementById("eDiagnostico").style.visibility = "hidden";
    } else {
        // deshabilitamos
        document.getElementById("diagnostico").disabled = true;
        document.getElementById("diagnostico").value = "";
//        document.getElementById("eDiagObligatorio").style.visibility = "hidden";
//        document.getElementById("eDiagnostico").style.visibility = "visible";
    }
}

function marcar(source) {

    checkboxes = document.getElementsByTagName('input'); //obtenemos todos los controles del tipo Input
    for (i = 0; i < checkboxes.length; i++) //recoremos todos los controles
    {
        if (checkboxes[i].type == "checkbox") //solo si es un checkbox entramos
        {
            checkboxes[i].checked = source.checked; //si es un checkbox le damos el valor del checkbox (Marcar/Desmarcar Todos)
        }
    }
}



$(document).ready(function() {
    $("#guardar_alumno").on('click', function(event) {//al hacer clic en el boton #guardar_alumno del formulario.



        var f = $(this);
        var formData = new FormData(document.getElementById("regAlumnos")); //id formulario de actualizar

        formData.append("dato", "valor");

        var escuela = $("#escuela").val();
        var profesor = $("#profesor").val();
        var grado = $("#grado").val();
        var grupo = $("#grupo").val();
        var nombre = $("#nom_alumno").val();
        var aPaterno = $("#apaterno").val();
        var aMaterno = $("#amaterno").val();
        var curp = $("#curp").val();
//        var fechaNac = $("#fechanac").val();
        var estatus = $("#estatus").val();
//        var genero = $("#genero").val();
        var barreras = $("#barreras").val();
        var diagnostico = $("#diagnostico").val();
//        var certificado = $("#certificado").val();

        if (escuela == "") {
            var Htmlset = "* Campos requeridos";
            new Messages(1, Htmlset);
            return false;
        }

        if (profesor == "") {
            var Htmlset = "* Campos requeridos";
            new Messages(1, Htmlset);
            return false;
        }

        if (grado == "") {
            var Htmlset = "* Campos requeridos";
            new Messages(1, Htmlset);
            return false;
        }

        if (grupo == "") {
            var Htmlset = "* Campos requeridos";
            new Messages(1, Htmlset);
            return false;
        }

        if (nombre == "") {
            var Htmlset = "* Campos requeridos";
            new Messages(1, Htmlset);
            return false;
        }

        if (aPaterno == "") {
            var Htmlset = "* Campos requeridos";
            new Messages(1, Htmlset);
            return false;
        }

        if (aMaterno == "") {
            var Htmlset = "* Campos requeridos";
            new Messages(1, Htmlset);
            return false;
        }

        if (curp == "") {
            var Htmlset = "* Campos requeridos";
            new Messages(1, Htmlset);
            return false;
        }


//validacion del CURP  AAAA000101
        if (curp.length < 18 || curp.length > 18) {
            var Htmlset = 'CURP invalido, debe tener 18 caracteres';
//            document.getElementById("mregAlumnos").innerHTML = mensaje;
            new Messages(2, Htmlset);
            document.getElementById("curp").focus();
            return false;
        } else {
//            var cuatroletras = curp.substring(0, 4); //los cuatro primeros digitos tienen que ser letras
            var primera = curp.substring(0, 1);//el valor de la primera posicion
            var segunda = curp.substring(1, 2);//el valor de la segunda posicion
            var tercera = curp.substring(2, 3);//el valor de la tercera posicion
            var cuarta = curp.substring(3, 4);//el valor de la cuarta posicion
            var fecha = curp.substring(4, 10);//los digitos de la posicion 5 a la posicion 10 de la fecha de nacimiento
            var mescorrecto = curp.substring(6, 7);//el mes de nacimiento en su primer posicion
            var umescorrecto = curp.substring(7, 8);//el valor del mes en su segunda posicion
            var diacorrecto = curp.substring(8, 9);//el dia de nacimiento en la primera posicion 
            var udiacorrecto = curp.substring(9, 10);//el dia de nacimiento en la segunda posicion
            var onceava = curp.substring(10, 11);//el valor de la posicion once
            var doceava = curp.substring(11, 12);//el valor de la posicion doce
            var treceava = curp.substring(12, 13);//el valor de la posicion trece
            var catorceava = curp.substring(13, 14);//el valor de la posicion catorce
            var quinceava = curp.substring(14, 15);//el valor de la posicion quince
            var dieciseisava = curp.substring(15, 16);//el valor de la posicion dieciséis
            var diecisieteava = curp.substring(16, 17);//el valor de la posicion diecisiete
            var dieciochava = curp.substring(17, 18);//el valor de la posicion dieciocho



            if (!isNaN(primera) || !isNaN(segunda) || !isNaN(tercera) || !isNaN(cuarta)) {//validando que los cuatro primeros digitos sean letras
                var Htmlset = 'CURP invalido, revisa el formato';
//                document.getElementById("mregAlumnos").innerHTML = mensaje;
                new Messages(2, Htmlset);
                document.getElementById("curp").focus();
                return false;
            }
            if (isNaN(fecha)) {//validando que los digitos de la posicion 5 a la posicion 10 sean números para la fecha de nacimiento
                var Htmlset = 'CURP invalido, revisa el formato';
//                document.getElementById("mregAlumnos").innerHTML = mensaje;
                new Messages(2, Htmlset);
                document.getElementById("curp").focus();
                return false;

            } else {
                if (mescorrecto > 1) {//valida que el mes de nacimiento exista
                    var Htmlset = 'CURP invalido, revisa el mes de nacimiento';
//                    document.getElementById("mregAlumnos").innerHTML = mensaje;
                    new Messages(2, Htmlset);
                    document.getElementById("curp").focus();
                    return false;
                }
                if (diacorrecto > 3) {//valida que el dia tenga en su primer posición hasta el numero 3
                    var Htmlset = 'CURP invalido, revisa el dia de nacimiento';
//                    document.getElementById("mregAlumnos").innerHTML = mensaje;
                    new Messages(2, Htmlset);
                    document.getElementById("curp").focus();
                    return false;
                }
                if (mescorrecto == 0 && umescorrecto == 2 && diacorrecto > 2) {//valida que en el mes de febrero no se ingrese un dia mayor de 29
                    var Htmlset = 'CURP invalido en día de nacimiento, febrero no tiene mas de 29 dias';
//                    document.getElementById("mregAlumnos").innerHTML = mensaje;
                    new Messages(2, Htmlset);
                    document.getElementById("curp").focus();
                    return false;

                }
                if ((mescorrecto == 0 && umescorrecto == 0) || (diacorrecto == 0 && udiacorrecto == 0)) {//valida que el valor del mes y dia no quede en ceros
                    var Htmlset = 'CURP invalido, revisa fecha de nacimiento';
//                    document.getElementById("mregAlumnos").innerHTML = mensaje;
                    new Messages(2, Htmlset);
                    document.getElementById("curp").focus();
                    return false;
                }
                if (mescorrecto == 1 && umescorrecto > 2) {//valida que el mes maximo sea 12
                    var Htmlset = 'CURP invalido, revisa el mes de nacimiento';
//                    document.getElementById("mregAlumnos").innerHTML = mensaje;
                    new Messages(2, Htmlset);
                    document.getElementById("curp").focus();
                    return false;
                }
                if (diacorrecto == 3 && udiacorrecto > 1) {// valida que el dia no sea mayor a 31
                    var Htmlset = 'CURP invalido, revisa el dia de nacimiento';
//                    document.getElementById("mregAlumnos").innerHTML = mensaje;
                    new Messages(2, Htmlset);
                    document.getElementById("curp").focus();
                    return false;
                } else {

                }
//                document.getElementById("fechanac").value = fecha;
            }

            if (!isNaN(onceava)) {
                var Htmlset = 'CURP invalido, revisa el formato';
//                document.getElementById("mregAlumnos").innerHTML = mensaje;
                new Messages(2, Htmlset);
                document.getElementById("curp").focus();
                return false;

            } else {
//                if (onceava == 'H' || onceava == 'h') {
//
//                    document.getElementById("generom").checked = true;
//                }
//                if (onceava == 'M' || onceava == 'm') {
//
//                    document.getElementById("generof").checked = true;
//                }
                if ((onceava != 'm' && onceava != 'M' && onceava != 'h' && onceava != 'H')) {
                    var Htmlset = 'CURP invalido, revisa el formato';
//                    document.getElementById("mregAlumnos").innerHTML = mensaje;
                    new Messages(2, Htmlset);
                    document.getElementById("curp").focus();
                    return false;

                }

            }

            if (!isNaN(doceava)) {
                var Htmlset = 'CURP invalido, revisa el formato';
//                document.getElementById("mregAlumnos").innerHTML = mensaje;
                new Messages(2, Htmlset);
                document.getElementById("curp").focus();
                return false;
            }

            if (!isNaN(treceava)) {
                var Htmlset = 'CURP invalido, revisa el formato';
//                document.getElementById("mregAlumnos").innerHTML = mensaje;
                new Messages(2, Htmlset);
                document.getElementById("curp").focus();
                return false;
            }
            if (!isNaN(catorceava)) {
                var Htmlset = 'CURP invalido, revisa el formato';
//                document.getElementById("mregAlumnos").innerHTML = mensaje;
                new Messages(2, Htmlset);
                document.getElementById("curp").focus();
                return false;
            }
            if (!isNaN(quinceava)) {
                var Htmlset = 'CURP invalido, revisa el formato';
//                document.getElementById("mregAlumnos").innerHTML = mensaje;
                new Messages(2, Htmlset);
                document.getElementById("curp").focus();
                return false;
            }
            if (!isNaN(dieciseisava)) {
                var Htmlset = 'CURP invalido, revisa el formato';
//                document.getElementById("mregAlumnos").innerHTML = mensaje;
                new Messages(2, Htmlset);
                document.getElementById("curp").focus();
                return false;
            }
            if (isNaN(dieciochava)) {
                var Htmlset = 'CURP invalido, revisa el formato';
//                document.getElementById("mregAlumnos").innerHTML = mensaje;
                new Messages(2, Htmlset);
                document.getElementById("curp").focus();
                return false;
            }
        }




//        if (fechaNac == "") {
//            var mensaje = 'Indica la fecha de nacimiento';
//            document.getElementById("mregAlumnos").innerHTML = mensaje;
//            document.getElementById("fechanac").focus();
//            return false;
//        }

        if (estatus.cheked == false) {
            var mensaje = 'Indica el estatus';
            document.getElementById("mregAlumnos").innerHTML = mensaje;
            document.getElementById("estatus").focus();
            return false;
        }

//        if (document.getElementById("generof").checked != true && document.getElementById("generom").checked != true) {
//
//            var mensaje = 'Indica el genero';
//            document.getElementById("mregAlumnos").innerHTML = mensaje;
//            document.getElementById("generof").focus();
//            return false;
//
//        }

        if (barreras != 3 && diagnostico == "") {
            var Htmlset = 'Indica el diagnostico del alumno';
//            document.getElementById("mregAlumnos").innerHTML = mensaje;
            new Messages(2, Htmlset);
            document.getElementById("diagnostico").focus();
            return false;
        }


        if (document.getElementById("certificadoNo").checked != true && document.getElementById("certificadoSi").checked != true) {

            var Htmlset = '* Campos requeridos"';
//            document.getElementById("mregAlumnos").innerHTML = mensaje;
            new Messages(1, Htmlset);
            document.getElementById("certificadoNo").focus();
            return false;

        }



        var BaseUrl = "<?php echo $this->url; ?>";
        $.ajax({
            url: 'crearAlumnos',
            type: "post",
            dataType: "html",
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            async: false,
            success: function(response) {

                var json = $.parseJSON(response);
                var respuesta = '';
                var descripcion = '';

                $.each(json, function(index, element) {
                    respuesta = json['respuesta'];
                    descripcion = json['descripcion'];
                });

                // $("#rAlumnos").html(response);

                if (respuesta == 'ok') {

                    new Messages(1, descripcion);
                    document.getElementById("nom_alumno").value = document.getElementById("nom_alumno").defaultValue;
                    document.getElementById("apaterno").value = document.getElementById("apaterno").defaultValue;
                    document.getElementById("amaterno").value = document.getElementById("amaterno").defaultValue;
                    document.getElementById("curp").value = document.getElementById("curp").defaultValue;
                    document.getElementById("estatus").value = document.getElementById("estatus").defaultValue;
                    document.getElementById("barreras").value = document.getElementById("barreraso").defaultValue;
                    document.getElementById("diagnostico").value = document.getElementById("diagnostico").defaultValue;
                    document.getElementById("certificado").value = document.getElementById("certificado").defaultValue;
//                    document.getElementById("mregAlumnos").style.visibility = "hidden";
                    document.getElementById("mregAlumnos").style.display = 'none';


                }

                if (respuesta == 'curpDuplicado') {
                    new Messages(2, descripcion);

                }

            }

        });


    });
});


$(document).ready(function() {
    $("#select_pais").on('change', function(event) {


        var idPais = $("#select_pais").val();
//        alert(idPais);
        var f = $(this);
        var formData = new
                FormData();

        formData.append("idPais", idPais);



        var BaseUrl = "<?php echo $this->url; ?>";
        $.ajax({
            url: 'filtrosGlobalesEstado',
            type: "post",
            dataType: "html",
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            async: false,
            success: function(response) {

                $("#estado").html(response);
//                $("#select_estado").html(response);
//                $("#regAlumnos").submit();
            }

        });


    });
}

);

$(document).ready(function() {
    $(document).on("change", "#select_estado", function(e) {



//    $("#select_estado").on('change', function(event) {


        var idEstado = $("#select_estado").val();
        var f = $(this);
        var formData = new
                FormData();

        formData.append("idEstado", idEstado);



        var BaseUrl = "<?php echo $this->url; ?>";
        $.ajax({
            url: 'filtrosGlobalesMunicipio',
            type: "post",
            dataType: "html",
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            async: false,
            success: function(response) {

                $("#municipio").html(response);
//                $("#select_estado").html(response);
//                $("#regAlumnos").submit();
            }

        });


    });
}

);

$(document).ready(function() {
    $(document).on("change", "#select_municipio", function(e) {



        var idMunicipio = $("#select_municipio").val();
        var f = $(this);
        var formData = new
                FormData();

        formData.append("idMunicipio", idMunicipio);



        var BaseUrl = "<?php echo $this->url; ?>";
        $.ajax({
            url: 'filtrosGlobalesEscuela',
            type: "post",
            dataType: "html",
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            async: false,
            success: function(response) {

                $("#descuela").html(response);

            }

        });


    });
}

);

$(document).ready(function() {
    $(document).on("change", "#escuela", function(e) {




        var idEscuela = $("#escuela").val();
        var f = $(this);
        var formData = new
                FormData();

        formData.append("idEscuela", idEscuela);



        var BaseUrl = "<?php echo $this->url; ?>";
        $.ajax({
            url: 'filtrosGlobalesProfesor',
            type: "post",
            dataType: "html",
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            async: false,
            success: function(response) {

                $("#dprofesor").html(response);

            }

        });


    });
}

);

$(document).ready(function() {
    $(document).on("change", "#escuela", function(e) {




        var idEscuela = $("#escuela").val();
        var f = $(this);
        var formData = new
                FormData();

        formData.append("idEscuela", idEscuela);



        var BaseUrl = "<?php echo $this->url; ?>";
        $.ajax({
            url: 'filtrosGlobalesGrado',
            type: "post",
            dataType: "html",
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            async: false,
            success: function(response) {

                $("#dgrado").html(response);

            }

        });


    });
}

);


$(document).ready(function() {
    $(document).on("change", "#grado", function(e) {




        var idGrado = $("#grado").val();
        var f = $(this);
        var formData = new
                FormData();

        formData.append("idGrado", idGrado);



        var BaseUrl = "<?php echo $this->url; ?>";
        $.ajax({
            url: 'filtrosGlobalesGrupo',
            type: "post",
            dataType: "html",
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            async: false,
            success: function(response) {

                $("#dgrupo").html(response);

            }

        });


    });
}

);




$(document).ready(function() {
    $("#buscar_alumn").on('click', function(event) {//al hacer clic en el boton #guardar_alumno del formulario.


        var f = $(this);
        var formData = new FormData(document.getElementById("busAlumnos")); //id formulario 

        formData.append("dato", "valor");



        var escuela = $("#escuela").val();
        var profesor = $("#profesor").val();
        var grado = $("#grado").val();
        var grupo = $("#grupo").val();
        var nombre = $("#nom_alumno").val();
        var aPaterno = $("#apaterno").val();
        var pagina = $("#").val();
//        alert(escuela);
//        alert(profesor);
//        alert(grado);
//        alert(grupo);
//        alert(nombre);
//        alert(aPaterno);
//        var aMaterno = $("#amaterno").val();
//        var curp = $("#curp").val();
//        var fechaNac = $("#fechanac").val();
//        var estatus = $("#estatus").val();
//        var genero = $("#genero").val();
//        var barreras = $("#barreras").val();
//        var diagnostico = $("#diagnostico").val();
//        var certificado = $("#certificado").val();

        if (escuela == "") {
//            var mensaje = 'Indica la escuela';
//            document.getElementById("selectGrupo").innerHTML = mensaje;
            var Htmlset = "* Campos requeridos";
            new Messages(1, Htmlset);

//            document.getElementById("escuela").focus();
            return false;
        }

//        if (profesor == "") {
//            var mensaje = 'Indica el Profesor';
//            document.getElementById("selectGrupo").innerHTML = mensaje;
//            document.getElementById("profesor").focus();
//            return false;
//        }
//
//        if (grado == "") {
//            var mensaje = 'Indica el grado';
//            document.getElementById("selectGrupo").innerHTML = mensaje;
//            document.getElementById("grado").focus();
//            return false;
//        }
//
//        if (grupo == "") {
//            var mensaje = 'Indica el grupo';
//            document.getElementById("selectGrupo").innerHTML = mensaje;
//            document.getElementById("grupo").focus();
//            return false;
//        }



        var BaseUrl = "<?php echo $this->url; ?>";
        $.ajax({
            url: 'buscarAlumnos',
            type: "post",
            dataType: "html",
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            async: false,
            success: function(response) {

                $("#tabla").html(response);
            }


        });


    });
}

);



//$(document).ready(function() {
//    $("#buscar_alumno").on('click', function(event) {//al hacer clic en el boton #guardar_alumno del formulario.

function guardarAlumno(atras, siguiente, limit) {



    var f = $(this);
    var formData = new FormData(document.getElementById("busAlumnos")); //id formulario 

    formData.append("dato", "valor");
    formData.append("atras", atras);
    formData.append("siguiente", siguiente);
    formData.append("limit", limit);


    var escuela = $("#escuela").val();
    var profesor = $("#profesor").val();
    var grado = $("#grado").val();
    var grupo = $("#grupo").val();
    var nombre = $("#nom_alumno").val();
    var aPaterno = $("#apaterno").val();
    var pagina = $("#").val();
    var estatus = $("#idestatus").val();
//        alert(estatus);
//        alert(profesor);
//        alert(grado);
//        alert(grupo);
//        alert(nombre);
//        alert(aPaterno);
//        var aMaterno = $("#amaterno").val();
//        var curp = $("#curp").val();
//        var fechaNac = $("#fechanac").val();
//        var estatus = $("#estatus").val();
//        var genero = $("#genero").val();
//        var barreras = $("#barreras").val();
//        var diagnostico = $("#diagnostico").val();
//        var certificado = $("#certificado").val();

    if (escuela == "") {
//            var mensaje = 'Indica la escuela';
//            document.getElementById("selectGrupo").innerHTML = mensaje;
        var Htmlset = "* Campos requeridos";
        new Messages(1, Htmlset);

//            document.getElementById("escuela").focus();
        return false;
    }

//        if (profesor == "") {
//            var mensaje = 'Indica el Profesor';
//            document.getElementById("selectGrupo").innerHTML = mensaje;
//            document.getElementById("profesor").focus();
//            return false;
//        }
//
//        if (grado == "") {
//            var mensaje = 'Indica el grado';
//            document.getElementById("selectGrupo").innerHTML = mensaje;
//            document.getElementById("grado").focus();
//            return false;
//        }
//
//        if (grupo == "") {
//            var mensaje = 'Indica el grupo';
//            document.getElementById("selectGrupo").innerHTML = mensaje;
//            document.getElementById("grupo").focus();
//            return false;
//        }



    var BaseUrl = "<?php echo $this->url; ?>";
    $.ajax({
        url: 'buscarAlumnos',
        type: "post",
        dataType: "html",
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        async: false,
        success: function(response) {

            $("#tabla").html(response);
        }

    });


}
//});


$(document).ready(function() {
    $("#actualizar_alumno").on('click', function(event) {//al hacer clic en el boton #guardar_alumno del formulario.



        var f = $(this);
        var formData = new FormData(document.getElementById("regAlumnos")); //id formulario de actualizar

        formData.append("dato", "valor");

        var escuela = $("#escuela").val();
        var profesor = $("#profesor").val();
        var grado = $("#grado").val();
        var grupo = $("#grupo").val();
        var nombre = $("#nom_alumno").val();
        var aPaterno = $("#apaterno").val();
        var aMaterno = $("#amaterno").val();
        var curp = $("#curp").val();
//        var fechaNac = $("#fechanac").val();
        var estatus = $("#estatus").val();
//        var genero = $("#genero").val();
        var barreras = $("#barreras").val();
        var diagnostico = $("#diagnostico").val();
//        var certificado = $("#certificado").val();

        if (escuela == "") {
            var Htmlset = '* Campos requeridos';
            new Messages(1, Htmlset);
//            var mensaje = 'Indica la Escuela';
//            document.getElementById("selectGrupo").innerHTML = mensaje;
//            document.getElementById("escuela").focus();
            return false;
        }

        if (profesor == "") {
            var Htmlset = '* Campos requeridos';
            new Messages(1, Htmlset);
//            var mensaje = 'Indica el Profesor';
//            document.getElementById("selectGrupo").innerHTML = mensaje;
//            document.getElementById("profesor").focus();
            return false;
        }

        if (grado == "") {
            var Htmlset = '* Campos requeridos';
            new Messages(1, Htmlset);
//            var mensaje = 'Indica el grado';
//            document.getElementById("selectGrupo").innerHTML = mensaje;
//            document.getElementById("grado").focus();
            return false;
        }

        if (grupo == "") {
            var Htmlset = '* Campos requeridos';
            new Messages(1, Htmlset);
//            var mensaje = 'Indica el grupo';
//            document.getElementById("selectGrupo").innerHTML = mensaje;
//            document.getElementById("grupo").focus();
            return false;
        }

        if (nombre == "") {
            var Htmlset = '* Campos requeridos';
            new Messages(1, Htmlset);
//            var mensaje = 'Indica el nombre del alumno';
//            document.getElementById("mregAlumnos").innerHTML = mensaje;
//            document.getElementById("nom_alumno").focus();
            return false;
        }

        if (aPaterno == "") {
            var Htmlset = '* Campos requeridos';
            new Messages(1, Htmlset);
//            var mensaje = 'Indica el apellido paterno';
//            document.getElementById("mregAlumnos").innerHTML = mensaje;
//            document.getElementById("apaterno").focus();
            return false;
        }

        if (aMaterno == "") {
            var Htmlset = '* Campos requeridos';
            new Messages(1, Htmlset);
//            var mensaje = 'Indica el apellido materno';
//            document.getElementById("mregAlumnos").innerHTML = mensaje;
//            document.getElementById("amaterno").focus();
            return false;
        }

        if (curp == "") {
            var Htmlset = '* Campos requeridos';
            new Messages(1, Htmlset);
//            var mensaje = 'Indica la CURP';
//            document.getElementById("mregAlumnos").innerHTML = mensaje;
//            document.getElementById("curp").focus();
            return false;
        }


//validacion del CURP  AAAA000101
        if (curp.length < 18 || curp.length > 18) {
            var Htmlset = 'CURP invalido, debe tener 18 caracteres';
            new Messages(2, Htmlset);
//            var mensaje = 'CURP invalido, debe tener 18 caracteres';
//            document.getElementById("mregAlumnos").innerHTML = mensaje;
            document.getElementById("curp").focus();
            return false;
        } else {
//            var cuatroletras = curp.substring(0, 4); //los cuatro primeros digitos tienen que ser letras
            var primera = curp.substring(0, 1);//el valor de la primera posicion
            var segunda = curp.substring(1, 2);//el valor de la segunda posicion
            var tercera = curp.substring(2, 3);//el valor de la tercera posicion
            var cuarta = curp.substring(3, 4);//el valor de la cuarta posicion
            var fecha = curp.substring(4, 10);//los digitos de la posicion 5 a la posicion 10 de la fecha de nacimiento
            var mescorrecto = curp.substring(6, 7);//el mes de nacimiento en su primer posicion
            var umescorrecto = curp.substring(7, 8);//el valor del mes en su segunda posicion
            var diacorrecto = curp.substring(8, 9);//el dia de nacimiento en la primera posicion 
            var udiacorrecto = curp.substring(9, 10);//el dia de nacimiento en la segunda posicion
            var onceava = curp.substring(10, 11);//el valor de la posicion once
            var doceava = curp.substring(11, 12);//el valor de la posicion doce
            var treceava = curp.substring(12, 13);//el valor de la posicion trece
            var catorceava = curp.substring(13, 14);//el valor de la posicion catorce
            var quinceava = curp.substring(14, 15);//el valor de la posicion quince
            var dieciseisava = curp.substring(15, 16);//el valor de la posicion dieciséis
            var diecisieteava = curp.substring(16, 17);//el valor de la posicion diecisiete
            var dieciochava = curp.substring(17, 18);//el valor de la posicion dieciocho



            if (!isNaN(primera) || !isNaN(segunda) || !isNaN(tercera) || !isNaN(cuarta)) {//validando que los cuatro primeros digitos sean letras
                var Htmlset = 'CURP invalido, debe tener 18 caracteres';
                new Messages(2, Htmlset);
//                var mensaje = 'CURP invalido, revisa el formato';
//                document.getElementById("mregAlumnos").innerHTML = mensaje;
                document.getElementById("curp").focus();
                return false;
            }
            if (isNaN(fecha)) {//validando que los digitos de la posicion 5 a la posicion 10 sean números para la fecha de nacimiento
                var Htmlset = 'CURP invalido, revisa el formato';
                new Messages(2, Htmlset);
//                var mensaje = 'CURP invalido, revisa el formato';
//                document.getElementById("mregAlumnos").innerHTML = mensaje;
                document.getElementById("curp").focus();
                return false;

            } else {
                if (mescorrecto > 1) {//valida que el mes de nacimiento exista
                    var Htmlset = 'CURP invalido, revisa el mes de nacimiento';
                    new Messages(2, Htmlset);
//                    var mensaje = '';
//                    document.getElementById("mregAlumnos").innerHTML = mensaje;
                    document.getElementById("curp").focus();
                    return false;
                }
                if (diacorrecto > 3) {//valida que el dia tenga en su primer posición hasta el numero 3
                    var Htmlset = 'CURP invalido, revisa el dia de nacimiento';
                    new Messages(2, Htmlset);
//                    var mensaje = 'CURP invalido, revisa el dia de nacimiento';
//                    document.getElementById("mregAlumnos").innerHTML = mensaje;
                    document.getElementById("curp").focus();
                    return false;
                }
                if (mescorrecto == 0 && umescorrecto == 2 && diacorrecto > 2) {//valida que en el mes de febrero no se ingrese un dia mayor de 29
                    var Htmlset = 'CURP invalido en día de nacimiento, febrero no tiene mas de 29 dias';
                    new Messages(2, Htmlset);
//                    var mensaje = 'CURP invalido en día de nacimiento, febrero no tiene mas de 29 dias';
//                    document.getElementById("mregAlumnos").innerHTML = mensaje;
                    document.getElementById("curp").focus();
                    return false;

                }
                if ((mescorrecto == 0 && umescorrecto == 0) || (diacorrecto == 0 && udiacorrecto == 0)) {//valida que el valor del mes y dia no quede en ceros
                    var Htmlset = 'CURP invalido, revisa fecha de nacimiento';
                    new Messages(2, Htmlset);
//                    var mensaje = 'CURP invalido, revisa fecha de nacimiento';
//                    document.getElementById("mregAlumnos").innerHTML = mensaje;
                    document.getElementById("curp").focus();
                    return false;
                }
                if (mescorrecto == 1 && umescorrecto > 2) {//valida que el mes maximo sea 12
                    var Htmlset = 'CURP invalido, revisa el mes de nacimiento';
                    new Messages(2, Htmlset);
//                    var mensaje = 'CURP invalido, revisa el mes de nacimiento';
//                    document.getElementById("mregAlumnos").innerHTML = mensaje;
                    document.getElementById("curp").focus();
                    return false;
                }
                if (diacorrecto == 3 && udiacorrecto > 1) {// valida que el dia no sea mayor a 31

                    var Htmlset = 'CURP invalido, revisa el dia de nacimiento';
                    new Messages(2, Htmlset);
//                    var mensaje = 'CURP invalido, revisa el dia de nacimiento';
//                    document.getElementById("mregAlumnos").innerHTML = mensaje;
                    document.getElementById("curp").focus();
                    return false;
                } else {

                }
//                document.getElementById("fechanac").value = fecha;
            }

            if (!isNaN(onceava)) {
                var Htmlset = 'CURP invalido, revisa el formato';
                new Messages(2, Htmlset);
//                var mensaje = 'CURP invalido, revisa el formato';
//                document.getElementById("mregAlumnos").innerHTML = mensaje;
                document.getElementById("curp").focus();
                return false;

            } else {
//                if (onceava == 'H' || onceava == 'h') {
//
//                    document.getElementById("generom").checked = true;
//                }
//                if (onceava == 'M' || onceava == 'm') {
//
//                    document.getElementById("generof").checked = true;
//                }
                if ((onceava != 'm' && onceava != 'M' && onceava != 'h' && onceava != 'H')) {
                    var Htmlset = 'CURP invalido, revisa el formato';
                    new Messages(2, Htmlset);
//                    var mensaje = 'CURP invalido, revisa el formato';
//                    document.getElementById("mregAlumnos").innerHTML = mensaje;
                    document.getElementById("curp").focus();
                    return false;

                }

            }

            if (!isNaN(doceava)) {
                var Htmlset = 'CURP invalido, revisa el formato';
                new Messages(2, Htmlset);
//                var mensaje = 'CURP invalido, revisa el formato';
//                document.getElementById("mregAlumnos").innerHTML = mensaje;
                document.getElementById("curp").focus();
                return false;
            }

            if (!isNaN(treceava)) {
                var Htmlset = 'CURP invalido, revisa el formato';
                new Messages(2, Htmlset);
//                var mensaje = 'CURP invalido, revisa el formato';
//                document.getElementById("mregAlumnos").innerHTML = mensaje;
                document.getElementById("curp").focus();
                return false;
            }
            if (!isNaN(catorceava)) {
                var Htmlset = 'CURP invalido, revisa el formato';
                new Messages(2, Htmlset);
//                var mensaje = 'CURP invalido, revisa el formato';
//                document.getElementById("mregAlumnos").innerHTML = mensaje;
                document.getElementById("curp").focus();
                return false;
            }
            if (!isNaN(quinceava)) {
                var Htmlset = 'CURP invalido, revisa el formato';
                new Messages(2, Htmlset);
//                var mensaje = 'CURP invalido, revisa el formato';
//                document.getElementById("mregAlumnos").innerHTML = mensaje;
                document.getElementById("curp").focus();
                return false;
            }
            if (!isNaN(dieciseisava)) {
                var Htmlset = 'CURP invalido, revisa el formato';
                new Messages(2, Htmlset);
//                var mensaje = 'CURP invalido, revisa el formato';
//                document.getElementById("mregAlumnos").innerHTML = mensaje;
                document.getElementById("curp").focus();
                return false;
            }
            if (isNaN(dieciochava)) {
                var Htmlset = 'CURP invalido, revisa el formato';
                new Messages(2, Htmlset);
//                var mensaje = 'CURP invalido, revisa el formato';
//                document.getElementById("mregAlumnos").innerHTML = mensaje;
                document.getElementById("curp").focus();
                return false;
            }
        }




//        if (fechaNac == "") {
//            var mensaje = 'Indica la fecha de nacimiento';
//            document.getElementById("mregAlumnos").innerHTML = mensaje;
//            document.getElementById("fechanac").focus();
//            return false;
//        }

        if (estatus.cheked == false) {
            var mensaje = 'Indica el estatus';
            document.getElementById("mregAlumnos").innerHTML = mensaje;
            document.getElementById("estatus").focus();
            return false;
        }

//        if (document.getElementById("generof").checked != true && document.getElementById("generom").checked != true) {
//
//            var mensaje = 'Indica el genero';
//            document.getElementById("mregAlumnos").innerHTML = mensaje;
//            document.getElementById("generof").focus();
//            return false;
//
//        }

        if (barreras != 3 && diagnostico == "") {
            var Htmlset = 'Indica el diagnostico del alumno';
            new Messages(2, Htmlset);
//            var mensaje = 'Indica el diagnostico del alumno';
//            document.getElementById("mregAlumnos").innerHTML = mensaje;
            document.getElementById("diagnostico").focus();
            return false;
        }


        if (document.getElementById("certificadoNo").checked != true && document.getElementById("certificadoSi").checked != true) {

            var Htmlset = '* Campos requeridos';
            new Messages(1, Htmlset);
//            var mensaje = 'Indica si el alumno entregó certificado';
//            document.getElementById("mregAlumnos").innerHTML = mensaje;
            document.getElementById("certificadoNo").focus();
            return false;

        }



        var BaseUrl = "<?php echo $this->url; ?>";
        $.ajax({
            url: 'actualizarAlumnos',
            type: "post",
            dataType: "html",
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            async: false,
            success: function(response) {

                $("#rAlumnos").html(response);
            }

        });


    });
});



function descargar() {


    var f = $(this);
    var formData = new FormData(document.getElementById("busAlumnos")); //id formulario 

    formData.append("dato", "valor");



    var escuela = $("#escuela").val();
    var profesor = $("#profesor").val();
    var grado = $("#grado").val();
    var grupo = $("#grupo").val();
    var nombre = $("#nom_alumno").val();
    var aPaterno = $("#apaterno").val();
    var estatus = $("#estatus").val();
//        alert(escuela);
//        alert(profesor);
//        alert(grado);
//        alert(grupo);
//        alert(nombre);
//        alert(aPaterno);
//        var aMaterno = $("#amaterno").val();
//        var curp = $("#curp").val();
//        var fechaNac = $("#fechanac").val();
//        var estatus = $("#estatus").val();
//        var genero = $("#genero").val();
//        var barreras = $("#barreras").val();
//        var diagnostico = $("#diagnostico").val();
//        var certificado = $("#certificado").val();

    if (escuela == "") {
//            var mensaje = 'Indica la escuela';
//            document.getElementById("selectGrupo").innerHTML = mensaje;
        var Htmlset = "* Campos requeridos";
        new Messages(1, Htmlset);

//            document.getElementById("escuela").focus();
        return false;
    }

//        if (profesor == "") {
//            var mensaje = 'Indica el Profesor';
//            document.getElementById("selectGrupo").innerHTML = mensaje;
//            document.getElementById("profesor").focus();
//            return false;
//        }
//
//        if (grado == "") {
//            var mensaje = 'Indica el grado';
//            document.getElementById("selectGrupo").innerHTML = mensaje;
//            document.getElementById("grado").focus();
//            return false;
//        }
//
//        if (grupo == "") {
//            var mensaje = 'Indica el grupo';
//            document.getElementById("selectGrupo").innerHTML = mensaje;
//            document.getElementById("grupo").focus();
//            return false;
//        }



    var BaseUrl = "<?php echo $this->url; ?>";
    $.ajax({
        url: 'descargarExcel',
        type: "post",
        dataType: "html",
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        async: false,
        success: function(response) {

//                $("#tabla").html(response);
        }


    });


//    });
}

//);




$(document).ready(function() {
    $("#asistencia_alumno").on('click', function(event) {//al hacer clic en el boton #guardar_alumno del formulario.

        document.getElementById("dateini").style.display = 'none';
        document.getElementById("datefin").style.display = 'none';
        document.getElementById("botonhisaceptar").style.display = 'none'; 
        document.getElementById("btnimprimir").style.display = 'none';
        document.getElementById("dateas").style.display = 'block';
        document.getElementById("btnguardar").style.display = 'block';

        var f = $(this);
        var formData = new FormData(document.getElementById("asistenciaAlumnos")); //id formulario 

        formData.append("dato", "valor");

        var escuela = $("#escuela").val();
        var profesor = $("#profesor").val();
        var grado = $("#grado").val();
        var grupo = $("#grupo").val();
        var nombre = $("#nom_alumno").val();
        var aPaterno = $("#apaterno").val();
        
        
//        alert(escuela);
//        alert(profesor);
//        alert(grado);
//        alert(grupo);
//        alert(nombre);
//        alert(aPaterno);
//        var aMaterno = $("#amaterno").val();
//        var curp = $("#curp").val();
//        var fechaNac = $("#fechanac").val();
//        var estatus = $("#estatus").val();
//        var genero = $("#genero").val();
//        var barreras = $("#barreras").val();
//        var diagnostico = $("#diagnostico").val();
//        var certificado = $("#certificado").val();

        if (escuela == "") {
//            var mensaje = 'Indica la escuela';
//            document.getElementById("selectGrupo").innerHTML = mensaje;
            var Htmlset = "* Campos requeridos";
            new Messages(1, Htmlset);

//            document.getElementById("escuela").focus();
            return false;
        }

        if (profesor == "") {
//            var mensaje = 'Indica el Profesor';
            var Htmlset = "* Campos requeridos";
            new Messages(1, Htmlset);
//            document.getElementById("selectGrupo").innerHTML = mensaje;
//            document.getElementById("profesor").focus();
            return false;
        }
//
        if (grado == "") {
//            var mensaje = 'Indica el grado';
            var Htmlset = "* Campos requeridos";
            new Messages(1, Htmlset);
//            document.getElementById("selectGrupo").innerHTML = mensaje;
//            document.getElementById("grado").focus();
            return false;
        }
//
        if (grupo == "") {
//            var mensaje = 'Indica el grupo';
            var Htmlset = "* Campos requeridos";
            new Messages(1, Htmlset);
//            document.getElementById("selectGrupo").innerHTML = mensaje;
//            document.getElementById("grupo").focus();
            return false;
        }



        var BaseUrl = "<?php echo $this->url; ?>";
        $.ajax({
            url: 'asistenciaAlumnos',
//            url: 'buscarAlumnos',
            type: "post",
            dataType: "html",
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            async: false,
            success: function(response) {

                $("#tablaAsistencia").html(response);
            }

        });


    });
});


$(document).ready(function() {
    $("#guardar_asistencia").on('click', function(event) {//al hacer clic en el boton #guardar_alumno del formulario.
//function guardarAsistencia(){



//obtener datos de select

        contadorselect = 0;
        select_ids = "";
        $("select").each(function(i, item) {
//            if ($(this).is(':text')) {
            select_ids += $(this).attr('name') + ":" + $(this).val();
            contadorselect++;
//            }


        });
        
        contadorinput = 0;
        input_ids = "";
        $("input").each(function(i, item) {
//            if ($(this).is(':text')) {
            input_ids += $(this).attr('name') + ":" + $(this).val();
            contadorinput++;
//            }


        });



        var f = $(this);
        var formData = new FormData(document.getElementById("asistenciaAlumnos")); //id formulario 




        formData.append("select_ids", select_ids);
        formData.append("input_ids", input_ids);



      


        var BaseUrl = "<?php echo $this->url; ?>";
        $.ajax({
            url: 'guardarAsistencia',
            type: "post",
            dataType: "html",
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            async: false,
            success: function(response) {

//                alert(response);

                $("#tablaAsistencia").html(response);
            }

        });


    });

});


$(document).ready(function() {
    $("#guardar_asistenciaA").on('click', function(event) {//al hacer clic en el boton #guardar_alumno del formulario.
//function guardarAsistencia(){



//obtener datos de select

        contadorselect = 0;
        select_ids = "";
        $("select").each(function(i, item) {
//            if ($(this).is(':text')) {
            select_ids += $(this).attr('name') + ":" + $(this).val();
            contadorselect++;
//            }


        });
        
        contadorinput = 0;
        input_ids = "";
        $("input").each(function(i, item) {
//            if ($(this).is(':text')) {
            input_ids += $(this).attr('name') + ":" + $(this).val();
            contadorinput++;
//            }


        });



        var f = $(this);
        var formData = new FormData(document.getElementById("asistenciaAlumnos")); //id formulario 




        formData.append("select_ids", select_ids);
        formData.append("input_ids", input_ids);




        var BaseUrl = "<?php echo $this->url; ?>";
        $.ajax({
            url: 'actualizarAsistencia',
            type: "post",
            dataType: "html",
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            async: false,
            success: function(response) {

//                alert(response);

                $("#tablaAsistencia").html(response);
            }

        });


    });

});


$(document).ready(function() {
    $("#historialFalta").on('click', function(event) {


        // se muestran los div
        document.getElementById("dateini").style.display = 'block';
        document.getElementById("datefin").style.display = 'block';
        document.getElementById("botonhisaceptar").style.display = 'block'; 
        document.getElementById("btnimprimir").style.display = 'block';
        
        //se ocultan los div
        document.getElementById("dateas").style.display = 'none';
        document.getElementById("btnguardar").style.display = 'none';
        
        var f = $(this);
        var formData = new FormData(document.getElementById("asistenciaAlumnos")); //id formulario 

        formData.append("dato", "valor");

        var escuela = $("#escuela").val();
        var profesor = $("#profesor").val();
        var grado = $("#grado").val();
        var grupo = $("#grupo").val();
        var nombre = $("#nom_alumno").val();
        var aPaterno = $("#apaterno").val();
//        alert(escuela);
//        alert(profesor);
//        alert(grado);
//        alert(grupo);
//        alert(nombre);
//        alert(aPaterno);
//        var aMaterno = $("#amaterno").val();
//        var curp = $("#curp").val();
//        var fechaNac = $("#fechanac").val();
//        var estatus = $("#estatus").val();
//        var genero = $("#genero").val();
//        var barreras = $("#barreras").val();
//        var diagnostico = $("#diagnostico").val();
//        var certificado = $("#certificado").val();

        if (escuela == "") {
//            var mensaje = 'Indica la escuela';
//            document.getElementById("selectGrupo").innerHTML = mensaje;
            var Htmlset = "* Campos requeridos";
            new Messages(1, Htmlset);

//            document.getElementById("escuela").focus();
            return false;
        }

        if (profesor == "") {
//            var mensaje = 'Indica el Profesor';
            var Htmlset = "* Campos requeridos";
            new Messages(1, Htmlset);
//            document.getElementById("selectGrupo").innerHTML = mensaje;
//            document.getElementById("profesor").focus();
            return false;
        }
//
        if (grado == "") {
//            var mensaje = 'Indica el grado';
            var Htmlset = "* Campos requeridos";
            new Messages(1, Htmlset);
//            document.getElementById("selectGrupo").innerHTML = mensaje;
//            document.getElementById("grado").focus();
            return false;
        }
//
        if (grupo == "") {
//            var mensaje = 'Indica el grupo';
            var Htmlset = "* Campos requeridos";
            new Messages(1, Htmlset);
//            document.getElementById("selectGrupo").innerHTML = mensaje;
//            document.getElementById("grupo").focus();
            return false;
        }
        
        var Htmlset = 'Indica la Fecha inicial y final';
            new Messages(1, Htmlset);
        

 var BaseUrl = "<?php echo $this->url; ?>";
        $.ajax({
            url: 'historialFaltasA',
            type: "post",
            dataType: "html",
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            async: false,
            success: function(response) {

                $("#tablaAsistencia").html(response);
            }

        });


    });
});






$(document).ready(function() {
    $("#historialfaltas").on('click', function(event) {//al hacer clic en el boton #guardar_alumno del formulario.



        var f = $(this);
        var formData = new FormData(document.getElementById("asistenciaAlumnos")); //id formulario 

        formData.append("dato", "valor");

        var escuela = $("#escuela").val();
        var profesor = $("#profesor").val();
        var grado = $("#grado").val();
        var grupo = $("#grupo").val();
        var nombre = $("#nom_alumno").val();
        var aPaterno = $("#apaterno").val();
        var fechaIni = $("#finicial").val();
        var fechaFin = $("#ffinal").val();


        if (escuela == "") {
//            var mensaje = 'Indica la escuela';
//            document.getElementById("selectGrupo").innerHTML = mensaje;
            var Htmlset = "* Campos requeridos";
            new Messages(1, Htmlset);

//            document.getElementById("escuela").focus();
            return false;
        }

        if (profesor == "") {
//            var mensaje = 'Indica el Profesor';
            var Htmlset = "* Campos requeridos";
            new Messages(1, Htmlset);
//            document.getElementById("selectGrupo").innerHTML = mensaje;
//            document.getElementById("profesor").focus();
            return false;
        }
//
        if (grado == "") {
//            var mensaje = 'Indica el grado';
            var Htmlset = "* Campos requeridos";
            new Messages(1, Htmlset);
//            document.getElementById("selectGrupo").innerHTML = mensaje;
//            document.getElementById("grado").focus();
            return false;
        }
//
        if (grupo == "") {
//            var mensaje = 'Indica el grupo';
            var Htmlset = "* Campos requeridos";
            new Messages(1, Htmlset);
//            document.getElementById("selectGrupo").innerHTML = mensaje;
//            document.getElementById("grupo").focus();
            return false;
        }



        var BaseUrl = "<?php echo $this->url; ?>";
        $.ajax({
            url: 'historialFaltas',
            type: "post",
            dataType: "html",
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            async: false,
            success: function(response) {

                $("#tablaAsistencia").html(response);
            }

        });


    });
});





function Messages(type, message)
{
    this.type = Number(type);
    this.message = message;
    this.style = '';

    this.getStyle = function() {
        switch (this.type)
        {
            case 1:
                this.style = "alert alert-success test";
                break;
            case 2:
                this.style = "alert alert-danger test";
                break;
            case 3:
                this.style = "alert alert-info test";
                break;
            case 4:
                this.style = "alert alert-warning test";
                break;
        }
    };
    this.setMessage = function() {
        this.getStyle();
        $("#alertMessages").removeClass();
        $("#alertMessages").addClass(this.style);
        $("#alertMessages p").hide().html(this.message);
        $("#alertMessages").css("top", 36);

        if ($("#alertMessages").is(":visible")) {

            $("#alertMessages").slideUp(500, function() {
                $("#alertMessages").slideDown(500, function() {
                    $("#alertMessages p").fadeIn(500);
                });
            });

            window.setTimeout(function() {
                $("#alertMessages").slideUp(500);
            }, 3000);

        } else {

            $("#alertMessages").slideDown(250, function() {
                $("#alertMessages p").fadeIn(500);
            });

            window.setTimeout(function() {
                $("#alertMessages").slideUp(500);
            }, 3000);
        }
    };
    this.setMessage();
}
;





