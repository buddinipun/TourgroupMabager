<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Sri Lankan Travel Guide</title>

    <!-- Bootstrap -->
<link href="webroot/css/bootstrap.min.css" rel="stylesheet">

<script src="https://use.fontawesome.com/3e2c0fc6ba.js"></script>
<script type="text/javascript" src="webroot/js/jquery-2.2.3.min.js"></script> 
<script type="text/javascript" src="webroot/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="webroot/js/bootstrap.min.js"></script>
<script type="text/javascript" src="webroot/js/jquery.nicescroll.js"></script>
<link rel="stylesheet" href="webroot/css/bootstrap.css">
<link rel="stylesheet" href="webroot/css/bootstrap.min.css">
<link rel="stylesheet" href="webroot/css/jquery-ui-1.8.18.custom.css">
<link href="webroot/css/style.css" rel="stylesheet">
  </head>
  <body>

    <div class="jumbotron navig">
      <div class="container">
        <!-- nav start -->
            <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.html">
        <img src="webroot/img/2.png" width="260">
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">HOME</a></li>
        <li><a href="#">GROUP</a></li>
        <li><a href="#">EVENT</a></li>
        <li><a href="#">SRI LANKA</a></li>
        <li><a href="#">CONTACT US</a></li>
        <li><a href="#" data-toggle="modal" data-target=".bs-example-modal-sm"><i class="fa fa-user" aria-hidden="true"></i> LOG IN</a></li>
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
        <!-- nav ends -->
      </div>
    </div>
<div class="jumbotron slider">
    <iframe src="webroot/slider/index2.html" scrolling="no"></iframe>
  </div>
<div class="jumbotron blogp">
      <div class="container">

           <div class="headingtop">LATEST POSTS</div>
          <div class="headingsmall">Our recent Articles</div>
          <div class="undline"></div>
        
<form class="navbar-form navbar-right" action="classes/users/LoginAction.php" method="post">
        <div class="form-group">
          <label for="exampleInputEmail1">Username</label>
          <input type="text" class="form-control" id="email" name="email" placeholder="Username">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="Password" name="Password" placeholder="Password">
        </div>
        
     
        <button type="submit" class="btn btn-default">Log in</button>
        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#signUp">
              
              <span class="glyphicon glyphicon-user"></span>Register
            </button>
            <p style="

            <?php 
              if(isset($_REQUEST['msg'])){
              $msg = $_REQUEST['msg'];
              if($msg == 'true'){
                echo "color : green;";
              }else{
                echo "color : red;";
              }

            }
             ?>

            color:green;">
            <?php
            if(isset($_REQUEST['msg'])){
              $msg = $_REQUEST['msg'];
              if($msg == 'true'){
                echo "Successfully Registered !";
              }
              elseif($msg == 'false'){
                echo"Acess Denied..!!";
              }
              
              else{
                echo"User Exists..!!";
              }

            }
            ?>
            </p>
      </form>
            <div class="row">

          <div class="col-md-4">
            <div class="thumbnail">
              <h3>Colombo</h3>
              <img src="webroot/img/colombo.jpg" alt="...">
              <div class="caption" style="border-left:5px solid #dddddd;margin-top:5px;">
                
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                <button type="button" class="btn btn-info flatbut">Read More</button>
               
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="thumbnail">
              <h3>Kandy</h3>
              <img src="webroot/img/kandy.jpg" alt="...">
              <div class="caption" style="border-left:5px solid #dddddd;margin-top:5px;">
                
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                <button type="button" class="btn btn-info flatbut">Read More</button>
                
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="thumbnail">
              <h3>Negombo</h3>
              <img src="webroot/img/negombo.jpg" alt="...">
              <div class="caption" style="border-left:5px solid #dddddd;margin-top:5px;">
                
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                <button type="button" class="btn btn-info flatbut">Read More</button>
                
              </div>
            </div>
          </div>


        </div>

      </div>  
    </div>
    <div class="jumbotron footer">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="foothead">ABOUT SLTG</div>
            <div class="footunder"></div>

            <div class="footbody">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </div>

          </div>

          <div class="col-md-1">
           
          </div>

          <div class="col-md-2">
            <div class="foothead">SITE MAP</div>
            <div class="footunder"></div>

            <div class="footbody">
              Colombo<br>
              Negombo<br>
              Kandy<br>
              Galle<br>
              Beaches<br>

            </div>

          </div>

          <div class="col-md-3">
            <div class="foothead">QUICK CONTACT</div>
            <div class="footunder"></div>

            <div class="footbody">
              <b>Company Name<b> <br>
                post box number<br>
                1st Street<br>
                2nd Street<br>
                city<br>
                Country<br>

                <br>

                Email: email@email.com
                Phone: +94112 2020201

            </div>

          </div>

          <div class="col-md-3">
            <div class="foothead">KEEP IN TOUCH</div>
            <div class="footunder"></div>

            <div class="footbody">
              Facebook [f]<br>
              Twitter [t]<br>
              Linkedin [in]<br>
              Google plus [G+]<br>
              Instrgram [i]<br>

            </div>


          </div>

        </div>

      </div>
    </div>

    <div class="jumbotron footerdev">
      <div class="container">
        <div class="footdevtxt">Copyright © 2015 - 2016 · Sri Lankan Travel Guide</div>
      </div>
    </div>
