<?php 
$url = "https://www.bitstamp.net/api/ticker/";
$fgc = file_get_contents($url);
$json = json_decode($fgc, true);
 
 $price = $json["last"];
 $price = number_format($price, 2);
$high = $json["high"];
 $low = $json["low"];
 $date = date("m-d-y - h:i:sa");
 $open =$json["open"];

 if ($open < $price) { //if price increased
 	$indicator = "+" ;
 	$change = $price - $open ;
 	$percent = $change / $open ; 
 	$percentChange =$percent * 100 ;
 	$indicator = "+" ;
 	$percentChange = $indicator .number_format($percent, 2);

 	$color = "green";

 }

  if ($open > $price) { //if price decreased
 	$indicator2 = "-" ;
 	$change2 = $open - $price  ;
 	$percent2 = $change2 / $open ;
 	$percent2 =$percent2 * 100 ;
 	$indicator2 = "-" ;
 	$percentChange2 = $indicator2 .number_format($percent2, 2);
 	$color = "red";

 }
?>
<?php if (1==1) {?>
	

<!DOCTYPE html>
<html>
<head>
	<title>Bitcoin widget</title>
	<style>
		#container{
			width: 270px;
			height: 90px;
			border: 1px solid #000; 
			overflow: hidden;
			border-radius: 3px; 
			background-color: #2E8B57;
			color: #F4A460;
		}
		#lastPrice{
			font-size: 30px; 
		}
		#timeDate{ 
			font-size: 9px;
		}

	</style>  
	<script src="scripts/jquery-3.2.1.slim.min"></script>
</head>
<body>
<div id="container">
	<table>
	<tr>
		 <td rowspan="3" width="60%" id="lastPrice"><?php   echo $price ?> </td>
		<td align="right"  >  </td>

	</tr>

	<tr>
		<td align="right">$ <?php echo $high; ?></td>
	</tr>
 
	<tr>
		<td align="right"> $ <?php $low; ?> </td>
	</tr>
	<tr>
		<td colspan="2" align="right" id="timeDate"> <?php  $date ?>; </td>
	</tr>

</table>	

</div>

<script>
	$('document').ready(function({
		refreshData();
	}));
	function refreshData(){
$('#container').load("bitcoinWidget-assets.php", function(){
setTimeout(refreshData, 15000);
});

	};
	
</script>
</body>
</html>
<?php }?>