<?php 

	include("connect.php");
	include("functions.php");
	
	$error = "";
	$email = $_POST['email'];

	if(logged_in())
	{
			header("location: profile.php");
	}elseif(isset($_POST['savepass']))
	{
		if(email_exists($email,$con)){
		$password = $_POST['password'];
		$confirmPassword = $_POST['passwordConfirm'];
		
		if(strlen($password) < 8)
		{
			$error = "Password must be greater than 8 characters";
		}
		else if($password !== $confirmPassword)
		{
			$error = "Password does not match";
		}
		else
		{
			$password = password_hash($password,PASSWORD_DEFAULT);
			
		
			if(mysqli_query($con, "UPDATE users SET password='$password' WHERE email='$email'"))
			{
				$error = " <div>Password changed successfully,  <a href='profile.php'>click here</a> to go to Your profile </div>";
			}
			}
		}
	else{

		$error = "E-mail does not exist in our database";
		
	}
}
		
	?>
		
	<!DOCTYPE html>
	<html>
	<head>
		<title>Estock | Change Password</title>
	</head>
	<body  style="background-color: #EEE8AA; padding: 8px; ">
	<div id="wrapper">
		<?php 
		include("header2.php");
		 ?>
		
		<div id="error" style=" <?php  if($error !=""){ ?>  display:block; <?php } ?> "><?php echo $error; ?></div>
	</div>
	</body>
	<?php 
include("footer.php");
	 ?>
	</html>
	



