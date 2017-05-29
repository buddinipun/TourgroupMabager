<?php
include '../../webroot/connection/DB.php';
include '../../webroot/include/headder.php';

$place_prefer = $_POST["place_prefer"];
$start = $_POST["start"];
$end = $_POST["end"];
$user_id = $_SESSION["id"];
$sql_select = "SELECT * FROM tourist where sys_user_sys_user_id=$user_id";
$result = mysqli_query($conn,$sql_select);
$row= mysqli_fetch_array($result);
$tourist_id = $row["tourist_id"];


echo "$place_prefer"."<br/>";
echo "$start"."<br/>";
echo "$end"."<br/>";
echo "heeee"."$tourist_id"."<br/>"."heeee";



//---------------------------------------------------------Uploading profile picture----------------------------------------------------------
// $folder= "../../webroot/img/uploads/tourist/";
// $photo = $folder.date("Y-m-d-h-i-s-").basename($_FILES["photo"]["name"]);
// $temp_file=$_FILES["photo"]["tmp_name"];
// 	// echo "hiiii".$temp_file."<br/>";
// 	// echo "photoesss".$photo;
// $done= move_uploaded_file($temp_file,$photo);
// if($done){
// 	// echo "File Uploded";
// 	// echo "<img src='$photo' width='200' height='150'/>";
// 	// echo $photo;

// }else
// 	echo "Uploade Failed";
$sql = "INSERT INTO tour_details(arrived_time,departure_time,place_prefences,tourist_id) VALUES ('$start','$end','$place_prefer','$tourist_id')";
// //Execute sql
mysqli_query($conn,$sql);
header("Location:../../app/tourist/createtourprofile.php");
// echo "<h1>Thank You For Registration with Tour Manager<h1>";
// echo "<a href='../../app/tourist'> View Your profile here</a>";
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
<p><a class="btn btn-danger btn-lg" href="../../app/tourist" role="button">VISIT YOUR PROFILE...... &raquo;</a></p>
</div>
</div>
</div>