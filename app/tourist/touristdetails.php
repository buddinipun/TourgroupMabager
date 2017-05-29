<?php include '../../webroot/include/headder.php'; ?>
<br/>
<div class="container">
	<div class="row">
		<div class="col-md-9 col-xs-6">
<form action="../../classes/tourist/TouristRegistration.php" method="post" enctype="multipart/form-data">
    <div class="col-sm-10">
                    <div class="form-group row">
                        <label for="accountGroup" class="col-sm-2 form-control-label" >Nik name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nikName" name="nikName" required="">
                        </div>
                    </div>
					<div class="form-group row">
                        <label for="accountCode" class="col-sm-2 form-control-label">Work and Education</label>
                        <div class="col-sm-10">
                         <input type="text" class="form-control" id="work" name="work" required="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="accountCode" class="col-sm-2 form-control-label">Family and Relationship</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="relation" name="relation" required="">
                        </div>
                    </div>
                  <!--   <div class="form-group row">
                        <label for="accountCode" class="col-sm-2 form-control-label">Place Preferences</label>
                        <div class="col-sm-10">
<!--                           <input type="text" class="form-control" id="tour" name="tour"> -->
									<!-- <div class="checkbox">
  <label><input type="checkbox" value="">Wild</label>
</div>
<div class="checkbox">
  <label><input type="checkbox" value="">Heritage</label>
</div>
<div class="checkbox">
  <label><input type="checkbox" value="">Beach</label>
</div>
<div class="checkbox">
  <label><input type="checkbox" value="">Entertainment</label>
</div>
                        </div>
                    </div> -->
                   
<div class="form-group row">
                        <label for="accountCode" class="col-sm-2 form-control-label">Tour Preferences</label>
                        <div class="col-sm-10">
<!--                           <input type="text" class="form-control" id="tour" name="tour"> -->
									  <div class="radio">
  <label><input type="radio" name="tour" value="singleT" required="">Single Traveller</label>
</div>
<div class="radio">
  <label><input type="radio" name="tour" value="groupT" required="">Group Traveller</label>
</div>
</div>
                        </div>
                    <div class="form-group row">
                        <label for="accountCode" class="col-sm-2 form-control-label">About you</label>
                        <div class="col-sm-10">
                            <textarea class = "form-control" rows = "3" name="description" required=""></textarea>
                        </div>
                    </div>                    
					<div class="form-group row">
                        <label for="description" class="col-sm-2 form-control-label">Date of birth</label>
                        <div class="col-sm-10">
<!--                             <textarea class = "form-control" rows = "3"></textarea> -->
								<input type="date" class="form-control" id="birth" name="birth" placeholder="birth date" required="">
                        </div>
                    </div>
					<div class="form-group row">
                        <label for="accountCode" class="col-sm-2 form-control-label">Gender</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="gender" id="gender" style="width: 100%; height: 30px;" required="">
                            <option value="Select type" disabled="disabled">Select Type</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            </select>
                        </div>
                    </div>
                    <!-- <div class="form-group row">
                        <label for="range" class="col-sm-2 form-control-label">Active Duration</label>
                        <div class="col-sm-5" class="class='input-group date'">
                            <input type="date" class="form-control" id="start" name="start" placeholder="Start date">
                        </div>
                        <div class="col-sm-5">
                            <input type="date" class="form-control" id="end" name="end" placeholder="End date">
                        </div>
                    </div> -->
                    <div class="form-group row">
                        <label for="description" class="col-sm-2 form-control-label">Profile Picture</label>
                        <div class="col-sm-10">
                            <input type="file" name="photo" class="form-control" required="" />
                        </div>
                    </div>
                    <div class="form-group row">
<!--                         <label for="range" class="col-sm-2 form-control-label">Active Duration</label> -->
                        <div class="col-sm-5" class="class='input-group date'">
<!--                             <input type="date" class="form-control" id="start" name="start" placeholder="Start date"> -->
                        </div>
                        <div class="col-sm-5">
                              <input type="submit" class="btn btn-info" style="float: right">
                        </div>
                    </div>
                   </div>
                   
    </form>
    </div>
    <div class="col-md-3 col-xs-6"></div>
    </div>
   
   </div>
   