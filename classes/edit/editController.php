<?php
include '../../webroot/connection/DB.php';
include '../../webroot/include/headder.php';
$id = $_SESSION["id"];
$query_select_all_profiles = "SELECT * from tourist where sys_user_sys_user_id = $id";
$result_select_all_profiles = mysqli_query($conn,$query_select_all_profiles);


?>
<link href="style.css" rel="stylesheet">
<link rel="stylesheet" href="../../webroot/fonto/css/font-awesome.min.css">
  <div class="jumbotron picalbum">
    <div class="container">
      
      <div class="row picalbumrow">


      <div class="col-md-12">
         <div class="imggalhead">
           <h2> Tour Manager - Your profiles </h2>
         </div> 
      </div>
<div class="row">
<h3> Tour Manager - Your tour profiles </h3>
<?php 
while($row_all_profiles = mysqli_fetch_array($result_select_all_profiles)){
		
$nik_name = $row_all_profiles["nik_name"];
  // $arrivedTime = $row["arrived_time"];
  // $departureTime = $row["departure_time"];
  $worknEdu = $row_all_profiles["work_n_edu"];
  $familynEdu = $row_all_profiles["family_n_relation"];
  $aboutyou = $row_all_profiles["about"];
  $birth = $row_all_profiles["birth"];
  $gender = $row_all_profiles["gender"];
  $preference = $row_all_profiles["tour_preference"];
  $photo = $row_all_profiles["profile_pic"];
	if(!file_exists($photo)){
		$photo="../../webroot/img/dashboard/tourist.png";
	}

$user_id = $row_all_profiles["tourist_id"];
$user_sql = "SELECT * FROM sys_user where sys_user_id = $user_id";
$user_result =mysqli_query($conn,$user_sql);
$user_row = mysqli_fetch_array($user_result);
// print_r($user_row);
$user_username = $user_row["f_name"];
$country = $user_row["country"];
?>


      
    	<div class="col-md-3">
      <a href="../../app/tourist/tourist.php?actionType=tourist&user_id=<?=$user_id?>">
 			<img src="<?=$photo?>" class="img-rounded" width="270px" height="270px"/> 
      </a>
        
        <h1 id="b" style="font-size: 25px"><?=$nik_name?> </h1>
        <p style="font-size: 15px"> <?=$aboutyou?> </p>
        <a href="../../app/users/updatePro.php?actionType=tourist&user_id=<?=$user_id?>" class="btn btn-info" role="button">EDIT</a>
        <a href="../../app/users/updatePro.php" class="btn btn-success" role="button">DELETE</a>
        </div>
    
       <?php
       
       
		}
		
		
?>
</div>
<div class="row">
<h3> Tour Manager - Your Event profiles </h3>

<?php 
$query_select_all_events = "SELECT * from event where sys_user_sys_user_id = $id";
$result_select_all_events = mysqli_query($conn,$query_select_all_events);
while($row_all_events = mysqli_fetch_array($result_select_all_events)){
    
$event_theme = $row_all_events["event_theme"];
$event_id = $row_all_events["visits_visit_place_id"];
  $event_type = $row_all_events["event_type"];
  $event_date = $row_all_events["event_date"];
  $event_time = $row_all_events["event_time"];
  $about_event = $row_all_events["about_event"];
  $tickets = $row_all_events["tickets"];
  $contact = $row_all_events["contact"];
  $event_name = $row_all_events["event_name"];
  $place = $row_all_events["place"];
  $latitude = $row_all_events["latitude"];
  $longitude = $row_all_events["longitude"];
  $photo = $row_all_events["image"];

  // $photo = $row_event["profile_pic"];
  if(!file_exists($photo)){
    $photo="../../webroot/img/dashboard/event.png";
  }

$event_manager = $row_all_events["sys_user_sys_user_id"];
$query_event_manager_sql = "SELECT * FROM sys_user where sys_user_id = $event_manager";
$event_manager_result =mysqli_query($conn,$query_event_manager_sql);
$event_manager_row = mysqli_fetch_array($event_manager_result);
// print_r($user_row);
$f_name = $event_manager_row["f_name"];
$contact = $event_manager_row["contact"];
?>


    
      <div class="col-md-3">
      <a href="event.php?actionType=event&event_id=<?=$event_id?>">
      <img src="<?=$photo?>" class="img-rounded" width="270px" height="270px" /> 
      </a>
        
        <h4 id="b"><?=$event_name?> </h4>
        <p> <?=$event_theme?> </p>
        <h3><?=$place?></h3>
    
        
  
        
        <h1 id="b" style="font-size: 25px"><?=$nik_name?> </h1>
        <p style="font-size: 15px"> <?=$aboutyou?> </p>
        <a href="../../app/event/update_pro.php?actionType=tourist&event_id=<?=$event_id?>" class="btn btn-info" role="button">EDIT</a>
        <a href="../../app/users/updatePro.php" class="btn btn-success" role="button">DELETE</a>
        
    </div>
       <?php
       
       
    }
    
    
?>
</div>
</div>
</div>
</div>
