<?php
$insert=false;
if(isset($_POST['name'])){
   $server="localhost";
   $username="root";
   $password="";

   $con=mysqli_connect($server,$username,$password);

   if(!$con){
    die("connection to this database failed due to ".mysqli_connect_error());
   }
//    mysqli_select_db($con, "fitness");

   echo "Success connecting to the db";
   $name=$_POST['name']; 
   $age=$_POST['age'];
   $gender=$_POST['gender'];
   $locality=$_POST['locality'];
   $phone=$_POST['phone'];
   $email=$_POST['email'];
   $sql= "INSERT INTO `fitness`.`fitness_data` ( `Name`, `age`, `Gender`, `locality`, `phone`, `email`, `dt`) VALUES( '$name', '$age', '$gender', '$locality', '$phone', '$email', current_timestamp());";
//    echo $sql;

   if($con->query($sql)==true)
   {
      $insert=true;
   }
   else{
      echo "ERROR: $sql <br> $con->error";
    // echo "Error: " . $sql . "<br>" . $con->error;
   }

   $con->close();
}   
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoldDigger Fitness</title>
</head>
<link rel="stylesheet" href="css/style.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Quicksand&display=swap" rel="stylesheet">
<style>
    body {
        margin: 0px;
        padding: 0px;
        background: url("fitness-4.webp") no-repeat;
        color: white;
        font-family: 'Pacifico', cursive;

    }

    .header {

        height: 45px;
        box-sizing: border-box;
        margin-top: 2px;
    }

    ul {
        margin: 0;
        padding: 0;
    }

    .left {
        /* border: 2px solid red; */
        display: inline-block;
        position: absolute;
        top: 2%;
        cursor: pointer;
        line-height: 15px;
        margin-left: 27px;
    }

    .mid {
        /* border: 2px solid red; */
        display: block;
        width: 30%;
        margin: 0px auto;
        position: absolute;
        left: 33%;
        top: 2%;
        text-decoration: none;
        margin: auto;
        padding: 0px 14px;

    }

    .right {
        /* border: 2px solid red; */
        display: inline-block;
        position: absolute;
        right: 2px;
        top: 35px;
    }

    .mid a {
        box-sizing: border-box;
        text-decoration: none;
        color: white;
        /* font-weight: bold; */
        padding-left: 8px;
    }

    .navbar {
        text-align: center;
        margin: 23px auto;
        box-sizing: border-box;
    }

    .mid li {
        display: inline-block;
    }

    .navbar a:hover,
    a.active {
        text-decoration: underline;
        color: hotpink;
    }

    .left img {
        width: 125px;
        height: 57px;
    }

    .left div {
        text-align: center;
    }

    .btn {
        margin: 0px 9px;
        padding: 4px 14px;
        cursor: pointer;
        background-color: black;
        color: white;
        border-radius: 27px;
        font-family: 'Pacifico', cursive;
    }

    .btn:hover {
        background-color: rgb(98, 103, 105);
        font-size: 12px;
        font-weight: 600;
    }

    .container {
        border: 2px solid white;
        margin: 137px 44px;
        padding: 44px 29px;
        border-radius: 9px;
        width: 474px;
    }

    h1 {
        font-family: 'Pacifico', cursive;
        font-size: 25px;
        text-align: center;
    }

    .form-group input {
        text-align: center;
        display: block;
        width: 326px;
        padding: 5px;
        border: 2px solid black;
        margin: 6px auto;
        border-radius: 8px;
        font-size: 20px;
        font-family: 'Pacifico', cursive;
    }

    .container button {
        display: block;
        width: 340px;
        border-radius: 9px;
        padding: 9px;
        margin: auto;
        margin-top: 46px;
    }
    p{
      color:white;
    }
</style>

<body>
    <header class="header">
        <div class="left">
            <img src="Creative-Gym-and-Fitness-Logo-Designs-008.jpg" alt="">
            <div class="logo">GoldDigger Fitness</div>
        </div>
        <div class="mid">
            <ul class="navbar">
                <li><a href="#">Home</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Fitness Calculator</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </div>
        <div class="right">
            <button class="btn">Call Us</button>
            <button class="btn">Email Us</button>
        </div>
    </header>
    <div class="container">
        <!-- <?php
        //   if($insert){
        //     echo "<br><p>Form Submitted successfully.</p>"
        //   }
        ?> -->
        <h1>Join the best Gym of Kolkata Now</h1>
        <form action="index.php" method="post">
            <div class="form-group">
                <input type="text" name="name" id="" placeholder="Enter your name">
            </div>
            <div class="form-group">
                <input type="number" name="age" id="" placeholder="Enter your age">
            </div>
            <div class="form-group">
                <input type="text" name="gender" id="" placeholder="Enter your gender">
            </div>
            <div class="form-group">
                <input type="text" name="locality" id="" placeholder="Enter your locality">
            </div>
            <div class="form-group">
                <input type="number" name="phone" id="" placeholder="Enter your phone number">
            </div>
            <div class="form-group">
                <input type="email" name="email" id="" placeholder="Enter your email">
            </div>
            <button type="submit" class="btn">Submit</button>
            <!-- <button class="btn">Reset</button> -->
        </form>
    </div>
</body>
<script src="index.js"></script>
</html>