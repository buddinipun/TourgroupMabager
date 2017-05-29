 <?php include '../../webroot/include/headder.php'; 
 require("../../webroot/connection/DB.php");
 
 $sql="SELECT * FROM groups WHERE group_id='0000000003'";
 $result = mysqli_query($conn,$sql);
 $row = mysqli_fetch_array($result);	
 
 $start_time = $row["start_time"];
 $end_time = $row["end_time"];
 $group_name = $row["group_name"];
 $grp_theme = $row["grp_theme"];
 $about_grp = $row["about_grp"];
 $photo = $row["photo"];
 
 ?>
 
    <div class="container marketing">

     
      <div class="row">
        <div class="col-lg-4" style="text-align:center">
          <img class="img-circle" src="<?=$photo?>" alt="Group profile Pic" width="375px" height="375px">
          <h2>Trojans</h2>
          <button type="button" class="btn btn-success"><span class="glyphicon glyphicon-envelope" style="font-size:25px"></span>&nbsp;Chat with Group</button>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-8">
          <div class="panel panel-info">
			<div class="panel-heading"><h3><?=$group_name?></h3>
				<h5><?=$grp_theme?></h5>
			</div>
			<div class="panel-body">
              <p><?=$about_grp?></p>
            </div>
			</div>
			
			<div class="panel panel-default">
			<div class="panel panel-default">
			<div class="panel-heading"><h4>Group Info</h4>
			</div>
			<div class="panel-body">
			  <div class="row">
				<div class="col-lg-3">
					<span class="label label-default" style="float :left">Strating time :</span>
				</div>
					
				<div class="col-lg-9">
				     <?=$start_time?>
				</div>
			  </div>
			  <br/>
			  <div class="row">
				<div class="col-lg-3">
					<span class="label label-default" style="float :left">Ending time :</span>
				</div>
					
				<div class="col-lg-9">
					<?=$start_time?>
				</div>
			  </div>
			  <br/>
			  <div class="row">
				<div class="col-lg-3">
					<span class="label label-default" style="float :left">Events available :</span>
				</div>
					
				<div class="col-lg-9">
					Null
				</div>
			  </div>
			  <br/>
			  <div class="row">
				<div class="col-lg-3">
					<span class="label label-default" style="float :left">Friends on group :</span>
				</div>
					
				<div class="col-lg-9">
					<ul>
					<li>null</li>
					<li>null</li>
					</ul>
				</div>
			  </div>
			  <br/>
			<div class="row">
				<div class="col-lg-3">
					<span class="label label-default" style="float :left">Group Manager :</span>
				</div>
					
				<div class="col-lg-4">
					null
				</div>
				<div class="col-lg-5">
				<button type="button" class="btn btn-success" style="float :left"><span class="glyphicon glyphicon-envelope" style="font-size:20px"></span>&nbsp;Chat With Manager</button>
			    </div>
			  </div>
			  
			  </div>
             
			  
            </div>
			</div>
			
			
		</div>
	   
	  </div>
	  </div>