<!DOCTYPE html>
<html>
<head>
	<title>password change status</title>
</head>
<body id="body">

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