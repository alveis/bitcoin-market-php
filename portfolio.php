
<?php  
#including the functions and connections with php
include("connect.php");
include("functions.php");
 
 #check if the user is logged in - if there is an active session 
 if (isset($_SESSION['email'])) {

 	#assign the user's email to a variable
	$em = $_SESSION['email'];

	#pulling the user's data from the database
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
		$wb = $b *0.88;
	}
		
		} else {
			#give feedback if the user has no data in the database - a failsafe 
		echo "0 results" ;
	}
	#close connection
	$con->close();
	}
?>






<doctype = html>
<html>
<head>
<title> Estock | Portfolio </title>
					<link rel="stylesheet" href="css/styles.css"  />
					<link rel="icon" type="image/jpg" href="images/aico.jpg">
					<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
					<script type="text/javascript" src="scripts/bootstrap.min.js" ></script>
					<meta charset="utf-8">
					<meta name="viewport" content="width=device-width, initial-scale=1, height=device-height">
</head>
<body id="body">
	<!--wrapping the website contents in a div-->
	<div id="wrapper">
<?php 
include("header2.php");
 ?>
 <!--display error-->
 <div id="error" style=" <?php  if($error !=""){ ?>  display:block; <?php } ?> "><?php echo $error; ?></div>

<div style="padding: 2 24 2 24 ">
	<!-- check if the user is logged in-->
	<?php if (isset($_SESSION['email'])) { ?>


	<div id="pageContents" style="align-content: center; text-align: center;">
<!-- welcome message displays only if the user is logged in-->
 <!-- <h1 style="padding: 4px; margin: 2px; margin-left: 6px; color: #32CD32; font-weight: 12pt; align-self: center; text-align: center; 
 background: #336699;  border-radius: 6px;"><?php echo $ln; echo "    ";   echo $fn; echo "  -  "; ?></em>
Welcome to your Portfolio!</h1>
 -->
<span style="background: #999966; padding: 2px; border-radius: 3px;"><?php echo "you are viewing: $fn $ln's Account";?></span><br><br>


<!-- <h4 style="color: green; text-align: center; ">Below is everything you need to get started</h4> -->
<fieldset>
	<legend style="background: #339999; text-align: center;"><img src="images/mico.jpg"> Account status</legend>
	
	
	<!--display user info-->
 <div style="font-size: 16px;">
 	<p>Your Wallet Address is :<span><code><a href="updateaccount.php"><?php echo "$w"; ?></a></code></span></p>
 <p>Your Account Balance is :<span><code><?php echo "$b"." BTC"; ?></code></span></p>
  <p>Withdrawable Balance is :<span><code><?php echo "$wb"." BTC"; ?></code></span></p>

 </div>
  <?php 
}else{
	#display error if the user is not logged in
	$error = "you are not yet Logged in, Please Loggin to view your info";
	echo $error;
}
   ?>

</fieldset>


<div>
	<fieldset>
			<legend style=" background: brown; text-align: center; color: #003300;"><img src="images/tico.jpg">Make Transactions</legend>
	</fieldset>

</div>

		
		<!--show relevant links -->
	<div style="color: brown;">
		<fieldset>
			<legend><a href="withdraw.php"><img src="images/wico.jpg">Deposit</a> </legend> 


		</fieldset>
	</div>
	<div>
		<fieldset>
			<legend><a href="invest.php"><img src="images/iico.jpg">Invest</a> </legend> 

		</fieldset>
	</div>


	<div>
		<!-- links to the coin Market-->
		<fieldset style="font-size: 18px; ">
			<legend style="background: #999999; text-align: center; color: #cc3333; "><img src="images/bico.jpg">Coin Market </legend>

			<p><a href="buybtc.php"><img src="images/bbico.jpg">Buy Coin </a> </p><br>
			<p><a href="sellbtc.php"><img src="images/sbico.jpg">Sell Coin</a> </p>
		</fieldset>	
	</div>

</div>
</div>
</div>

	</body>

<?php
#include the footer 
include("footer.php");
 ?>

</html>

