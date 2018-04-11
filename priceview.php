
<html>
  <head>
    <title>Bitcoin Currency Converter</title>
    <meta content='10' http-equiv='refresh'/> <!-- Reloads Page every 10 seconds -->
  </head>
  <body>
    <div id="wrapper">
<?php 
  
    include("header2.php");
    include("connect.php");
    include("functions.php");

?>





      <form action="converter.php" method="post">

      <h1>Bitcoin Currency Converter</h1>
      <p>
        <label for="amount">Bitcoin Amount</label>
        <input type="text" name="amount" id="amount">
      </p>
      <p>
  <label for="currency">Currency</label>
        <select name="currency" id="currency">
          <option value="USD">USD</option>
          <option value="EUR">EUR</option>
          <option value="CNY">CNY</option>
          <option value="JPY">JPY</option>
          <option value="SGD">SGD</option>
          <option value="HKD">HKD</option>
          <option value="CAD">CAD</option>
          <option value="AUD">AUD</option>
          <option value="NZD">NZD</option>
          <option value="GBP">GBP</option>
          <option value="DKK">DKK</option>
          <option value="SEK">SEK</option>
          <option value="BRL">BRL</option>
          <option value="CHF">CHF</option>
          <option value="RUB">RUB</option>
          <option value="SLL">SLL</option>
        </select>
      </p>
      <p>
        <input type="submit" name="submit" value="Submit">
      </p>
      </form>
</div>
  </body>
  <?php
include("footer.php");
  ?>
</html>