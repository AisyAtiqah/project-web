<?php
include_once 'adminheader.php';
require_once("connection.php");
    $IDu = $_GET['GetIDu'];
    $query = " SELECT * FROM user_details WHERE id='".$IDu."'";
    $result = mysqli_query($conn,$query);

    while($row=mysqli_fetch_assoc($result))
    {
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
	<title>Edit User Personal Information Details</title>
  <link rel="icon" href="../img/blood.png" type="image/png" sizes="20x20">

</head>
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
<body>

	            <div class="card-body">
              <div class="header">
              <div style="background-color: #003d99"; class="header">
              <h2>Update User Personal Details</h2>
              </div>
              <br>
                <form action="update_user_personal.php?IDu=<?php echo $IDu ?>" method="post">
                <label>Full Name</label>
                <input type="text" class="form-control mb-2" placeholder="Full Name" name="name" value="<?php echo $Name ?>">

                <label>IC Number</label>
                <input type="text" class="form-control mb-2" placeholder="IC Number" name="ic" value="<?php echo $IcNumber ?>">

                <label>Matric Number</label>
                <input type="text" class="form-control mb-2" placeholder="Matric Number" name="matric" value="<?php echo $MatricNumber ?>">

                <label>Faculty:</label>
                    <div class="input-group mb-2">                    
                    <select name="faculty" class="list-group-item" id="faculty" value="<?php echo $Faculty ?>">
                      <option value="ftmk">FTMK</option>
                      <option value="fkm">FKM</option>
                      <option value="fkp">FKP</option>
                      <option value="fke">FKE</option>
                      <option value="fptt">FPTT</option>
                      <option value="fkekk">FKEKK</option>
                      <option value="ftkee">FTKEE</option>
                      <option value="ftkmp">FTKMP</option>
                    </select>
                  </div>

                <label>Course</label>
                <input type="text" class="form-control mb-2" placeholder="Course" name="course" value="<?php echo $Course ?>">
                
                <label>Home Address</label>
                <input type="text" class="form-control mb-2" placeholder="Home Address" name="address" value="<?php echo $Address ?>">

                <label>Telephone</label>
                    <input type="text" class="form-control mb-2" placeholder="Telephone" name="telephone" value="<?php echo $Telephone ?>">

                    <label>Choose a gender:</label>
                    <div class="input-group mb-2">                    
                    <select name="genders" class="list-group-item" id="genders" value="<?php echo $Gender ?>">
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>                      
                    </select>
                  </div>

                    <label>Your Birthday:</label>
                    <input type="date" class="form-control mb-2" placeholder="Bithday Date" name="date" value="<?php echo $Birthday ?>">
                    
                    <label>Your Age</label>
                    <input type="text" class="form-control mb-2" placeholder="Age" name="age" value="<?php echo $Age ?>">
                <br>
                <button class="btn btn-primary" name="update">Update</button>
                <button class="btn btn-secondary" a href="view_user_details.php" name="update">Back</button>

</form>
</div>             
             <br>
<?php
include_once 'footer.php';
?>
