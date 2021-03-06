var options = {
    protocol: location.protocol.replace(/:$/, ''),
    hostname: location.hostname,
    port: 8000,
    autoReconnect: true
};

// Initiate the connection to the server
var socket = socketCluster.connect(options);
socket.on('connect', function () {
    console.log('CONNECTED');
});

// Listen to an event called 'rand' from the server
socket.on('rand', function (num) {
    console.log('RANDOM: ' + num);
    var curHTML = document.body.innerHTML;
    curHTML += 'RANDOM: ' + num + '<br />';
    document.body.innerHTML = curHTML;
});
