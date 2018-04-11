<?php 
include ("connect.php");
$error = "";
 ?>
<?php 
if (isset($_SESSION['email'])) {
?>	

<!DOCTYPE html>
<html>
<head>
	<title>Estock | Withdraw</title>
</head>
<body style="background-color: #ccffcc;">
	<div id="wrapper">
		<?php 
include("header2.php");
		 ?>

<div id="error" style=" <?php  if($error !=""){ ?>  display:block; <?php } ?> "><?php echo $error; ?></div>
<?php 
if(isset($_POST['withdrawamount']) && is_numeric($_POST['withdrawamount']) ) { 


	$error = 'welcome to  Widrawal Dashboard <a href = "profile.php">Cancel Withdrawal ?</a>';	
}else{
$error = 'fill out the amount you want to Withdraw <a href = "Withdraw.php">Fill the form again </a> ';

}
 ?>

<div id="error" style=" <?php  if($error !=""){ ?>  display:block; <?php } ?> "><?php echo $error; ?></div>
	</div>

</body>
<?php 
include("footer.php");
 ?>
</html>


<?php
}else{ 
	$error = "please Login first";
	?>
	

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div id="wrapper">
		<?php 
		include("header2.php");

		 ?>
		<div id="error" style=" <?php  if($error !=""){ ?>  display:block; <?php } ?> "><?php echo $error; ?></div>

<br>
<a style="background: #ADFF2F; font-size: 16px; padding: 4px; " href="index.php">Back to Home</a><br><br>
<a style="background: #EEE685; font-size: 16px; padding: 4px; "  href="login.php">Login</a><br>
	</div>

</div>


</body>
<?php 
include("footer.php");
 ?>
</html>
<?php } ?>