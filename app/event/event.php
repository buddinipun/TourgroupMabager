 <?php include '../../webroot/include/headder.php';
 require("../../webroot/connection/DB.php");
 $actionType = $_GET['actionType'];
 if($actionType == 'event'){
 // $user_id = $_SESSION["id"];
 // $user_name = $_SESSION["name"];
//  $sql="SELECT * FROM event WHERE user_id='$user_id'";
 $event_id = $_GET['event_id'];
 // $sql="SELECT * FROM event WHERE visits_visit_place_id='$event_id'";
 $query_select_event="SELECT * from event e, sys_user u where e.sys_user_sys_user_id=u.sys_user_id and e.visits_visit_place_id=$event_id";
 $result_select_event = mysqli_query($conn,$query_select_event);
 $row_event = mysqli_fetch_array($result_select_event);
 
 $event_name = $row_event["event_name"];
 $event_theme = $row_event["event_theme"];
 $about_event = $row_event["about_event"];
 $Event_type = $row_event["event_type"];
 $place= $row_event["place"];
 $time= $row_event["event_time"];
 $date= $row_event["event_date"];
 $user_f_name =$row_event["f_name"];
 $user_l_name =$row_event["l_name"];
 $id =$row_event["sys_user_id"];
 $photo = $row_event["image"];
 if(!file_exists($photo)){
    $photo="../../webroot/img/dashboard/event.png";
  }
}
 
elseif($actionType == 'message') {
$sender_id = $_REQUEST['sender'];
$receiver = $_REQUEST['receiver'];
$event_id = $_REQUEST['event_id'];
// echo $event_id;
 $query_select_event="SELECT * from event e, sys_user u where e.sys_user_sys_user_id=u.sys_user_id and e.visits_visit_place_id=$event_id";
 $result_select_event = mysqli_query($conn,$query_select_event);
 $row_event = mysqli_fetch_array($result_select_event);
 
 $event_name = $row_event["event_name"];
 $event_theme = $row_event["event_theme"];
 $about_event = $row_event["about_event"];
 $Event_type = $row_event["event_type"];
 $place= $row_event["place"];
 $time= $row_event["event_time"];
 $date= $row_event["event_date"];
 $user_f_name =$row_event["f_name"];
 $user_l_name =$row_event["l_name"];
 $id =$row_event["sys_user_id"];
 $photo = $row_event["image"];
 if(!file_exists($photo)){
    $photo="../../webroot/img/dashboard/event.png";
  }



}
 ?>




    <div class="jumbotron blogp">
      <div class="container">
        
          <div class="row">
            <div class="col-md-2">
              <img src="<?=$photo?>" alt="event profile pic" class="img-thumbnail">
               <a href="#" class="list-group-item"><b>Event Manager : </b><?= $user_f_name." ".$user_l_name?></a>
               <button type="button" class="btn btn-success" data-toggle="modal" data-target="#messageModel"><span class="glyphicon glyphicon-envelope" style="font-size:25px"></span>&nbsp;Send Message</button>
            </div>

            <div class="col-md-6">
              <div class="profiled">
                <h2>EVENT PROFILE</h2>
                <h5><?=$event_name?></h5>
                <h6><?=$event_theme?></h6>

                <p style="font-size:12px;width:500px;"><?=$about_event?></p>


                <div class="list-group">
                  <a href="#" class="list-group-item disabled">
                    Event Details
                  </a>
                  <a href="#" class="list-group-item"><b>Event Type : </b><?= $Event_type?></a>
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
        <form action="../../classes/msg/msgController.php?user_id=<?=$id?>&Type=event_sender&event_id=<?=$event_id?>" method="post">

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
