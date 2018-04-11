 <?php
 include('connect.php');
  
  $date = date("d/m/y");

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function

    $query = "SELECT * FROM `users` WHERE CONCAT(`id`, `firstName`, `lastName`, `address`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else if(isset($_POST['Filter']))
{
    $Filter = $_POST['Filter'];
    // search in all table columns
    // using concat mysql function

    $query = "SELECT * FROM `users` WHERE balance <= '$Filter' ";
    $search_result = filterTable($query);
    
}
 else 
 {
    $query = "SELECT * FROM `users`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
 function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "estock");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}


?>


 <!DOCTYPE html>
<html>
    <head>
        <title>Finnacle | Market</title>
        <link rel="stylesheet" type="text/css" href="css/styles.css">
        <link rel="icon" type="image/jpg" href="images/aico.jpg">
        <style>
        
        </style>
    </head>
    <body id="body">
        <div id="wrapper">
            <?php 
include("header2.php");
             ?>
            
  <div id="marketItems">

        <div id="marketForms">
        <form  action="" method="post">
            <label>Apply Filters</label>
            <input type="text" name="valueToSearch" placeholder="Search for a Name">
            <input type="submit" name="search" value="Search"><span> ::: </span>
        
            <input type="text" name="Filter" placeholder="enter amount range">
            <input type="submit" name="Filter" value="Filter By Amount"><br><br>
         </form>
         </div>

            <table id="marketTable">
                <tr>
                    <th id="th">Avatar</th>
                    <th id="th"> Name</th>
                    <th id="th">Status</th>
                    <th id="th">Amount</th>
                    <th id="th">Date</th>
                    <th id="th">Address</th>
                    <th id="th">E-mail</th>
                    <th id="th">Phone No</th>
                    <th id="th">Reputation</th>
                    <th id="th">About</th>
                </tr>

      <!-- populate table from mysql database 
      <?php echo $row['id'];?>    <?php 
                        $usermail = $row['email'] ;
                         ?>
                     -->
                <?php while($row = mysqli_fetch_array($search_result)):
                $fullName = $row['lastName']."   ".$row['firstName'];
                $usermail = $row['email'] ;

                ?>

       <!-- <td><a href="userinfo.php?$usermail"><?php echo $fullName ?></a></td>-->
                <tr>
                    <td><a href="#"><img src="images/pico-big.jpg"></a></td>
                   <td> 
                    <form action="userinfo.php" method="GET" >
                     <button  class="Buttons" name="id" value="<?php echo $row['email']; ?>"><?php echo $fullName ?></button>    

                    </form>
                    </td>

                    <td id="td"><?php echo $row['Status'];?></td>
                    <td id="td"><?php echo $row['balance'];?></td>
                    <td id="td"><?php echo $date;?></td>
                    <td id="td"><?php echo $row['address'];?></td>
                    <td id="td"><?php echo $row['email'];?></td>
                    <td id="td"><?php echo $row['phone'];?></td>
                    <td id="td"><?php echo "5star";?></td>
                    <td id="td"><a href="#"><?php echo "View"; ?></a></td>

                </tr>
                <?php endwhile;?>
            </table>
       
       </div>
       </div> 
    </body>
     <?php 
include("footer.php")
             ?>
            
</html>