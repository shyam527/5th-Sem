<html>
    <head>
        <title>Change Background Color Based on Day of the Week</title>
    </head>
    <body>
        <?php
            $colors = array(
            "Sunday" =>"red",
            "Monday" =>"Green",
            "Tuesday" =>"Blue",
            "Wednesday" =>"pink",
            "Thursday" =>"yellow",
            "Friday" =>"cyan",
            "Saturday" =>"Orange"
            );
            $dayOfWeek = date("l");
            if (array_key_exists($dayOfWeek, $colors)) {
                $backgroundColor = $colors[$dayOfWeek];
            } 
            else {
                $backgroundColor = "#FFFFFF";
            }
            echo '<style>body { background-color:'.$colors[$dayOfWeek].';}</style>';
        ?>
    <h1>Background Color Based On Day Of The Week</h1>
    <p>Today is <?php echo $dayOfWeek;?>
    </p>
    <!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>
</html>