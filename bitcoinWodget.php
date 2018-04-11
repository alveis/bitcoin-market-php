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
			color: #fefefe;
		}

	</style>
</head>
<body>
<div id="container">
<table>
	<tr>
		<td rowspan="3" width="60%">{price}</td>
		<td>{%change}</td>

	</tr>

	<tr>
		<td>{high}</td>
	</tr>

	<tr>
		<td>{low}</td>
	</tr>
	<tr>
		<td colspan="2" align="right">{time and date}</td>
	</tr>

</table>	

</div>
</body>
</html>