<?php
include '../../webroot/connection/DB.php';

$email = $_POST["email"];
$password = $_POST["Password"];
//echo $email;

// ---------------------------------- Retriving requested llogin details from DB -------------------------------------------------------------
$sql="SELECT * FROM sys_user Where email='$email' AND password='$password'";

//------------------------------------------------------------Execute query -------------------------------------------------------------------

$result = mysqli_query($conn,$sql);
// ---------------------------------------- function fetches a result row as an associative array, a numeric array, or both ------------------------
	if($row=mysqli_fetch_array($result)){
		echo "Login Sucess";
		if(!isset($_SESSION)){
			session_start();
		}
		$_SESSION["name"]=$row["f_name"];
		$_SESSION["id"]=$row["sys_user_id"];
		$_SESSION["country"]=$row["country"];
		$_SESSION["lname"]=$row["l_name"];
		$_SESSION["state"]=$row["state"];
		$_SESSION["contact"]=$row["contact"];
		header("Location:../../app/users/dashboard.php");
	}else{
		echo "Login Failed";
	}
	


?>


