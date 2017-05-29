<?php include '../../webroot/include/headder.php'; 
$id = $_GET["tourist_id"];
// echo "$id";
$sql = "SELECT * FROM tourist where tourist_id=$id";
$result = mysqli_query($conn,$sql);
$row= mysqli_fetch_assoc($result);
// print_r($row);
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

// $user_id = $row["user_id"];
$user_sql = "SELECT * FROM sys_user where sys_user_id = $id";
$user_result =mysqli_query($conn,$user_sql);
$user_row = mysqli_fetch_array($user_result);
// print_r($user_row);
$user_username = $user_row["f_name"];
$country = $user_row["country"];

$tour_details = "SELECT * FROM tour_details where tourist_id=$id";
$tour_result =mysqli_query($conn,$tour_details);
$tour_row = mysqli_fetch_array($tour_result);
$arrivedTime = $tour_row["arrived_time"];
$departureTime = $tour_row["departure_time"];

?>
<br/>
<div class="container">
	<div class="row">
		<div class="col-md-9 col-xs-6">
<form action="../../classes/tourist/edit_tour_details.php?tourist_id=<?= $id?>" method="post" enctype="multipart/form-data">
    <div class="col-sm-10">
                
                    <div class="form-group row">
                        <label for="accountCode" class="col-sm-2 form-control-label">Place Preferences</label>
                        <div class="col-sm-10">
                          <!-- <input type="text" class="form-control" id="tour" name="tour"> -->
									<div class="checkbox">
    <label><input type="checkbox" name="place_prefer" id="place_prefer" value="wild">Wild</label>
  </div>
  <div class="checkbox">
    <label><input type="checkbox" name="place_prefer" id="place_prefer" value="heritage">Heritage</label>
  </div>
  <div class="checkbox">
    <label><input type="checkbox" name="place_prefer" id="place_prefer" value="beach">Beach</label>
  </div>
  <div class="checkbox">
    <label><input type="checkbox" name="place_prefer" id="place_prefer" value="entertaintment">Entertainment</label>
  </div>
                        </div>
                    </div>

                    
                    <div class="form-group row">
                        <label for="range" class="col-sm-2 form-control-label">Active Duration</label>
                        <div class="col-sm-5" class="class='input-group date'">
                            <input type="date" class="form-control" id="start" name="start" placeholder="Start date" value="<?= $arrivedTime?>">
                        </div>
                        <div class="col-sm-5">
                            <input type="date" class="form-control" id="end" name="end" value="<?= $departureTime?>" placeholder="End date">
                        </div>
                    </div>
                    
                   </div>
              <div class="col-sm-10">
                              <input type="submit" class="btn btn-info" style="float: right">
                        </div>     
    </form>
    </div>
    <div class="col-md-3 col-xs-6"></div>
    </div>
   
   </div>
   