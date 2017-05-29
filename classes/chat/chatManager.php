<?php
include '../../webroot/include/headder.php';
require("../../webroot/connection/DB.php");

$sql = "INSERT INTO chat_box(chat_user_id,chat_text) VALUES ()";

$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);

if(isset($_POST['chatText'])){
	
	echo "hiii";
}
?>