<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">


    <div class="panel panel-default" style="margin-bottom:0px;">
      <div class="panel-heading">
        <h3 class="panel-title">Login or Sign up</h3>
      </div>
      <div class="panel-body">
       
          <form class="navbar-form navbar-right" action="classes/users/LoginAction.php" method="post">
        <div class="form-group">
          <label for="exampleInputEmail1">Username</label>
          <input type="text" class="form-control" id="email" name="email" placeholder="Username">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="Password" name="Password" placeholder="Password">
        </div>
        
     
        <button type="submit" class="btn btn-default">Log in</button>
        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#signUp">
              
              <span class="glyphicon glyphicon-user"></span>Register
            </button>
            <p style="

            <?php 
              if(isset($_REQUEST['msg'])){
              $msg = $_REQUEST['msg'];
              if($msg == 'true'){
                echo "color : green;";
              }else{
                echo "color : red;";
              }

            }
             ?>

            color:green;">
            <?php
            if(isset($_REQUEST['msg'])){
              $msg = $_REQUEST['msg'];
              if($msg == 'true'){
                echo "Successfully Registered !";
              }
              elseif($msg == 'false'){
                echo"Acess Denied..!!";
              }
              
              else{
                echo"User Exists..!!";
              }

            }
            ?>
            </p>
      </form>

      </div>
    </div>
      
      

    </div>
  </div>
</div>

<div class="modal fade" id="signUp" role="dialog" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">


    <div class="panel panel-default" style="margin-bottom:0px;">
      <div class="panel-heading">
        <h3 class="panel-title"> Sign up</h3>
      </div>
      <div class="panel-body">
       
          <form class="form-horizontal" action="../TourManagement/classes/users/RegisterAction.php" method="POST"
            id="register-form">

            <div class="raw" style="padding-right: 0px;">
              <div class="form-group">
                <label for="email" class="control-label col-xs-5 lbl_name">Email : </label>
                <div class="col-xs-7">
                  <input type="email" name="email" class="form-control"
                    id="email" placeholder="Enter FirsNamet" required />
                </div>
              </div>
              <div class="form-group">
                <label for="fname" class="control-label col-xs-5 lbl_name">First Name
                  : </label>
                <div class="col-xs-7">
                  <input type="text" name="fname" class="form-control"
                    id="fname" placeholder="Enter FirsNamet" required />
                </div>
              </div>
              <div class="form-group">
                <label for="lname" class="control-label col-xs-5 lbl_name">Last Name
                  : </label>
                <div class="col-xs-7">
                  <input type="text" name="lname" class="form-control"
                    id="lname" placeholder="Enter Password" required />
                </div>
              </div>
              <div class="form-group">
                <label for="country"
                  class="control-label col-xs-5 lbl_name">Country: </label>
                <div class="col-xs-7">
                  <input type="text" name="country" class="form-control"
                    id="country" placeholder="Enter Your Country"
                    required />
                </div>
              </div>
              <div class="form-group">
                <label for="state"
                  class="control-label col-xs-5 lbl_name">State: </label>
                <div class="col-xs-7">
                  <input type="text" name="state" class="form-control"
                    id="state" placeholder="Select your state"
                    required />
                </div>
              </div>
              <div class="form-group">
                <label for="contact"
                  class="control-label col-xs-5 lbl_name">Contact: </label>
                <div class="col-xs-7">
                  <input type="text" name="contact" class="form-control"
                    id="contact" placeholder="Enter your contact"
                    required />
                </div>
              </div>
              <div class="form-group">
                <label for="password" class="control-label col-xs-5 lbl_name">Password : </label>
                <div class="col-xs-7">
                  <input type="password" name="password" class="form-control"
                    id="cpassword" placeholder="Enter Password" required />
                </div>
              </div>
              <div class="form-group">
                <label for="cpassword" class="control-label col-xs-5 lbl_name">Confirm Password : </label>
                <div class="col-xs-7">
                  <input type="password" name="cpassword" class="form-control"
                    id="cpassword" placeholder="Enter Password" required />
                </div>
              </div>
              
              <div class="form-group" style="padding-right: 50px;">
                    <input type="submit" class="btn btn-info" value="SignIn" style="float:right" />                                             
                    </div> 
              </div>
            
          </form>

      </div>
    </div>
      
      

    </div>
  </div>
