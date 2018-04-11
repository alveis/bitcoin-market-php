 <?php
      // Display the pricing chart if we're doing a US Dollar conversion
       

      // Use curl to get pricing chart data for the past 60 days
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, "https://blockchain.info/charts/market-price?showDataPoints=true&timespan=60days&show_header=true&daysAverageString=7&scale=0&format=json");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      $chartdata = json_decode(curl_exec($ch), true);
    ?>
    <div id="chart" style="width: 1000px; height: 500px; background-color: #cccc99;"></div>
    <script type="text/javascript">
      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Day', 'Price'],
          <?php
          // Loop through the x-y coordinates Blockchain.info's API provides and add them to a JavaScript array
           foreach($chartdata["values"] as $xy) {
            echo "['" . date("Y/m/d", $xy["x"]) . "'," . $xy["y"] . "],";
          }
          ?>
        ]);

        new google.visualization.LineChart(document.getElementById("chart")).draw(data, {curveType: "function",
          width: 1000, height: 500,
          vAxis: {maxValue: 800}}
        );
     }
     drawChart();
   </script>
   