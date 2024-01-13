<?php
include_once 'adminheader.php';
require_once("connection.php");
$query = "SELECT * from blood_event";
$result = mysqli_query($conn,$query);

$querycert = "SELECT * from certificate";
$resultcert = mysqli_query($conn,$querycert);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>New Blood Donation Event</title>	
	<link rel="icon" href="../img/blood.png" type="image/png" sizes="20x20">
  <link rel="stylesheet" href="styleadmin.css">
 
</head>
<body>


<div class="row">
			<div class="col-m-auto">
				<div class="card mt-9">
						 <table id="datatableid" class="table table-bordered1"> 
							<tr style="background-color:#003d99" class="text-white text-center py-3">
								<td> ID </td>
								<td> Date </td>
								<td> Start Time </td>
								<td> End Time </td>
								<td> Venue </td>
								<td> Additional Info </td>								
								<td> Action </td>													
							</tr>

							<?php

							$rowcert=mysqli_fetch_assoc($resultcert);
							$IDcert = $rowcert['id'];

							echo '<br>';
							echo '<center><p><b>Blood Donation Event</b></p></center>';
              echo '<br>';
							echo '<center><p><i>Click here to add new Blood Donation Event &nbsp;&nbsp;&nbsp;</i><a href="new_event.php" class="btn btn-primary btn-sm" style="width:80px; padding: 8px;">+ Add</a><i>&nbsp;&nbsp;&nbsp;Click here to update certificate keyword &nbsp;&nbsp;&nbsp;</i><a href="edit_cert.php?GetID=<?php echo $IDcert ?>" class="btn btn-primary btn-sm" style="width:80px; padding: 8px;" >Edit</a></p></center>';
								$count = 0;
								while($row=mysqli_fetch_assoc($result))
								{						
									$count++;			
									$ID = $row['event_id']; //$ID is local variable, while id is column name in database
									$EventDate = $row['Event_Date'];
									$TimeStart = $row['Time_Start'];
									$TimeEnd = $row['Time_End'];
									$Venue = $row['Venue'];
									$AddNote = $row['Add_Note'];									
							?>
									<tr>
										<td><?php echo $count ?></td>
										<td><?php echo $EventDate ?></td>
										<td><?php echo $TimeStart ?></td>
										<td><?php echo $TimeEnd ?></td>
										<td><?php echo $Venue ?></td>
										<td><?php echo $AddNote ?></td>										
										<td><center><a href="edit_event.php?GetID=<?php echo $ID ?>" class="btn btn-primary" style="width:80px; padding: 8px;"">Edit</a>		
										<a href="delete_event.php?Delevent=<?php echo $ID ?>" class="btn btn-danger" style="width:80px; padding: 8px;">Delete</a>
										<a href="blood_d_attend.php?GetIDevent=<?php echo $ID ?>" class="btn btn-secondary" style="width:80px; padding: 8px;">Blood Donors</a>			
										</td></center>									
		
									</tr>	
							<?php
								}
							?>
						</table>			
				</div>				
			</div>			
		</div>		
	</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php
include_once 'footer.php';
?>
