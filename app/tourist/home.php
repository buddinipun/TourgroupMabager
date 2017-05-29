 <?php 
 include '../../webroot/include/headder.php';
  include '../../webroot/connection/DB.php';
 $id = $_SESSION["id"];
  $user_id = $_SESSION["id"];
  $user_name = $_SESSION["name"];
  $country = $_SESSION["country"];
  $sql="SELECT * FROM tourist WHERE sys_user_sys_user_id='$user_id'";
  $result = mysqli_query($conn,$sql);
  $row = mysqli_fetch_array($result);
  
  $nik_name = $row["nik_name"];
  $tourist_id = $row["tourist_id"];
  $sql_tourist="SELECT * FROM tour_details WHERE tourist_id='$tourist_id'";
  $result_tourist = mysqli_query($conn,$sql_tourist);
  $row_tourist = mysqli_fetch_array($result_tourist);
  // $work_n_edu = $row["work_n_edu"];
  $arrived_time = $row_tourist["arrived_time"];
  $departure_time = $row_tourist["departure_time"];
  $place_prefences = $row_tourist["place_prefences"];
  $worknEdu = $row["work_n_edu"];
  $familynEdu = $row["family_n_relation"];
  $aboutyou = $row["about"];
  $birth = $row["birth"];
  $gender = $row["gender"];
  // $preference = $row["preference"];
  $photo = $row["profile_pic"];
  
 ?>
    <div class="container marketing">
		<div class="row">
       		 <div class="col-lg-4" style="text-align:center">
          <img class="img-thumbnail" src="<?=$photo?>" alt="Profile Picture" width="270px" height="270px">
          <h2><?=$user_name ?></h2>
        	<h3 style="color: green;">Messages</h3>
         <!-- Message View place -->
			<div style="overflow:auto; height=200px;">
			<table class="table table-stripped">
			<tr>
			<td>Recieve</td>

			</tr>
				<?php  

				$query_select_texts = "SELECT f_name,user_id,text,created_at FROM send_message m,sys_user u 
where u.sys_user_id = m.user_id AND m.reciever_id ='$tourist_id' ORDER BY send_msg_id DESC";
				// echo $query_select_texts;
				$result_select_texts = mysqli_query($conn,$query_select_texts);
				

				while($message = mysqli_fetch_array($result_select_texts)){

					?>
					<tr>

							<td>
									<?php echo $message['f_name'] . " - " .$message['text']; ?>
							</td>
					</tr>
					<tr>

							<td>
									<?php echo $message['created_at'] ; ?>
							</td>
							<td>
							<button data-toggle="modal" data-target="#messageModel" class="btn btn-success btn-xs">Send Message</button>
							</td>

					</tr>

					<?php
					
				}

					

				
			
			 ?>
			
			<tr>
			<td>Sends
			
					
			</td>
			</tr>

				<?php  

				$query_select_texts = "SELECT f_name,user_id,text,created_at FROM reciever_message m,sys_user u 
where u.sys_user_id = m.user_id AND m.user_id='$id' ORDER BY receiv_msg_id DESC ";
				// echo $query_select_texts;
				$result_select_texts = mysqli_query($conn,$query_select_texts);
				

				while($message = mysqli_fetch_array($result_select_texts)){

					?>
					<tr>

							<td>
									<?php echo $message['f_name'] . " - " .$message['text']; ?>
							</td>
					</tr>
					<tr>

							<td>
									<?php echo $message['created_at'] ; ?>
							</td>
							<td>
							<button data-toggle="modal" data-target="#messageModel" class="btn btn-success btn-xs">Send Message</button>
							</td>

					</tr>

					<?php
					
				}

					

				
			
			 ?>

			</table>
			</div>
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
					<p><?= $place_prefences?></p>
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
				<p><?= $arrived_time?></p>
				</div>
			  </div>
			  <br/>
			  <div class="row">
				<div class="col-lg-3">
					<span class="label label-default" style="float :left">Departure Time :</span>
				</div>
					
				<div class="col-lg-9">
				<p><?= $place_prefences?></p>
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
        	<td class="col-md-6 col-sm-6 col-xs-6" style="float:left; width='300px'">Sender</td>
        	<td class="col-md-6 col-sm-6 col-xs-6" style="float:right; width='100px'">Receiver</td>
        	</head>
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
        <form action="../../classes/msg/msgController.php?user_id=<?=$id?>&Type=reciver" method="post">

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