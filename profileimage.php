<?php 
session_start();
include_once("connect.php");
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>profile image</title>
</head>
<body>

<form action="upload.php" method="POST" enctype="multipart/form-data">
	<input type="file" name="file">
	<button type="submit" name="submit">Upload</button>

</form>
<p>Login as a Registered user</p>
<form action="login.php" method="POST">
	<button type="submit" name="submitlogin">Login</button>

</form>

</form>
<p>Logout</p>
<form action="logout.php" method="POST">
	<button type="submit" name="submitlogout">Logout</button>

</form>
</body>
</html>