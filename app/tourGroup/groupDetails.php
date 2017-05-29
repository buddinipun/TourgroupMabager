<?php include '../../webroot/include/headder.php'; ?>
<br/>
<div class="container">
	<div class="row">
		<div class="col-md-9 col-xs-6">
<form action="../../classes/group/GroupRegistration.php" method="post" enctype="multipart/form-data">
    <div class="col-sm-10">
                    <div class="form-group row">
                        <label for="accountGroup" class="col-sm-2 form-control-label" >Group name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="grpName" name="grpName">
                        </div>
                    </div>
					<div class="form-group row">
                        <label for="accountCode" class="col-sm-2 form-control-label">Group Theme</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="grpTheme" name="grpTheme">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="accountCode" class="col-sm-2 form-control-label">About Group</label>
                        <div class="col-sm-10">
                            <textarea class = "form-control" rows = "3" name="aboutGroup"></textarea>
                        </div>
                    </div>                    
                    <div class="form-group row">
                        <label for="range" class="col-sm-2 form-control-label">Active Duration</label>
                        <div class="col-sm-5" class="class='input-group date'">
                            <input type="date" class="form-control" id="start" name="start" placeholder="Start date">
                        </div>
                        <div class="col-sm-5">
                            <input type="date" class="form-control" id="end" name="end" placeholder="End date">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="description" class="col-sm-2 form-control-label">Profile Picture</label>
                        <div class="col-sm-10">
                            <input type="file" name="photo" class="form-control"/>
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
   