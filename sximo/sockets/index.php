

<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title></title>
    <link href="ws%20Archivos/css.css" rel="stylesheet" type="text/css">
    <link href="ws%20Archivos/bootstrap.css" rel="stylesheet" type="text/css">
    <script src="ws%20Archivos/jquery.js" type="text/javascript"></script>
    <script src="ws%20Archivos/bootstrap.js" type="text/javascript"></script>
    <style>
      body, input, button, select, textarea {
        font-family: 'Lato', sans-serif;
        font-size: .8em;
      }
      #appharbor li { line-height: inherit; }
      .inline-block { display: inline-block; }
	  .btn{
		font-size: 13px !important;
		
	  }
	  
    </style>
  </head>
  <body>
    
    <div class="container">
      <div class="page-header">
        <h1>
          
          <small class="pull-right">
            
            <form action="https://cloudmqtt-mgmt.herokuapp.com/sso" class="form-inline" id="form" method="post" style="display: inline-block">
              <input name="name" value="kssuwkrp" type="hidden">
              <input name="password" value="m-SPdLPNshMO" type="hidden">
              <input name="hostname" value="m10.cloudmqtt.com" type="hidden">
              <input name="port" value="12372" type="hidden">
              <input name="token" value="d1b7c9dc1fc494eabbe04538e48f31f38642af8e" type="hidden">
              <input name="timestamp" value="1500416879" type="hidden">
            </form>
            
          </small>
        </h1>
      </div>
      <script src="ws%20Archivos/mqttws31.js" type="text/javascript"></script>
      <h2>IoT Test Websocket</h2>
	  
	  <form id="send">
	  
	  <!--button style="margin: 0px 10px 0px 0px; float: left; width:87px;" id="APP-REVISION" class="btn btn-block" data-id='{"CommandType":"APP","Command":"APP-REVISION"}'>APP-REVISION</button-->
	  <button style="margin: 0px 10px 0px 0px; float: left; width:87px;" id="APP-REVISION" class="btn btn-block" data-id='{"op":"APP-REVISION","fr":"\/\/xxxxx\/99","rqi":"<?php echo(rand(10000,100000)); ?>","ty":"APP","pc":{"m2m:sch":{"rn":"schedule1","se":"*0-5 2,6,10****"}},"to":"20150910T062032"}'>RESET</button>




	  <!--button style="margin: 0px 10px 0px 0px; float: left; width:87px;" id="APP-GPI05-ACTIVE" class="btn btn-block" data-id='{"CommandType":"APP","Command":"APP-GPI05-ACTIVE"}'>APP-GPI05-ACTIVE</button-->
	  <button style="margin: 0px 10px 0px 0px; float: left; width:87px;" id="APP-GPI05-ACTIVE" class="btn btn-block" data-id='{"op":"APP-GPI05-ACTIVE","fr":"\/\/xxxxx\/99","rqi":"<?php echo(rand(10000,100000)); ?>","ty":"APP","pc":{"m2m:sch":{"rn":"schedule1","se":"*0-5 2,6,10****"}},"to":"20150910T062032"}'>CHANGE PASSWORD</button>



	  <!--button style="margin: 0px 10px 0px 0px; float: left; width:87px;" id="APP-GPI06-ACTIVE" class="btn btn-block" data-id='{"CommandType":"APP","Command":"APP-GPI06-ACTIVE"}'>APP-GPI06-ACTIVE</button-->
	  <button style="margin: 0px 10px 0px 0px; float: left; width:87px;" id="APP-GPI06-ACTIVE" class="btn btn-block" data-id='{"op":"APP-GPI06-ACTIVE","fr":"\/\/xxxxx\/99","rqi":"<?php echo(rand(10000,100000)); ?>","ty":"APP","pc":{"m2m:sch":{"rn":"schedule1","se":"*0-5 2,6,10****"}},"to":"20150910T062032"}'>REQUEST CONFIGURATION</button>




	  <!--button style="margin: 0px 10px 0px 0px; float: left; width:87px;" id="APP-GPI07-ACTIVE" class="btn btn-block" data-id='{"CommandType":"APP","Command":"APP-GPI07-ACTIVE"}'>APP-GPI07-ACTIVE</button-->
	  <button style="margin: 0px 10px 0px 0px; float: left; width:87px;" id="APP-GPI07-ACTIVE" class="btn btn-block" data-id='{"op":"APP-GPI07-ACTIVE","fr":"\/\/xxxxx\/99","rqi":"<?php echo(rand(10000,100000)); ?>","ty":"APP","pc":{"m2m:sch":{"rn":"schedule1","se":"*0-5 2,6,10****"}},"to":"20150910T062032"}'>CHECK BATTERY</button>

