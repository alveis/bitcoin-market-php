<?php
	include("connect.php");
	include("functions.php");
	
	$error = "";

	if(isset($_POST['updatewallet']))
	
		if (strlen($_POST['ufname'] <3 )) {
		echo "first Name should be greater than 3 characters";
											}
		else if (strlen($_POST['ulname'] < 3)) {
		echo "Last Name should be more than 3 characters";
													}
		else if(!filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			$error = "Please enter valid email address";
			}
		else if(email_exists($email, $con))
		{
			$error = "Someone is already registered with this email";
			}
			else{
				if(mysqli_query($con, "UPDATE users SET email = $_POST['uemail'] , firstname = $_POST['ufname'], lastName = $_POST['ulname']             where email = $_SESSION['email'] "))
			{
				$error = "Your Details have been succesfully updated, <a href='profile.php'>click here</a> to go to the profile";
			}

			
}

}
<?php echo $error; ?>

?>