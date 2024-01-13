<?php
include_once 'adminheader.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>New Blood Donation Event</title>	
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
							<h2>Add Blood Donation Event</h2>
							</div>	        
              <br>      
                  <form action="insert_event.php" method="post">

                    <label>Date</label>
                    <input type="date" class="form-control mb-2" placeholder="Weight (kg)" name="edate">

                    <label>Time:</label><br>
                    <label>Start</label>
                    <input type="time" class="form-control mb-2" placeholder="Start Time" name="tstart">

                    <label>End</label>
                    <input type="time" class="form-control mb-2" placeholder="End Time" name="tend">

                    <label>Venue</label>
                    <input type="text" class="form-control mb-2" placeholder="Venue" name="venue">
                    
                    <label>Additional Note</label>             
                    <input type="text" class="form-control mb-2" placeholder="Additional Note" name="note">
                    <br>
                    <button class="btn btn-success" style="width:80px; padding: 15px;" name="submit">Finish</button>
                    <a href="event.php" class="btn btn-secondary"style="width:60px; padding:15px;" "margin: 0 auto">Back</a>
                  </form>
                  </div>             
<br>
<br><br><br>
<?php
include_once 'footer.php';
?>
