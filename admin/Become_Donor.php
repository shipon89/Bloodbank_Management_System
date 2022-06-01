<?php
include('check_session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Data Base</title>
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
  <a href="inbox.php">Inbox</a>
  <a href="Become_Donor.php" class="active">Manage Database</a>
  <a href="reg_admin.php">Admin registretion</a>
  <a href="logout.php" style="color:red">Log Out</a>
</div>
<div class="content">
    <form action = "" method = "post">
        <table  align="center">
            <tr align="center">
               <th colspan="3"><h1 align='center'>Create a new Doner Data</h1></th> 
            </tr>
           
            <tr>
                <td>Full Name: </td>               
                <td>Mobile No: </td>              
                <td>Email ID: </td>              
            </tr>
            <tr>               
                <td><input type = "text" name = "full_name"/></td>               
                <td><input type = "number" name = "mob_no"/></td>     
                <td><input type = "text" name = "email_id"/></td>
            </tr>
            <tr>
                <td>Age: </td>               
                <td>Gender: </td>              
                <td>Blood Group: </td>              
            </tr>
            <tr>               
                <td><input type = "number" name = "age"/></td>               
                <td>
                <select id="gender" name="gender">
                    <option value="default">Select Your Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
                </td>     
                <td>
                <select id="blood_group" name="blood_group">
                    <option value="default">Select Blood Group</option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                </select>
                </td>
            </tr>
            <tr>
                <td>Address: </td>               
                <td colspan="2">Message: </td>                               
            </tr>
            <tr>               
                <td><textarea name="Addres" rows="5" cols="25" placeholder="Write Your Address..."></textarea></td>               
                <td colspan="2"><textarea name="messages" rows="5" cols="40" placeholder="Write Message..."></textarea></td>     
            </tr>
           
            <tr align="center">
                <td colspan="3"><input type = "submit" value = "Submit" name = "submit"/></td>
            </tr>
            <tr align="center">
                <td colspan="3"><input type = "submit" value = "Show Result" name = "show"/></td>
            </tr>
        </table>
     </form><br><br><hr><br><br>


    <form method = "POST">
        <table><tr><th colspan="2"><h1 align='center'>Delete a record</h1></th></tr>
        <tr>
    <td><input type="text" name="delet" id="" placeholder="Id to delete"></td>
    <td><input type="submit" value="delete" name="d1"><td></tr>
    </table>
    </form>
    <br><br><hr><br><br>


    <form method="get">
        <table border=1>
        <tr><th colspan='2'><h1 align='center'>Update a record</h1> <br></th></tr>
            <tr>
                <td>ID to update</td><td><input type="text" name="Usecnam"></td>
            </tr>
            <tr><td>select coloumn</td>
                <td><select id="blood_group" name="Colnam">
                    <option value="default"></option>
                    <option value="full_name">full_name</option>
                    <option value="mob_no">Mobile NO</option>
                    <option value="email_id">Email</option>
                    <option value="age">AGE</option>
                    <option value="gender">Gender</option>
                    <option value="blood_group">Blood Group</option>
                    <option value="Addres">Address</option>
                </select></td>
            </tr>
            <tr>
                <td>Data</td> <td><input type="text" name="Udata" id=""></td>
            </tr>
            <tr><td colspan="2"><input type="submit" value="Update" name="b5"></td></tr>
        </table>
    </form>

</div>
</body>
</html>

<?php
// include('check_session.php');
$servername = "localhost";
$username = "root";
$password = "";
$databasebname = "bloodBank";
$conn = new mysqli($servername,$username,$password,$databasebname);
         
    if(isset($_POST["submit"])){
         $name = $_POST["full_name"];
         $mobile = $_POST["mob_no"];
         $email = $_POST["email_id"];
         $age = $_POST["age"];
         $gender = $_POST["gender"];
         $blood = $_POST["blood_group"];
         $Address = $_POST["Addres"];
         $message = $_POST["messages"];
         $sql = "INSERT INTO Become_Donor(id, full_name, mob_no, email_id, age, gender, blood_group, Addres, messages)
         VALUES('$id', '$name', '$mobile', '$email','$age','$gender','$blood','$Address','$message');";
        if ($conn->query($sql) === TRUE) {
           echo "Record is Inserted Successfully";
         }
         
         else {
           echo "Error Inserting Record: " . $conn->error;
         }
        }
    // else{
    //     echo "no data";
    // }

    if(isset($_POST["show"])){
        $sql = "SELECT * FROM Become_Donor";
        $result = $conn->query($sql);
        
            if ($result->num_rows > 0) {
                echo "<div class='content'>";
                echo "<table border='1' align='center'>
                    <tr>
                    <th colspan='9'><h1 align='center'>Donor List</h1></th>
                    </tr>
                    <tr>
                        <th>ID</th>
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
                        <td>" . $row["id"]. "</td>
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
          }
          if(isset($_POST["d1"])) {
              $id_delet=$_POST["delet"];
              $del= "DELETE FROM Become_Donor WHERE id=$id_delet;";
              if ($conn->query($del) === TRUE) {
                echo "Record is deleted Successfully";
              }
              
              else {
                echo "Error Inserting Record: " . $conn->error;
              }
          }
        //   else {
        //       echo "delete is not working";
        //   }   


    if(isset($_GET["b5"])){
        $usnam = $_GET['Usecnam'];
        $ucol = $_GET['Colnam'];
        $ud = $_GET['Udata'];
            //$total=$feno+$mano;
    
        $sql = "UPDATE Become_Donor SET $ucol='$ud' WHERE id='$usnam';";
        if ($conn->query($sql) === TRUE) {
            echo '<script type="text/JavaScript">  
            alert("Successfully updated");
            </script>';
            }
    
        else {
                echo "Error Inserting Record: " . $conn->error;
            }
    }
        

?>