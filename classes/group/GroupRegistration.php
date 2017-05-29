<?php
include '../../webroot/connection/DB.php';
include '../../webroot/include/headder.php';
$grpName = $_POST["grpName"];
$grpTheme = $_POST["grpTheme"];
$aboutGroup = $_POST["aboutGroup"];
$start = $_POST["start"];
$end = $_POST["end"];
$manager_id = $_SESSION["id"];
//---------------------------------------------------------Uploading profile picture----------------------------------------------------------
$folder= "../../webroot/img/uploads/group/";
$photo = $folder.date("Y-m-d-h-i-s-").basename($_FILES["photo"]["name"]);
$temp_file=$_FILES["photo"]["tmp_name"];
// 	echo "hiiii".$temp_file."<br/>";
// 	echo "photoesss".$photo;
$done= move_uploaded_file($temp_file,$photo);
if($done){
	// 	echo "File Uploded";
	// 	echo "<img src='$photo' width='200' height='150'/>";
	// 	echo $photo;
}else
	echo "Uplode Failed";
	$sql = "INSERT INTO groups(start_time,end_time,group_name,grp_theme,about_grp,photo) VALUES('$start','$end','$grpName','$grpTheme','$aboutGroup','$photo')";
	//Execute sql
	mysqli_query($conn,$sql);
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
<p><a class="btn btn-danger btn-lg" href="../../app/tourGroup" role="button">VISIT GROUP PROFILE...... &raquo;</a></p>
</div>
</div>
</div>