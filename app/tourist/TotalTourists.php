<?php
include '../../webroot/connection/DB.php';
include '../../webroot/include/headder.php';

$sql = "SELECT * FROM tourist";
$result = mysqli_query($conn,$sql);
?>
<link href="style.css" rel="stylesheet">
<link rel="stylesheet" href="../../webroot/fonto/css/font-awesome.min.css">
  <div class="jumbotron picalbum">
    <div class="container">
      
      <div class="row picalbumrow">
 

      <div class="col-md-12">
         <div class="imggalhead">
           <h1> Tour Manager - Tourists </h1>
         </div> 
      </div>
<div class="row">
<?php 
while($row= mysqli_fetch_array($result)){
		
$nik_name = $row["nik_name"];
  // $arrivedTime = $row["arrived_time"];
  // $departureTime = $row["departure_time"];
  $worknEdu = $row["work_n_edu"];
  $familynEdu = $row["family_n_relation"];
  $aboutyou = $row["about"];
  $birth = $row["birth"];
  $gender = $row["gender"];
  $preference = $row["tour_preference"];
  $photo = $row["profile_pic"];
	if(!file_exists($photo)){
		$photo="../../webroot/img/dashboard/tourist.png";
	}

$user_id = $row["tourist_id"];
$user_sql = "SELECT * FROM sys_user where sys_user_id = $user_id";
$user_result =mysqli_query($conn,$user_sql);
$user_row = mysqli_fetch_array($user_result);
// print_r($user_row);
$user_username = $user_row["f_name"];
$country = $user_row["country"];
?>


    
    	<div class="col-md-3">
      <a href="tourist.php?actionType=tourist&user_id=<?=$user_id?>">
 			<img src="<?=$photo?>" class="img-rounded" width="270px" height="270px"/> 
      </a>
        
        <h2 id="b"><?=$nik_name?></h2>
        <p> <?=$aboutyou?> </p>
        <h3><?=$gender?></h3>
    
        </div>
    
       <?php
       
       
		}
		
		
?>
</div>
</div>
</div>
</div>
