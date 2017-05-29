<?php
include '../../webroot/connection/DB.php';
$value = $_POST['value'];

	for($i=0;$i<count($value);$i=$i+3){
		$sql .= "('".$value[$i]."','".$value[$i+1]."','".$value[$i+2]."'),";	
	}
	
	$sql = substr($sql,0,-1);
	$query = "INSERT INTO places (latitude,longitude,description) VALUES ".$sql;
	mysqli_query($conn,$query);;
// 	echo $query;
// echo count($value);																			
// print_r($_POST);
	header("Location:../../app/map/SriLankaMap.php");
	
?>

