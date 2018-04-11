<?php 
include("connect.php");
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>How It Works</title>
	<link rel="stylesheet" href="css/styles.css"  />
	<link rel="stylesheet" href="css/styles.css"  />
	<link rel="stylesheet" href="css/styles.css"  />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="scripts/bootstrap.min.js" ></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, height=device-height">
	</head>
</head>
<body style="background-color: #ccffcc;">
		<div id="wrapper">

		<?php 
		include("header2.php");
		 ?>
		<div id="error" style=" <?php  if($error !=""){ ?>  display:block; <?php } ?> "><?php echo $error; ?></div>
</div>
</body>

<?php 
include("footer.php");
 ?>

</html>