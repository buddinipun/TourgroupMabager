<!DOCTYPE html>
<?php include '../../webroot/include/headder.php';?>
   <script src="https://maps.googleapis.com/maps/api/js?sensor=false&libraries=places"></script>
  <script type="text/javascript">
  var firstmap;
  var geocoder;
	function initialize() {
		//<<<<<<< -------------------------- Create google map ------------------->>>>>>>
		var latLong = new google.maps.LatLng(7.4930, 80.3547);

		var Myoption = {
				zoom: 8,
				center: latLong,
				mapTypeId:google.maps.MapTypeId.ROADMAP 
				};

		firstmap = new google.maps.Map(document.getElementById("map_canvas"),Myoption);
// ------------ geo coder is used to convert address in to goographic cordiantions --------------- 	
		geocoder = new google.maps.Geocoder();
		//<<<<<<< -------------------------- Creating marker for place ------------------->>>>>>>
				var point = new google.maps.LatLng(7.4930, 80.3547);
				var marker = new google.maps.Marker({
					position:point,
					map:firstmap,
					title:'Hello',
					draggable:true,
// 					icon:'../../public/img/maps/flag.png'
				})
				//<<<<<<< -------------------------- Adding comment on a place ------------------->>>>>>>
				var contentString = '<div>This is my first markup</div>';
				var infowindow = new google.maps.InfoWindow({
					content:contentString
					})

				google.maps.event.addListener(marker,'click',function(){
					infowindow.open(firstmap,marker);
					})
					
					
	}
//------------------------------------Srarching a place over google map -----------------------------------
	$(document).ready(function () {
		$("#autocomplete").autocomplete({
//--------------------------------------Requesting for a place --------------------------------------------
			source:function (request,response){	
//-------------------------request - value entered by user  , and response - suggestions returned by google maps ------------- 
				geocoder.geocode({'address':request.term},function (results) {
					    response($.map(results,function(item){
							return {
								label:item.formatted_address,
								value:item.formatted_address,
								latitude:item.geometry.location.lat(),
								longitude:item.geometry.location.lng(),
								}
							var place = 'place<input type="text" value="'+item.formatted_address+'"><br/>';
							$("#placeName").append(place);
						    }))
				})
				},
				select:function(event,ui){
					var location = new google.maps.LatLng(ui.item.latitude,ui.item.longitude);
					marker       = new google.maps.Marker({

						map:firstmap,
						draggable:true
						})
						var Stringvalue = '<div class="row"><div class="col-sm-3"> Latitude<input type="text" name="value[]" value="'+ui.item.latitude+'"></div><div class="col-sm-3">Longitude<input type="text" name="value[]" value="'+ui.item.longitude+'"></div><div class="col-sm-3">Description<input type="text" name="value[]" value=""></div></div><br/>';			
						$("#value").append(Stringvalue);
						marker.setPosition(location);
						firstmap.setCenter(location);
					

						}

			})
	})
  </script>
  <style>
   
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
     
    }
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
    }
  </style>
  </head>
  <body onload="initialize()">
<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-7">
     <div id="map_canvas" style="width: 700px; height: 700px">
  
 			 <!--  place the map here -->
  	   </div>
  	
      </div>
      <div class="col-sm-5 sidenav">
       <h4>Sri Lanka places Map</h4>
      <div class="input-group">
  		 <input type="text" class="form-control" name="auto" id="autocomplete" placeholder="Search Your Place here..">
        <span class="input-group-btn">
          <button class="btn btn-default" type="button">
            <span class="glyphicon glyphicon-search"></span>
          </button>
        </span>
        </div>
        <form action="../../classes/map/savePlaces.php" method="POST">
        
         	<div id="value">
 	   		</div>
 	   			<hr/>
        	<button type="submit" class="btn btn-info">SUBMIT</button>
 	    </form>
 	    <br>
 	    <br>
 	    <br>
 	    <p><a class="btn btn-success btn-lg" href="../../app/tourist/TotalTourists.php" role="button">SERCH FOR FRIENDS..&raquo;</a></p>

<br/>
<br/>
<p><a class="btn btn-danger btn-lg" href="../../app/tourist" role="button">VISIT YOUR PROFILE...... &raquo;</a></p>
	 </div>
	 <br/>
	 <br/>	
	 
   </div>
   </div>