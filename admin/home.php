<?php
include_once 'adminheader.php';
require_once("connection.php");
$query = "SELECT * FROM certificate WHERE id=1";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {
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
    }
        .row {
            margin: 10px 10px;
            display: flex;
        }

        .card {
            flex: 1;
            margin: 8px;
        }

        .card-body {
            text-align: center;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            text-align: center;
            text-decoration: none;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #0056b3;
        }
    </style> -->
</head>

<body>

    <body>
  
    <section class="index-intro">
        <?php
        if (isset($_SESSION["adminuid"])) {
            echo "<br>";
            echo "<center><h3>Hello " . $_SESSION["adminuid"] . "</h3></center>";
        }
        ?>
        <br><br>
        <div class="container" style="width: 1100px; margin: 0 auto;">
            <div class="row">
                <div class="card">
                    <img src="image/add.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <center>
                            <h4>Add New User Account</h4>
                        </center>
                        <center>
                            <p class="card-text">Click this button to add a new user account.</p><br>
                        </center>
                        <center><a href="signup.php" class="btn btn-primary">+ Add New User</a></center>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted"></small>
                    </div>
                </div>
                <div class="card">
                    <img src="image/information.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <center>
                            <h4>Certificate Keyword Details</h4>
                        </center>
                        <center>
                            <p class="card-text">Organizer: <?php echo $Organizer ?>&nbsp;&nbsp; || &nbsp;&nbsp;Password : <?php echo $Password ?></p>
                        </center><br><br>
                        <center><a href="edit_cert.php" class="btn btn-primary">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Edit&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></center>
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
</body>

</html>
