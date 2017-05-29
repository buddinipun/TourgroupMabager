
<!DOCTYPE html>
<?php include '../../webroot/include/headder.php'; ?>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>UNIPOINT - Dashboard</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->


        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/> 
        <link href="style.css" rel="stylesheet">            
        <!-- EOF CSS INCLUDE -->           

        <!--charts-->
        <!-- Load c3.css -->
        <link href="assets/charts/c3/c3.css" rel="stylesheet" type="text/css">

        <!--map adding style-->

        <script src="http://code.jquery.com/jquery-2.0.3.min.js"></script>


         <script src="https://maps.googleapis.com/maps/api/js"></script>
         <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBTL4TZR392YrhoUdv-OcNfOphrBEM5u-E&callback=initMap"
            type="text/javascript"></script>
         
        <script src="js/jquery-1.11.3.js"></script>
        <script src="js/city.js"></script>
        <link href="css/map_adding_style.css" rel="stylesheet" type="text/css">




        <!-- Load d3.js and c3.js -->
        <script src="assets/charts/d3/d3.min.js" charset="utf-8"></script>
        <script src="assets/charts/c3/c3.min.js"></script>



        
                          
    </head>
    <body onload="initialize()">
        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            
            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a href="index.html">UNIPOINT</a>
                        <a href="#" class="x-navigation-control"></a>
                    </li>

                       
                    <li class="xn-profile">
                        <a href="#" class="profile-mini">
                            <img src="assets/images/users/avatar.jpg"/>
                        </a>
                        <div class="profile">
                            <div class="profile-image">
                                <img src="assets/images/users/avatar.jpg"/>
                            </div>
                            <div class="profile-data">
                                <div class="profile-data-name">Administrator</div>
                                <div class="profile-data-title">Web Developer/Designer</div>
                            </div>
                            <div class="profile-controls">
                                <a href="pages-profile.html" class="profile-control-left"><span class="fa fa-info"></span></a>
                                <a href="pages-messages.html" class="profile-control-right"><span class="fa fa-envelope"></span></a>
                            </div>
                        </div>                                                                        
                    </li>
                    <li >
                        <a href="#"><span class="fa fa-file-text-o"></span> <span class="xn-text">Dashboard</span></a>
                        
                    </li>

                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-file-text-o"></span> <span class="xn-text">User Permissions</span></a>
                        <ul>
                            <li><a href="user-activity.html">Defining User Levels</a></li>
                            <li><a href="rewardnredeemday.html">Restrict Access</a></li>
                        </ul>
                    </li>


                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-file-text-o"></span> <span class="xn-text">Configurations</span></a>
                        <ul>
                            <li><a href="user-activity.html">Define Outlet</a></li>
                            <li><a href="rewardnredeemday.html">Location Settings</a></li>
                            <li><a href="user-activity.html">Define Loyalty Schemes</a></li>
                            <li><a href="rewardnredeemday.html">Define Games</a></li>
                            <li><a href="user-activity.html">Review Feedbacks</a></li>
                            <li><a href="rewardnredeemday.html">Membership Demoting</a></li>
                            <li><a href="user-activity.html">Define User Levels</a></li>
                            <li><a href="rewardnredeemday.html">Discount Setup</a></li>
                            <li><a href="rewardnredeemday.html">Time Planning</a></li>
                        </ul>
                    </li>

                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-file-text-o"></span> <span class="xn-text">Customer Management</span></a>
                        <ul>
                            <li><a href="user-activity.html">New Requests</a></li>
                            <li><a href="rewardnredeemday.html">Customer Notified</a></li>
                            <li><a href="rewardnredeemday.html">Points</a></li>
                        </ul>
                    </li>


                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-file-text-o"></span> <span class="xn-text">Reports</span></a>
                        <ul>
                            <li><a href="user-activity.html">New Requests</a></li>
                            <li><a href="rewardnredeemday.html">Customer Notified</a></li>
                            <li><a href="rewardnredeemday.html">Points</a></li>
                        </ul>
                    </li>


                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-file-text-o"></span> <span class="xn-text">Consumer Predictions</span></a>
                        <ul>
                            <li><a href="user-activity.html">New Requests</a></li>
                            <li><a href="rewardnredeemday.html">Customer Notified</a></li>
                            <li><a href="rewardnredeemday.html">Points</a></li>
                        </ul>
                    </li>


                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-file-text-o"></span> <span class="xn-text">Sales Predictions</span></a>
                        <ul>
                            <li><a href="user-activity.html">New Requests</a></li>
                            <li><a href="rewardnredeemday.html">Customer Notified</a></li>
                            <li><a href="rewardnredeemday.html">Points</a></li>
                        </ul>
                    </li>


                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-file-text-o"></span> <span class="xn-text">Point Management</span></a>
                        <ul>
                            <li><a href="user-activity.html">New Requests</a></li>
                            <li><a href="rewardnredeemday.html">Customer Notified</a></li>
                            <li><a href="rewardnredeemday.html">Points</a></li>
                        </ul>
                    </li>


                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-file-text-o"></span> <span class="xn-text">Create a Campaign</span></a>
                        <ul>
                            <li><a href="user-activity.html">New Requests</a></li>
                            <li><a href="rewardnredeemday.html">Customer Notified</a></li>
                            <li><a href="rewardnredeemday.html">Points</a></li>
                        </ul>
                    </li>


           
                </ul>
                <!-- END X-NAVIGATION -->
            </div>
            <!-- END PAGE SIDEBAR -->
            
            <!-- PAGE CONTENT -->
            <div class="page-content">
                
                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <!-- TOGGLE NAVIGATION -->
                    <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                    </li>
                    <!-- END TOGGLE NAVIGATION -->
                    <!-- SEARCH -->
                    <li class="xn-search">
                        <form role="form">
                            <input type="text" name="search" placeholder="Search..."/>
                        </form>
                    </li>   
                    <!-- END SEARCH -->
                    <!-- SIGN OUT -->
                    <li class="xn-icon-button pull-right">
                        <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>                        
                    </li> 
                    <!-- END SIGN OUT -->
                    <!-- MESSAGES -->
                    <li class="xn-icon-button pull-right">
                        <a href="#"><span class="fa fa-comments"></span></a>
                        <div class="informer informer-danger">4</div>
                        <div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
                            <div class="panel-heading">
                                <h3 class="panel-title"><span class="fa fa-comments"></span> Messages</h3>                                
                                <div class="pull-right">
                                    <span class="label label-danger">4 new</span>
                                </div>
                            </div>
                            <div class="panel-body list-group list-group-contacts scroll" style="height: 200px;">
                                <a href="#" class="list-group-item">
                                    <div class="list-group-status status-online"></div>
                                    <img src="assets/images/users/user2.jpg" class="pull-left" alt="John Doe"/>
                                    <span class="contacts-title">John Doe</span>
                                    <p>Praesent placerat tellus id augue condimentum</p>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="list-group-status status-away"></div>
                                    <img src="assets/images/users/user.jpg" class="pull-left" alt="Dmitry Ivaniuk"/>
                                    <span class="contacts-title">Dmitry Ivaniuk</span>
                                    <p>Donec risus sapien, sagittis et magna quis</p>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="list-group-status status-away"></div>
                                    <img src="assets/images/users/user3.jpg" class="pull-left" alt="Nadia Ali"/>
                                    <span class="contacts-title">Nadia Ali</span>
                                    <p>Mauris vel eros ut nunc rhoncus cursus sed</p>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="list-group-status status-offline"></div>
                                    <img src="assets/images/users/user6.jpg" class="pull-left" alt="Darth Vader"/>
                                    <span class="contacts-title">Darth Vader</span>
                                    <p>I want my money back!</p>
                                </a>
                            </div>     
                            <div class="panel-footer text-center">
                                <a href="pages-messages.html">Show all messages</a>
                            </div>                            
                        </div>                        
                    </li>
                    <!-- END MESSAGES -->
                    <!-- TASKS -->
                    <li class="xn-icon-button pull-right">
                        <a href="#"><span class="fa fa-tasks"></span></a>
                        <div class="informer informer-warning">3</div>
                        <div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
                            <div class="panel-heading">
                                <h3 class="panel-title"><span class="fa fa-tasks"></span> Tasks</h3>                                
                                <div class="pull-right">
                                    <span class="label label-warning">3 active</span>
                                </div>
                            </div>
                            <div class="panel-body list-group scroll" style="height: 200px;">                                
                                <a class="list-group-item" href="#">
                                    <strong>Phasellus augue arcu, elementum</strong>
                                    <div class="progress progress-small progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">50%</div>
                                    </div>
                                    <small class="text-muted">John Doe, 25 Sep 2014 / 50%</small>
                                </a>
                                <a class="list-group-item" href="#">
                                    <strong>Aenean ac cursus</strong>
                                    <div class="progress progress-small progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">80%</div>
                                    </div>
                                    <small class="text-muted">Dmitry Ivaniuk, 24 Sep 2014 / 80%</small>
                                </a>
                                <a class="list-group-item" href="#">
                                    <strong>Lorem ipsum dolor</strong>
                                    <div class="progress progress-small progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">95%</div>
                                    </div>
                                    <small class="text-muted">John Doe, 23 Sep 2014 / 95%</small>
                                </a>
                                <a class="list-group-item" href="#">
                                    <strong>Cras suscipit ac quam at tincidunt.</strong>
                                    <div class="progress progress-small">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">100%</div>
                                    </div>
                                    <small class="text-muted">John Doe, 21 Sep 2014 /</small><small class="text-success"> Done</small>
                                </a>                                
                            </div>     
                            <div class="panel-footer text-center">
                                <a href="pages-tasks.html">Show all tasks</a>
                            </div>                            
                        </div>                        
                    </li>
                    <!-- END TASKS -->
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->                     
                
                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Configurations</a></li>
                    <li class="active">Define Outlets</li>
                </ul>
                <!-- END BREADCRUMB -->
                
                <!-- PAGE TITLE -->
                <div class="page-title">                    
                    <h2 style="margin-right:10px;"> Define Outlets</h2> 

                    <a href="#addplace"><button type="button" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Add New Outlet</button></a>

                    <a href="#"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus" aria-hidden="true"></i> Add Outlet Manager</button></a>

                </div>
                <!-- END PAGE TITLE -->                
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    
                    
                    <div class="row">
                        <div class="col-md-12">
                            
                            <!-- START DATATABLE EXPORT -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">All Outlets</h3>
                                    <div class="btn-group pull-right">
                                        <button class="btn btn-danger dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i> Export Data</button>
                                        <ul class="dropdown-menu">
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'json',escape:'false'});"><img src='img/icons/json.png' width="24"/> JSON</a></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'json',escape:'false',ignoreColumn:'[2,3]'});"><img src='img/icons/json.png' width="24"/> JSON (ignoreColumn)</a></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'json',escape:'true'});"><img src='img/icons/json.png' width="24"/> JSON (with Escape)</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'xml',escape:'false'});"><img src='img/icons/xml.png' width="24"/> XML</a></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'sql'});"><img src='img/icons/sql.png' width="24"/> SQL</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'csv',escape:'false'});"><img src='img/icons/csv.png' width="24"/> CSV</a></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'txt',escape:'false'});"><img src='img/icons/txt.png' width="24"/> TXT</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'excel',escape:'false'});"><img src='img/icons/xls.png' width="24"/> XLS</a></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'doc',escape:'false'});"><img src='img/icons/word.png' width="24"/> Word</a></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'powerpoint',escape:'false'});"><img src='img/icons/ppt.png' width="24"/> PowerPoint</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'png',escape:'false'});"><img src='img/icons/png.png' width="24"/> PNG</a></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'pdf',escape:'false'});"><img src='img/icons/pdf.png' width="24"/> PDF</a></li>
                                        </ul>
                                    </div>                                    
                                    
                                </div>
                                
                            </div>
                            <!-- END DATATABLE EXPORT -->                            
                            
                            <!-- START DEFAULT TABLE EXPORT -->
                            <div class="panel panel-default">
                                <div class="panel-heading" id="addplace">
                                    <h3 class="panel-title">Add a Place</h3>
                                    
                                </div>
                                <div class="panel-body" id="exportTable" style="display: none;">
                              
                                </div>
                                <div class="panel-body panel-body-table">
                                    
                                    <div class="col-md-6">

                                      <form id="new-spot" style="margin-top:15px;">

                                      <div class="form-group" id="new-spot">
                                        <label for="new-location-name">City and Region</label>
                                        <input type="text" class="form-control normtxtin" id="new-location-name" placeholder="Ex. Mount Lavinia, OR" required>
                                      </div>
                                      <div class="form-group">
                                        <label for="new-location-name">Country</label>
                                        <input type="text" class="form-control normtxtin" id="new-country-name" placeholder="Ex. Sri Lanka" required>
                                      </div>
                                      <div class="form-group">
                                        <label for="new-location-name">Outlet Name</label>
                                        <input type="text" class="form-control normtxtin" id="exampleInputPassword1" placeholder="Outlet Name">
                                      </div>
                                      <div class="form-group">
                                        <label for="new-location-name">Address Line 1</label>
                                        <input type="text" class="form-control normtxtin" id="exampleInputPassword1" placeholder="Address Line 1">
                                      </div>
                                      <div class="form-group col-md-8" style="padding-left:0px;">
                                        <label for="new-location-name">Address Line 2</label>
                                        <input type="text" class="form-control normtxtin" id="exampleInputPassword1" placeholder="Address Line 2">
                                      </div>

                                      <div class="form-group col-md-4">
                                        <label for="new-location-name">Postal Code</label>
                                        <input type="text" class="form-control normtxtin" id="exampleInputPassword1" placeholder="Postal Code">
                                      </div>

                                      <div class="form-group col-md-4" style="padding-left:0px;">
                                        <label for="new-location-name">Phone Number 1</label>
                                        <input type="text" class="form-control normtxtin" id="exampleInputPassword1" placeholder="Phone Number 1" >
                                      </div>

                                      <div class="form-group col-md-4">
                                        <label for="new-location-name">Phone Number 2</label>
                                        <input type="text" class="form-control normtxtin" id="exampleInputPassword1" placeholder="Phone Number 2">
                                      </div>
                                      <div class="form-group col-md-4">
                                        <label for="new-location-name">Fax Number</label>
                                        <input type="text" class="form-control normtxtin" id="exampleInputPassword1" placeholder="Fax Number">
                                      </div>

                                      <div class="form-group col-md-6" style="padding-left:0px;">
                                        <label for="new-location-name">Lattitude</label>
                                        <input type="text" class="form-control normtxtin" id="exampleInputPassword1" placeholder="Lattitude" >
                                      </div>
                                      <div class="form-group col-md-6">
                                        <label for="new-location-name">Longitude</label>
                                        <input type="text" class="form-control normtxtin" id="exampleInputPassword1" placeholder="Longitude">
                                      </div>

                                      <div class="form-group">
                                        <label for="new-location-name">Email Address</label>
                                        <input type="text" class="form-control normtxtin" id="exampleInputPassword1" placeholder="Email Address">
                                      </div>


                                      <div class="form-group">
                                        <label for="new-location-name">Category</label>
                                        <input type="text" class="form-control normtxtin" id="exampleInputPassword1" placeholder="Category">
                                      </div>

                                      <div class="form-group col-md-6" style="padding-left:0px;">
                                        <label for="new-location-name">Opening Time</label>
                                        <input type="time" class="form-control normtxtin" id="exampleInputPassword1" placeholder="Open Hours" >
                                      </div>
                                      <div class="form-group col-md-6">
                                        <label for="new-location-name">Closing Time</label>
                                        <input type="time" class="form-control normtxtin" id="exampleInputPassword1" placeholder="Closing Hours">
                                      </div>

                                      <div class="form-group">
                                        <label for="new-location-name">Web Site Address</label>
                                        <input type="text" class="form-control normtxtin" id="exampleInputPassword1" placeholder="Web Site Address">
                                      </div>

                                      <div class="form-group">
                                        <label for="new-location-name">Description</label>
                                        <textarea class="form-control normtxtin" rows="3" placeholder="Description"></textarea>
                                      </div>

                                      


                                      <button type="submit" class="btn" onclick="codeAddress()">Save</button>
                                    </form>
                                    </div>


                                    <div class="col-md-6" style="padding:15px;" >
                                      <div id="map" >
                                        
                                        

                                      </div>
                                    </div>


                                    <div class="col-md-12" style="padding:15px;">
                                        <div id="pano"></div>
                                    </div>                                   
                                    
                                </div>
                            </div>
                            <!-- END DEFAULT TABLE EXPORT -->

                        </div>
                    </div>

                </div>         
                <!-- END PAGE CONTENT WRAPPER -->
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->    

        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-remove-row">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-times"></span> Remove <strong>Data</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to remove this row?</p>                    
                        <p>Press Yes if you sure.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <button class="btn btn-success btn-lg mb-control-yes">Yes</button>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->        
        
        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>                    
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="pages-login.html" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->

        <!-- START PRELOADS -->
        <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->                      

    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>        
        <!-- END PLUGINS -->
        
        <!-- START THIS PAGE PLUGINS-->        
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        
        <script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="js/plugins/tableexport/tableExport.js"></script>
    <script type="text/javascript" src="js/plugins/tableexport/jquery.base64.js"></script>
    <script type="text/javascript" src="js/plugins/tableexport/html2canvas.js"></script>
    <script type="text/javascript" src="js/plugins/tableexport/jspdf/libs/sprintf.js"></script>
    <script type="text/javascript" src="js/plugins/tableexport/jspdf/jspdf.js"></script>
    <script type="text/javascript" src="js/plugins/tableexport/jspdf/libs/base64.js"></script>        
        <!-- END THIS PAGE PLUGINS--> 



        
        <!-- START TEMPLATE -->
        <script type="text/javascript" src="js/settings.js"></script>
        
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>        
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->



    <!--add new outlet manager modal start-->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Add Outlet Manager</h4>
              </div>
              <div class="modal-body">
                
                <form>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Organization Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Organization Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">First Name</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="First Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Last Name</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Last Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Username</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Username">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">NIC Number</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nic Number">
                  </div>
                  
                 
                  

              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-default">Add Manager</button>
                </form>
              </div>
            </div>
          </div>
        </div>
    <!-- add new outlet manager modal ends-->

   

    </body>
</html>






