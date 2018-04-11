<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8" />
        <link rel="stylesheet" href=" css/style.css" type="text/css" />
            <link rel="stylesheet" href="css/styles.css"  />
                    <link rel="stylesheet" href="css/styles.css"  />
                    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
                    <script type="text/javascript" src="scripts/bootstrap.min.js" ></script>
                    <meta charset="utf-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1, height=device-height">

    </head>
    <body>
    	<div id="container">
            <div id="wrapper">
              <?php
              include("../header2.php");
              ?>  
            </div>
        	<header>
            	<h1>SHOUT IT</h1>
            </header>
        <div id="shouts">
        	<ul>
            	<li class="shouts"><span>10:14pm </span>me: wadup </li>
                <li class="shouts"><span>10:14pm </span>me: wadup </li>
                <li class="shouts"><span>10:14pm </span>me: wadup </li>
                <li class="shouts"><span>10:14pm </span>me: wadup </li>
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
</html>                          