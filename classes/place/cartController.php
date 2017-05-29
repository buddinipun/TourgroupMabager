<?php 
include '../../webroot/connection/DB.php';
include '../../webroot/include/headder.php';

$tourist_id = $_SESSION["id"];
$place_id = $_GET['place_id'];

$cart_variable = session_id();
// echo $tourist_id;
// echo $place_id;
// echo $_SESSION["name"];

$Query_save_selected_place = "INSERT INTO `cart_handler` (`place_id`,`user_id`,`session_id`) values ('$place_id','$tourist_id','$cart_variable')";
print_r($Query_save_selected_place);
mysqli_query($conn,$Query_save_selected_place);

header('Location:../../app/place/destinations.php');

?>