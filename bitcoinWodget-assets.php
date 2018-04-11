<?php 
$url = "https://www.bitstamp.net/api/ticker/";
$fgc = file_get_contents($url);
$json = json_decode($fgc, true);
 
 $price = $json["last"];
 $price = number_format($price, 2);
 $price = $json["high"];
 $price = $json["low"];
 $date = date("m-d-y - h:i:sa");
 $open =$json["open"];

 if ($open < $price) { //if price increased
 	$indicator = "+" ;
 	$change = $price - $open ;
 	$percent = $change / $open ; 
 	$percent =$percent * 100 ;
 	$percentChange = $indicatoir .number_format($percent, 2);
 	$color = "green";

 }

  if ($open > $price) { //if price decreased
 	$indicator = "-" ;
 	$change = $open - $price  ;
 	$percent = $change / $open ;
 	$percent =$percent * 100 ;
 	$percentChange = $indicatoir .number_format($percent, 2);
 	$color = "red";

 }

 ?>
