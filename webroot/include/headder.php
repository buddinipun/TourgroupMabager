<?php
include '../../webroot/connection/DB.php';
if(!isset($_SESSION)) {
	session_start();
	if(!isset($_SESSION["name"])){
		header("Location:../../index.php");
	}
?>
<html>
	<head>
		<title>Tour Group Manager</title>
<script type="text/javascript" src="../../webroot/js/jquery-2.2.3.min.js"></script>	
<script type="text/javascript" src="../../webroot/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="../../webroot/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../../webroot/js/jquery.nicescroll.js"></script>
<link rel="stylesheet" href="../../webroot/css/bootstrap.css">
<link rel="stylesheet" href="../../webroot/css/bootstrap.min.css">
<link rel="stylesheet" href="../../webroot/css/jquery-ui-1.8.18.custom.css">
<link href="../../webroot/css/style.css" rel="stylesheet">
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
      <a class="navbar-brand" href="index.html"><img src="../../webroot/img/2.png" width="260"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
     
      <ul class="nav navbar-nav navbar-right">
        <li><a href="../../app/tourist/TotalTourists.php">Tourists</a></li>
        
      
        <li><a href="../../app/event/total_events.php">Events</a></li>
        <li><a href="../../app/place/destinations.php">Places</a></li>
        <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION["name"];?> <span class="glyphicon glyphicon-user"></span></a>
                 <ul class="dropdown-menu">
                    <li><a href="../../app/tourist">Home</a></li>
                    <li><a href="../../app/users/dashboard.php">DASHBOARD</a></li>
                    <li><a href="../../app/users/logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
                  </ul>
                </li>
                <li><a href="../../classes/edit/editController.php" style="font-size: 1.8em;"><span class="glyphicon glyphicon-cog"></span></a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
        <!-- nav ends -->
      </div>
    </div>
	
	</body>
</html>
<?php 
}
else {
	header("Location:../../webroot/core/pagenotfound.php");
}
?>

