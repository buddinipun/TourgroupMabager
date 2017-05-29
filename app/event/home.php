 <?php include '../../webroot/include/headder.php';
 require("../../webroot/connection/DB.php");
 $user_id = $_SESSION["id"];
 $user_name = $_SESSION["name"];
//  $sql="SELECT * FROM event WHERE user_id='$user_id'";
 $sql="SELECT * FROM event WHERE visits_visit_place_id='10'";
 $result = mysqli_query($conn,$sql);
 $row = mysqli_fetch_array($result);
 
 $event_name = $row["event_name"];
 $event_theme = $row["event_theme"];
 $about_event = $row["about_event"];
 $Event_type = $row["event_type"];
 $place= $row["place"];
 $time= $row["event_time"];
 $date= $row["event_date"];
 $photo = $row["image"];
 ?>
    <div class="jumbotron blogp">
      <div class="container">
        
          <div class="row">
            <div class="col-md-2">
              <img src="<?=$photo?>" alt="event profile pic" class="img-thumbnail">

              <button type="button" class="btn btn-success" style="width:100%;margin-top:10px;"> <i class="fa fa-envelope-o" aria-hidden="true"></i> Send a Message</button>
            </div>

            <div class="col-md-6">
              <div class="profiled">
                <h2>EVENT PROFILE</h2>
                <h5><?=$event_name?></h5>
                <h6><?=$event_theme?></h6>

                <p style="font-size:12px;width:500px;"><?=$about_event?></p>


                <div class="list-group">
                  <a href="#" class="list-group-item disabled">
                    Personal Details
                  </a>
                  <a href="#" class="list-group-item"><b>Event Type</b><?= $Event_type?></a>
                  <a href="#" class="list-group-item"><b>Place</b> : <?= $place?></a>
                  <a href="#" class="list-group-item"><b>Time</b> : <?= $time ?></a>
                  <a href="#" class="list-group-item"><b>Date</b> : <?= $date ?></a>
                  
                </div>

              </div>
            </div>
<!-- 
            <div class="col-md-4">

              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">Selected Areas</h3>
                </div>
                <div class="panel-body">
                  
                  <table>
                    <tr>
                      <td> <h3 style="margin-top:0px;float:left;"><span class="label label-default">Anuradhapura : Mirisawatiya</span> </h3>  
</td>
                      <td><i class="fa fa-trash fa-2x" aria-hidden="true" style="float:left;margin-left:10px;color:#777777;"></i></td>
                    </tr>

                     <tr>
                      <td><h3 style="margin-top:0px;float:left;"><span class="label label-default">Dambulla : Sigiriya</span> </h3></td>
                      <td><i class="fa fa-trash fa-2x" aria-hidden="true" style="float:left;margin-left:10px;color:#777777;"></i></td>
                    </tr>

                     <tr>
                      <td><h3 style="margin-top:0px;float:left;"><span class="label label-default">Galle : Fort</span> </h3></td>
                      <td><i class="fa fa-trash fa-2x" aria-hidden="true" style="float:left;margin-left:10px;color:#777777;"></i></td>
                    </tr>
                  </table>

                </div>
              </div>

            </div> -->




          </div>

      </div>  
    </div>


