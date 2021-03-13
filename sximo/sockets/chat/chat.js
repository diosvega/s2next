


var Express = require('express');
var app = Express();
	io = require('socket.io').listen(app);

io.configure('production', function(){
  io.enable('browser client etag');
  io.set('log level', 1);

  io.set('transports', [
    'websocket', 
    'flashsocket', 
    'htmlfile', 
    'xhr-polling', 
    'jsonp-polling', 
  ]);
});

io.configure('development', function(){
  io.set('transports', ['websocket']);
});

app.get('/', function (req, res) {
	res.redirect('/chat.html');
});

app.use(Express.static(__dirname + '/static'));
app.listen(process.env.PORT || process.argv[3] || 8080);

io.sockets.on('connection', function(client){
    var userName;
	console.log("user connected!");
	client.emit('message', 'please insert user name');
    
	client.on('message', function(message){
        if (!userName) {
			userName = message;
			console.log(userName + ' is connected :)');
			client.emit('message', 'Welcome ' + userName);
			client.broadcast.emit('message', userName + ' is connected');
		}
		else {
			client.emit('message', 'me: ' + message);
			client.broadcast.emit('message', userName + ' says: ' + message);
		}
    });

    client.on('disconnect', function() {
		if (userName) {
			console.log(userName + " left");
			client.broadcast.emit('message', userName + ' left us :(');
		}
		else {
			console.log("anonymous left");
		}
    });
});


