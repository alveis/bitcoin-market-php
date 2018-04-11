
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Btc Price</title>
 </head>
 <body>
 	
 		
<div style="background: #c0c0c0; padding: opx;  color: green; font-size: 14px; text-align: center;  ">
	
	<?php 

$url = "https://www.bitstamp.net/api/ticker/";
$fgc = file_get_contents($url);
$json = json_decode($fgc, true);
 
 $price = $json["last"];
 $price = number_format($price, 2);
$high = $json["high"];
 $low = $json["low"];
 $date = date("d-m-y - h:i:sa");
 $open =$json["open"];

 
 echo " currently: 1Btc  =  $ ". $price;  echo "  ::  Timestamp:". $date;

	 ?>

 	</div>
 
 </body>
 </html>