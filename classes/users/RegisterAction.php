<?php
include '../../webroot/connection/DB.php';


//----------------------------------------------------------Retriving data from from ----------------------------------------------------------------
$email = $_POST["email"];
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$country = $_POST["country"];
$state = $_POST["state"];
$contact = $_POST["contact"];
$password = $_POST["password"];
$cpassword = $_POST["cpassword"];

echo "$email";
echo "$fname";
echo "$lname";
echo "$country";
echo "$state";
echo "$contact";
echo "$password";
echo "$cpassword";

if($password==$cpassword){

$select_sql = "SELECT * from sys_user WHERE email='$email'";
$result = mysqli_query($conn,$select_sql);


if( mysqli_num_rows($result) > 0){


header("Location:../../index.php?msg=exist");


}
else {



	try{
			$sql = "INSERT INTO sys_user(f_name,l_name,email,state,country,contact,password) VALUES ('$fname','$lname','$email','$state','$country','$contact','$password')";

			if(mysqli_query($conn,$sql)){
			header("Location:../../index.php?msg=true");
			}
			else{
				header("Location:../../index.php?msg=false");
			}
			
				
	}
	catch(Exception $e){
	echo $e->getMessage();
	}
}

}
	
//------------------------------------------------------------- execute query -----------------------------------------------------------------------
	 else{
			echo "<h1>Warning....!! password mismatches</h1>";
		}	
			
			
?>