<?php include '../../webroot/include/headder.php';
 require("../../webroot/connection/DB.php");

$session_id = session_id();
$place_id= $_POST['place_id'];
$visit_date= $_POST['visit_date'];
$user_id = $_SESSION["id"];


$query_insert_requested_place = "INSERT INTO requested_visit(place_id, date,user_id) VALUES ('$place_id','$visit_date','$user_id')";

mysqli_query($conn,$query_insert_requested_place );

// $query_delete = "DELETE from cart_handler where session_id = '$session_id()'";

// mysqli_query($conn,$query_delete);

header('Location:../../app/place/destinations.php');

 ?>