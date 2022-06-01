<?php
        include('config.php');
    ?>

<!--doctype html-->
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE-edge">
<meta name="viewport" content="width=device-width, intial-scale=1.0">
<title>search</title>
	<!--style----->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/contact-form.css">
    
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="css/donor.css">
	
</head>
<body>

    <section id="maincon">
        <nav>
            <!--logo--------------->
            <a href="#" class="logo">
                <img src="images/logo.png"/>	
            </a>
            <!--menu-btn-------------->
            <input class="menu-btn" type="checkbox" id="menu-btn">
                <label class="menu-icon" for="menu-btn">
                    <span class="nav-icon"></span>
                </label>
            <!--menu-------------->
            <ul class="menu">
            <li><a href="index.php">Home</a></li>	
                <li><a href="index.php#projects">Projects</a></li>	
                <li><a href="index.php#our">About Us</a></li>	
                <li><a href="contact.php">Contact</a></li>	
                <li><a href="donor.php">Donors</a></li>
                <li><a href="search.php">Search For Donors</a></li>
            </ul>

            <!--say-hey--------->
            <a href="joinus.php" class="hey">Join Us</a>
            </nav>
            </section><br> <br> <br> <br>

     



<!--contact------------------------->
<section id="donor">

<form action = "" method = "get">
     <table align='center'>
            <tr>
                <th align='center'><h1>Search For Donor</h1></th>
            </tr>
            <tr>
                <td>
                <select id="blood" name="blood">
                    <option value="default">Select Blood Group</option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                </select>
            </tr>
            <tr>
            <tr align="center">
                <td><input type = "submit" value = "Show Donor List" name = "search"/></td>
            </tr>
            </tr>
        </table>
     </form>

     <?php
        if(isset($_GET["search"])){
            $blood = $_GET["blood"];  
            $sql = "SELECT * FROM Become_Donor WHERE blood_group='$blood' ";
            //$query_run= mysqli_query($conn, $sql);
            $result = $conn->query($sql);

            
                if ($result->num_rows > 0) {
                    echo"<h1 align=center>Available Donor With this Blood Group<h1>";
                    // output data of each row 
                    //full_name, mob_no, email_id, age, gender, blood_group, Addres, messages
                    while($row = $result->fetch_assoc()) {
                        echo "
                        
                        <div class=resp>
                        <div class=gallary>
                            <a href=images/abc.jpg target=_blank><img src=images/abc.jpg alt=Img not found></a>
                            <div class=cap>
                            <table>
                            <tr>
                                <td><h5>Full Name:  </h5></td>
                                <td><h5>" . $row["full_name"]. "</h5></td>
                            </tr>
                            <tr>
                                <td>Mobile No: </td>
                                <td>" . $row["mob_no"]. "</td>
                            </tr>
                            <tr>
                                <td>Email Id: </td>
                                <td>" . $row["email_id"]. "</td>
                            </tr>
                            <tr>
                                <td>Age: </td>
                                <td>" . $row["age"]. "</td>
                            </tr>
                            <tr>
                                <td>Gender: </td>
                                <td>" . $row["gender"]. "</td>
                            </tr>
                            <tr>
                                <td>Blood Group: </td>
                                <td>" . $row["blood_group"]. "</td>
                            </tr>
                            <tr>
                                <td>Address: </td>
                                <td>" . $row["Addres"]. "</td>
                            </tr>
                            <tr>
                                <td>Message: </td>
                                <td>" . $row["messages"]. "</td>
                            </tr>
                            
                            
                        </table>
                            </div>
                        </div>
                    </div>
                        ";
                    }
                        echo "</table>";
                    } 
                    else {
                        echo "<h1 align=center>No Donor Found With this Blood Group<h1>";
                    }
                  }
     ?>

</section>
<br><br><br><br><br><br><br>
<footer>
<p>BloodBank © Safiqul Islam, Nura Alam, Mahadi Ahammed, . All rights reserved.</p>
</footer>
   

   <!--using FontAwesome--------------->
   <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>



	
</body>


</html>