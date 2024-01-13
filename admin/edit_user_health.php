<?php
include_once 'adminheader.php';
require_once("connection.php");
    $ID = $_GET['GetID'];
    $query = " SELECT * FROM health_details WHERE usersFK='".$ID."'";
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

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Edit User Health Information Details</title>
  <link rel="icon" href="../img/blood.png" type="image/png" sizes="20x20">

  <style>
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
            max-width: 550px;
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
    </style>
</head>
<body>

<div class="card-body">
              <div class="header">
              <div style="background-color: #003d99"; class="header">
              <h2>Update User Health Details</h2>
              </div>              <br>
                <form action="update_user_health.php?ID=<?php echo $ID ?>" method="post">

                <label>Blood Type:</label>
                    <div class="input-group mb-2">                    
                    <select name="blood" class="list-group-item" id="blood" value="<?php echo $rows['Blood'];?>">
                      <option value="a">A</option>
                      <option value="b">B</option> 
                      <option value="ab">AB</option>
                      <option value="o">O</option>                      
                    </select>
                  </div>   

                    
                <label>Weight</label>
                <input type="text" class="form-control mb-2" placeholder="Full Name" name="weight" value="<?php echo $Weight ?>">

                <label>Have chronic health problem? If yes, fill in here</label>
                <input type="text" class="form-control mb-2" placeholder="Chronic Health Problem" name="chronic" value="<?php echo $Chronic ?>">

                <label>Citizen:</label>
                    <div class="input-group mb-2">                    
                    <select name="citizen" class="list-group-item" id="citizen" value="<?php echo $Citizen ?>">
                      <option value="malaysian">Malaysian</option>
                      <option value="foreigner">Foreigner</option>                      
                    </select>
                  </div>   

                  <label>Have you ever been:</label>
                  <label>1) A drug addict who shared needles</label>
                  <label>2) Engaged in prostitution</label>
                  <label>3) Practiced same -sex</label>
                  <label class="mb-2">4) Swapped sex partners?</label>
                    <div class="input-group mb-2">                    
                    <select name="other" class="list-group-item" id="other" value="<?php echo $Other ?>">
                      <option value="yes">Yes</option>
                      <option value="no">No</option>                      
                    </select>
                  </div>             
                <br>
               <button class="btn btn-primary" name="update">Update</button>

                  </form>
                  </div>                            
             <br>
<?php
include_once 'footer.php';
?>
