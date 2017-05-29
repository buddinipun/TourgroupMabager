<?php include '../../webroot/include/headder.php'; ?>
<nav class="navbar navbar-fixed-top navbar-inverse">
    <div class="container">
         
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">University of Coventry</a>
            <!--<a class="navbar-brand" href="#"><img src="../../public/img/banner.png"</a>-->
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="#">Home</a></li>
                <li ><a href="#about">About</a></li>
                <li><a href="#about">Gallery</a></li>
                <li><a href="#about">Careers</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div><!-- /.nav-collapse -->
    </div><!-- /.container -->
</nav><!-- /.navbar -->

<!--..................................................................................................-->


<!--..................................................................................................................................-->

<div class="container">

    <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
            <p class="pull-right visible-xs">
                <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">User Login</button>
            </p>

            <!--....................................................................................................................-->
            <div class="jumbotron">
                <!--            <h1>Hello, world!</h1>
                            <p>This is an example to show the potential of an offcanvas layout pattern in Bootstrap. Try some responsive-range viewport sizes to see it in action.</p>
                -->

                <div class="container">
                   
                    <div id="myCarousel" class="carousel slide" data-ride="carousel" style="height: 180px">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                            <li data-target="#myCarousel" data-slide-to="3"></li>
                        </ol>

                        <!------------- Wrapper for slides---------------------------- -->
                        <div class="carousel-inner" role="listbox"  >

                            <div class="item active" style="height: 100px">
                                <img src="../../public/img/8.jpg" alt="Chania" width="100%">
                                <div class="carousel-caption">
                                    <!--<h3>Chania</h3>-->
                                    <!--<p>The atmosphere in Chania has a touch of Florence and Venice.</p>-->
                                </div>
                            </div>

                            <div class="item" style="height: 100px">
                                <img src="../../public/img/8.jpg" alt="Chania" width="100%">
                                <div class="carousel-caption">
                                    <!--<h3>Chania</h3>-->
                                    <!--<p>The atmosphere in Chania has a touch of Florence and Venice.</p>-->
                                </div>
                            </div>

                            <div class="item" style="height: 100px">
                                <img src="../../public/img/8.jpg" alt="Flower" width="100%">
                                <div class="carousel-caption">
                                    <!--<h3>Flowers</h3>-->
                                    <!--<p>Beatiful flowers in Kolymbari, Crete.</p>-->
                                </div>
                            </div>

                            <div class="item" style="height: 100px">
                                <img src="../../public/img/8.jpg" alt="Flower" width="100%">
                                <div class="carousel-caption">
                                    <!--<h3>Flowers</h3>-->
                                    <!--<p>Beatiful flowers in Kolymbari, Crete.</p>-->
                                </div>
                            </div>

                        </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>


            </div>

        </div>
     </div><!--/.col-xs-12.col-sm-9-->
        <!------------- Wrapper for slides End---------------------------- -->

        <!--........................Loging buttn............................-->

        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
            <div class="list-group ">
                <a href="#" class="list-group-item"><button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#student_loging" data-whatever="@mdo">Student Login</button></a>
                <a href="#" class="list-group-item"><button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#parents_loging" data-whatever="@mdo">Parents Loging</button></a>
                <a href="#" class="list-group-item"><button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#staff_loging" data-whatever="@mdo">Staff Loging </button></a>
                <!--                <a href="#" class="list-group-item"> </a>-->
                <!--<a href="#" class="list-group-item"><button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Administrator Login</button></a>-->
                <!--            <a href="#" class="list-group-item">Link</a>
                            <a href="#" class="list-group-item">Link</a>
                            <a href="#" class="list-group-item">Link</a>
                            <a href="#" class="list-group-item">Link</a>
                            <a href="#" class="list-group-item">Link</a>-->
                <!--..........................Loging buttn End.........................-->


                <!--..........................Student Loging Form Start.........................-->



                <div id="student_loging" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4>
                                    <i class="glyphicon glyphicon-user">
                                    </i>
                                    Account Access
                                </h4>
                            </div>
                            <div class="modal-body">

                                <!-------------------------------body----------------------->





                                <div style="padding: 20px;" id="form-olvidado">
                                    <form accept-charset="UTF-8" role="form" id="Student_login-form" method="post">
                                        <h4 class="">
                                            Signin!
                                        </h4>
                                        <fieldset>
                                            <div class="form-group input-group">
                                                <span class="input-group-addon">
                                                    @
                                                </span>
                                                <input class="form-control" placeholder="Email" name="email" type="email" required autofocus>
                                            </div>
                                            <div class="form-group input-group">
                                                <span class="input-group-addon">
                                                    <i class="glyphicon glyphicon-lock">
                                                    </i>
                                                </span>
                                                <input class="form-control" placeholder="Password" name="password" type="password" value="" required/>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary btn-block">
                                                    Access
                                                </button>
                                                <p class="help-block">
                                                    <a class="pull-right text-muted" href="#" id="olvidado"><small>Forgot your password?</small></a>
                                                    <a class="pull-left text-muted" href="#" id="olvidado2"><small>Signup!</small></a>

                                                </p>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>

                                <div style="display: none;" id="form-olvidado1">
                                    <h4 class="">
                                        Forgot your password?
                                    </h4>
                                    <form accept-charset="UTF-8" role="form" id="login-recordar" method="post">
                                        <fieldset>
                                            <span class="help-block">
                                                Email address you use to log in to your account
                                                <br>
                                                We'll send you an email with instructions to choose a new password.
                                            </span>
                                            <div class="form-group input-group">
                                                <span class="input-group-addon">
                                                    @
                                                </span>
                                                <input class="form-control" placeholder="Email" name="email" type="email" required/>
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-block" id="btn-olvidado">
                                                Continue
                                            </button>
                                            <p class="help-block">
                                                <a class="text-muted" href="#" id="acceso1"><small>Account Access</small></a>

                                            </p>
                                        </fieldset>
                                    </form>
                                </div>
                                <div style="display: none;" id="form-olvidado2">
                                    <h4 class="">
                                        Welcome!
                                    </h4>
                                    <form accept-charset="UTF-8" role="form" id="login-recordar" method="post">
                                        <fieldset>
