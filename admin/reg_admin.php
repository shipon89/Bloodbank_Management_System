<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registretion</title>
    <link rel="stylesheet" href="./navbar.css">
    <link rel="stylesheet" href="forms.css">
    <style>
        body{
  background-image: url(./img/blood3.jpg);
        }
  .f_warp{
    margin-top: 10%;
}
}
    </style>
</head>
<body>
<div class="sidebar">
  <a href="admin_home.php">Home</a>
  <a href="inbox.php">Inbox</a>
  <a href="Become_Donor.php">Manage Database</a>
  <a href="reg_admin.php" class="active">Admin registretion</a>
  <a href="logout.php" style="color:red">Log Out</a>
</div>

<div class="content">
    <center>
    <div class="f_warp">
        <form action="" method="post">
            <input type="text" name="ad_nam" id="" placeholder="User Name">
            <br>
            <input type="password" name="pass" id="" placeholder="Password">
            <br>
            <input type="password" name="con_pass" id="" placeholder="Conferm Password">
            <br>
            <input type="submit" value="Create" name="cretB">
        </form>
    </div>
    </center>
</div>
    <?php
        include('check_session.php');
     if(isset($_POST["cretB"])){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "adm";

        $conn = new mysqli($servername,$username,$password,$dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $nam=$_POST['ad_nam'];
        $pass=$_POST['pass'];
        $con_pass=$_POST['con_pass'];
        if ($pass==$con_pass){
            $inst = "INSERT INTO acces_data (user_nam,pass)
                VALUES('$nam', '$pass');";
                if ($conn->query($inst) === TRUE) {
                    echo $nam." is a admin now.<br>";
                }
        }
        else{
            echo "password doesn't match<br>";
        }
        
     }

    ?>
</body>
</html>