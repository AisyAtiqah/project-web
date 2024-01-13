<?php
include_once 'adminheader.php';
require_once("connection.php");
$ID = $_GET['GetIDevent'];
$querybd = "SELECT u.Full_Name, u.Ic, u.Faculty, u.Gender, u.Age, c.id_bd, c.eventFK, h.Blood, h.Weight, h.Citizen FROM confirm_attend c JOIN user_details u ON c.usersFK = u.usersFK JOIN health_details h ON c.usersFK = h.usersFK WHERE c.eventFK='$ID' AND u.usersFK = h.usersFK";	
$rowbd = mysqli_query($conn, $querybd);	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="img/blood.png" type="image/png" sizes="20x20">
	<title>Confirmation Attendance</title>
	<link rel="stylesheet" href="style.css">

<!-- <style>
		body {
			font-family: bahnschrift, sans-serif;
			background-color: #f0f0f0;
			margin: 0;
			padding: 0;
		}

		.header {
			background-color: #003d99;
			color: white;
			text-align: center;
			padding: 10px;
		}

		 /* Top Navigation */
    nav {
      background-color:#003399;
      overflow: hidden;
    }

    nav a {
      float: left;
      display: block;
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-size: 16px;
    }

    nav a:hover {
      background-color: white;
      color: black;
    }

    nav a.icon {
      display: none;
    }

    @media screen and (max-width: 600px) {
      nav a:not(:first-child) {
        display: none;
      }

      nav a.icon {
        float: right;
        display: block;
      }

      nav.responsive {
        position: relative;
      }

      nav.responsive a.icon {
        position: absolute;
        right: 0;
        top: 0;
      }

      nav.responsive a {
        float: none;
        display: block;
        text-align: left;
      }
    } -->
</style>
</head>
<body>


	<br><br><center><a href="event.php" class="btn btn-secondary">Back</a></center>
<br>
        <div class="container">
		<div class="row">
		<div class="col-m-auto">
		<div class="card mt-2">
		<br><center><p>This is the list of student that already confirm to attend the blood donation event. </p></center>
		
	    <center><table class="table table-bordered" style="width: 1200px" "margin: 0 auto">
	<tr style="background-color:#003d99" class="text-white text-center py-3">
		<td> No. </td>
		<td> Full Name </td>
		<td> IC Number </td>		
		<td> Faculty </td>		
		<td> Gender </td>		
		<td> Age </td>
		<td> Blood Type </td>
		<td> Weight (kg) </td>
		<td> Citizen </td>													
	</tr>

	<?php
    
    $count = 0;
	while($row=mysqli_fetch_assoc($rowbd))
	{					
	        $count++;		
			$IDbd = $row['id_bd']; //$ID is local variable, while id is column name in database
			$Name = $row['Full_Name'];
			$IcNumber = $row['Ic'];			
			$Faculty = $row['Faculty'];			
			$Gender = $row['Gender'];			
			$Age = $row['Age'];
			$Blood = $row['Blood'];
			$Weight = $row['Weight'];			
			$Citizen = $row['Citizen'];				
		?>
		<tr>			
			<td><?php echo $count ?></td>
			<td><?php echo $Name ?></td>												
			<td><?php echo $IcNumber ?></td>
			<td><?php echo $Faculty ?></td>
			<td><?php echo $Gender ?></td>
			<td><?php echo $Age ?></td>
			<td><?php echo $Blood ?></td>
			<td><?php echo $Weight ?></td>
			<td><?php echo $Citizen ?></td>											
		</tr>	
	<?php													     	    
	}
	?>						
	</td>
	</tr>
	</table>		
	</center>
	</div>
	</div>
	</div>
</div>

