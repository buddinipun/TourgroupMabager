<?php
include '../../webroot/connection/DB.php';
include '../../webroot/include/headder.php';
$place_prefer = $_POST["place_prefer"];
$start = $_POST["start"];
$end = $_POST["end"];
$tourist_id = $_GET["tourist_id"];


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

$sql = "UPDATE tourist SET `place_prefences`='$place_prefer' ,`arrived_time` = '$start',`departure_time` ='$end' where tourist_id = '$tourist_id'";
//Execute sql
// mysqli_query($conn,$sql);
// echo "<h1>Thank You For Registration with Tour Manager<h1>";
// echo "<a href='../../app/tourist'> View Your profile here</a>";
header("Location:../../app/tourist");
?>

