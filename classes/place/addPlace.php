<?php
include '../../webroot/connection/DB.php';
include '../../webroot/include/headder.php';
$place_name = $_POST["place_name"];
$district = $_POST["district"];
$place_prefer = $_POST["place_prefer"];
$description = $_POST["description"];
$latitude = $_POST["latitude"];
$longitude = $_POST["longitude"];
$user_id = $_SESSION["id"];

// $contact = $_POST["contact_event"];

// $email = $_POST["email"];

// echo "place_name".$place_name."<br/>";
// echo "district".$district."<br/>";
// echo "place_prefer".$place_prefer."<br/>";
// echo "description".$description."<br/>";
// echo "latitude".$latitude."<br/>";
// echo "longitude".$longitude."<br/>";
// echo "user_id".$user_id."<br/>";
// echo "event_theme".$event_theme."<br/>";

$folder= "../../webroot/img/uploads/destinations/";
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

	$sql = "INSERT INTO place(place_name,about_place,district,place_type,image,sys_user_sys_user_id,latitude,longitude) VALUES  ('$place_name','$description','$district','$place_prefer','$photo','$user_id','$latitude','$longitude')";
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
