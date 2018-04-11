<?php
//create_cat.php
include 'connect.php';
include 'header.php';
         
echo '<tr>';
    echo '<td class="leftpart">';
        echo '<h3><a href="category.php?id=">Category name</a></h3> Category description goes here';
    echo '</td>';
    echo '<td class="rightpart">';                
            echo '<a href="topic.php?id=">Topic subject</a> at 10-10';
    echo '</td>';
echo '</tr>';
include 'footer.php';
?>
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
  <a href="index.php" class="active">Home</a>
  <?php if(isset($_SESSION['email'])){echo '<a href="portfolio.php" >Portfolio</a>'; } ?>
  <a href="market.php">Market</a>
  <a href="forum.php" >Forum</a>
  <a href="contact.php">Contact Us</a>
  <a href="about.php">About Us</a>
  <?php if(!isset($_SESSION['email'])){echo '<a href="register.php" >Register</a>'; } ?>
  <?php if(!isset($_SESSION['email'])){	echo '<a href="login.php" >Login</a>'; } ?>
  <?php if(isset($_SESSION['email'])){echo '<a href="Logout.php">Logout </a>';	} ?>

  <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
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