<?php
include_once 'adminheader.php';
require_once("connection.php");
?>
<?php
$query = "SELECT Blood, count(*) as number FROM health_details GROUP BY Blood";
$result = mysqli_query($conn,$query);
?>
<?php
$query2 = "SELECT Faculty, count(*) as number FROM user_details GROUP BY Faculty";
$result2 = mysqli_query($conn, $query2);
?>
<?php
$query3 = "SELECT Gender, count(*) as number FROM user_details GROUP BY Gender";
$result3 = mysqli_query($conn, $query3);
?>
<?php

$query_register = "SELECT * FROM users;";  
$row_register = mysqli_query($conn, $query_register);

$query_not = "SELECT * FROM confirm_attend;";  
$row_not = mysqli_query($conn, $query_not);

$query_yes = "SELECT * FROM blood_donors;";  
$row_yes = mysqli_query($conn, $query_yes);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Blood Donation Data</title>
  <link rel="icon" href="../img/blood.png" type="image/png" sizes="20x20">
	<link rel="stylesheet" href="style.css">
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() 
      {
        var data = google.visualization.arrayToDataTable([
          ['Blood','Number'],
          <?php
          while($row = mysqli_fetch_array($result))
          {
          	echo "['".$row["Blood"]."',".$row["number"]."],";
          }
          ?>
        ]);
        var options = {
          title: 'Percentage of Blood Types in University Student', 
	  is3D:true
        };        

        var data2 = google.visualization.arrayToDataTable([
          ['Faculty','Number'],
          <?php
          while($row = mysqli_fetch_array($result2))
          {
          	echo "['".$row["Faculty"]."',".$row["number"]."],";
          }
          ?>
        ]);
        var options2 = {
          title: 'Percentage of Student Faculty that registered to Blood Donors Management System', 
          is3D:true
        };

        var data3 = google.visualization.arrayToDataTable([
          ['Gender','Number'],
          <?php
          while($row = mysqli_fetch_array($result3))
          {
          	echo "['".$row["Gender"]."',".$row["number"]."],";
          }
          ?>
        ]);
        var options3 = {
          title: 'Percentage of University Student that registered to Blood Donors Management System',
          is3D:true
        };
        
        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
        var chart2 = new google.visualization.PieChart(document.getElementById('piechart2'));
        chart2.draw(data2, options2);
        var chart3 = new google.visualization.PieChart(document.getElementById('piechart3'));
        chart3.draw(data3, options3);
      }
    </script>

</head>
<body>
	
<br><br>
<!-- 
<div class="container">
<div class="card-group">
  <div class="card">
    <img src="../img/register.png" class="card-img-top" alt="...">
    <div class="card-body">
      <?php 
      $rowcount=mysqli_num_rows($row_register);
      ?>
      <h4><span class="badge bg-secondary"><?php echo $rowcount ?></span> Registered Account</h4>
      <p class="card-text">The total number of registered account. </p><br>
      <center><a href="view_user_details.php" class="btn btn-primary" >Click Here</a></center>    
    </div>
    <div class="card-footer">
      <small class="text-muted"></small>
    </div>
  </div>
  <div class="card">
    <img src="../img/come.png" class="card-img-top" alt="...">
    <div class="card-body">
      <?php 
      $rowcount2=mysqli_num_rows($row_not);
      ?>
      <h4><span class="badge bg-secondary"><?php echo $rowcount2 ?></span> Confirm to Attend</h4> 
      <p class="card-text">The total number of student that already confirm their attendance. </p>
      <center><a href="not_official_bd.php" class="btn btn-primary" >Click Here</a></center>
    </div>
    <div class="card-footer">
      <small class="text-muted"></small>
    </div>
  </div>
  <div class="card">
    <img src="../img/ribbon.png" class="card-img-top" alt="...">
    <div class="card-body">
      <?php 
      $rowcount3=mysqli_num_rows($row_yes);
      ?>
      <h4><span class="badge bg-secondary"><?php echo $rowcount3 ?></span> Officially Blood Donors!</h4> 
      <p class="card-text">The total number of student that already done blood donating. </p>
      <center><a href="donors.php" class="btn btn-primary">Click Here</a></center>
    </div>
    <div class="card-footer">
      <small class="text-muted"></small>
    </div>
  </div>
</div>
</div> -->

<br><br>

	<center><div id="piechart" style="width: 1300px; height: 500px;"></div></center><br><br>
	<center><div id="piechart2" style="width: 1300px; height: 500px;"></div></center><br><br>
	<center><div id="piechart3" style="width: 1300px; height: 500px;"></div></center><br><br>
		
<?php
include_once 'footer.php';
?>
</body>
</html>
