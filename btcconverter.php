<?php
include("connect.php");
?>

<!doctype html>

<html>
	
	<head>
		
	<title>Estock Home</title>
	<link rel="stylesheet" href="css/styles.css"  />
	<link rel="stylesheet" href="css/styles.css"  />
	<link rel="stylesheet" href="css/styles.css"  />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="scripts/bootstrap.min.js" ></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, height=device-height">
	<meta content='10' http-equiv='refresh'/> <!-- Reloads Page every 10 seconds -->
	</head>
	
	
  <body  style="padding-left: 60px; padding-right: 100PX;  font-size: 14px; padding-bottom: 60px; font-family: sans-serif; background:#008080; ">
		<div id="error" style=" <?php  if($error !=""){ ?>  display:block; <?php } ?> "><?php echo $error; ?></div>
		
		<div id="wrapper">
			
		<?php
		include("header2.php");
		?>

		<h1 style="padding: 24px; margin: 12px; margin-left: 60px; color: #32CD32; font-weight: 12pt; ">Welcome to Estock</h1>	
			<div>
				<html>
  			
  			

      <form action="converter.php" method="post" style="padding: 24px; text-align: center;">
      <h1 style="color: orange; ">Bitcoin Currency Converter</h1>
      <p>
        <label for="amount">Amount</label>
        <input type="text" name="amount" id="amount">
      </p>
      <p>
  <label for="currency">Currency</label>
        <select name="currency" id="currency">
          <option value="USD">USD</option>
          <option value="EUR">EUR</option>
          <option value="CNY">CNY</option>
          <option value="JPY">JPY</option>
          <option value="SGD">SGD</option>
          <option value="HKD">HKD</option>
          <option value="CAD">CAD</option>
          <option value="AUD">AUD</option>
          <option value="NZD">NZD</option>
          <option value="GBP">GBP</option>
          <option value="DKK">DKK</option>
          <option value="SEK">SEK</option>
          <option value="BRL">BRL</option>
          <option value="CHF">CHF</option>
          <option value="RUB">RUB</option>
          <option value="SLL">SLL</option>
        </select>
      </p>
      <p>
        <input type="submit" name="submit" value="convert to Bitcoin">
      </p>
      </form>
      
  </body>
</html>


			</div>
		</div>	
		
		</div>
		
	</body>

<?php
include("footer.php");
?>

</html>

<!--<form method="POST" action="index.php" enctype="multipart/form-data">The enctype is needed to upload files or images-->
<!--<label>First Name:</label>  Label tag is new in html5-->