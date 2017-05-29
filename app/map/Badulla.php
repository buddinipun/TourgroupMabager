<!-- <!DOCTYPE html> -->
<?php include '../../webroot/include/headder.php';
 require("../../webroot/connection/DB.php");
$user_id = $_SESSION["id"];
echo "$user_id";
 $sql = "SELECT * FROM place where district = 'baticlo'";
 $result = mysqli_query($conn,$sql);

 
?>


<link href="style.css" rel="stylesheet">
<link rel="stylesheet" href="../../webroot/fonto/css/font-awesome.min.css">
	<div class="jumbotron picalbum">
		<div class="container">
			
			<div class="row picalbumrow">


			<div class="col-md-12">
			   <div class="imggalhead">
			   		Anuradhapura
			   </div> 
			</div>
</div>
<div class = "row">
			<?php


							if(mysqli_num_rows($result) >0){
                                while($x = mysqli_fetch_assoc($result)){
                                	 $place_id= $x['visits_visit_place_id'];
                                	$photo = $x['image'];
									if(!file_exists($photo)){
											$photo="../../webroot/img/dashboard/place.png";
										} 
                                   ?>										
									    <div class="col-md-4">
									    <a class="btn btn-info" data-toggle="modal" data-target="#place" data-id="<?=$place_id?>" id="a" onclick="pass('<?=$place_id?>')">
									      <div id="a" class="imgframe">
									      <img  src="<?= $photo ?>" width="100%" alt="...">
									      <input type="hidden" name="place_id_value" id="place_id_value" value="<?=$x['visits_visit_place_id']?>">
									      </div>
									      </a>
									      <div class="caption">
									        <h3><?= $x['place_name']  ?></h3>
									       
									      </div>
									    </div>
									    
									  
									
  

                                   <?php
                                }
            }

			
			?> 
			</div>
<div class="modal fade bs-example-modal-lg" tabindex="-1" id ="place" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
       <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
       <!-- <h1>Header of the model</h1> -->
        <script type="text/javascript">
$(document).on("click", "#a", function () {
	var myNameId = $(this).data('place_id');
	// alert(myNameId);
    });
function pass(str) {
	// alert(str);
	  var xhttp; 
	  // alert("sucess");
	  // if (str == "") {
	  //   document.getElementById("txtHint").innerHTML = "";
	  //   alert(str);
	  //   return;
	  // }
	  xhttp = new XMLHttpRequest();
	  xhttp.onreadystatechange = function() {
	    if (xhttp.readyState == 4 && xhttp.status == 200) {
	    document.getElementById("txtHint").innerHTML = xhttp.responseText;
	    }
	  };
	  xhttp.open("GET", "place.php?q="+str + "&comment=request", true);
	  xhttp.send();
	}


</script>
</div>
<div class="modal-body">
<!-- <h1>Content of the model</h1> -->
<div id="txtHint"></div>
</div>
</div>
</div>
</div>
</div>
<script type="text/javascript">
	
	function add_comment(){

		var comment = document.getElementById("comment").value;
		// var place_id = document.getElementById("place_id_value").value;
		var place_id_comment = document.getElementById("place_id_comment").value;
		var user_id =<?= $_SESSION["id"];?>;
		// alert(place_id);
		alert(place_id_comment);
	
		 var xhttp; 
	  // alert("sucess");
	  // if (str == "") {
	    document.getElementById("commentReply").innerHTML = "";
	  //   alert(str);
	  //   return;
	  // }
	  xhttp = new XMLHttpRequest();
	  xhttp.onreadystatechange = function() {
	    if (xhttp.readyState == 4 && xhttp.status == 200) {
	    document.getElementById("commentReply").innerHTML = xhttp.responseText;
	    }
	  };
	  var i = "../../classes/comment/commentController.php?comment=" + comment + "&user_id=" + user_id + "&place_id=" + place_id_comment;
	  xhttp.open("POST", i , true);
	  	
		alert(i);
	  xhttp.send();

	}
</script>

			  <div class="col-md-4">
			    
			  </div>
		


			<!--modalnstart-->

			  	