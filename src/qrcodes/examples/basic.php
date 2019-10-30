<!DOCTYPE html>
<html>

<head>
	<title>basic example</title>
</head>

<body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>

	<!--<script type="text/javascript" src="../jquery.qrcode.min.js"></script>
-->
	<script type="text/javascript" src="../src/jquery.qrcode.js"></script>
	<script type="text/javascript" src="../src/qrcode.js"></script>

	<div style="text-align: center;width: fit-content;">
		<div id="qrcodeCanvas"></div>
		<h1>Wifi</h1>
	</div>
	<div style="text-align: center;width: fit-content;">
			<div id="qrcodeip"></div>
			<h1>Adresse</h1>
		</div>
	<script>
		jQuery('#qrcodeCanvas').qrcode({
            //text: "WIFI:T:WPA;S:ZEOP-c67d56;P:ZTEGC8399494;"
            text: "WIFI:T:WPA;S:EXPERNET_INVITE;P:Invite2015;"
		});
	</script>
	<script>
function getUserIP(onNewIP) { //  onNewIp - your listener function for new IPs
    //compatibility for firefox and chrome
    var myPeerConnection = window.RTCPeerConnection || window.mozRTCPeerConnection || window.webkitRTCPeerConnection;
    var pc = new myPeerConnection({
        iceServers: []
    }),
    noop = function() {},
    localIPs = {},
    ipRegex = /([0-9]{1,3}(\.[0-9]{1,3}){3}|[a-f0-9]{1,4}(:[a-f0-9]{1,4}){7})/g,
    key;

    function iterateIP(ip) {
        if (!localIPs[ip]) onNewIP(ip);
        localIPs[ip] = true;
    }

     //create a bogus data channel
    pc.createDataChannel("");

    // create offer and set local description
    pc.createOffer(function(sdp) {
        sdp.sdp.split('\n').forEach(function(line) {
            if (line.indexOf('candidate') < 0) return;
            line.match(ipRegex).forEach(iterateIP);
        });
        
        pc.setLocalDescription(sdp, noop, noop);
    }, noop); 

    //listen for candidate events
    pc.onicecandidate = function(ice) {
        if (!ice || !ice.candidate || !ice.candidate.candidate || !ice.candidate.candidate.match(ipRegex)) return;
        ice.candidate.candidate.match(ipRegex).forEach(iterateIP);
    };
}

// Usage

getUserIP(function(ip){
	jQuery('#qrcodeip').qrcode({
			text: "http://"+ip+":3000/index.php"
		});
});</script>

</body>

</html>