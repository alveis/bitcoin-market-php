<?php  
include("connect.php");
include("functions.php");

$error = "" ;

#check if the user is logged in then choose whether to continue with the request and allow user to access the page
if (isset($_SESSION['email'] )) { ?>

<?php
#check for the user's email from the existing session and assign the user's email to a variable
$em = $_SESSION['email'];

#check for the user's details in the database using the session email
$sql = "SELECT id, firstName, lastName, Wallet, balance FROM users WHERE email = '$em' ";
	$result = $con->query($sql);
	if ($result->num_rows > 0 ) {

	// output data of each row
	while($row = $result->fetch_assoc()) {

		$fn = $row[ "firstName" ];
		$ln = $row[ "lastName" ] ;
		$w = $row["Wallet"] ;
		$b = $row["balance"] ;
		$wb = $b *0.88;
	}
} else {
		
	}
	$con->close();

?>

<!--first page for logged in user_ this page is skipped if the user is not logged in-->
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="background: #ccffcc;">

<div id="wrapper">
		<?php
	Include("header2.php") ;
 ?>
<br>


<div style="color: green; text-align: center; font-size: 16px; ">
	<p style="background: #BEBEBE;">
<?php 
echo "$fn $ln's Account";
 ?>
</p>
 <p>Your Wallet Address is :<span><code><?php echo "$w"; ?></code></span></p>
 <p>Your Account Balance is :<span><code><?php echo "$b"." BTC"; ?></code></span></p>
  <p>Withdrawable Balance is :<span><code><?php echo "$wb"." BTC"; ?></code></span></p>
</div>

<div style="background: #7FFFD4; text-align: center; padding: 12px; font-size: 16px; color: #8B5F65; ">
<b>Enter the amount you want to Withdraw(In Dollars)</b>
</div>


<div id="error" style=" <?php  if($error !=""){ ?>  display:block; <?php } ?> "><?php echo $error; ?></div>


<div style="background: #F1EDC2; text-align: center; padding: 12px; ">
<form action="withdraw-inc.php" method="POST" >
	<input type="text" name="withdrawamount"  autofocus ><br><br>
	<button name="withdraw" style="padding-left:24px; padding-right:34px; ">Request The Above Amount</button>
</form>
</div>




</div>

</body>

<?php 

		include("footer.php");
		
?>
</html>

<?php
}else{?>
	

<!--second page for non-logged in user_ this page is displayed if the user is not logged in-->
<!DOCTYPE html>
<html>
<head>
	<title>Login First</title>
</head>
<body>
	<div id="wrapper">
		<?php 
include("header2.php");
		 ?>
	<?php 
$error = "please Login first";
	 ?>

<div id="error" style=" <?php  if($error !=""){ ?>  display:block; <?php } ?> "><?php echo $error; ?></div><br>
<a style="background: #ADFF2F; font-size: 16px; padding: 4px; " href="index.php">Back to Home</a><br><br>
<a style="background: #EEE685; font-size: 16px; padding: 4px; "  href="login.php">Login</a><br>
	</div>

</body>
<?php 
include("footer.php");
 ?>
</html>
<?php
}
?>