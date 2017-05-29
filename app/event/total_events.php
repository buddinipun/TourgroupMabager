<?php
include '../../webroot/connection/DB.php';
include '../../webroot/include/headder.php';

$query_select_events = "SELECT * FROM event";
$results_select_events = mysqli_query($conn,$query_select_events);
?>
<link href="style.css" rel="stylesheet">
<link rel="stylesheet" href="../../webroot/fonto/css/font-awesome.min.css">
  <div class="jumbotron picalbum">
    <div class="container">
      
      <div class="row picalbumrow">


      <div class="col-md-12">
         <div class="imggalhead">
           <h1> Tour Manager - Events </h1>
         </div> 
      </div>
<div class="row">
<?php 
while($row_event= mysqli_fetch_array($results_select_events)){
		
$event_theme = $row_event["event_theme"];
$event_id = $row_event["event_id"];
  $event_type = $row_event["event_type"];
  $event_date = $row_event["event_date"];
  $event_time = $row_event["event_time"];
  $about_event = $row_event["about_event"];
  $tickets = $row_event["tickets"];
  $contact = $row_event["contact"];
  $event_name = $row_event["event_name"];
  $place = $row_event["place"];
  $latitude = $row_event["latitude"];
  $longitude = $row_event["longitude"];
  $photo = $row_event["image"];

  // $photo = $row_event["profile_pic"];
	if(!file_exists($photo)){
		$photo="../../webroot/img/dashboard/event.png";
	}

$event_manager = $row_event["event_handler_event_handler_id"];
// echo "manager".$event_manager;

$query_event_manager_sql = "SELECT * FROM sys_user where sys_user_id = $event_manager";
$event_manager_result =mysqli_query($conn,$query_event_manager_sql);
$event_manager_row = mysqli_fetch_array($event_manager_result);
// print_r($user_row);
$f_name = $event_manager_row["f_name"];
$contact = $event_manager_row["contact"];
?>


    
    	<div class="col-md-3">
      <a href="event.php?actionType=event&event_id=<?=$event_id?>">
 			<img src="<?=$photo?>" class="img-rounded" width="270px" height="270px"/> 
      </a>
        
        <h4 id="b"><?=$event_name?> </h4>
        <p> <?=$event_theme?> </p>
        <h3><?=$place?></h3>
    
        </div>
    
       <?php
       
       
		}
		
		
?>
</div>
</div>
</div>
</div>
