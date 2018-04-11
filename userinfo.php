<?php 
include("connect.php");

 $user = $_GET['id'];
 
	$sql = "SELECT id, firstName, address, phone, id, lastName, Wallet, balance FROM users WHERE email = '$user' ";
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
		$id = $row['id'];
		$phone = $row['phone'];

		 $fullName = $row['lastName']."   ".$row['firstName'];
		
	}
		
		} else {
		echo "0 results" ;
	}
	$con->close();
	?>


<!DOCTYPE html>
<html>
<head>
	<title>Finnacle | UserInfo</title>
	<link rel="icon" type="image/jpg" href="images/aico.jpg">
</head>
<body id="body">
<div id="wrapper">
	<?php include("header2.php"); ?>




<div id="userId" style="display: block; background: rgb(1,100,100);  border-radius: ; font-size: 18px;  text-align: center; padding: 6px;" >

	<span style="color: #00BFFF"><?php echo "View More About"; ?></span>

	<span ><?php echo "::"; ?></span>

	<span style="color: #ff3300;"><?php  echo $fullName; ?></span>
</div><br>



	<p style="display: initial; padding: 8px; justify-content: center;">

		<!--profile picture-->
			<img style=" padding: 40px; background: #c0c0c0; border-radius: 8px; border:4px solid grey; margin-left: 8px; align-content: left; top: 0px;"   src="images/me.jpg" alt="profile picture" >

		<!-- uploads/<?php echo $id; ?>
 -->
		<!--container div for user's info-->
		<div style="display: inline-table; background: #c0c0c0; top: 0px;">
			
		

		<div style="padding: 4px; font-size: 18px; background: #c0c0c0; border:2px solid grey;  border-radius: 4px; color: #ff0066;"><?php 
		echo "Address :"; echo $add; ?> </div>

		<div style="padding: 4px; background: #c0c0c0; font-size: 18px; border:2px solid grey;  border-radius: 4px; color: #ff0066; "><?php 
		echo "E-mail :"; echo $user; ?> </div>

		<div style="padding: 4px; background: #c0c0c0; font-size: 18px; border:2px solid grey;  border-radius: 4px; color: #ff0066; "><?php 
		echo "Phone No:"; echo $phone; ?><a href="tel:<?php echo $b; ?> "><?php if ($b !== "") {
			echo '<img style="border-radius: 16px ;" src="images/phico2.jpg"> ';
		} ?></a> </div>
		</div>
		<p></p>
		<div style="padding: 4px; font-size: 18px; background: #c0c0c0; border:2px solid grey;  border-radius: 4px; color: #ff0066; ">
			<a  href="chat.php">Chat<img style="border-radius: 18px;" src="images/chico.jpg"></a>
			<?php echo "     |     "; ?>
			<a  href="#">Call<img style="border-radius: 18px;" src="images/phico2.jpg"></a>
				<?php echo "     |     "; ?>
			<a  href="Contact.php">Send E-Mail<img style="border-radius: 18px;" src="images/emico.png"></a>
			<?php echo "     |     "; ?>
			<a  href="buy.php">Buy<img style="border-radius: 18px;" src="images/aico.jpg"></a>
			<?php echo "     |     "; ?>
			<a  href="rate.php">Rate<img style="border-radius: 18px;" src="images/mico.jpg"></a>
		</div>
		
</p><br>

<p>  </p>

<div id="userId" style="display: block; background: rgb(1,100,100);  border-radius: ; font-size: 18px;  text-align: center; padding: 6px;" >
	<span style="color: #00BFFF"><?php echo "Listing"; ?></span>
</div><br>


<div id="userInfo">

	<p style="background: #c0c0c0; padding: 8px; font-size: 22px; color: #009966; border-radius: 6px; border: 4px solid grey; "><?php echo "Name :"; echo $fullName; ?></p><br>
	<p style="background: #c0c0c0; padding: 8px; font-size: 22px; color: #009966; border-radius: 6px; border: 4px solid grey; "><?php echo $add; echo "<br>"; ?></p><br>

	<p style="background: #c0c0c0; padding: 8px; font-size: 22px; color: #009966; border-radius: 6px; border: 4px solid grey; "><?php echo $w; echo "<br>"; ?></p><br>
	<p style="background: #c0c0c0; padding: 8px; font-size: 22px; color: #009966; border-radius: 6px; border: 4px solid grey; "><?php echo $b; echo "<br>"; ?></p><br>
	
	<!--
<?php





		 ?>
	-->

</div>

</div>
</body>
<?php 
include("footer.php");
 ?>
</html>