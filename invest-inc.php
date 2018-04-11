<?php 
include("connect.php");
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Invest</title>
	<script type="text/javascript" src="//www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load('visualization', '1', {packages: ['corechart']});
    </script>
    <link rel="stylesheet" href="css/styles.css"  />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src="scripts/bootstrap.min.js" ></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, height=device-height">
	
</head>
<body style="background-color: #ccffcc;">
	<div id="wrapper">
	<?php 
include("header2.php");
	 ?>



 <?php
    // Make sure the user submitted all of the data required
    if(isset($_POST['investamount']) && is_numeric($_POST['investamount']) && isset($_POST['currency'])) { 

    // Use curl to perform the currency conversion using Blockchain.info's currency conversion API
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, "https://blockchain.info/tobtc?currency=" . $_POST['currency'] . "&value=" . $_POST['investamount']);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      $conversion = curl_exec($ch);

      // Use curl to get current prices and 15 minute averages for all currencies from Blockchain.info's exchange rates API
      curl_setopt($ch, CURLOPT_URL, "https://blockchain.info/ticker");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      $prices = json_decode(curl_exec($ch), true);
      curl_close($ch);
    ?>
    <div style="text-align: center; background-color: #ffffff;">
      <h1>Btc equivalent</h1>
      <p><?php echo $_POST['investamount']; ?> <?php echo $_POST['currency']; ?> is <code>-  <?php echo $conversion; ?> -</code> BTC. </p>

      <h2>Please transfer the BTC equivalent to the following wallet address</h2>
      <p style="color: #DC143C; background: #8B7355; font-size: 18px; padding: 4px; ">  <code style="font-size: 18px; ">hfiieioeieuevueheujx,.cnnccuc</code></p>
    
      <br><br>
      <p style="color: #DC143C; background: #71C671; ">Receipt Expires in 2Hours</p>
      <br><br>
     
      <p><strong>Bitcoin Avarage Price for the past 15 Minutes: 1BTC is - </strong> <?php echo $prices[$_POST['currency']]['15m']; ?><?php echo $prices[$_POST['currency']]['symbol']; ?> -</p>
    </div>
   
   
   <?php } else { ?>
   <p style="background: Red; ">Please fill out the form completely. </p>
   <p><a style="background: #D3D3D3; padding: 4px;" href="Invest.php">Fill the form Again</a></p>
   <p><a style="background: #90EE90; padding: 4px; " href="index.php"> Back Home</a></p>
   <?php } ?>



</div>
</body>
<?php 
include("footer.php");
 ?>
</html>