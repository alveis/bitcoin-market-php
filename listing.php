<?php 
include("connect.php");
include("functions.php");

$error = "";

if (isset($_SESSION['email'])) {
	$em = $_SESSION['email'];
	$error = "you are logged in as "  ;


	
}
else {
 $error = "you are not logged in ";
	}
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>CryptoScape | All List</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="jquery.min.3.2.1.css">
</head>
<body id="body">
	<div id="wrapper">
		<?php 
		include("header2.php");
		 ?>
		 <div style="display: block; text-align: center;">
	<div id="error" style=" <?php  if($error !=""){ ?> display:inline; background: #99cc99; padding: 4px; text-align: center; font-size: 16px; <?php } ?> "><?php echo $error; ?></div>

	<div id="error" style=" <?php  if($error !=""){ ?> display:inline; background: orange; padding: 4px; text-align: center; font-size: 16px; <?php } ?> "><?php echo $em; ?></div>

		</div>






	</div>

</body>
<?php 
include("footer.php");
 ?>
</html>