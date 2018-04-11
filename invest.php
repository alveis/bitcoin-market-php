<?php  
include("connect.php");
include("functions.php");

$error = "" ;

if (isset($_SESSION['email'] )) { ?>

<?php
$em = $_SESSION['email'];

$sql = "SELECT id, firstName, lastName, Wallet, balance FROM users WHERE email = '$em' ";
	$result = $con->query($sql);
	if ($result->num_rows > 0 ) {

	// output data of each row
	while($row = $result->fetch_assoc()) {

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
	<title>Estock | Invest</title>
	 <title>Bitcoin Currency Converter</title>
    <script type="text/javascript" src="//www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load('visualization', '1', {packages: ['corechart']});
    </script>
    <link rel="stylesheet" href="css/styles.css"  />
    <link rel="stylesheet" href="css/styles.css"  />
    <link rel="stylesheet" href="css/styles.css"  />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src="scripts/bootstrap.min.js" ></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, height=device-height">
	
</head>
<body style="background-color: #ccffcc;">
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
</div>


<div style="background: #7FFFD4; text-align: center; padding: 12px; font-size: 16px; color: #8B5F65; ">
<b>Enter the amount you want to invest(In Dollars)</b>
</div>

<div style="background: #F1EDC2; text-align: center; padding: 12px; ">
	<form action="invest-inc.php" method="POST" >
	<input type="text" name="investamount" id="investamount" autofocus autosave><br>
	 <p><br>
  <label for="currency">Currency</label>
        <select name="currency" id="currency">
          <option value="USD" checked >USD</option>
          <option value="EUR">EUR</option>
          <option value="NGN">NGN</option>
         <option value="GBP">GBP</option>
          
        </select>
      </p>
	<button name="invest" style="padding-left:24px; padding-right:34px; ">Invest This Amount</button>
</form>
</div>



</div>


</body>
<?php 
Include("footer.php") ;
 ?>
</html>

<?php
}else{?>
	


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

<div id="error" style=" <?php  if($error !=""){ ?>  display:block; <?php } ?> "><?php echo $error; ?></div>

	</div>

</body>
<?php 
include("footer.php");
 ?>
</html>
<?php
}
?>