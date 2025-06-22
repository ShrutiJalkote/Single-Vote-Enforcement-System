<!DOCTYPE HTML>
<html>
<head>
  <style>
    body {
      margin: 0;
      padding: 0;
    }

    #navbar {
      margin: 0%;
      padding: 0%;
      width: 100%;
      height: 12%;
      background-color: #24C2B7;
      position: fixed !important;
      top: 0; 
      left:0;
      right: 0;
    }

    #chartContainer {
      height: 300px; /* Adjust height as needed */
      width: 80%;
      margin: 0 auto;
      padding-top:120px;
    }
    .img {
      width: 80px;
      height: 30px;
      text-align:left;
      padding-left: 30px;
    }
  </style>
  <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
</head>
<body>
  <div id="navbar">
    <div class="img"><img src="mylogo1.png" height="70px" width="150px"></div>
  </div>
  <div id="chartContainer"></div>
  <script>
    window.onload = function () {
      var chart = new CanvasJS.Chart("chartContainer", {
        animationEnabled: true,
        exportEnabled: true,
        theme: "light1",
        title: {
          text: "Current Voting Status"
        },
        axisY: {
          includeZero: true
        },
        data: [{
          type: "column",
          indexLabelFontColor: "#5A5757",
          indexLabelFontSize: 16,
          indexLabelPlacement: "outside",
          dataPoints: [
            <?php
              // Database connection
              $servername = "localhost";
              $username = "root";
              $password = "";
              $dbname = "voter";

              $conn = new mysqli($servername, $username, $password, $dbname);

              // Check connection
              if ($conn->connect_error) {
                  die("Connection failed: " . $conn->connect_error);
              }

              // Fetch party names and votes
              $sql = "SELECT c_name, c_vote FROM can_select";
              $result = $conn->query($sql);
              while ($row = $result->fetch_assoc()) {
                  echo "{ label: '" . $row['c_name'] . "', y: " . $row['c_vote'] . " },";
              }

              // Close connection
              $conn->close();
            ?>
          ]
        }]
      });
      chart.render();
    }
  </script>
</body>
</html>
