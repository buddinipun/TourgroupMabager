<?php
include '../../webroot/connection/DB.php';
include '../../webroot/include/headder.php';
$actionType = $_REQUEST["actionType"];
$tourist_id = $_REQUEST["tourist_id"];
if($actionType == 'touristdetails'){

$nikName = $_POST["nikName"];
$work = $_POST["work"];
$relation = $_POST["relation"];
$description = $_POST["description"];
$birth = $_POST["birth"];
$gender = $_POST["gender"];
// $start = $_POST["start"];
// $end = $_POST["end"];
$preference = $_POST["tour"];
$user_id = $_SESSION["id"];

// echo "$user_id"."<br/>";
// echo "$birth"."<br/>";
// echo "$description"."<br/>";
// echo "$preference"."<br/>";
// echo "$nikName"."<br/>";
// echo "$work"."<br/>";
// echo "$relation"."<br/>";
// echo "$gender"."<br/>";
// echo "$start"."<br/>";
// echo "$end"."<br/>";


//---------------------------------------------------------Uploading profile picture----------------------------------------------------------
$folder= "../../webroot/img/uploads/tourist/";
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
$sql = "UPDATE tourist SET nik_name='$nikName' ,work_n_edu = '$work',family_n_relation ='$relation' ,tour_preference ='$preference',about = '$description',birth = '$birth',gender = '$gender',profile_pic ='$photo' where tourist_id = '$tourist_id'";
//Execute sql
// print_r($sql);
mysqli_query($conn,$sql);
// echo "<h1>Thank You For Registration with Tour Manager<h1>";
// echo "<a href='../../app/tourist'> View Your profile here</a>";
header("Location:../../app/tourist/update_tour_details.php?tourist_id=$tourist_id");

}
?>

