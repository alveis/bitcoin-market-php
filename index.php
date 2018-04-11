<?php 

		include("connect.php");
		include("functions.php");

	?>
<!doctype html>

<html>
	
	<head>
		
	<title>Finnacle | Home</title>
	<link rel="stylesheet" href="css/styles.css"  />
	<link rel="icon" type="image/jpg" href="images/aico.jpg">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="scripts/bootstrap.min.js" ></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, height=device-height">
	<!--<meta content='10' http-equiv='refresh'/> !--> <!--Reloads Page every 10 seconds -->
	</head>
	
	
  <body id="body">


		
		<div id="wrapper">
			
		<?php 
		include("header2.php");
		 ?>
		
	<div id="error" style=" <?php  if($error !=""){ ?>  display:block; <?php } ?> "><?php echo $error; ?></div>

		
		<!-- <h1 style="padding: 4px; margin: 2px; margin-left: 6px; color: #32CD32; font-weight: 12pt; align-self: center; text-align: center; background: #336699; border-radius: 4px; animation: ease-in; scroll-behavior: smooth; animation: alternate-reverse;">Welcome to CryptoScape</h1>	 -->

		<span><a href="currentPrices.php"><?php include("getcurrentbtcprice.php");	 ?></a></span>
		
		<div>
		
			<!-- <?php

			include("slideshow.php");
			?> -->
				
		
		</div>

			<div style="background: rgb(1,100,100); padding: 10px; text-align: center;">
		      <form action="converter.php" method="post" style="padding: 24px; background: #ffffff; ">
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
		      </div>

		    <!--   
		      	<div style="padding: 20px; background: #009966;  display: ; direction: ltr;">
		      		<fieldset>
		      			<legend style="background: #00cc99; ">***How It Works***</legend>
		      			<br><br>
	  		
	  		<p>
	  			About Andela:

Andela extends engineering teams with the most talented software developers in Africa. We recruit the most talented technologists on the African continent, shape them into technical leaders, and place them as full-time distributed team members with companies that range from Microsoft and IBM to dozens of high-growth startups. Backed by Chan Zuckerberg Initiative, GV (Google Ventures) and Spark Capital, Andela is building the next generation of global technology leaders.

Passion, excellence, entrepreneurial spirit, and rejecting the status quo are just a few of the things that Andela team members have in common. We have a vision to mobilize 100,000 world-class developers across Africa in the next 10 years – and we want you to help make it <a href="howitworks.php">...(Read more)</a>

	  		</p>
	  			</fieldset>
	  			</div>
	<fieldset>
	  			<div style="background: #999966; padding: 20px; ">
	  				<legend style="background: #cccc99; display: block; align-items: center; "><h4>***How do I Join Estock***</h4></legend>
	  				
	  				<p>
	  					Disadvantages:

    The worth of the coins fluctuates.
    Not as mainstream as other options (CC, Paypal).

The advantages all follow a similar pattern, in that because there is no central authority, anyone can use it at any time without needing any confirmations or acceptance, plus the fees are pretty low.

Now the disadvantages are varied. Since it is not as mainstream as other payment options, I don't think it is quite where it needs to be, in order to make it your only payment option. But by all means, if you are a huge supporter and want this to grow, you can be a Bitcoin-only service, but I would suggest, for now, using it alongside another service, which accepts credit card.

The other disadvantage is the stability of Bitcoin's value; at the beginning of this year, the worth of one bitcoin was around 12-14$ each, in just a couple of months the coins went up to almost 240$ in April and are currently worth around 110-115$ each. This is in huge contrast to traditional currencies, for your money to have a 2000% increase in worth and then a 50% decrease, all within a few months seems like it should be a red flag.

	  				</p>


	  			</div>
	  			</fieldset><br>

	  			<fieldset style="background: #669966 ; padding: 12px;">
	<div>
	<legend style="background:#99cc99 ; ">***What can Estock Offer Me***</legend>
	<p>
		Disadvantages: The worth of the coins fluctuates. Not as mainstream as other options (CC, Paypal). The advantages all follow a similar pattern, in that because there is no central authority, anyone can use it at any time without needing any confirmations or acceptance, plus the fees are pretty low. Now the disadvantages are varied. Since it is not as mainstream as other payment options, I don't think it is quite where it needs to be, in order to make it your only payment option. But by all means, if you are a huge supporter and want this to grow, you can be a Bitcoin-only service, but I would suggest, for now, using it alongside another service, which accepts credit card. The other disadvantage is the stability of Bitcoin's value; at the beginning of this year, the worth of one bitcoin was around 12-14$ each, in just a couple of months the coins went up to almost 240$ in April and are currently worth around 110-115$ each. This is in huge contrast to traditional currencies, for your money to have a 2000% increase in worth and then a 50% decrease, all within a few months seems like it should be a red flag. 

	</p>
	
	</div>
</fieldset>
		

        -->
        </div>
   </body>

  <?php 
  include("footer.php");
   ?>
	
	  

</html>

<!--<form method="POST" action="index.php" enctype="multipart/form-data">The enctype is needed to upload files or images-->
<!--<label>First Name:</label>  Label tag is new in html5-->