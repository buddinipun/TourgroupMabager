<?php
include '../../webroot/include/headder.php';
require("../../webroot/connection/DB.php");

?>
<script type="text/javascript">
<!--

//-->
$(document).ready(function(){

	$("#chatText").keyup(function (e) {
		// When press enter do..
		if(e.keyCode == 13 ){
// 		alert($("#chatText").val());
		var chatText = $("#chatText").val();
		$.ajax({
			type:'POST',
			url:'../../classes/chat/chatManager.php',
			data:{chatText:chatText},
			sucess:function() {
				$("#chatText").val("");
				}
			});
			}
		
	})
});
</script>
<style>
<!--

-->
#ChatBig{width: 500px; height: 450px; border: 1px solid #000; margin: auto;}
#chatMessage{width: 500px; height: 400px; border-bottom: 1px solid #333;}
#chatText{width: 495px; height: 48px; border-bottom: 1px solid #333;}
#chatText:FOCUS {outline: none;}
</style>
<div id="ChatBig">
	<div id="chatMessage">
	
	</div>
	<textarea name="chatText" id="chatText" rows="" cols=""></textarea>
</div>