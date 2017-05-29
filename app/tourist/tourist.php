<?php
include '../../webroot/include/headder.php'; 
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
elseif($actionType=='message'){
// $query_select_receiver_messages ="SELECT * From messages where  ";
$sender_id = $_REQUEST['sender'];
$receiver = $_REQUEST['receiver'];

echo "$sender_id";
echo $receiver;

$query_select_tourist_details = "SELECT * from tourist t, sys_user u, tour_details d WHERE t.sys_user_sys_user_id=u.sys_user_id AND t.tourist_id=d.tourist_id and u.sys_user_id ='$id'";
// echo $query_select_tourist_details;
$tourist_details_on_msg_response =mysqli_query($conn,$query_select_tourist_details);
$tour_on_msg_response_row = mysqli_fetch_array($tourist_details_on_msg_response);
// print_r($tour_on_msg_response_row);

$id = $tour_on_msg_response_row["tourist_id"];
$nik_name = $tour_on_msg_response_row["nik_name"];
$worknEdu = $tour_on_msg_response_row["work_n_edu"];
$familynEdu = $tour_on_msg_response_row["family_n_relation"];
$aboutyou = $tour_on_msg_response_row["about"];
$birth = $tour_on_msg_response_row["birth"];
$gender = $tour_on_msg_response_row["gender"];
$preference = $tour_on_msg_response_row["tour_preference"];
$photo = $tour_on_msg_response_row["profile_pic"];
$user_username = $tour_on_msg_response_row["f_name"];
$country = $tour_on_msg_response_row["country"];
$arrivedTime = $tour_on_msg_response_row["arrived_time"];
$departureTime = $tour_on_msg_response_row["departure_time"];
// $departureTime = $tour_on_msg_response_row["text"];

}

?>
       
					<div class="container marketing">
		<div class="row">
       		 <div class="col-lg-4" style="text-align:center">
          <img class="img-rounded" src="<?=$photo?>" alt="Profile Picture" width="270px" height="270px">
          <h2><?=$user_username?></h2>
         <button type="button" class="btn btn-success" data-toggle="modal" data-target="#messageModel"><span class="glyphicon glyphicon-envelope" style="font-size:25px"></span>&nbsp;Send Message</button>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-8">
          <div class="panel panel-info">
			<div class="panel-heading"><h3>Hello I'm <?= $nik_name?></h3>
				<h5>From <?= $country?></h5>
			</div>
			<div class="panel-body">
              <p><?= $aboutyou?></p>
            </div>
			</div>
			<div class="panel panel-default">
			<div class="panel panel-default">
			<div class="panel-heading"><h4>Personal Info</h4>
			</div>
			<div class="panel-body">
			  <div class="row">
				<div class="col-lg-3">
					<span class="label label-default" style="float :left">Age :</span>
				</div>
					
				<div class="col-lg-9">
				     25 years old
				</div>
			  </div>
			  <br/>
			  <div class="row">
				<div class="col-lg-3">
					<span class="label label-default" style="float :left">gender :</span>
				</div>
					
				<div class="col-lg-9">
					<p><?= $gender?></p>
				</div>
			  </div>
			  <br/>
			  <div class="row">
				<div class="col-lg-3">
					<span class="label label-default" style="float :left">Preferences :</span>
				</div>
					
				<div class="col-lg-9">
					<p><?= $preference?></p>
				</div>
			  </div>
			  <br/>
			  <div class="row">
				<div class="col-lg-3">
					<span class="label label-default" style="float :left">Family and Realtion ship :</span>
				</div>
					
				<div class="col-lg-9">
					<p><?= $familynEdu?></p>
				</div>
			  </div>
			  <br/>
			  <div class="row">
				<div class="col-lg-3">
					<span class="label label-default" style="float :left">Work and education :</span>
				</div>
					
				<div class="col-lg-9">
					<p><?= $worknEdu?></p>
				</div>
			  </div>
			  <br/>
			  <div class="row">
				<div class="col-lg-3">
					<span class="label label-default" style="float :left">Arrival Time :</span>
				</div>
					
				<div class="col-lg-9">
				<p><?= $arrivedTime?></p>
				</div>
			  </div>
			  <br/>
			  <div class="row">
				<div class="col-lg-3">
					<span class="label label-default" style="float :left">Departure Time :</span>
				</div>
					
				<div class="col-lg-9">
				<p><?= $departureTime?></p>
				</div>
			  </div>
			  
			  </div>
             
			  
            </div>
			</div>
			
			
		</div>
	   
	  </div>
	  </div>
		 <div id="messageModel" class="modal fade" role="dialog">
  <div class="modal-dialog">

		<div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Sends Message</h4>
      </div>
      <div class="modal-body">
        <!-- <p>Some text in the modal.</p> -->
        <table>
        	<thead>
        <tr class="row">
        	
        </tr>
        	<tbody>
        	<tr class="row">
        	<td id="sender">
        		
        	</td>
        	<td id="receiver"></td>
        	</head>
        </tr>
        <tr>
        <td>
        <form action="../../classes/msg/msgController.php?user_id=<?=$id?>&Type=sender" method="post">

        <textarea name="message" class="form-control">
        	
        </textarea>
        <input type="submit" class="btn btn-default" name="send" value="Send">
        </form>
        </td>
        </tr>
        	</tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>		
