<?php
$con=mysqli_connect('localhost','root','','dayo_travel_access_user_db');  
$sql=mysqli_query($con,"select * from reserve_booking");  
$row=mysqli_fetch_assoc($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>booking details</title>
    <header>
        <a href="packages.html"> <img src="IMAGES/DAYO LOGO.png"  alt="Dayo Logo"></a>
       </header>
     
</head>
<body>

    <form action="book_3.html">

    <h2>Information Details:</h2>

<div>
    <p><b><em>Name:</em></b><?php echo $row['fullname'] ?> </p>
    <p><b><em>Email:</em></b> <?php echo $row["email"]; ?></p>
    <p><b><em>CP#:</em></b> <?php echo $row["cp_num"]; ?></p>
    <p><b><em>Packages:</em></b> <?php echo $row["package"]; ?></p>
    <p><b><em>Adult Count:</em></b><?php echo $row["adult_count"]; ?></p>
    <p><b><em>Kids Count:</em></b><?php echo $row["kid_count"]; ?></p>
    <p><b><em>Vehicle:</em></b><?php echo $row["vehicle"]; ?></p>
    <p><b><em>Travel Date:</em></b><?php echo $row["date"]; ?></p>
    <p><b><em>Travel Time:</em></b><?php echo $row["time"]; ?></p>
    <p><b><em>Pick-Up Location:</em></b><?php echo $row["street"]; ?>, <?php echo $row["brgy"]; ?></p>
</p>
</div>

<button type="submit" class="reservation">PAYMENT TO PROCESS</button>
    </form>
</body>
</html>

<style>

body {
      font-family: Arial, sans-serif;
      background: linear-gradient( #10835d95, #EFF3F8);
      height: 120vh;
      display: flex;
      flex-direction: column;
      align-items: center;
      color: #333;
    }

    header {
      
      text-align: center;
      
    }

    header img {
      max-width: 50%;
      height: auto;
      cursor: pointer;
      
    }

    button {
      background-color: #19ac14;
      color: #fff;
      padding: 20px 20px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      margin-left: 39%;

    }

    button:hover {
      background-color: #18866a;
      text-align: center;
    }


</style
</html>