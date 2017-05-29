<?php include '../../webroot/include/headder.php'; ?>
<br/>
<div class="container">
	<div class="row">
		<div class="col-md-9 col-xs-6">
<form action="../../classes/tourist/tourregistration.php" method="post" enctype="multipart/form-data">
    <div class="col-sm-10">
                
                    <div class="form-group row">
                        <label for="accountCode" class="col-sm-2 form-control-label">Place Preferences</label>
                        <div class="col-sm-10">
                          <!-- <input type="text" class="form-control" id="tour" name="tour"> -->
									<div class="checkbox">
  <label><input type="checkbox" name="place_prefer" id="place_prefer" value="wild">Wild</label>
</div>
<div class="checkbox">
  <label><input type="checkbox" name="place_prefer" id="place_prefer" value="heritage">Heritage</label>
</div>
<div class="checkbox">
  <label><input type="checkbox" name="place_prefer" id="place_prefer" value="beach">Beach</label>
</div>
<div class="checkbox">
  <label><input type="checkbox" name="place_prefer" id="place_prefer" value="entertaintment">Entertainment</label>
</div>
                        </div>
                    </div>

                    
                    <div class="form-group row">
                        <label for="range" class="col-sm-2 form-control-label">Active Duration</label>
                        <div class="col-sm-5" class="class='input-group date'">
                            <input type="date" class="form-control" id="start" name="start" placeholder="Start date" required="">
                        </div>
                        <div class="col-sm-5">
                            <input type="date" class="form-control" id="end" name="end" placeholder="End date" required="">
                        </div>
                    </div>
                    
                   </div>
              <div class="col-sm-10">
                              <input type="submit" class="btn btn-info" style="float: right">
                        </div>     
    </form>
    </div>
    <div class="col-md-3 col-xs-6"></div>
    </div>
   
   </div>
   