<hr>
<br>
<hr>


	  <!--button style="margin: 0px 10px 0px 0px; float: left; width:87px;" id="APP-GPI08-ACTIVE" class="btn btn-block" data-id='{"CommandType":"APP","Command":"APP-GPI08-ACTIVE"}'>APP-GPI08-ACTIVE</button>
	  <button style="margin: 0px 10px 0px 0px; float: left; width:87px;" id="APP-GPI08-ACTIVE" class="btn btn-block" data-id='{"op":"APP-GPI08-ACTIVE","fr":"\/\/xxxxx\/99","rqi":"<?php echo(rand(10000,100000)); ?>","ty":"APP","pc":{"m2m:sch":{"rn":"schedule1","se":"*0-5 2,6,10****"}},"to":"20150910T062032"}'>APP-GPI08-ACTIVE</button>

	  <button style="margin: 0px 10px 0px 0px; float: left; width:87px;" id="APP-GPI020-ACTIVE" class="btn btn-block" data-id='{"op":"APP-GPI020-ACTIVE","fr":"\/\/xxxxx\/99","rqi":"<?php echo(rand(10000,100000)); ?>","ty":"APP","pc":{"m2m:sch":{"rn":"schedule1","se":"*0-5 2,6,10****"}},"to":"20150910T062032"}'>APP-GPI020-ACTIVE</button>

	  <button style="margin: 0px 10px 0px 0px; float: left; width:87px;" id="APP-GPI021-ACTIVE" class="btn btn-block" data-id='{"op":"APP-GPI021-ACTIVE","fr":"\/\/xxxxx\/99","rqi":"<?php echo(rand(10000,100000)); ?>","ty":"APP","pc":{"m2m:sch":{"rn":"schedule1","se":"*0-5 2,6,10****"}},"to":"20150910T062032"}'>APP-GPI021-ACTIVE</button>


	  <button style="margin: 0px 10px 0px 0px; float: left; width:87px;" id="APP-GPI022-ACTIVE" class="btn btn-block" data-id='{"op":"APP-GPI022-ACTIVE","fr":"\/\/xxxxx\/99","rqi":"<?php echo(rand(10000,100000)); ?>","ty":"APP","pc":{"m2m:sch":{"rn":"schedule1","se":"*0-5 2,6,10****"}},"to":"20150910T062032"}'>APP-GPI022-ACTIVE</button>


	  <button style="margin: 0px 10px 0px 0px; width:87px;" id="APP-GPI023-ACTIVE" class="btn btn-block" data-id='{"op":"APP-GPI023-ACTIVE","fr":"\/\/xxxxx\/99","rqi":"<?php echo(rand(10000,100000)); ?>","ty":"APP","pc":{"m2m:sch":{"rn":"schedule1","se":"*0-5 2,6,10****"}},"to":"20150910T062032"}'>APP-GPI023-ACTIVE</button>


	  <button style="margin: 12px 10px 0px 0px; float: left; width:87px;" id="APP-POWER-OFF" class="btn btn-block" data-id='{"op":"APP-POWER-OFF","fr":"\/\/xxxxx\/99","rqi":"<?php echo(rand(10000,100000)); ?>","ty":"APP","pc":{"m2m:sch":{"rn":"schedule1","se":"*0-5 2,6,10****"}},"to":"20150910T062032"}'>APP-POWER-OFF</button>


	  <button style="margin: 12px 10px 0px 0px; float: left; width:87px;" id="APP-GPI05-DEACTIVATE" class="btn btn-block" data-id='{"op":"APP-GPI05-DEACTIVATE","fr":"\/\/xxxxx\/99","rqi":"<?php echo(rand(10000,100000)); ?>","ty":"APP","pc":{"m2m:sch":{"rn":"schedule1","se":"*0-5 2,6,10****"}},"to":"20150910T062032"}'>APP-GPI05-DEACTIVATE</button>


	  <button style="margin: 12px 10px 0px 0px; float: left; width:87px;" id="APP-GPI06-DEACTIVATE" class="btn btn-block" data-id='{"op":"APP-GPI06-DEACTIVATE","fr":"\/\/xxxxx\/99","rqi":"<?php echo(rand(10000,100000)); ?>","ty":"APP","pc":{"m2m:sch":{"rn":"schedule1","se":"*0-5 2,6,10****"}},"to":"20150910T062032"}'>APP-GPI06-DEACTIVATE</button>


	  <button style="margin: 12px 10px 0px 0px; float: left; width:87px;" id="APP-GPI07-DEACTIVATE" class="btn btn-block" data-id='{"op":"APP-GPI07-DEACTIVATE","fr":"\/\/xxxxx\/99","rqi":"<?php echo(rand(10000,100000)); ?>","ty":"APP","pc":{"m2m:sch":{"rn":"schedule1","se":"*0-5 2,6,10****"}},"to":"20150910T062032"}'>APP-GPI07-DEACTIVATE</button>


	  <button style="margin: 12px 10px 0px 0px; float: left; width:87px;" id="APP-GPI08-DEACTIVATE" class="btn btn-block" data-id='{"op":"APP-GPI08-DEACTIVATE","fr":"\/\/xxxxx\/99","rqi":"<?php echo(rand(10000,100000)); ?>","ty":"APP","pc":{"m2m:sch":{"rn":"schedule1","se":"*0-5 2,6,10****"}},"to":"20150910T062032"}'>APP-GPI08-DEACTIVATE</button>


	  <button style="margin: 12px 10px 0px 0px; float: left; width:87px;" id="APP-GPI020-DEACTIVATE" class="btn btn-block" data-id='{"op":"APP-GPI020-DEACTIVATE","fr":"\/\/xxxxx\/99","rqi":"<?php echo(rand(10000,100000)); ?>","ty":"APP","pc":{"m2m:sch":{"rn":"schedule1","se":"*0-5 2,6,10****"}},"to":"20150910T062032"}'>APP-GPI020-DEACTIVATE</button>


	  <button style="margin: 12px 10px 0px 0px; float: left; width:87px;" id="APP-GPI021-DEACTIVATE" class="btn btn-block" data-id='{"op":"APP-GPI021-DEACTIVATE","fr":"\/\/xxxxx\/99","rqi":"<?php echo(rand(10000,100000)); ?>","ty":"APP","pc":{"m2m:sch":{"rn":"schedule1","se":"*0-5 2,6,10****"}},"to":"20150910T062032"}'>APP-GPI021-DEACTIVATE</button>


	  <button style="margin: 12px 10px 0px 0px; float: left; width:87px;" id="APP-GPI022-DEACTIVATE" class="btn btn-block" data-id='{"op":"APP-GPI022-DEACTIVATE","fr":"\/\/xxxxx\/99","rqi":"<?php echo(rand(10000,100000)); ?>","ty":"APP","pc":{"m2m:sch":{"rn":"schedule1","se":"*0-5 2,6,10****"}},"to":"20150910T062032"}'>APP-GPI022-DEACTIVATE</button>


	  <button style="margin: 12px 10px 0px 0px; float: left; width:87px;" id="APP-GPI023-DEACTIVATE" class="btn btn-block" data-id='{"op":"APP-GPI023-DEACTIVATE","fr":"\/\/xxxxx\/99","rqi":"<?php echo(rand(10000,100000)); ?>","ty":"APP","pc":{"m2m:sch":{"rn":"schedule1","se":"*0-5 2,6,10****"}},"to":"20150910T062032"}'>APP-GPI023-DEACTIVATE</button>


	  <button style="margin: 14px 10px 0px 0px; float: left; width:182px;" id="APP-SENSORTEMPERATURE-ACTIVE" class="btn btn-block" data-id='{"op":"APP-SENSORTEMPERATURE-ACTIVE","fr":"\/\/xxxxx\/99","rqi":"<?php echo(rand(10000,100000)); ?>","ty":"APP","pc":{"m2m:sch":{"rn":"schedule1","se":"*0-5 2,6,10****"}},"to":"20150910T062032"}'>APP-SENSOR TEMPERATURE-ACTIVE</button>
	  <button style="margin: 76px 10px 0px 0px; width:182px;" id="APP-SENSORDISTANCE-ACTIVE" class="btn btn-block" data-id='{"op":"APP-SENSORDISTANCE-ACTIVE","fr":"\/\/xxxxx\/99","rqi":"<?php echo(rand(10000,100000)); ?>","ty":"APP","pc":{"m2m:sch":{"rn":"schedule1","se":"*0-5 2,6,10****"}},"to":"20150910T062032"}'>APP-SENSORDISTANCE-ACTIVE</button>
	  
	  
	  
	  <button style="margin: 14px 10px 0px 0px; float: left; width:182px;" id="APP-SENSORTEMPERATURE-DEACTIVE" class="btn btn-block" data-id='{"op":"APP-SENSORTEMPERATURE-DEACTIVE","fr":"\/\/xxxxx\/99","rqi":"<?php echo(rand(10000,100000)); ?>","ty":"APP","pc":{"m2m:sch":{"rn":"schedule1","se":"*0-5 2,6,10****"}},"to":"20150910T062032"}'>APP-SENSORTEMPERATURE-DEACTIVE</button>


	  <button style="margin: 14px 10px 0px 0px; width:182px;" id="APP-SENSORDISTANCE-DEACTIVE" class="btn btn-block" data-id='{"op":"APP-SENSORDISTANCE-DEACTIVE","fr":"\/\/xxxxx\/99","rqi":"<?php echo(rand(10000,100000)); ?>","ty":"APP","pc":{"m2m:sch":{"rn":"schedule1","se":"*0-5 2,6,10****"}},"to":"20150910T062032"}'>APP-SENSORDISTANCE-DEACTIVE</button>

