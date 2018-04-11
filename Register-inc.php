
<?php

	include("connect.php");
	include("functions.php");
	
	if(logged_in())
	{
		#override the login page if the user is already logged in
		header("location:profile.php");
		exit();
	}else
	
	$error = "";

	#check if the user clicked the submit button
	if(isset($_POST['submit']))
	{
				#escape all input fields to prevent users from entering codes in the input
				$firstName = mysqli_real_escape_string($con, $_POST['fname']);
				$lastName = mysqli_real_escape_string($con, $_POST['lname']);
			    $email = mysqli_real_escape_string($con, $_POST['email']);
			    $password = $_POST['password'];
			    $passwordConfirm = $_POST['passwordConfirm'];
			  
				/*$image = $_FILES['image']['name'];
			    $tmp_image = $_FILES['image']['tmp_name'];
			    $imageSize = $_FILES['image']['size'];
						*/

			    #check if the user accepts t&c
				$conditions = isset($_POST['conditions']);
				
				#check the date
				$date = date("F, d Y");
				
				#check if the name is atleast 3 characters long
				if(strlen($firstName) < 3)
				{
					$error = "First name is too short";
				}
				
				else if(strlen($lastName) < 3)
				{
					$error = "Last name is too short";
				}
				#check if the E-mail is valid
				else if(!filter_var($email, FILTER_VALIDATE_EMAIL))
				{
					$error = "Please enter valid email address";
				}
				#check if the email is already registered
				else if(email_exists($email, $con))
				{
					$error = "Someone is already registered with this email";
				}
				#check if the password is atleast 8 characters long
				else if(strlen($password) < 8)
				{
					$error = "Password must be greater than 8 characters";
				}
				#check if the two password fields match
				else if($password !== $passwordConfirm)
				{
					$error = "Password does not match";
				}
				/*
				#check if profile image is updated
				else if($image == "")
				{
					$error = "Please upload your image";
				}
				else if($imageSize > 1048576)
				{
					$error = "Image size must be less than 1 mb";
				}	*/		
				#
				else if(!$conditions)
				{
					$error = "You must be agree with the terms and conditions";
				}
				else
				{

				#hash the passwords before storing into the database	
					$password = password_hash($password, PASSWORD_DEFAULT);
					
			/*		 $imageExt = explode(".", $image);
					$imageExtension = $imageExt[1];
					
					if($imageExtension == "PNG" || $imageExtension == "png" || $imageExtension == "JPG" || $imageExtension == "jpg")
					{
						$image = rand(0, 100000).rand(0, 100000).rand(0, 100000).time().".".$imageExtension;
					
			*/		
						#insert the user's infoto the database
						$insertQuery = "INSERT INTO users(firstName, lastName, email, password,  date) VALUES ('$firstName','$lastName','$email','$password','$date')";
						if(mysqli_query($con, $insertQuery))
						{
						/*	if(move_uploaded_file($tmp_image,"images/$image"))
							{
								$error = "You are successfully registered";
							}
							else
							{
								$error = "Image is not uploaded";
							}
						}
					}
					else
					{
						$error = "File must be aJPG OR PNG image";
					}   */

					#alert the user if the registration was succesful
					$error = "You are successfully registered";
				}
		}
							
	}

?>



<!doctype html>

<html>
	
	<head>
		
	<title>Registration Page</title>
	<link rel="stylesheet" href="css/styles.css"  />
	<link rel="icon" type="image/jpg" href="images/aico.jpg">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="scripts/bootstrap.min.js" ></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, height=device-height">
	
	</head>
	
	<!--every php echo statements are displayed in this page-->
	<body style="background-color: #ccffcc; " >
		<?php 
include("header2.php");
		 ?>
		
		<div id="wrapper">
			
		<div id="error" style=" <?php  if($error !=""){ ?>  display:block; <?php } ?> "><?php echo $error; ?></div>
		
			
				<a href="index.php">Home</a><br>
				<a href="login.php">Login to go to Your Profile</a>
			
     </div>
     </body>
    
<?php 
include("footer.php");
 ?>
     </html>
    