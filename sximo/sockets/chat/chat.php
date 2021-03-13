<html>
  <head>
		<title>Node.js IL Chat</title>
		<script type="text/javascript" src="/jquery-1.6.4.min.js"></script>
		<script type="text/javascript" src="/socket.io/socket.io.js"></script>
		<script language="javascript">
			var socket;
			
			$(document).ready(function()
			{
				socket = io.connect('/');
				socket.on('message', function (data) {
					var content = $('#messages').html() + data + '<br/>';
					$('#messages').html(content); 
				});
				
				$('#message').bind('keypress', function(e) {
					var code = (e.keyCode ? e.keyCode : e.which); 
					 if(code == 13) { //Enter keycode 
					   postMessage(); 
					 } 
				}); 
			});
			
			function postMessage()
			{
				if (socket) {
					socket.emit('message', $('#message').val());
					$('#message').val('');
				}
			}
		</script>
		
		<style>
			body {
				background-color:#000000;
				color: green;
			}
		</style>
		
	</head>
	<body>
		<h2 class="white">Post your messages</h3>
		<table>
			<tr><td class="white">Your Message:</td><td><input id="message" type="text" size="50"></td></tr>
		</table>
		<h2 class="white">Messages</h3>
		<div id="messages">
		</div>
	</body>
</html>




