<?php
// https://statickidz.com/scripts/traductor/?&source=es&target=en&q=saludos
?>
 
 
 
<!Doctype html>
<html lang="esp">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Universal IoT Test Websocket</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script type="text/javascript" src="js/responsivevoice.js"></script>
	<script type="text/javascript" src="js/artyom.window.min.js"></script>


</head>
<body> 



    






 
    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>

    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>

    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>

    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script> 


	
 <script type="text/javascript">

 // Esta funcion inicia artyom en el reconocimiento discontinuo (para conexiones http)
function startOneCommandArtyom(){
    artyom.fatality();// Detener cualquier instancia previa

    setTimeout(function(){// Esperar 250ms para inicializar
         artyom.initialize({
            lang:"en-GB",// Más lenguajes son soportados, lee la documentación
            continuous:false,// Reconoce 1 solo comando y basta de escuchar
            listen:true, // Iniciar !
            debug:true, // Muestra un informe en la consola
            speed:1 // Habla normalmente
        }).then(function(){
            console.log("Ready to work !");
        });
    },250);
}

// Esta funcion inicia artyom en el reconocimiento continuo y obedecera comandos por siempre (requiere conexión https para prevenir el dialogo de permiso de microfono continuo)
function startContinuousArtyom(){
    artyom.fatality();// Detener cualquier instancia previa

    setTimeout(function(){// Esperar 250ms para inicializar
         artyom.initialize({
            lang:"en-GB",// Más lenguajes son soportados, lee la documentación
            continuous:true,// Artyom obedecera por siempre
            listen:true, // Iniciar !
            debug:true, // Muestra un informe en la consola
            speed:1 // Habla normalmente
        }).then(function(){
            console.log("Ready to work !");
        });
    },250);
}


artyom.redirectRecognizedTextOutput(function(recognized,isFinal){
    if(isFinal){
        console.log("Texto final reconocido: " + recognized);
    }else{
        console.log(recognized);
    }
});


</script>



</body>
</html>


