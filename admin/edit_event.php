<?php
include_once 'adminheader.php';
require_once("connection.php");
    $ID = $_GET['GetID'];
    $query = " SELECT * FROM blood_event WHERE event_id='".$ID."'";
    $result = mysqli_query($conn,$query);

    while($row=mysqli_fetch_assoc($result))
    {
      $EventDate = $row['Event_Date'];
      $TimeStart = $row['Time_Start'];
      $TimeEnd = $row['Time_End'];
      $Venue = $row['Venue']; 
      $AddNote = $row['Add_Note'];     
    }
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Edit Blood Donation Event</title>
  <link rel="icon" href="../img/blood.png" type="image/png" sizes="20x20">
  <link rel="stylesheet" href="styleadmin.css">
  <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .card-body {
            margin: 20px;
            padding: 20px;
            border: 1px solid #ddd; /* Add border to the card-body */
            border-radius: 5px;
        }

        .header {
            background-color:#f2f2f2;
            color:  #000000;
            padding: 10px;
            text-align: center;
            border-bottom: 1px solid #ddd; /* Add border to the header */
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            border: 1px solid #ddd; /* Add border to the form */
            padding: 15px;
            border-radius: 5px;
        }

        label {
            display: block;
            margin-top: 10px;
        }

        .input-group {
            margin-bottom: 15px;
        }

        input,
        select {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ccc; /* Add border to the form elements */
            border-radius: 3px;
        }

        .btn {
            padding: 10px 20px;
            text-decoration: none;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-primary {
            background-color: #007bff;
        }

        .btn-secondary {
            background-color: #6c757d;
        }

        #datatableid {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            border: 1px solid #ddd; /* Add border to the table */
        }

        #datatableid th,
        #datatableid td {
            border: 1px solid #ddd; /* Add border to table cells */
            padding: 8px;
            text-align: left;
        }

        #datatableid th {
            background-color: #f5f5f5;
            color: white;
        }

        tr:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>
<body>

<div class="card-body">		
              <div class="header">
              <div style="background-color: #003d99"; class="header">
              <h2>Update Blood Donation Event Details</h2>
              </div>             
              <br>
                <form action="update_event.php?ID=<?php echo $ID ?>" method="post">

                <label>Date</label>
                <input type="text" class="form-control mb-2" placeholder="Full Name" name="edate" value="<?php echo $EventDate ?>">

                <label>Time:</label>
                <label>Start</label>
                <input type="time" class="form-control mb-2" placeholder="IC Number" name="tstart" value="<?php echo $TimeStart ?>">

                <label>End</label>
                <input type="time" class="form-control mb-2" placeholder="IC Number" name="tend" value="<?php echo $TimeEnd ?>">

                <label>Venue</label>
                <input type="text" class="form-control mb-2" placeholder="IC Number" name="venue" value="<?php echo $Venue ?>">

                <label>Additional Note</label>
                <input type="text" class="form-control mb-2" placeholder="IC Number" name="note" value="<?php echo $AddNote ?>">
            
                <br>
               <button class="btn btn-primary" style="width:80px; padding: 10px;"name="update">Update</button>
                  </form>
                  </div>          
             <br><br><br>
<?php
include_once 'footer.php';
?>
