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
		
	}
	$con->close();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Update Email</title>
	<link rel="stylesheet" href="css/styles.css"  />
	<link rel="stylesheet" href="css/styles.css"  />
	<link rel="stylesheet" href="css/styles.css"  />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="scripts/bootstrap.min.js" ></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, height=device-height">
</head>

<body id="body">
	<div id="wrapper">

<?php 
include("header2.php");
 ?>
					



<form style="background: grey; padding: 20px; align-items: center;" action="" method="post">
	<h1 style="color: green; padding: 24px; "> E-mails can only be updated on special requests</h1><br><br>
	<a href="profile.php">Return to Your Profile</a>

	</div>

	
	

</form>
</div>
</body>
<?php 
include("footer.php");
 ?>
</html>
