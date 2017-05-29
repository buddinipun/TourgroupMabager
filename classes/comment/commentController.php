 <?php 
 require("../../webroot/connection/DB.php");

if($_REQUEST){


$comment =  $_REQUEST['comment'];
$user_id = $_REQUEST['user_id'];
$place_id = $_REQUEST['place_id'];
$date_time = date('Y-m-d H:i:s');



// $comment = $_POST['comment'];

$query_insert_comment ="INSERT into comments (`comment_text`, `comment_by`, `place_id`,`date_time`) VALUES ('$comment','$user_id','$place_id','$date_time')";
// echo $query_insert_comment;
mysqli_query($conn,$query_insert_comment);

$query_select_comments ="SELECT * from comments c, sys_user u where c.comment_by=u.sys_user_id and place_id=$place_id";
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