<?php
include_once 'adminheader.php';
require_once("connection.php");
$query = " SELECT * FROM certificate WHERE id=1";
$result = mysqli_query($conn,$query);

while($row=mysqli_fetch_assoc($result))
{      
  $IDcert = $row['id'];
  $Organizer = $row['Organizer'];
  $Password = $row['Password'];
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
	<link rel="icon" href="../img/blood.png" type="image/png" sizes="20x20">

<style>
.row {
  margin: 10px 10px;
}

/* Add padding BETWEEN each column */
.row,
.row > .column {
  padding: 8px;
}

/* Create four equal columns that floats next to each other */
.column {
  float: left;
  width: 25%;
}

/* Clear floats after rows */ 
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Content */
.content {
  background-color: white;
  padding: 25px;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 900px) {
  .column {
    width: 50%;
  }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
  }
}
</style> 
</head>
<body>

		<section class="index-intro">
			<?php
			if (isset($_SESSION["adminuid"]))
			{				
				echo "<br>";
				echo "<center><h3>Hello " .$_SESSION["adminuid"]. "</h3></center>";
			}			
			?>
			<br><br>
<div class="container" style="width: 1100px" "margin: 0 auto">
<div class="card-group">
  <div class="card">
    <img src="image/add.png" class="card-img-top" alt="...">
    <div class="card-body">      
      <center><h4>Add New User Account</h4></center>
      <center><p class="card-text">Click this button to add new user account.</p><br></center>
      <center><a href="signup.php" class="btn btn-primary" >+ Add New User</a></center>    
    </div>
    <div class="card-footer">
      <small class="text-muted"></small>
    </div>
  </div>
  <div class="card">
    <img src="image/information.png" class="card-img-top" alt="...">
    <div class="card-body">     
      <center><h4>Certificate Keyword Details</h4></center>
      <center><p class="card-text">Organizer: <?php echo $Organizer ?>&nbsp;&nbsp; || &nbsp;&nbsp;Password : <?php echo $Password ?></p></center><br><br>
      <center><a href="edit_cert_sec.php" class="btn btn-primary" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Edit&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></center>
    </div>
    <div class="card-footer">
      <small class="text-muted"></small>
    </div>
  </div>
</div>
</div>
<br><br><br><br><br><br>
<?php
include_once 'footer.php';
?>