<!--                                            <span class="help-block">
                                                Signup page
                                                <br>
                                                Please sign up and start!
                                            </span>-->

                                            <div class="form-group input-group">
                                                <span class="input-group-addon">
                                                    <i class="glyphicon glyphicon-lock">
                                                    </i>
                                                </span>
                                                <input class="form-control" placeholder="Full Name" name="full_name" type="text" required>
                                            </div>

                                            <div class="form-group input-group">
                                                <span class="input-group-addon">
                                                    <i class="glyphicon glyphicon-lock">
                                                    </i>
                                                </span>
                                                <input class="form-control" placeholder="Full Name" name="full_name" type="text" required>
                                            </div>


                                            <div class="form-group input-group">
                                                <span class="input-group-addon">
                                                    @
                                                </span>
                                                <input class="form-control" placeholder="Email" name="email" type="email" required>
                                            </div>



                                            <div class="form-group input-group">
                                                <span class="input-group-addon">
                                                    <i class="glyphicon glyphicon-lock">
                                                    </i>
                                                </span>
                                                <input class="form-control" placeholder="Password" name="password_new" type="password" required>
                                            </div>




                                            <div class="form-group input-group">
                                                <span class="input-group-addon">
                                                    <i class="glyphicon glyphicon-lock">
                                                    </i>
                                                </span>
                                                <input class="form-control" placeholder="Repeat Password" name="password_new_2" type="password" required>
                                            </div>

                                            <button type="submit" class="btn btn-primary btn-block" id="btn-olvidado">
                                                Continue
                                            </button>
                                            <p class="help-block">
                                                <a class="text-muted" href="#" id="acceso2"><small>Account Access</small></a>
                                            </p>
                                        </fieldset>
                                    </form>
                                </div>









                                <!-------------------------------body end----------------------->
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>

                    </div>
                </div>
                <!--........................Student Loging End..............................-->

            </div>
        </div><!--/.sidebar-offcanvas-->
    </div><!--/row-->

    <hr/>
        
        
        <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-sm-3">
            <a href="#"><img class="img-thumbnail" src="../../public/img/course2_small.jpg" alt="Generic placeholder image" width="140" height="140" ></a>
          <h2>Coerce Details</h2>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        
        <div class="col-sm-3">
            <a href="academic.php"><img class="img-thumbnail" src="../../public/img/10-512.png" alt="Generic placeholder image" width="140" height="140"></a>
          <h2>Academic Panel</h2>
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
          <p><a class="btn btn-default" href="academic.php" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-sm-3">
            <a href="#"><img class="img-thumbnail" src="../../public/img/network.jpg" alt="Generic placeholder image" width="140" height="140"></a>
          <h2>branch network</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        
         <div class="col-sm-3">
             <a href="#"> <img class="img-thumbnail" src="../../public/img/images.jpg" alt="Generic placeholder image" width="140" height="140"></a>
          <h2>online Payment</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
    <hr>

    <footer>
        <p>&copy; 2015 Company, Inc.</p>
    </footer>

</div><!--/.container-->
