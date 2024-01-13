<?php
include_once 'adminheader.php';
require_once("connection.php");

$ID = $_GET['GetID'];
$query = " SELECT * FROM user_details WHERE usersFK='".$ID."'";
$result = mysqli_query($conn,$query);

while($row=mysqli_fetch_assoc($result))
{
  $IDu = $row['id'];
  $Name = $row['Full_Name'];
  $IcNumber = $row['Ic'];
  $MatricNumber = $row['Matric'];
  $Faculty = $row['Faculty'];
  $Course = $row['Course'];
  $Address = $row['Address'];
  $Telephone = $row['Telephone'];
  $Gender = $row['Gender'];
  $Birthday = $row['Birthday'];
  $Age = $row['Age'];   
} 
?>  
<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit User Information Details</title>
  <link rel="icon" href="iamge/blood.png" type="image/png" sizes="20x20">
  <link rel="stylesheet" href="style.css">
  <style>
  .container {
    margin: center; /* Center the container horizontally */
    max-width: 800px; /* Set a maximum width for the container */
    padding: 20px; /* Add some padding for better spacing */
    background-color: #ffffff; /* Set a background color for the container */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Add a subtle box shadow for depth */
}

.row {
    display: flex;
    justify-content: center; /* Center the child elements horizontally */
}

.card {
    text-align: center;
    width: 100%;
    max-width: 600px; /* Set a maximum width for the card */
    margin: 10px;
    padding: 20px;
    background-color: #f8f9fa; /* Set a background color for the card */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Add a slight box shadow for depth */
}

</style>

</style>
</head>

<body>
   
</head>
<body>
    <br>
    <center>
    <div class="container">
        <div class="row">
            <div class="col-m-auto">
                <div class="card mt-5">
                    <br>
                    <center><p>Personal Details</p></center>
      <table class="table table-bordered1" style="width: 500px" "margin: 0 auto">
            
  <?php
    
      echo '<tr style="background-color: #0066cc" class="text-black">';
      echo '<td>';
      echo '<b>Full Name :</b>';
      echo '</td>';
      echo '<td>';
      echo $Name;
      echo '</td>';
      echo '</tr>';

      echo '<tr style="background-color: #ccddff" class="text-white">';
      echo '<td>';
      echo '<b>IC Number :</b>';
      echo '</td>';
      echo '<td>';
      echo $IcNumber;
      echo '</td>';                                     
      echo '</tr>';

      echo '<tr style="background-color: #ccddff" class="text-white">';
      echo '<td>';
      echo '<b>Matric Number :</b>';
      echo '</td>';
      echo '<td>';
      echo $MatricNumber;
      echo '</td>';                                     
      echo '</tr>';

      echo '<tr style="background-color: #ccddff" class="text-white">';
      echo '<td>';
      echo '<b>Faculty :</b>';
      echo '</td>';
      echo '<td>';
      echo $Faculty;
      echo '</td>';
      echo '</tr>';

      echo '<tr style="background-color: #ccddff" class="text-white">';
      echo '<td>';
      echo '<b>Course :</b>';
      echo '</td>';
      echo '<td>';
      echo $Course;
      echo '</td>';                                     
      echo '</tr>';

      echo '<tr style="background-color: #ccddff" class="text-white">';
      echo '<td>';
      echo '<b>Home Address :</b>';
      echo '</td>';
      echo '<td>';
      echo $Address;
      echo '</td>';                                     
      echo '</tr>';

      echo '<tr style="background-color: #ccddff" class="text-white">';
      echo '<td>';
      echo '<b>Telephone Number :</b>';
      echo '</td>';
      echo '<td>';
      echo $Telephone;
      echo '</td>';                                     
      echo '</tr>';

      echo '<tr style="background-color: #ccddff" class="text-white">';
      echo '<td>';
      echo '<b>Gender :</b>';
      echo '</td>';
      echo '<td>';
      echo $Gender;
      echo '</td>';
      echo '</tr>';

      echo '<tr style="background-color: #ccddff" class="text-white">';
      echo '<td>';
      echo '<b>Birthday :</b>';
      echo '</td>';
      echo '<td>';
      echo $Birthday;
      echo '</td>';
      echo '</tr>';

      echo '<tr style="background-color: #ccddff" class="text-white">';
      echo '<td>';
      echo '<b>Age :</b>';
      echo '</td>';
      echo '<td>';
      echo $Age;
      echo '</td>';
      echo '</tr>';                
  ?>            
</table>
<br><br>

<td><center><a href="edit_user_personal.php?GetIDu=<?php echo $IDu ?>" class="btn btn-primary" style="width: 650px; padding:15px;"  "margin: 0 auto">Edit</a>
<a href="event.php" class="btn btn-secondary"style="width:650px; padding:15px;" "margin: 0 auto">Back</a><br><br>
</div>  
</div>
</div>
</div>                  
<br><br>
<?php
require_once("connection.php");

$ID = $_GET['GetID'];
$query = "SELECT h.Blood, h.Weight, h.Chronic_Health, h.Citizen, h.Others FROM health_details h JOIN user_details u ON h.usersFK = u.usersFK WHERE h.usersFK ='".$ID."'";
$result = mysqli_query($conn,$query);

while($row=mysqli_fetch_assoc($result))
{  
  $Blood = $row['Blood'];
  $Weight = $row['Weight'];
  $Chronic = $row['Chronic_Health'];
  $Citizen = $row['Citizen'];
  $Other = $row['Others'];   
}

?>
    <div class="container">
    <div class="row">
    <div class="col-m-auto">
    <div class="card mt-2">
    <br><center><p>Health Details</p></center>
    
      <center><table class="table table-bordered" style="width: 500px" "margin: center">
            
  <?php

    echo '<tr style="background-color: #ccddff" class="text-white">';
    echo '<td>';
    echo '<b>Blood Type :</b>';
    echo '</td>';
    echo '<td>';
    echo $Blood;
    echo '</td>';
    echo '</tr>';

    echo '<tr style="background-color: #ccddff" class="text-white">';
    echo '<td>';
    echo '<b>Weight (kg) :</b>';
    echo '</td>';
    echo '<td>';
    echo $Weight;
    echo '</td>';                   
    echo '</tr>';

    echo '<tr style="background-color: #ccddff" class="text-white">';
    echo '<td>';
    echo '<b>Chronic Health :</b>';
    echo '</td>';
    echo '<td>';                
    echo $Chronic;
    echo '</td>';                   
    echo '</tr>';

    echo '<tr style="background-color: #ccddff" class="text-white">';
    echo '<td>';
    echo '<b>Citizen :</b>';
    echo '</td>';
    echo '<td>';
    echo $Citizen;
    echo '</td>';
    echo '</tr>';

    echo '<tr style="background-color: #ccddff" class="text-white">';
    echo '<td>';
    echo '<b>Others :</b>';
    echo '</td>';
    echo '<td>';
    echo $Other;
    echo '</td>';                   
    echo '</tr>';
        
  ?>            
</table>
<br><br></center> 
<td><center><a href="edit_user_health.php?GetID=<?php echo $ID ?>" class="btn btn-primary" style="width: 650px; padding:15px; "margin: 0 auto">Edit</a></td>
</div>  
</div>
</div>
</div>

  <br><br>

<?php
include_once 'footer.php';
?>