-->
	  
      <div class="alert alert-error" id="error" style="display: none"></div>
      <div class="row">
        <div class="span3">
          <h3>Send message</h3>
          
            <!--label>Topic</label-->
            <!--input id="topic" name="topic" value="357044060024160/in"-->
			<!--input id="topic" name="topic" value="/oneM2M/req/<CSE-ID>/357044060024160/"-->			
            <label>Message</label>
            <!--textarea id="message" name="message">{"CommandType":"APP","Command":"APP-REVISION"}</textarea-->
			<textarea id="message" name="message">mensaje</textarea>
            <button id="enviar" class="btn btn-block">
              Send
            </button>
          </form>
        </div>
        <div class="span9">
          <h3>Received messages</h3>
          <table class="table">
            <thead>
              <tr>
                <!--th>Topic</th-->
                <th>Message</th>
              </tr>
            </thead>
            <tbody id="msgs"></tbody>
          </table>
        </div>
      </div>
      <style>
        pre { font-size: 11px; }
      </style>



    </div>
  
<script type="text/javascript">




	var formData = new FormData();

	var checkbox_ids='';

	formData.append("checkbox_ids", checkbox_ids);

alert('saludos rockeros');



 $.ajax({
            url: BaseUrl + '/controllers/permisos/actualizarTabla',
            type: "post",
            dataType: "html",
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            async: false,
            success: function(response) {



            }
            
            
    });









</script>


</body></html>
