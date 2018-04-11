<?php
if (empty($_POST) === false) {
	$errors = array();
	$name 		= $_POST['name'];
	$email 		= $_POST['email'];
	$message 	= $_POST['message'];

	

	if (empty($name)===true || empty($email)===true || empty($message)===true) {
		echo '<div style = "background:#FFE2B7;">' ;
		$errors = 'Name, email and message are required! please be sure to fill all fields' ;
			echo '</div>';
	}else{
		if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
			$errors[] = 'invalid email' ;
		}
		if (ctype_alpha($name)===false) {
			$errors[] = 'Name must only contain letters';
		}else{
			mail('michaelngiri@gmail.com', 'Estock contact form', $message, 'From:'. $email);
				header('location:contact.php?message_sent');
				$errors[] = 'Your Message has been sent' ;
				
		}
	}


}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<link rel="stylesheet" href="css/styles.css"  />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="scripts/bootstrap.min.js" ></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, height=device-height">
	</head>
</head>
<body id="body">
		<div id="wrapper" >

		<?php 
		include("connect.php");
		include("header2.php");

		 ?>
		
			

			<?php
			if (isset($_GET['message_sent']) === true) {
		echo "Thanks For Contacting us you will get our response soonest if necessary";
			}else{
			if (empty($errors) === false) {
				print_r($errors) ;
			}
			?>

			<p id="contactHeader">
				If you have any complaints or suggestion please write to us using the form below

			</p>
			 <form action="contact.php" method="POST" style="padding: 12px; background: #c0c0c0">
			 	<p>
			 	<label for="name">Name:</label>
			 	<input type="text" name="name" id="name" autofocus placeholder="Name">
			 	</p>

			 	<p>
			 	<label for="email">E-Mail</label>
			 	<input type="text" name="email" id="email" placeholder="Valid E-Mail for Reply">
			 	</p>
			 	<p>
			 		<label for="message">Message:</label><br>
			 		<textarea name="message" id="message" cols="80" rows="15"></textarea>
			 	<p>
			 		<input type="submit" name="Submit" value="Send Message" class="Buttons">
			 	</p>

			 	</p>
			 </form> 
<?php } ?>

		






		</div>
		<div id="error" style=" <?php  if($error !=""){ ?>  display:block; <?php } ?> "><?php echo $error; ?></div>

</body>
<?php 
include("footer.php");
 ?>
<br><br>
</html>