</div>

<form class="form-horizontal" action="../TourManagement/classes/users/RegisterAction.php" method="POST"
            id="register-form">

            <div class="raw" style="padding-right: 0px;">
              <div class="form-group">
                <label for="email" class="control-label col-xs-5 lbl_name">Email : </label>
                <div class="col-xs-7">
                  <input type="email" name="email" class="form-control"
                    id="email" placeholder="Enter FirsNamet" required />
                </div>
              </div>
              <div class="form-group">
                <label for="fname" class="control-label col-xs-5 lbl_name">First Name
                  : </label>
                <div class="col-xs-7">
                  <input type="text" name="fname" class="form-control"
                    id="fname" placeholder="Enter FirsNamet" required />
                </div>
              </div>
              <div class="form-group">
                <label for="lname" class="control-label col-xs-5 lbl_name">Last Name
                  : </label>
                <div class="col-xs-7">
                  <input type="text" name="lname" class="form-control"
                    id="lname" placeholder="Enter Password" required />
                </div>
              </div>
              <div class="form-group">
                <label for="country"
                  class="control-label col-xs-5 lbl_name">Country: </label>
                <div class="col-xs-7">
                  <input type="text" name="country" class="form-control"
                    id="country" placeholder="Enter Your Country"
                    required />
                </div>
              </div>
              <div class="form-group">
                <label for="state"
                  class="control-label col-xs-5 lbl_name">State: </label>
                <div class="col-xs-7">
                  <input type="text" name="state" class="form-control"
                    id="state" placeholder="Select your state"
                    required />
                </div>
              </div>
              <div class="form-group">
                <label for="contact"
                  class="control-label col-xs-5 lbl_name">Contact: </label>
                <div class="col-xs-7">
                  <input type="text" name="contact" class="form-control"
                    id="contact" placeholder="Enter your contact"
                    required />
                </div>
              </div>
              <div class="form-group">
                <label for="password" class="control-label col-xs-5 lbl_name">Password : </label>
                <div class="col-xs-7">
                  <input type="password" name="password" class="form-control"
                    id="cpassword" placeholder="Enter Password" required />
                </div>
              </div>
              <div class="form-group">
                <label for="cpassword" class="control-label col-xs-5 lbl_name">Confirm Password : </label>
                <div class="col-xs-7">
                  <input type="password" name="cpassword" class="form-control"
                    id="cpassword" placeholder="Enter Password" required />
                </div>
              </div>
              
              <div class="form-group" style="padding-right: 50px;">
                    <input type="submit" class="btn btn-info" value="SignIn" style="float:right" />                                             
                    </div> 
              </div>
            
          </form>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="webroot/js/bootstrap.min.js"></script>
  </body>
</html>