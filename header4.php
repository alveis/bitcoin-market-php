

<!DOCTYPE html>
<html>
<head>
	<title>Withdraw</title>
	<link rel="stylesheet" href="css/styles.css" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="scripts/bootstrap.js" ></script>
	<script type="text/javascript" src="scripts/npm.js" ></script>
	<script type="text/javascript" src="scripts/jquery-3.2.1.slim.min.js"></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, height=device-height">
	</head>
</head>
<body>
	<style>
	 /* Add a black background color to the top navigation */
.topnav {
    background-color: #c0c0c0;
    overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
    background-color: #ddd;
    color: black;
}

/* Add an active class to highlight the current page */
.active {
    background-color: #00008b;
    color: white;
}

/* Hide the link that should open and close the topnav on small screens */
.topnav .icon {
    display: none;
} 
 /* When the screen is less than 600 pixels wide, hide all links, except for the first one ("Home"). Show the link that contains should open and close the topnav (.icon) */
@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {
  	display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
}

/* The "responsive" class is added to the topnav with JavaScript when the user clicks on the icon. This class makes the topnav look good on small screens (display the links vertically instead of horizontally) */
@media screen and (max-width: 600px) {
  .topnav.responsive {
  	position: relative;
  }
  .topnav.responsive a.icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
} 
</style>

		<div class="topnav" id="myTopnav">
		<nav class="navbar navbar-default">
				<div class="container-fluid">	
					 
						<div class="collapse navbar-collapse" id="myNavbar">
							<ul class="nav navbar-nav">
								<li><a href="index.php" class="active">Home</a> </li>
								<li>|</li>
								<li><?php if(isset($_SESSION['email'])){
									echo '<a href="profile.php" >My Profile</a>'; echo '<li>|</li>'; } ?></ </li>
								
								<li><?php if(isset($_SESSION['email'])){
									echo '<a href="portfolio.php" >Portfolio</a>'; echo '<li>|</li>'; } ?></ </li>
								
								<li><a href="market.php">Market</a> </li>
								<li>|</li>
								<li><a href="forum.php" >Forum</a> </li>
								<li>|</li>
							
								<li><a href="contact.php">Contact Us</a> </li>
								<li>|</li>
								<li><a href="about.php">About Us</a> </li>
								<li>|</li>
								<li><?php if(!isset($_SESSION['email'])){
									echo '<a href="register.php" >Register</a>'; echo '<li>|</li>';} ?></ </li>
								
								<li><?php if(!isset($_SESSION['email'])){
									echo '<a href="login.php" >Login</a>'; } ?></ </li>
								
								<li><?php if(isset($_SESSION['email'])){
									echo '<a href="Logout.php">Logout </a>';	} ?></ </li>
							
							    <button type="button" onclick="myFunction()" >
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								</button>
							</ul>
						</div>

				</div>
			</nav>
		</div>
		
		
<script>
	/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
} 
</script>
</body>

</html>
