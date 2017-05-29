<?php 
include '../../webroot/connection/DB.php';
include '../../webroot/include/headder.php'; 

$type = $_REQUEST['Type'];
echo $type;
if($type =='sender'){

$receiver_id = $_REQUEST['user_id'];

$message = $_POST["message"];
$date_time = date('Y-m-d H:i:s');
$sender_id = $_SESSION["id"];


	$query_insert_send_message = "INSERT into `send_message`(`user_id`,`reciever_id`,`text`,`created_at`) values ('$sender_id','$receiver_id','$message','$date_time')";
if(mysqli_query($conn,$query_insert_send_message)){
	// print_r($query_insert_send_message);
	header("Location:../../app/users/dashboard.php");
}

	
}else if($type == 'reciver'){

$receiver_id = $_REQUEST['user_id'];
$message = $_POST["message"];
$date_time = date('Y-m-d H:i:s');
$sender_id = $_SESSION["id"];

$query_insert_receive_message = "INSERT into `reciever_message`(`user_id`,`sender_id`,`text`,`created_at`) values ('$receiver_id','$sender_id','$message','$date_time')";
if(mysqli_query($conn,$query_insert_receive_message)){
	print_r($query_insert_receive_message);
	header("Location:../../app/tourist/tourist.php?actionType=message&sender=$sender_id&receiver=$receiver_id");
}
}
elseif($type =='event_sender'){
	$receiver_id = $_REQUEST['user_id'];
	$event_id = $_REQUEST['event_id'];
	$message = $_POST["message"];
	$date_time = date('Y-m-d H:i:s');
	$sender_id = $_SESSION["id"];
	// echo"ane ane";
	// echo $receiver_id;
$query_insert_message = "INSERT into `messages`(`user_id`,`sender_id`,`text`,`time`,`event_id`) values ('$sender_id','$receiver_id','$message','$date_time','$event_id')";
if(mysqli_query($conn,$query_insert_message)){


	header("Location:../../app/event/event.php?actionType=message&sender=$sender_id&receiver=$receiver_id&event_id=$event_id");
	
}


}



?>