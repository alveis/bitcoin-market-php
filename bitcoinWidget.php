<?php
include ("bitcoinWidget-assets.php");
?>

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