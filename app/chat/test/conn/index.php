<?php include '../../../../webroot/include/headder.php'; ?>
<div id="LoginDiv">
<form method="POST" action="../pages/userLogin.php">
	<table>
		<tr>
		<td>Email:</td><td><input type="text" id="UserMailLogin" name="UserMailLogin"></td>
		</tr>
		<tr>
		<td>Password:</td><td><input type="password" id="UserPasswordLogin" name="UserPasswordLogin"></td>
		</tr>
		<tr>
		<td></td><td><input type="submit" value="Log In"></td>
		</tr>
	</table>
	</form>
</div>

<div id="SignUp">
	<form method="POST" action="../pages/userController.php">
	<table>
		<tr>
		<td>Your name</td><td><input type="text" name="username"></td>
		</tr>
		<tr>
		<td>Your Email</td><td><input type="text" id="userEmail" name="userEmail"></td>
		</tr>
		<tr>
		<td>Password</td><td><input type="password" id="userPassword" name="userPassword"></td>
		</tr>
		<tr>
		<td></td><td><input type="submit" value="Sign Up"></td>
		</tr>
		<?php 
		if(isset($_GET['success'])){
			?>
			<tr>
			<td></td><td><span style="color:green">User Inserted</span></td>
			</tr>
			
			<?php 
		}
			?>
	
		
		
	</table>
	</form>
</div>