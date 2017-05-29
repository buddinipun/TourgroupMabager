<html>
<head>
<title></title>
<script type="text/javascript" src="webroot/js/jquery-2.2.3.min.js"></script>	
<script type="text/javascript" src="webroot/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="webroot/js/bootstrap.min.js"></script>
<script type="text/javascript" src="webroot/js/jquery.nicescroll.js"></script>
<link rel="stylesheet" href="webroot/css/bootstrap.css">
<link rel="stylesheet" href="webroot/css/bootstrap.min.css">
<link rel="stylesheet" href="webroot/css/jquery-ui-1.8.18.custom.css">
</head>
<body>
	<nav class="navbar navbar navbar-fixed-top">
		<div class="container-fluid">
				<!--  navigation bar hedder  -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed"
					data-toggle="collapse" data-target="#navbar" aria-expanded="false"
					aria-controls="navbar">
					<span class="glyphicon glyphicon-user" style="font-size: 2.5em;"></span>
				</button>
				<button type="button" class="navbar-toggle collapsed"
					data-toggle="collapse" data-target="#list" aria-expanded="false"
					aria-controls="navbar">
						<span class="glyphicon glyphicon-user" style="font-size: 2.5em;"></span>
						<span class="icon-bar"></span> 
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
				</button>
				<!-- <a class="navbar-brand" href="#"><h1>Tour group manager</h1></a> -->
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<div id="navbar" class="navbar-collapse collapse">
				<form class="navbar-form navbar-right" action="classes/users/LoginAction.php" method="post">
					<div class="form-group">
						<input type="text" placeholder="Email" name="email" class="form-control">
					</div>
					<div class="form-group">
						<input type="password" placeholder="Password" name="Password" class="form-control">
					</div>&nbsp;&nbsp;
					<div class="form-group" style="float: right;">
						<button type="submit" class="btn btn-info">
							<span class="glyphicon glyphicon-log-in"></span> LogIn
						</button>
						
						
						<button type="button" class="btn btn-info" data-toggle="modal" data-target="#signUp">
							
							<span class="glyphicon glyphicon-user"></span> SignUp
						</button>
						<br/>
						<a href="#">Forget Password</a>
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
					</div>
				</form>
			</div>
			</div>
			<!--/.navbar-collapse -->
		</div>
	</nav>


	<!-- -----------toooolsssssssssssssssssssssssssssssss -->
<img alt="test" src="webroot/img/logo.png" width="150px" height="70px">
<div class="container" style="height: 5px">
	<div id="list" class="navbar-collapse collapse navbar-static-top">
		<ul class="nav nav-pills" style="float:;">
			<li role="link" class=""><a href="#">Home</a></li>
			<li role="link"><a href="#">Groups</a></li>
			<li role="link"><a href="#">Events</a></li>
			<li role="link"><a href="#">Sri Lanka</a></li>
		</ul>
	</div>

</div>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
		<li data-target="#myCarousel" data-slide-to="3"></li>
	</ol>

	<!-- Wrapper for slides -->
	<div class="carousel-inner" role="listbox">
		<div class="item active">
			<img src="webroot/img/slidders/heritage.jpg" width="100%" alt="Heritage">
			<div class="carousel-caption">
				<h3>Heritage</h3>
				<p>Travel in Sri Lanka heritage places.</p>
			</div>
		</div>

		<div class="item">
			<img src="webroot/img/slidders/1.jpg" width="100%" height="100%" alt="wild">
			<div class="carousel-caption">
				<h3>Wild</h3>
				<p>Travel by exploring wild life of Sri Lanka.</p>
			</div>
		</div>

		<div class="item">
			<img src="webroot/img/slidders/beach.jpg" width="100%" height="100%" alt="beach">
			<div class="carousel-caption">
				<h3>Beach</h3>
				<p>Exploring the beauty on Sri lankan golden sandy beaches</p>
			</div>
		</div>

		<div class="item">
			<img src="webroot/img/slidders/culture.jpg" width="100%" height="100%" alt="culture">
			<div class="carousel-caption">
				<h3>Culture</h3>
				<p>Escripting the hidden mistry of Sri lankan culure,</p>
			</div>
		</div>
	</div>

	<!-- Left and right controls -->
	<a class="left carousel-control" href="#myCarousel" role="button"
		data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"
		aria-hidden="true"></span> <span class="sr-only">Previous</span>
	</a> <a class="right carousel-control" href="#myCarousel" role="button"
		data-slide="next"> <span class="glyphicon glyphicon-chevron-right"
		aria-hidden="true"></span> <span class="sr-only">Next</span>
	</a>
</div>
<div class="modal fade" id="signUp" role="dialog">
    <div class="modal-dialog modal-sm" style="width: 400px;">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="font-weight: bold;">Sign Up User</h4>
        </div>
        <div class="modal-body">
					<form class="form-horizontal" action="classes/users/RegisterAction.php" method="POST"
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
								<label for="cpassword" class="control-label col-xs-5 lbl_name"> : </label>
								<div class="col-xs-7">
									<input type="password" name="cpassword" class="form-control"
										id="cpassword" placeholder="Enter Password" required />
								</div>
							</div>
							
							<div class="form-group" style="padding-right: 50px;">
							<button type="submit" class="btn btn-info">Register</button>
                            </div> 
							
						
					</form>
				</div>
        <div class="modal-footer">
           <button type="submit" class="btn btn-info"  >Register</button>
          <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
<?php include "webroot/include/footer.php";
?>
<body>
</html>