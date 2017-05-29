
<?php include '../../webroot/include/headder.php';?>
<script
	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCVp69mWjFugcTw9xNTqv5vDDId1Y7vW1o&callback=initMap""></script>




<script type="text/javascript">
	$(document).ready(function() {
		$({
			property : 0
		}).animate({
			property : 100
		}, {
			duration : 1000,
			step : function() {
				var _percent = Math.round(this.property);
				$("#progress").css("width", _percent + "%");
				if (_percent == 100) {
					$("#progress").addClass("done");
				}
			},
			complete : function() {
				$("#progress").hide();
			}
		});
	});
</script>




<!--loading bar css ends-->
</head>
<body onload="initialize()" id="style-3">

	<div class="jumbotron header">
		<div class="row">

			<div class="col-md-2">
				<div class="companylogo">
					<div class="logotxt"
						style="font-weight: bold; width: 100%; text-align: center; margin-top: 5px; font-size: 30px; color: #ffffff;">Unipoint</div>
				</div>
			</div>



			<div class="col-md-10">
				<nav class="navbar navbar-default ">
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed"
								data-toggle="collapse"
								data-target="#bs-example-navbar-collapse-1"
								aria-expanded="false">
								<span class="sr-only">Toggle navigation</span> <span
									class="icon-bar"></span> <span class="icon-bar"></span> <span
									class="icon-bar"></span>
							</button>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse"
							id="bs-example-navbar-collapse-1">

							<form class="navbar-form navbar-left" role="search">
								<div class="form-group">
									<i class="fa fa-search srcicon" aria-hidden="true"></i> <input
										type="text" class="form-control srcbut removeinputshadow"
										placeholder="Search" autofocus>
								</div>

							</form>
							<ul class="nav navbar-nav navbar-right">

								<li class="dropdown"><a href="#" class="dropdown-toggle"
									data-toggle="dropdown" role="button" aria-haspopup="true"
									aria-expanded="false"> <i class="fa fa-bell srcicon"
										aria-hidden="true"></i>
								</a>
									<ul class="dropdown-menu stylishdrop">
										<div class="drophd">
											<i class="fa fa-flag" aria-hidden="true"></i> Notifications
										</div>
										<li><a href="#">Action</a></li>
										<li><a href="#">Another action</a></li>
										<li><a href="#">Something else here</a></li>
										<li role="separator" class="divider"></li>
										<li><a href="#">Show All Notifications</a></li>
									</ul></li>


								<li class="dropdown"><a href="#" class="dropdown-toggle"
									data-toggle="dropdown" role="button" aria-haspopup="true"
									aria-expanded="false"> <i class="fa fa-envelope srcicon"
										aria-hidden="true"></i>
								</a>
									<ul class="dropdown-menu stylishdrop">
										<div class="drophd">
											<i class="fa fa-comments-o" aria-hidden="true"></i> Messages
										</div>
										<li><a href="#">Action</a></li>
										<li><a href="#">Another action</a></li>
										<li><a href="#">Something else here</a></li>
										<li role="separator" class="divider"></li>
										<li><a href="#">Show All Messages</a></li>
									</ul></li>

								<li class="dropdown"><a href="#" class="dropdown-toggle"
									data-toggle="dropdown" role="button" aria-haspopup="true"
									aria-expanded="false"> <img src="img/pro.jpg" width="25">
										<font style="color: #ffffff;">Welcome Admin <span
											class="caret"></span></a></font>
									<ul class="dropdown-menu">
										<li><a href="#">Action</a></li>
										<li><a href="#">Another action</a></li>
										<li><a href="#">Something else here</a></li>
										<li role="separator" class="divider"></li>
										<li><a href="#">Sign Out</a></li>
									</ul></li>
							</ul>
						</div>
						<!-- /.navbar-collapse -->
					</div>
					<!-- /.container-fluid -->
				</nav>
			</div>
		</div>
	</div>


	<div class="jumbotron appbody">
		<div class="row">
			<div class="col-md-2 libackground lifullback">
				<ul class="nav nav-pills nav-stacked">

					<div class="panel-group">
						<div class="panel leftnavimenutop">
							<div class="panel-heading" role="tab" id="headingOne">
								<h4 class="panel-title">
									<li><i class="fa fa-home iconspacer" aria-hidden="true"></i>
										Dashboard</li>
								</h4>
							</div>

						</div>
					</div>

					<div class="panel-group" id="accordion" role="tablist"
						aria-multiselectable="true">
						<div
							class="panel panel-default leftnavmenu leftmenupanel leftnavimouseover">

							<div class="leftnavili">
								<div class="panel-heading" role="tab" id="headingOne"
									role="button" data-toggle="collapse" data-parent="#accordion"
									href="#collapseOne" aria-expanded="true"
									aria-controls="collapseOne">
									<h4 class="panel-title">
										<li><i class="fa fa-ban iconspacer" aria-hidden="true"></i>
											User Permissions <i class="fa fa-caret-down"
											aria-hidden="true" style="float: right;"></i></li>
									</h4>
								</div>
							</div>

							<div id="collapseOne" class="panel-collapse collapse"
								role="tabpanel" aria-labelledby="headingOne">
								<ul class="list-group">
									<li class="list-group-item litxtcol">Defining User Levels</li>
									<li class="list-group-item litxtcol">Restrict Access</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="panel-group" id="accordion" role="tablist"
						aria-multiselectable="true">
						<div
							class="panel panel-default leftnavmenu leftmenupanel leftnavimouseover">

							<div class="leftnavili activez">
								<div class="panel-heading" role="tab" id="headingOne"
									role="button" data-toggle="collapse" data-parent="#accordion"
									href="#collapse2" aria-expanded="true" aria-controls="collapse">
									<h4 class="panel-title">
										<li><i class="fa fa-sliders iconspacer"
											aria-hidden="true"></i> Configurations <i
											class="fa fa-caret-down" aria-hidden="true"
											style="float: right;"></i></li>
									</h4>
								</div>
							</div>

							<div id="collapse2" class="panel-collapse collapse in"
								role="tabpanel" aria-labelledby="headingOne">
								<ul class="list-group">
									<li class="list-group-item litxtcol"
										style="background-color: #33414E;">Define Outlets</li>
									<li class="list-group-item litxtcol">Location Settings</li>
									<li class="list-group-item litxtcol">Define Loyality
										Schemes</li>
									<li class="list-group-item litxtcol">Define Games</li>
									<li class="list-group-item litxtcol">Review Feedback</li>
									<li class="list-group-item litxtcol">Define User Levels</li>
									<li class="list-group-item litxtcol">Discount Setup</li>
									<li class="list-group-item litxtcol">Time Planning</li>
								</ul>
							</div>
						</div>
					</div>



					<div class="panel-group" id="accordion" role="tablist"
						aria-multiselectable="true">
						<div
							class="panel panel-default leftnavmenu leftmenupanel leftnavimouseover">

							<div class="leftnavili">
								<div class="panel-heading" role="tab" id="headingOne"
									role="button" data-toggle="collapse" data-parent="#accordion"
									href="#collapse3" aria-expanded="true" aria-controls="collapse">
									<h4 class="panel-title">
										<li><i class="fa fa-user iconspacer" aria-hidden="true"></i>
											Customer Management <i class="fa fa-caret-down"
											aria-hidden="true" style="float: right;"></i></li>
									</h4>
								</div>
							</div>

							<div id="collapse3" class="panel-collapse collapse"
								role="tabpanel" aria-labelledby="headingOne">
								<ul class="list-group">
									<li class="list-group-item litxtcol">New Requests</li>
									<li class="list-group-item litxtcol">Customer Notified</li>
									<li class="list-group-item litxtcol">Points</li>
								</ul>
							</div>
						</div>
					</div>



					<div class="panel-group" id="accordion" role="tablist"
						aria-multiselectable="true">
						<div
							class="panel panel-default leftnavmenu leftmenupanel leftnavimouseover">

							<div class="leftnavili">
								<div class="panel-heading" role="tab" id="headingOne"
									role="button" data-toggle="collapse" data-parent="#accordion"
									href="#collapse4" aria-expanded="true" aria-controls="collapse">
									<h4 class="panel-title">
										<li><i class="fa fa-file-text-o iconspacer"
											aria-hidden="true"></i> Reports <i class="fa fa-caret-down"
											aria-hidden="true" style="float: right;"></i></li>
									</h4>
								</div>
							</div>

							<div id="collapse4" class="panel-collapse collapse"
								role="tabpanel" aria-labelledby="headingOne">
								<ul class="list-group">
									<li class="list-group-item litxtcol">New Requests</li>
									<li class="list-group-item litxtcol">Customer Notified</li>
									<li class="list-group-item litxtcol">Points</li>
								</ul>
							</div>
						</div>
					</div>



					<div class="panel-group" id="accordion" role="tablist"
						aria-multiselectable="true">
						<div
							class="panel panel-default leftnavmenu leftmenupanel leftnavimouseover">

							<div class="leftnavili">
								<div class="panel-heading" role="tab" id="headingOne"
									role="button" data-toggle="collapse" data-parent="#accordion"
									href="#collapse5" aria-expanded="true" aria-controls="collapse">
									<h4 class="panel-title">
										<li><i class="fa fa-calendar iconspacer"
											aria-hidden="true"></i> Consumer Predictions <i
											class="fa fa-caret-down" aria-hidden="true"
											style="float: right;"></i></li>
									</h4>
								</div>
							</div>

							<div id="collapse5" class="panel-collapse collapse"
								role="tabpanel" aria-labelledby="headingOne">
								<ul class="list-group">
									<li class="list-group-item litxtcol">New Requests</li>
									<li class="list-group-item litxtcol">Customer Notified</li>
									<li class="list-group-item litxtcol">Points</li>
								</ul>
							</div>
						</div>
					</div>


					<div class="panel-group" id="accordion" role="tablist"
						aria-multiselectable="true">
						<div
							class="panel panel-default leftnavmenu leftmenupanel leftnavimouseover">

							<div class="leftnavili">
								<div class="panel-heading" role="tab" id="headingOne"
									role="button" data-toggle="collapse" data-parent="#accordion"
									href="#collapse6" aria-expanded="true" aria-controls="collapse">
									<h4 class="panel-title">
										<li><i class="fa fa-line-chart iconspacer"
											aria-hidden="true"></i> Sales Predictions <i
											class="fa fa-caret-down" aria-hidden="true"
											style="float: right;"></i></li>
									</h4>
								</div>
							</div>

							<div id="collapse6" class="panel-collapse collapse"
								role="tabpanel" aria-labelledby="headingOne">
								<ul class="list-group">
									<li class="list-group-item litxtcol">New Requests</li>
									<li class="list-group-item litxtcol">Customer Notified</li>
									<li class="list-group-item litxtcol">Points</li>
								</ul>
							</div>
						</div>
					</div>


					<div class="panel-group" id="accordion" role="tablist"
						aria-multiselectable="true">
						<div
							class="panel panel-default leftnavmenu leftmenupanel leftnavimouseover">

							<div class="leftnavili">
								<div class="panel-heading" role="tab" id="headingOne"
									role="button" data-toggle="collapse" data-parent="#accordion"
									href="#collapse7" aria-expanded="true" aria-controls="collapse">
									<h4 class="panel-title">
										<li><i class="fa fa-pie-chart iconspacer"
											aria-hidden="true"></i> Point Management <i
											class="fa fa-caret-down" aria-hidden="true"
											style="float: right;"></i></li>
									</h4>
								</div>
							</div>

							<div id="collapse7" class="panel-collapse collapse"
								role="tabpanel" aria-labelledby="headingOne">
								<ul class="list-group">
									<li class="list-group-item litxtcol">New Requests</li>
									<li class="list-group-item litxtcol">Customer Notified</li>
									<li class="list-group-item litxtcol">Points</li>
								</ul>
							</div>
						</div>
					</div>


					<div class="panel-group" id="accordion" role="tablist"
						aria-multiselectable="true">
						<div
							class="panel panel-default leftnavmenu leftmenupanel leftnavimouseover">

							<div class="leftnavili">
								<div class="panel-heading" role="tab" id="headingOne"
									role="button" data-toggle="collapse" data-parent="#accordion"
									href="#collapse8" aria-expanded="true" aria-controls="collapse">
									<h4 class="panel-title">
										<li><i class="fa fa-list-alt iconspacer"
											aria-hidden="true"></i> Create a Campaign <i
											class="fa fa-caret-down" aria-hidden="true"
											style="float: right;"></i></li>
									</h4>
								</div>
							</div>


							<div id="collapse8" class="panel-collapse collapse"
								role="tabpanel" aria-labelledby="headingOne">
								<ul class="list-group">
									<li class="list-group-item litxtcol">New Requests</li>
									<li class="list-group-item litxtcol">Customer Notified</li>
									<li class="list-group-item litxtcol">Points</li>
								</ul>
							</div>
						</div>
					</div>


				</ul>
			</div>



			<div class="col-md-10 ">


				<div id="progress" class="waiting"></div>

				<div class="alert alert-warning alert-dismissible successalert"
					role="alert">
					<button type="button" class="close" data-dismiss="alert"
						aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<strong>Your New Outlet added Successfully </strong>
				</div>

				<div class="dash_body_cont" id="style-3">



					<div class="row" style="margin-bottom: 15px;">
						<div class="col-md-12">
							<div class="head">Define Outlets</div>
						</div>
					</div>


					<div class="row">
						<div class="col-md-12">

							<div class="panel panel-default dashpanel">
								<div class="panel-heading panelhead">
									Add a Place<br> <font style="font-size: 12px;">Fill
										and submit the form to add an outlet point</font>
								</div>

								<div class="panel-body panelbody tblstripped"
									style="font-size: 13px;">

									<div class="col-md-6">

										<!-- <form id="new-spot" style="margin-top:15px;" action="student.do" method="POST" commandName="student">-->
										<form style="margin-top:15px;"
											action="outlet.do" method="POST" commandName="outlet">

											<div class="form-group" id="new-spot">
												<label for="new-location-name">City and Region</label>
												<input type="text"
													class="form-control normtxtin" id="new-location-name"
													placeholder="Ex. Mount Lavinia, OR" />
											</div>
											<div class="form-group">
												<label for="new-location-name">Country</label>
												<input type="text"
													class="form-control normtxtin" id="new-country-name"
													placeholder="Ex. Sri Lanka" />
									</div>
											<input type="button" onclick="codeAddress()" value="Direction" padding-left: 12px;>
											<div class="form-group">
												<label for="new-location-name">Outlet Name</label>
												<input type="text" path="outletName"
													class="form-control normtxtin" id="exampleInputPassword1"
													placeholder="Outlet Name" />
											</div>
											<div class="form-group">
												<label for="new-location-name">Address Line 1</label>
												<input type="text" path="address"
													class="form-control normtxtin" id="exampleInputPassword1"
													placeholder="Address Line 1" />
											</div>
											<div class="form-group col-md-8" style="padding-left: 0px;">
												<label for="new-location-name">Address Line 2</label>
												<input type="text"
													class="form-control normtxtin" id="exampleInputPassword1"
													placeholder="Address Line 2" />
											</div>

											<div class="form-group col-md-4">
												<label for="new-location-name">Postal Code</label>
												<form:input type="text" path="postalCode"
													class="form-control normtxtin" id="exampleInputPassword1"
													placeholder="Postal Code" />
											</div>

											<div class="form-group col-md-4" style="padding-left: 0px;">
												<label for="new-location-name">Phone Number 1</label>
												<input type="text" path="phone1"
													class="form-control normtxtin" id="exampleInputPassword1"
													placeholder="Phone Number 1" />
											</div>

											<div class="form-group col-md-4">
												<label for="new-location-name">Phone Number 2</label>
												<input type="text" path="phone2"
													class="form-control normtxtin" id="exampleInputPassword1"
													placeholder="Phone Number 2" />
											</div>
											<div class="form-group col-md-4">
												<label for="new-location-name">Fax Number</label>
												<input type="text" path="fax"
													class="form-control normtxtin" id="exampleInputPassword1"
													placeholder="Fax Number" />
											</div>

											<div class="form-group col-md-6" style="padding-left: 0px;">
												<label for="new-location-name">Lattitude</label>
												<input type="text" path="lattitude" id="lattitudeID"
													class="form-control normtxtin" 
													placeholder="Lattitude" />
											</div>
											<div class="form-group col-md-6">
												<label for="new-location-name">Longitude</label>
												<input type="text" path="longitude" id="longitudeID"
													class="form-control normtxtin" 
													placeholder="Longitude" />
											</div>

											<div class="form-group">
												<label for="new-location-name">Email Address</label>
												<input type="text" path="emailAddress"
													class="form-control normtxtin" id="exampleInputPassword1"
													placeholder="Email Address" />
											</div>


											<div class="form-group">
												<label for="new-location-name">Category</label>
												<input type="text" path="category"
													class="form-control normtxtin" id="exampleInputPassword1"
													placeholder="Category" />
											</div>

											<div class="form-group col-md-6" style="padding-left: 0px;">
												<label for="new-location-name">Opening Time</label>
												<input type="time" path="openingHours"
													class="form-control normtxtin" id="exampleInputPassword1"
													placeholder="Open Hours" />
											</div>
											<div class="form-group col-md-6">
												<label for="new-location-name">Closing Time</label>
												<input type="time" path="closingHours"
													class="form-control normtxtin" id="exampleInputPassword1"
													placeholder="Closing Hours" />
											</div>

											<div class="form-group">
												<label for="new-location-name">Web Site Address</label>
												<input type="text" path="webSite"
													class="form-control normtxtin" id="exampleInputPassword1"
													placeholder="Web Site Address" />
											</div>

											<div class="form-group">
												<label for="new-location-name">Description</label>
												<textarea class="form-control normtxtin" rows="3"
													placeholder="Description"></textarea>
											</div>



											
							<input type="submit" class="btn" name="action" >
