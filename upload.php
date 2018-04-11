<?php 
include("connect.php");
include("functions.php");

if(isset($_SESSION['email'])){
	
		$em = $_SESSION['email'];

	$sql = "SELECT id, firstName, address, lastName, Wallet,  balance FROM users WHERE email = '$em' ";
	$result = $con->query($sql);
	if ($result->num_rows > 0 ) {

	// output data of each row
	while($row = $result->fetch_assoc()) {

		$uid = $row[ "id" ];
		$fn = $row[ "firstName" ];
		$ln = $row[ "lastName" ] ;
		$w = $row["Wallet"] ;
		$b = $row["balance"] ;
		$add = $row["address"];
		$id = $row["id"];
	}
		
		} else {
		echo "0 results" ;
	}
	$con->close();
	

$error ="";

if (isset($_POST['submit'])) {
	$file = $_FILES['file'];

	$fileName = $_FILES['file']['name']; 
	$fileTmpName = $_FILES['file']['tmp_name']; 
	$fileSize = $_FILES['file']['size']; 
	$fileError = $_FILES['file']['error']; 
	$fileType = $_FILES['file']['type']; 

	$fileExt = explode('.', $fileName);
	$fileActualExt = strtolower(end($fileExt));

	$allowed = array('jpg', 'jpeg', 'png', 'bmp', 'gif');

	if (in_array($fileActualExt, $allowed)) {
		if ($fileError ===0 ) {
			if ($fileSize < 1000000) {
				$fileNameNew = $id."."."jpg"/*$fileActualExt*/;
				$fileDestination = 'uploads/'.$fileNameNew;
				move_uploaded_file($fileTmpName, $fileDestination);

				$insertQuery = "INSERT INTO users(image) VALUES ('$fileNameNew')";
				
				$error = "upload Succesful";
			}else{
				$error = "file should not be more than 1MB";
			}
		}else{
			$error = "Error Uploading file";
		}
	}else{
		$error  = "Invalid file type";
	}
}}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>upload</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="icon" type="image/png" href="images/aico.jpg">
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