
<!DOCTYPE html>
<html>
<head>
	<title>img upload</title>
	<link rel="icon" type="image/jpg" href="images/aico.jpg">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body id="body">
<div id="wrapper">
	<?php 
include("header2.php");
	 ?>
	<div id="error" style=" <?php  if($error !=""){ ?>  display:block; <?php } ?> "><?php echo $error; ?></div>

<form action="upload.php" method="POST" enctype="multipart/form-data">
	<input type="file" name="file">

	<button type="submit" name="submit">Upload</button>
</form>
</div>
</body>
<?php 
include("footer.php");
?>
</html>