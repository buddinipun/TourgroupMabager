<!DOCTYPE html>
 <?php include '../../webroot/include/headder.php';
 require("../../webroot/connection/DB.php");
$user_id = $_SESSION["id"];
$session_id = session_id();
$query_select_cart_places = "SELECT * from place p, cart_handler c where c.place_id = p.place_id and  c.session_id = '$session_id'";
echo $session_id;
$result_select_cart_places = mysqli_query($conn,$query_select_cart_places);

 ?>
  <link href="style.css" rel="stylesheet">
<link rel="stylesheet" href="../../webroot/fonto/css/font-awesome.min.css">



	<div class="jumbotron welcomeback">
		<div class="container">
				
				<div class="welcometxt">TOP DESTINATIONS</div>
				<div class="welcomesmalltxt">— Yeah, Everywhere —</div>
<button type="button" style="float: right;" class="btn btn-warning" data-toggle="modal" data-target="#cart">
              
              <span class="glyphicon glyphicon-shopping-cart"></span>Cick to get cart
            </button>
		</div>
	</div>

		<div class="jumbotron bookinghori2">
			<div class="container">

					<div class="row" style="margin-top:20px;">

				  	<div class="col-md-3 mapdist">
				  	<div class="welcomesmalltxt">— Click on relavent district to Serch for places —</div>
						<iframe class="mapz" src="../../app/map/map/map.htm" scrolling="no"></iframe>			  		 	
				    </div>


				     <div class="col-md-3">
				 	 	<ul class="list-group fleettxt">
						  <a class="nodec" href="../../app/map/Anuradhapura.php" target="_blank"><li class="list-group-item">•	Anuradhapura</li></a>
						  <a class="nodec" href="../../app/map/Ratnapura.php" target="_blank"><li class="list-group-item">•	Adam's Peak</li></a>
						  <a class="nodec" href="../../app/map/Batticaloa.php" target="_blank"><li class="list-group-item">•	Batticaloa</li></a>
						  <a class="nodec" href="../../app/map/Galle.php" target="_blank"><li class="list-group-item">•	Bentota</li></a>
						  <a class="nodec" href="../../app/map/Ampara.php" target="_blank"><li class="list-group-item">•	Ampara</li></a>
						  <a class="nodec" href="../../app/map/Badulla.php" target="_blank"><li class="list-group-item">•	Badulla</li></a>
						  <a class="nodec" href="../../app/map/Galle.php" target="_blank"><li class="list-group-item">•	Galle</li></a>
						  <a class="nodec" href="../../app/map/Colombo.php" target="_blank"><li class="list-group-item">•	Colombo</li></a>
						  <a class="nodec" href="../../app/map/Matara.php" target="_blank"><li class="list-group-item">•	Matara</li></a>
						  <a class="nodec" href="../../app/map/Matale.php" target="_blank"><li class="list-group-item">•	Matale</li></a>
						  
						</ul>
				 	 </div>


				 	 <div class="col-md-3">
				 	 	<ul class="list-group fleettxt">
						  <a class="nodec" href="../../app/map/Gampaha.php" target="_blank"><li class="list-group-item">•	Gampaha</li></a>
						  <a class="nodec" href="../../app/map/Hambantota.php" target="_blank"><li class="list-group-item">•	Hambanthota</li></a>
						  <a class="nodec" href="../../app/map/jaffna.php" target="_blank"><li class="list-group-item">•	Jaffna</li></a>
						  <a class="nodec" href="../../app/map/Kalutara.php" target="_blank"><li class="list-group-item">•	Kaluthara</li></a>
						  <a class="nodec" href="../../app/map/Kandy.php" target="_blank"><li class="list-group-item">•	Kandy</li></a>
						  <a class="nodec" href="../../app/map/Kegalle.php" target="_blank"><li class="list-group-item">•	Kegalle</li></a>
						  <a class="nodec" href="../../app/map/Kurunegala.php" target="_blank"><li class="list-group-item">•	Kurunegala</li></a>
						  <a class="nodec" href="../../app/map/Matale.php" target="_blank"><li class="list-group-item">•	Mathale</li></a>
						  <a class="nodec" href="../../app/map/Nuwara_Eliya.php" target="_blank"><li class="list-group-item">•	Nuwara Eliya</li></a>
						  <a class="nodec" href="../../app/map/Kilinochchi.php" target="_blank"><li class="list-group-item">•	Kilinochchi</li></a>
						  <a class="nodec" href="../../app/map/Mannar.php" target="_blank"><li class="list-group-item">•	Mannar</li></a>
						  

						</ul>
				 	 </div>

				 	 <div class="col-md-3 mapdesti">
				 	 	<ul class="list-group fleettxt">
						  <a class="nodec" href="../../app/map/Polonnaruwa.php" target="_blank"><li class="list-group-item">•	Polonnaruwa</li></a>
						  <a class="nodec" href="../../app/map/Trincomalee.php" target="_blank"><li class="list-group-item">•	Trincomalee</li></a>
						  <a class="nodec" href="../../app/map/Vavuniya.php" target="_blank"><li class="list-group-item">•	Vavuniya</li></a>
						  <a class="nodec" href="../../app/map/Ratnapura.php" target="_blank"><li class="list-group-item">•	Rathnapura</li></a>
						  <a class="nodec" href="../../app/map/Puttalam.php" target="_blank"><li class="list-group-item">•	Puttalam</li></a>
						  <a class="nodec" href="../../app/map/Mullativu.php" target="_blank"><li class="list-group-item">•	Mullaitivu</li></a>
						  <a class="nodec" href="../../app/map/Moneragala.php" target="_blank"><li class="list-group-item">•	Monaragala</li></a>
						  <a class="nodec" href="../../app/map/Kurunegala.php" target="_blank"><li class="list-group-item">• Kurunegala</li></a>
						</ul>
				 	 </div>




				   


				</div>

			</div>
		</div>

	<div class="jumbotron vismis3" >
			<div class="container">
				

				<div class="row">
				  <div class="col-md-6">
				  	
				  </div>

				  <div class="col-md-6">
				  </div>


				  <div class="col-md-12">
				  	<img src="img/parakrama2.png" width="100%" style="margin-top:200px;">

				  </div>

				
				</div>
		
			</div>
		</div>


	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

</body>
</html>

<div class="modal fade" id="cart" role="dialog" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">

       
         
          <h2>- Selected Places -</h2>
          
              
             
                         
                     <table class="table table-hover">
                     <?php 
                     while ($row_places = mysqli_fetch_array($result_select_cart_places)) {
                     	# code...
                     
                     ?>
                     <form method="post" action="../../classes/place/requested_visit.php">
                    	<tr>
                    		<td><?= $row_places['place_name']?></td>
                    		<td><input type="hidden" name="place_id" id="place_id" value="<?= $row_places['place_id']?>">
                    		<input type="date" name="visit_date" id="visit_date"></td>
                    		<td><button class="btn btn-success btn-xs">ADD</button></td>
                    		<td><button class="btn btn-danger btn-xs"> Delete</button>

                    	</tr>

                    </form>
                    	<?php
                    }
                    ?>
                    </table>                                      
              
            
        

      </div>
    </div>
      
      

    </div>
  </div>
</div>