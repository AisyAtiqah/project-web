<?php
include_once 'adminheader.php';
require_once("connection.php");
$query = "SELECT * FROM user_details u JOIN health_details h ON u.usersFK = h.usersFK JOIN users us ON us.usersId = u.usersFK";
$result = mysqli_query($conn,$query);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User Information</title>
	<link rel="icon" href="../img/blood.png" type="image/png" sizes="20x20">
	<link rel="stylesheet" href="styleadmin.css">
	<link rel="stylesheet" href="style.css">

</head>
<body>
		
		<!-- <div class="container"> -->
		<div class="row">
			<div class="col-m-auto">
				<div class="card mt-9">
						 <table id="datatableid" class="table table-bordered1"> 
							<tr style="background-color:#003d99" class="text-white text-center py-3">
								<td> ID </td>
								<td> Username </td>
								<td> Full Name </td>								
								<td> Matric Number </td>
								<td> Faculty </td>								
								<td> Gender </td>
								<td> Blood Type </td>								
								<td> Action </td>													
							</tr>

							<?php
							echo '<br>';
							echo '<center><p>User Personal Details</p></center>';
								$count = 0;
								while($row=mysqli_fetch_assoc($result))
								{
									$count++;
									$ID = $row['usersFK']; //$ID is local variable, while id is column name in database
									$username = $row["usersUid"];
									$Name = $row['Full_Name'];									
									$MatricNumber = $row['Matric'];
									$Faculty = $row['Faculty'];									
									$Gender = $row['Gender'];
									$Blood = $row['Blood'];									
							?>
									<tr>
										<td><?php echo $count ?></td>
										<td><?php echo $username ?></td>
										<td><?php echo $Name ?></td>										
										<td><?php echo $MatricNumber ?></td>
										<td><?php echo $Faculty ?></td>										
										<td><?php echo $Gender ?></td>
										<td><?php echo $Blood ?></td>										
										<td>
    <center>
        <a href="edit_user_part.php?GetID=<?php echo $ID ?>" class="btn btn-primary" style="width:80px; padding: 8px;">Edit</a> 
        <a href="delete_user_acc.php?Delacc=<?php echo $ID ?>" class="btn btn-danger" style="width:80px; padding: 8px;">Delete</a>
    </center>
</td>							
									</tr>	
							<?php
								}
							?>
						</table>			
				</div>				
			</div>			
		</div>		
	</div>
<br><br><br><br>

<?php
include_once 'footer.php';
?>

