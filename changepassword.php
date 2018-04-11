<doctype = html>
<html>
<head>
<title> Change Your Password </title>
<link rel="stylesheet" href="css/styles.css"  />
					<link rel="stylesheet" href="css/styles.css"  />
					<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
					<script type="text/javascript" src="scripts/bootstrap.min.js" ></script>
					<meta charset="utf-8">
					<meta name="viewport" content="width=device-width, initial-scale=1, height=device-height">
</head>
<body style="background-color: #EEE8AA; padding: 8px; ">
	<div id="wrapper">
<?php 
include("header2.php");
 ?>

			<div id="formDiv">
				<!--form for password change-->
			
<form method="POST" action="changepassword-inc.php">
	<label for="email">E-mail</label><br>
	<input type="text" name="email" id="email"><br><br>
	<label>New Password:</label><br/>
	<input type="password" name="password" /><br/><br/>
				
	<label>Re-enter Password:</label><br/>
	<input type="password" name="passwordConfirm" /><br/><br/>
				
  	<input type="submit" name="savepass" value="save"/><br/><br/>
</form>
</div>
<div style="background-color: #EEE8AA; padding: 18px; ">
	<!--link to return back to profile/homepage or to log out-->
	<h3>I dont want to change my password anymore!</h3>
	<a href="index.html"> Return to HomePage</a><br>
	<a style="color: green;" href="profile.php">Return to my Profile</a><br>
	<a style="color: Red; " href="logout.php"> Sign Out from my Account</a>

</div>
</div>
	</body>
<?php 
include("footer.php");
 ?>

</html>

