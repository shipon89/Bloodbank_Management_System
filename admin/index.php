<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link rel="stylesheet" href="forms.css">
    <style>
        body{
  background-image: url(./img/blood2_1.jpg);
}
    </style>
</head>
<body>
    <center>
        <div class="f_warp">
            <img src=".\img\blood.png" alt="" class="logo">
        <h1 style="color:white;">
            Admin Log-In
        </h1>
        <form action="" method="post" class="form-body">

            <input type="text" name="user" placeholder="User Name"> <br>
            <input type="password" name="pass" id="" placeholder="Password"><br>
            <input type="submit" value="Log in" name="b1">
        </form>
        </div>
    </center>
</body>
</html>
<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "adm";

$conn = new mysqli($servername,$username,$password,$dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
    // else{
    //     echo "<--Connected Successfully-->";
    // }
   session_start();
   if(isset($_POST["b1"])){
       $u_nam=$_POST['user'];
       $pass=$_POST['pass'];

       $sql1="SELECT idno FROM acces_data WHERE user_nam ='$u_nam' AND pass='$pass';";
       $result1 = $conn->query($sql1);
       $count = mysqli_num_rows($result1);
       echo $count."<br>";
       if($count == 1) {
        //session_register("myusername");
        $_SESSION['login_user'] = $u_nam;
        
        header("location: admin_home.php");
     }else {
        $error = "Your Login Name or Password is invalid";
     }
   }
   ?>