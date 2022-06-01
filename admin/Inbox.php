

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inbox</title>
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
  <a href="admin_home.php">Home</a>
  <a href="inbox.php" class="active">Inbox</a>
  <a href="Become_Donor.php">Manage Database</a>
  <a href="reg_admin.php">Admin registretion</a>
  <a href="logout.php" style="color:red">Log Out</a>
</div>

    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $databasebname = "bloodBank";
        $conn = new mysqli($servername,$username,$password,$databasebname);

        $fetc = "SELECT * FROM contact_us";
        $result = $conn->query($fetc);

        if ($result->num_rows > 0) {
            echo "<div class='content'>";
            echo "<table border='1' align='center'>
                <tr>
                <th colspan='8'><h1 align='center'>Donor List</h1></th>
                </tr>
                <tr>
                    <th>ID</th>
                    <th>Full Name</th>
                    <th>Mobile Number</th>
                    <th>Email Id</th>
                    <th>Time</th>
                    </tr>";
            // output data of each row 
            //full_name, mob_no, email_id, age, gender, blood_group, Addres, messages
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td rowspan='2'>" . $row["id"]. "</td>
                    <td>" . $row["your_name"]. "</td>
                    <td>" . $row["your_no"]. "</td>
                    <td>" . $row["email_address"]. "</td>
                    <td>" . $row["msg_time"]. "</td>
                    </tr>
                    <tr>
                    <td colspan='4'> Message: " . $row["msg"]. "</td>
                    </tr>";
            }
            echo "</table>";
            echo "</div>";
        }
        else {
            echo "0 results";
        }


    ?>
</body>
</html>