.
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

						</div>



						<div class="col-md-12">
							<div class="panel panel-default dashpanel">
								<div class="panel-heading panelhead">
									All Outlets<br> <font style="font-size: 12px;">Complete
										Detail list of outlets</font>
								</div>

								<div class="panel-body panelbody tblstripped"
									style="font-size: 13px;">

									<table class="table table-striped table-hover"
										style="margin-bottom: 0px; padding-bottom: 0px;">

										<tr>
											<th>Outlet ID</th>
											<th>Outlet Name</th>
											<th>Location</th>
											<th>Address</th>
											<th>Phone Number</th>
											<th>Category</th>
											<th>Opening Time</th>
											<th>Closing Time</th>
											<th>Action</th>
										</tr>
										<c:forEach items="${outletList}" var="outlet">
											<tr>
												<form:form action="outlet.do" method="GET"
													commandName="outlet" accept-charset="utf-8">
													<td>"${outlet.outletID}"</td>
													<td>"${outlet.outletName}"</td>
													<td>"${outlet.postalCode}"</td>
													<td>"${outlet.address}"</td>
													<td>"${outlet.phone1}"</td>
													<td>"${outlet.category}"</td>
													<td>"${outlet.openingHours}"</td>
													<td>"${outlet.closingHours}"</td>
													<td>
													 <div class="row">
														<a href="#" data-toggle="modal" data-target="#myModal"
														style="color: #000000;">
														<i class="fa fa-pencil-square" aria-hidden="true"></i>
														</a>
															
													 </div>

													</td>
													<td>
													 <div class="col-md-3">
																<i class="fa fa-trash" aria-hidden="true"></i>
													 </div>
													</td>
													
													
												</form:form>
											</tr>
										</c:forEach>
									</table>

								</div>
							</div>
						</div>



					</div>


				</div>


			</div>

		</div>

	</div>


	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog"
		aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"
						aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">Edit User Info</h4>
				</div>
				<div class="modal-body">

					<form>
						<div class="form-group">
							<input type="text" class="form-control addusertxts"
								id="exampleInputEmail1" placeholder="First Name">
						</div>

						<div class="form-group">
							<input type="text" class="form-control addusertxts"
								id="exampleInputPassword1" placeholder="Last Name">
						</div>

						<div class="form-group">
							<input type="text" class="form-control addusertxts"
								id="exampleInputPassword1" placeholder="User Name">
						</div>

						<div class="form-group">
							<input type="text" class="form-control addusertxts"
								id="exampleInputPassword1" placeholder="Password">
						</div>

						<div class="form-group">
							<input type="text" class="form-control addusertxts"
								id="exampleInputPassword1" placeholder="Retype Password">
						</div>

						<div class="form-group">
							<input type="email" class="form-control addusertxts"
								id="exampleInputPassword1" placeholder="Country">
						</div>

						<div class="form-group">
							<input type="text" class="form-control addusertxts"
								id="exampleInputPassword1" placeholder="Mobile Number">
						</div>

						<div class="form-group">
							<select class="form-control addusertxts">
								<option selected="true" disabled="disabled">--Designation--</option>
								<option>Super Admin</option>
								<option>Admin</option>
								<option>Manager</option>
								<option>Editor</option>
								<option>Trainee</option>
							</select>
						</div>


						<button type="submit" class="btn btn-default flatbut">Save</button>
						<button type="button" class="btn btn-default flatbut"
							data-dismiss="modal">Close</button>
					</form>

				</div>
			</div>
		</div>
	</div>

    <spring:url value="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" var="coreAjax"/>
    <script type="text/javascript" src="${coreAjax}" ></script>

	<spring:url value="/resources/js/bootstrap.min.js" var="coreBootstrap" />
	<script type="text/javascript" src="${coreBootstrap}"></script>
</body>
</html>