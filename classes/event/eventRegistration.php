<?php

include '../../webroot/include/headder.php';
include '../../webroot/connection/DB.php';



// echo $_POST["event_name"];

$event_name = $_POST["event_name"];
$event_theme = $_POST["event_theme"];
$event_type = $_POST["event_type"];
$place = $_POST["place"];
$date = $_POST["date"];
$time = $_POST["time"];
$contact_event = $_POST["contact_event"];
$latitude = $_POST["latitude"];
$longitude = $_POST["longitude"];
// $contact = $_POST["contact_event"];
$description = $_POST["description"];
$user_id = $_SESSION["id"];
// $event_id = $_GET["event_id"];


// $email = $_POST["email"];

// echo "latitude".$latitude."<br/>";
// echo "longitude".$longitude."<br/>";
// echo "place".$place."<br/>";
// echo "date".$date."<br/>";
// echo "time".$time."<br/>";
// echo "contact".$contact_event."<br/>"; 
// echo "description".$description."<br/>";
// echo "user_id".$user_id."<br/>";
// echo "event_theme".$event_theme."<br/>";

$folder= "../../webroot/img/uploads/events/";
$photo = $folder.date("Y-m-d-h-i-s-").basename($_FILES["photo"]["name"]);
$temp_file=$_FILES["photo"]["tmp_name"];
	// echo "hiiii".$temp_file."<br/>";
	// echo "photoesss".$photo;
$done= move_uploaded_file($temp_file,$photo);
if($done){
	// echo "File Uploded";
	// echo "<img src='$photo' width='200' height='150'/>";
	// echo $photo;

}else
	echo "Uploade Failed";

	
	$sql ="INSERT into event (event_theme,event_type,event_date,event_time,about_event,contact,event_name,place,image,latitude,longitude,event_handler_event_handler_id) values ('$event_theme','$event_type','$date','$time','$description','$contact_event','$event_name','$place','$photo','$latitude','$longitude','$user_id')";
//Execute sql
mysqli_query($conn,$sql);
// header("Location:../../app/tourist/tourdetails.php");
?>

<div class="container">
<div class="row">
<div class="col-lg-9 col-sm-6">
<h1>Thank You For Registration with Tour Manager</h1>
<img alt="background" src="../../webroot/img/thankyou.jpg" width="400px" height="">
</div>
<div class="col-lg-3 col-sm-6">
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<p><a class="btn btn-success btn-lg" href="../../app/map/SriLankaMap.php" role="button">SELECT PLACES TO VISIT&raquo;</a></p>

<br/>
<br/>
<p><a class="btn btn-danger btn-lg" href="../../app/event" role="button">VISIT GROUP PROFILE...... &raquo;</a></p>
</div>
</div>
</div>