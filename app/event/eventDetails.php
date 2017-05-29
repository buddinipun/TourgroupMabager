 <!DOCTYPE html>
<?php include '../../webroot/include/headder.php';?>  
   <script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCVp69mWjFugcTw9xNTqv5vDDId1Y7vW1o&callback=initMap""></script>
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
//                  icon:'../../public/img/maps/flag.png'
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
                        
                        marker.setPosition(location);
                        firstmap.setCenter(location);
                        document.getElementById("latitude").value = location.lat();
                        document.getElementById("longitude").value = location.lng();

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
  <div class="row">
  <div class="col-md-1">
  </div>
                        <div class="col-md-10">

                            <div class="panel panel-default dashpanel">
                                <div class="panel-heading panelhead">
                                    Add a Event<br> <font style="font-size: 12px;">Fill
                                        and submit the form to add event to Tour manager</font>
                                </div>

                                <div class="panel-body panelbody tblstripped"
                                    style="font-size: 13px;">

                                    <div class="col-md-12">

                                        <!-- <form id="new-spot" style="margin-top:15px;" action="student.do" method="POST" commandName="student">-->
                                        <form style="margin-top:15px;" action="../../classes/event/eventRegistration.php" method="POST" enctype="multipart/form-data">
                                            <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="accountGroup" class="col-sm-2 form-control-label" >Event name</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="event_name" name="event_name" required="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="accountCode" class="col-sm-2 form-control-label">Event Theme</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="event_theme" name="event_theme" required="">
                                             </div>
                                            </div>
                                            
                                            <div class="form-group row">
                        <label for="accountCode" class="col-sm-2 form-control-label">Event Type</label>
                        <div class="col-sm-10">
                          <!-- <input type="text" class="form-control" id="tour" name="tour"> -->
                                    <div class="checkbox">
  <label><input type="checkbox" name="event_type" id="event_type" value="wild">Wild</label>
</div>
<div class="checkbox">
  <label><input type="checkbox" name="event_type" id="event_type" value="heritage">Heritage</label>
</div>
<div class="checkbox">
  <label><input type="checkbox" name="event_type" id="event_type" value="beach">Beach</label>
</div>
<div class="checkbox">
  <label><input type="checkbox" name="event_type" id="event_type" value="entertaintment">Entertainment</label>
</div>
                        </div>
                        </div>

                        <div class="form-group row">
                        <label for="range" class="col-sm-2 form-control-label">Place</label>
                        <div class="col-sm-7" class="class='input-group date'">
                            <input type="text" class="form-control" id="place" name="place" placeholder="place" required="">
                        </div>
                    </div>                    
                    <div class="form-group row">
                        <label for="range" class="col-sm-2 form-control-label">Date</label>
                        <div class="col-sm-7" class="class='input-group date'">
                            <input type="date" class="form-control" id="date" name="date" placeholder="date" required="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="range" class="col-sm-2 form-control-label">Time</label>
                        <div class="col-sm-7" class="class='input-group date'">
                            <input type="time" class="form-control" id="time" name="time" placeholder="time" required="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="accountCode" class="col-sm-2 form-control-label">Contact</label>
                        <div class="col-sm-10">
                            <textarea class = "form-control" rows = "3" name="contact_event" required=""></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="description" class="col-sm-2 form-control-label">Profile Picture</label>
                        <div class="col-sm-10">
                            <input type="file" name="photo" class="form-control" required="" />
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="accountCode" class="col-sm-2 form-control-label">About event</label>
                        <div class="col-sm-10">
                            <textarea class = "form-control" rows = "3" name="description" required=""></textarea>
                        </div>
                    </div> 
                    
                    
                   
</div>
<div class="col-md-6">
                    <div class="col-sm-12 sidenav">
       <h4>Locate your place</h4>
      <div class="input-group">
         <input type="text" class="form-control" name="auto" id="autocomplete" placeholder="Search Your Place here..">
        <span class="input-group-btn">
          <button class="btn btn-default" type="button">
            <span class="glyphicon glyphicon-search"></span>
          </button>
        </span>
        </div>
        
        
            <div id="value">
                <br/>
            <br/>
            
            <div class="form-group col-md-6" style="padding-left: 0px;">
                                                <label for="new-location-name">Lattitude</label>
                                                <input type="text" path="latitude" id="latitude" name="latitude" 
                                                    class="form-control normtxtin" 
                                                    placeholder="Lattitude" required="" />
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="new-location-name">Longitude</label>
                                                <input type="text" path="longitude" id="longitude" name="longitude"
                                                    class="form-control normtxtin" 
                                                    placeholder="Longitude" required="" />
                                            </div>
            </div>
                <hr/>
            

     </div>
</div>
 <button type="submit" class="btn btn-info">SUBMIT</button>
                                        </form>
                                    </div>


                                    <div class="col-md-6" style="padding: 15px;">
                                        <div id="map"></div>
                                    </div>


                                    <div class="col-md-12" style="padding: 15px;">
                                        <div id="pano"></div>
                                    </div>

                                </div>
                            </div>

                        

  <div class="row content">
    <div class="col-sm-7">
     <div id="map_canvas" style="width: 700px; height: 700px">
  
             <!--  place the map here -->
       </div>
    
      </div>
      
     <br/>
     <br/>  
     
   </div>
  
   