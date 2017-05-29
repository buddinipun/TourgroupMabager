<?php 
// include '../../webroot/include/headder.php';
 require("../../webroot/connection/DB.php");
$id = $_GET['q'];
$comment = $_GET['comment'];
	
 $query_select_place = "SELECT * FROM place where place_id = $id";
 $result_select_place = mysqli_query($conn,$query_select_place);
 $row_place = mysqli_fetch_assoc($result_select_place);

?>
<style type="text/css">
detailBox {
    width:320px;
    border:1px solid #bbb;
    margin:50px;
}
.titleBox {
    background-color:#fdfdfd;
    padding:10px;
}
.titleBox label{
  color:#444;
  margin:0;
  display:inline-block;
}

.commentBox {
    padding:10px;
    border-top:1px dotted #bbb;
}
.commentBox .form-group:first-child, .actionBox .form-group:first-child {
    width:80%;
}
.commentBox .form-group:nth-child(2), .actionBox .form-group:nth-child(2) {
    width:18%;
}
.actionBox .form-group * {
    width:100%;
}
.taskDescription {
    margin-top:10px 0;
}
.commentList {
    padding:0;
    list-style:none;
    max-height:200px;
    overflow:auto;
}
.commentList li {
    margin:0;
    margin-top:10px;
}
.commentList li > div {
    display:table-cell;
}
.commenterImage {
    width:30px;
    margin-right:5px;
    height:100%;
    float:left;
}
.commentText p {
    margin:0;
}
.sub-text {
    color:#aaa;
    font-family:verdana;
    font-size:11px;
}
.actionBox {
    border-top:1px dotted #bbb;
    padding:10px;
}
</style>
			<div class="imggalhead">
			   		<?= $row_place['place_name'];?>
			   </div> 

					    <div class="col-md-6">
						    <div class="thumbnail">

						    <!-- <a href="img/ampara/Arugam.jpg" target="_blank"> -->
						      <div class="imgframe">
						      	<img src="<?= $row_place['image'];?>" alt="<?= $row_place['place_name'];?>" style= "height: 180px; width: 150%;">
						      </div>
						    <!-- </a> -->

						     
						    </div>

			  			</div>
					      <div class="infotxt"><?= $row_place['about_place'];?>
					      	<form action="../../classes/place/cartController.php?place_id=<?= $row_place[''];?>" method="POST">
					      	<input type="submit" class="btn btn-primary" value="AddtoCart" style="float:left">
							</form>
					      </div>
						     <div class="detailBox">
							    <div class="titleBox">
							      <label>Comment Box</label>
							        <!-- <button type="button" class="close" aria-hidden="true">&times;</button> -->
							    </div>
							    <div class="actionBox">
							        <ul class="commentList">
							            <li id="commentReply">
							                <?php 
							                if($comment == 'request'){
							                	$query_select_comments ="SELECT * from comments c, sys_user u where c.comment_by=u.sys_user_id and c.place_id=$id";
													$result_select_comments = mysqli_query($conn,$query_select_comments);

													while($row_comments= mysqli_fetch_array($result_select_comments)){

														$comment_text = $row_comments["comment_text"];
														$f_name = $row_comments["f_name"];
														$date_time = $row_comments["date_time"];

														?>
															<table>
																<tr>
																	<td style="font-weight:bold"><?=$f_name ?></td>
																</tr>
																<tr>
																	<td class="commentText"><?=$comment_text ?></td>
																	<td class="date sub-text"><?= $date_time?></td>
																</tr>
															</table>
							                	
							                <?php
							                }
							            }
							                ?>
							            </li>
							        </ul>
							        <form class="form-inline" role="form">
							            <div class="form-group">
							                <input class="form-control" type="text" id="comment" placeholder="Enter comment here ..." />
							                <input type="hidden" name="place_id_value" id="place_id_comment" value="<?= $row_place['place_id'];?>">
							            </div>
							            <div class="form-group">
							                <button type="button" class="btn btn-default" onclick="add_comment();">Add</button>
							            </div>
							        </form>
							    </div>
							</div> 


					  

