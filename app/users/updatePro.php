<?php include '../../webroot/include/headder.php';  
include '../../webroot/connection/DB.php';
$id = $_SESSION["id"];
$actionType = $_GET['actionType'];
// echo "$actionType";
if($actionType=='tourist'){
$id = $_GET['user_id'];
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

}
?>
<br/>
<div class="container">
  <div class="row">
    <div class="col-md-9 col-xs-6">
<form action="../../classes/tourist/edit_tourist.php?actionType=touristdetails&tourist_id=<?=$id?>" method="post" enctype="multipart/form-data">
    <div class="col-sm-10">
                    <div class="form-group row">
                        <label for="accountGroup" class="col-sm-2 form-control-label" >Nik name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nikName" name="nikName" value="<?= $nik_name?>">
                        </div>
                    </div>
          <div class="form-group row">
                        <label for="accountCode" class="col-sm-2 form-control-label">Work and Education</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="work" name="work" value="<?= $worknEdu?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="accountCode" class="col-sm-2 form-control-label">Family and Relationship</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="relation" name="relation" value="<?= $familynEdu?>">
                        </div>
                    </div>
                  <!--   <div class="form-group row">
                        <label for="accountCode" class="col-sm-2 form-control-label">Place Preferences</label>
                        <div class="col-sm-10">
<!--                           <input type="text" class="form-control" id="tour" name="tour"> -->
                  <!-- <div class="checkbox">
  <label><input type="checkbox" value="">Wild</label>
</div>
<div class="checkbox">
  <label><input type="checkbox" value="">Heritage</label>
</div>
<div class="checkbox">
  <label><input type="checkbox" value="">Beach</label>
</div>
<div class="checkbox">
  <label><input type="checkbox" value="">Entertainment</label>
</div>
                        </div>
                    </div> -->
                   
<div class="form-group row">
                        <label for="accountCode" class="col-sm-2 form-control-label">Tour Preferences</label>
                        <div class="col-sm-10">
<!--                           <input type="text" class="form-control" id="tour" name="tour"> -->
                    <div class="radio">
  <label><input type="radio" name="tour" value="singleT">Single Traveller</label>
</div>
<div class="radio">
  <label><input type="radio" name="tour" value="groupT">Group Traveller</label>
</div>
</div>
                        </div>
                    <div class="form-group row">
                        <label for="accountCode" class="col-sm-2 form-control-label">About you</label>
                        <div class="col-sm-10">
                            <textarea class = "form-control" rows = "3" name="description" value="<?= $aboutyou?>"></textarea>
                        </div>
                    </div>                    
          <div class="form-group row">
                        <label for="description" class="col-sm-2 form-control-label">Date of birth</label>
                        <div class="col-sm-10">
<!--                             <textarea class = "form-control" rows = "3"></textarea> -->
                <input type="date" class="form-control" id="birth" name="birth" placeholder="birth date" value="<?= $birth?>">
                        </div>
                    </div>
          <div class="form-group row">
                        <label for="accountCode" class="col-sm-2 form-control-label">Gender</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="gender" id="gender" style="width: 100%; height: 30px;">
                            <option value="Select type" disabled="disabled">Select Type</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            </select>
                        </div>
                    </div>
                    <!-- <div class="form-group row">
                        <label for="range" class="col-sm-2 form-control-label">Active Duration</label>
                        <div class="col-sm-5" class="class='input-group date'">
                            <input type="date" class="form-control" id="start" name="start" placeholder="Start date">
                        </div>
                        <div class="col-sm-5">
                            <input type="date" class="form-control" id="end" name="end" placeholder="End date">
                        </div>
                    </div> -->
                    <div class="form-group row">
                        <label for="description" class="col-sm-2 form-control-label">Profile Picture</label>
                        <div class="col-sm-10">
                            <input type="file" name="photo" class="form-control" value="<?= $birth?>" />
                        </div>
                    </div>
                    <div class="form-group row">
<!--                         <label for="range" class="col-sm-2 form-control-label">Active Duration</label> -->
                        <div class="col-sm-5" class="class='input-group date'">
<!--                             <input type="date" class="form-control" id="start" name="start" placeholder="Start date"> -->
                        </div>
                        
                        <div class="col-sm-5">
                        
                              <input type="submit" class="btn btn-info">
                              <a href="../../app/users/dashboard.php" class="btn btn-default" role="button">Cancel</a>
                              <a href="../../app/tourist/update_tour_details.php?tourist_id=<?= $id?>" class="btn btn-success" role="button">NEXT</a>
                        </div>
                    </div>
                   </div>
                   
    </form>
    </div>
    <div class="col-md-3 col-xs-6"></div>
    </div>
   
   </div>
   