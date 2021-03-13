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
<style>
    
    body {
        
        font-family: Arial;
        
    }
    
    .inline {
	margin:30px 0px 0px 0px;
        
    }
    
    #framelogo {
        margin-top:-13px;
        margin-left:30px;
    }
	#text {
		width: 80%;
	}
	#chart_div {
		margin: 11px 18px 12px 15px;
		//text-align: center;
		width: 78%;
		
	}
    
</style>


</head>
<body> 



    <div class="inline">
        <div id="voicetestdiv" style="display: block;">
            <textarea id="text" cols="85" rows="5"></textarea>
            <br>
            <select id="voiceselection"><option value="UK English Female">UK English Female</option>
			<option value="UK English Male">UK English Male</option>
			<option value="US English Female">US English Female</option>
			<option value="Arabic Male">Arabic Male</option>
			<option value="Arabic Female">Arabic Female</option>
			<option value="Armenian Male">Armenian Male</option>
			<option value="Australian Female">Australian Female</option>
			<option value="Brazilian Portuguese Female">Brazilian Portuguese Female</option>
			<option value="Chinese Female">Chinese Female</option>
			<option value="Chinese (Hong Kong) Female">Chinese (Hong Kong) Female</option>
			<option value="Chinese Taiwan Female">Chinese Taiwan Female</option>
			<option value="Czech Female">Czech Female</option>
			<option value="Danish Female">Danish Female</option>
			<option value="Deutsch Female">Deutsch Female</option>
			<option value="Dutch Female">Dutch Female</option>
			<option value="Finnish Female">Finnish Female</option>
			<option value="French Female">French Female</option>
			<option value="Greek Female">Greek Female</option>
			<option value="Hindi Female">Hindi Female</option>
			<option value="Hungarian Female">Hungarian Female</option>
			<option value="Indonesian Female">Indonesian Female</option>
			<option value="Italian Female">Italian Female</option>
			<option value="Japanese Female">Japanese Female</option>
			<option value="Korean Female">Korean Female</option>
			<option value="Latin Female">Latin Female</option>
			<option value="Norwegian Female">Norwegian Female</option>
			<option value="Polish Female">Polish Female</option>
			<option value="Portuguese Female">Portuguese Female</option>
			<option value="Romanian Male">Romanian Male</option>
			<option value="Russian Female">Russian Female</option>
			<option value="Slovak Female">Slovak Female</option>
			<option value="Spanish Female" selected="selected">Spanish Female</option>
			<option value="Spanish Latin American Female">Spanish Latin American Female</option>
			<option value="Swedish Female">Swedish Female</option>
			<option value="Tamil Male">Tamil Male</option>
			<option value="Thai Female">Thai Female</option>
			<option value="Turkish Female">Turkish Female</option>
			<option value="Afrikaans Male">Afrikaans Male</option>
			<option value="Albanian Male">Albanian Male</option>
			<option value="Bosnian Male">Bosnian Male</option>
			<option value="Catalan Male">Catalan Male</option>
			<option value="Croatian Male">Croatian Male</option>
			<option value="Czech Male">Czech Male</option>
			<option value="Danish Male">Danish Male</option>
			<option value="Esperanto Male">Esperanto Male</option>
			<option value="Finnish Male">Finnish Male</option>
			<option value="Greek Male">Greek Male</option>
			<option value="Hungarian Male">Hungarian Male</option>
			<option value="Icelandic Male">Icelandic Male</option>
			<option value="Latin Male">Latin Male</option>
			<option value="Latvian Male">Latvian Male</option>
			<option value="Macedonian Male">Macedonian Male</option>
			<option value="Moldavian Male">Moldavian Male</option>
			<option value="Montenegrin Male">Montenegrin Male</option>
			<option value="Norwegian Male">Norwegian Male</option>
			<option value="Serbian Male">Serbian Male</option>
			<option value="Serbo-Croatian Male">Serbo-Croatian Male</option>
			<option value="Slovak Male">Slovak Male</option>
			<option value="Swahili Male">Swahili Male</option>
			<option value="Swedish Male">Swedish Male</option>
			<option value="Vietnamese Male">Vietnamese Male</option>
			<option value="Welsh Male">Welsh Male</option>
			<option value="US English Male">US English Male</option>
			<option value="Fallback UK Female">Fallback UK Female</option>
			</select>            
			<input id="traducirbutton" value="traducir" type="button">
			<input id="parlantebutton" value="parlante" type="button">
			<input id="stopbutton" value="Stop" type="button">
            
        </div>
    </div>
    

<div style="margin:30px 0px 0px 0px;"></div>
<div id="chart_div"></div>
<div></div>





 
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


<?php





$fp = fopen('leer.txt', 'r');
while(!feof($fp)) {

@$linea .= eregi_replace("[\n|\r|\n\r]",'',str_replace('"',"",fgets($fp)));



//echo $linea . "<br />";

}

//print_r($linea);

?>
	
 <script type="text/javascript">


	
traducirbutton.onclick = function() {
	
var data="<?php echo $linea; ?>";



var formData = new FormData();


 $.ajax({
            url: 'https://statickidz.com/scripts/traductor/?&source=en&target=es&q='+ $('#text').val(),
            type: "get",
            dataType: "html",
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            async: false,
            success: function(response) {
	
	var json = $.parseJSON(response);
	var translation='';
	
	$.each(json, function(index, element) {


translation = json['translation'];
	
	});
		
	var resuldatos = document.getElementById('chart_div');
        resuldatos.innerHTML = translation;

responsiveVoice.speak(translation,"Spanish Latin American Female");

			}
        });
		
		
}

   stopbutton.onclick = function() {

        responsiveVoice.cancel();

    };
	

parlantebutton.onclick = function() {

translation=$('#text').val();

responsiveVoice.speak(translation,"Spanish Latin American Female");

	var resuldatos = document.getElementById('chart_div');
        resuldatos.innerHTML = translation;
		
}


</script>

<?php
fclose($fp);
?>


</body>
</html>


