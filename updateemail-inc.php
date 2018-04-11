<?php


	include("connect.php");
	include("functions.php");
	
	$error = "";

	if(isset($_POST['updateemail'])){
		$newemail = $_POST['newemail'];
		
		 if(!filter_var($newemail, FILTER_VALIDATE_EMAIL))
		{
			$error = "Please enter valid email address";
		}
		else if(email_exists($newemail, $con))
		{
			$error = "Someone is already registered with this email";}

		else{
					
			$id = $_SESSION['id'];
			if(mysqli_query($con, "UPDATE users SET email='$newemail' WHERE id='$id'"))
			{
				$error = "Your email Address was changed successfully, <a href='profile.php'>click here</a> to go to the profile";
			}
			
		}
	}
	
	
	if(logged_in())
	{
		
		
	?>
		
		<?php echo $error; ?>
		<?php
	}else
	{
		header("location: profile.php");
	}
	
?>
