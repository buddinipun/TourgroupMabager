<?php 
include '../conn/classes.php';

if (isset($_POST['UserMailLogin']) && isset($_POST['UserPasswordLogin'])){
	
	$user = new user();
	$user->setUserMail($_POST['UserMailLogin']);
	$user->setUserPassword($_POST['UserPasswordLogin']);
	$user->UserLogin();
}
?>