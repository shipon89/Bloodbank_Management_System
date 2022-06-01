<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./navbar.css">
    <link rel="stylesheet" href="forms.css">
    <style>
        body{
  background-image: url(./img/blood3.jpg);
}     
    </style>
</head>
<body>
<div class="sidebar">
  <a href="admin_home.php" class="active">Home</a>
  <a href="inbox.php" >Inbox</a>
  <a href="Become_Donor.php">Manage Database</a>
  <a href="reg_admin.php">Admin registretion</a>
  <a href="logout.php" style="color:red">Log Out</a>
</div>
</body>
</html>
<?php
include('check_session.php');
$servername = "localhost";
$username = "root";
$password = "";
$databasebname = "bloodBank";
$conn = new mysqli($servername,$username,$password,$databasebname);


$sql = "SELECT * FROM Become_Donor";
        $result = $conn->query($sql);
        
            if ($result->num_rows > 0) {
                echo "<div class='content'>";
                echo "<table border='1' align='center'>
                    <tr>
                    <th colspan='8'><h1 align='center'>Donor List</h1></th>
                    </tr>
                    <tr>
                        <th>Full Name</th>
                        <th>Mobile Number</th>
                        <th>Email Id</th>
                        <th>Age</th>
                        <th>Gender</th>
                        <th>Blood Group</th>
                        <th>Address</th>
                        <th>Messages</th>
                        </tr>";
                // output data of each row 
                //full_name, mob_no, email_id, age, gender, blood_group, Addres, messages
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>" . $row["full_name"]. "</td>
                        <td>" . $row["mob_no"]. "</td>
                        <td>" . $row["email_id"]. "</td>
                        <td>" . $row["age"]. "</td>
                        <td>" . $row["gender"]. "</td>
                        <td>" . $row["blood_group"]. "</td>
                        <td>" . $row["Addres"]. "</td>
                        <td>" . $row["messages"]. "</td>
                         </tr>";
                }
                echo "</table>";
                echo "</div>";
            } 
            else {
                echo "0 results";
            }
?>