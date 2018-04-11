<?php
echo "";
?>
<?php  
include("connect.php");


$em = $_SESSION['email'];

$sql = "SELECT id, firstName, lastName, Wallet, balance FROM users WHERE email = '$em' ";
	$result = $con->query($sql);
	if ($result->num_rows > 0 ) {

	// output data of each row
	while($row = $result->fetch_assoc()) {

		$uid = $row[ "id" ];
		$fn = $row[ "firstName" ];
		$ln = $row[ "lastName" ] ;
		$w = $row["Wallet"] ;
		$b = $row["balance"] ;
	}
} else {
		echo "0 results" ;
	}
	$con->close();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Update <?php echo "$fn $ln 's"; ?> Persornal Info</title>
	<link rel="stylesheet" href="css/styles.css"  />
</head>
<body>

<div id="menu" style="">
						<a href="index.php">Home</a>
						<a href="forum/" >Forum</a>
						<a href="logout.php" >Logout</a>
						<a href="changepassword.php">Change Password</a>
						<a href="hiworks.php">How it Works</a>
						<a href="contact.php">Contact Us</a>
						<a href="about.php">About Us</a>
				</div>



			<div style="color: red; padding: 48px; font-size: 28px;">NOTICE: Update features not available yet </div>

<DIV style="padding: 80px; background: #8FBC8F;  ">
	
		
<form method="POST" action="updatepersonal-inc.php" enctype="multipart/form-data">
<fieldset>
<legend style=" padding: 24px; background: #F08080; color: #0000FF; " >Update Your Personal Details Below</legend>
	<label for="uemail">New Email</label>
	<input type="text" name="uemail" placeholder="<?php echo "$em"; ?>"><br><br>
	<label for="ufn">First Name</label>
	<input type="text" name="ufname" placeholder="<?php echo "$fn"; ?>"><br><br>
	<label for="uln">Last Name</label>
	<input type="text" name="ulname" placeholder="<?php echo "$ln"; ?>"><br><br>
	<button type="submit" style="padding: 12px; color: orange; " disabled="">Update</button>
</fieldset>		
</form>
<a href="profile.php">Return to Your Profile</a>
</DIV>
</body>
</html>