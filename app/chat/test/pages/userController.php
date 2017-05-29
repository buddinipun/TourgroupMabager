<?php 
include '../conn/classes.php';
$user=new user();
echo "1";

if(isset($_POST['username'])&& isset($_POST['userEmail']) && isset($_POST['userPassword'])){
	$user=new user();
	echo $_POST['username'];
	$val1 = $_POST['username'];
	$user->setUserName($val1);
	$user->setUserMail($_POST['userEmail']);
	$user->setUserPassword($_POST['userPassword']);
	$user->InsertUser();
	header("Location:../conn/index.php?success=1");
	echo "3";
	}
	
	else{ 
		echo"4";
	}
	
?>

<div>

</div>