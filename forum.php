<?php
include("connect.php");
include("functions.php");
?>

<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8" />
                    <title>CryptoScape | Forum</title>
                    <link rel="stylesheet" href="css/styles.css"  />
                    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
                    <link rel="icon" type="image/jpg" href="images/aico.jpg">
                    <script type="text/javascript" src="scripts/bootstrap.min.js" ></script>
                    <meta charset="utf-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1, height=device-height">

    </head>
    <body id="body">

            <div id="wrapper">
              <?php
              include("header2.php");
              ?>  
              <h1 style="padding: 4px; margin: 2px; margin-left: 6px; color: #32CD32; font-weight: 12pt; align-self: center; text-align: center; background: #336699;  border-radius: 6px;">CryptoScape Forum</h1>
           
        	<header>
            	<h1>SHOUT IT</h1>
            </header>
        <div id="shouts">
        	<ul>
            	<li class="shouts"><span>10:14pm </span>me: wadup </li>
                
            </ul>
		</div>
        <div id="input">
        <form method="post" action="process.php">
        	<input type="text" name="user" placeholder="Enter your Name"/>
            <input type="text" name="message" placeholder="Enter a Message"/>
            <br/>
            <input class="shout btn" type="submit" name="submit" value="shout it out"/>
        </form>
        
        </div>    
    </div>
    </body>
    <?php
include("footer.php");
    ?>
</html>                          