	<?php 

		include("connect.php");
		include("functions.php");

	if(isset($_SESSION['email'])){
	?>
	<?php 
	$em = $_SESSION['email'];

	$sql = "SELECT id, firstName, address, lastName, Wallet, balance FROM users WHERE email = '$em' ";
	$result = $con->query($sql);
	if ($result->num_rows > 0 ) {

	// output data of each row
	while($row = $result->fetch_assoc()) {

		$uid = $row[ "id" ];
		$fn = $row[ "firstName" ];
		$ln = $row[ "lastName" ] ;
		$w = $row["Wallet"] ;
		$b = $row["balance"] ;
		$add = $row["address"];
	}
		
		} else {
		echo "0 results" ;
	}
	$con->close();
	?>
	<?php 
} else{
 ?>
}
<!DOCTYPE html>
<html>
<head>
	<title>using php query</title>
</head>
<body>
	<div>
		

	<p>
		
		hhhkkkkkkkkkkkk..............
	</p>
	</div>
	hhhhhh
		<div style="background: yellow; font-size: 11px;">
						<?php

							if (isset($_GET['Login_succesful']) === true) {
		echo "you are logged in as <strong>$fn ,$ln ";
			}else{						
					

	echo "you are not supposed to be here! please register or login ";
}
 ?>
	</div>
</body>
</html>
<?php } ?>