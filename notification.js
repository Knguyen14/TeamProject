<script type = "text/javascript">
	var myWebSocket = new WebSocket("ws://localhost:8000);
	myWebSocket.onmessage = function(evt) {
		Msg.info("Time to leave for class");
	};
</script>
