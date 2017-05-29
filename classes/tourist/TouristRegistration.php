<?php
include '../../webroot/connection/DB.php';
include '../../webroot/include/headder.php';
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
$sql = "INSERT INTO tourist(nik_name,work_n_edu,family_n_relation,tour_preference,about,birth,gender,profile_pic,sys_user_sys_user_id) VALUES  ('$nikName','$work','$relation','$preference','$description','$birth','$gender','$photo','$user_id')";
//Execute sql
mysqli_query($conn,$sql);
$query_get_tourist_id = "SELECT tourist_id from tourist where sys_user_sys_user_id = $user_id order by tourist_id DESC limit 1";
$result_get_tourist_id = mysqli_query($conn,$query_get_tourist_id);
$row_tourist_id = mysqli_fetch_assoc($result_get_tourist_id);
$tourist_id = $row_tourist_id['tourist_id'];
$_SESSION['cart_tourist_id'] =$tourist_id;
echo $_SESSION['cart_tourist_id'];
// echo "<h1>Thank You For Registration with Tour Manager<h1>";
// echo "<a href='../../app/tourist'> View Your profile here</a>";
header("Location:../../app/tourist/tourdetails.php");
?>

