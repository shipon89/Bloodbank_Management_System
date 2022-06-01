    <?php
        include('config.php');
    ?>

<!--doctype html-->
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE-edge">
<meta name="viewport" content="width=device-width, intial-scale=1.0">
<title>Join</title>
	<!--style----->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/contact-form.css">
    
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <style>

        input[type=submit]{
        width: 100%;
        background-color: #2adabc;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        }

        input[type=submit]:hover {
        background-color: #1c9c85;
        }
        select {
        width: 100%;
        padding: 7px 7px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        }
    </style>
	
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
            </section>

            

<!--join us------------------------->


<section id="contact">


    <div class="fcf-body">

        <div id="fcf-form">
        <h3 style="text-align: center;" class="fcf-h3">Become A Donor</h3>

    <form action = "" method = "post">
        <table  align="center">
            <tr align="center">
               <th colspan="3"><h1 align='center'></h1></th> 
            </tr>
           
            <tr>
                <td><div class="fcf-form-group">
                    <label for="Name" class="fcf-label">Your Name</label>
                    <div class="fcf-input-group">
                        <input type = "text" name = "full_name" class="fcf-form-control" required>
                    </div>
                </div> </td>

                <td><div class="fcf-form-group">
                    <label for="Name" class="fcf-label">Your Phone number</label>
                    <div class="fcf-input-group">
                        <input type = "text" name = "mob_no" class="fcf-form-control" required>
                    </div>
                </div> </td>  

                <td><div class="fcf-form-group">
                    <label for="Name" class="fcf-label">Your E-mail ID</label>
                    <div class="fcf-input-group">
                        <input type = "text" name = "email_id" class="fcf-form-control" required>
                    </div>
                </div> </td>    

            </tr>
            
            <tr>
                <td><div class="fcf-form-group">
                    <label for="Name" class="fcf-label">Your Age</label>
                    <div class="fcf-input-group">
                        <input type = "number" name = "age" class="fcf-form-control" required>
                    </div>

                </div> </td>               
                <td><div class="fcf-form-group">
                    
                    Gender: <select id="gender" name="gender">
                    <option value="default">Select Your Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
                </div>
                </td>  
                            
                <td><div class="fcf-form-group">
                    Blood: <select id="blood_group" name="blood_group">
                    <option value="default">Select Blood Group</option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                </select></div> </td>              
                           
            </tr>
            
            <tr>               
                <td> <div class="fcf-form-group">
                    <label for="Message" class="fcf-label">Address</label>
                    <div class="fcf-input-group">
                        <textarea id="Message" name="Addres" class="fcf-form-control" rows="6" maxlength="3000" required></textarea>
                    </div>
                </div></textarea></td>               
                <td colspan="2"> <div class="fcf-form-group">
                    <label for="Message" class="fcf-label">Your Message</label>
                    <div class="fcf-input-group">
                        <textarea id="Message" name="messages" class="fcf-form-control" rows="6" maxlength="3000" required></textarea>
                    </div>
                </div>     
            </tr>
           
            <tr>
                <td colspan="3"><center>
                    <div class="fcf-form-group">
                    <input type = "submit" value = "Submit" name = "submit"/>
                    </div>
                </center></td>
            </tr>
            
        </table>
     </form>



    
     </div>
     </div>
<?php
     if(isset($_POST["submit"])){
        $name = $_POST["full_name"];
         $mobile = $_POST["mob_no"];
         $email = $_POST["email_id"];
         $age = $_POST["age"];
         $gender = $_POST["gender"];
         $blood = $_POST["blood_group"];
         $Address = $_POST["Addres"];
         $message = $_POST["messages"];
         $sql = "INSERT INTO Become_Donor(full_name, mob_no, email_id, age, gender, blood_group, Addres, messages)
         VALUES('$name', '$mobile', '$email','$age','$gender','$blood','$Address','$message');";
        if ($conn->query($sql) === TRUE) {
           echo '<script type="text/JavaScript">  
           alert("Thanks for your Interest to Donate Blood");
           </script>';
         }
         
         else {
           echo "Error Inserting Record: " . $conn->error;
         }
        }
        ?>
</section>

        <footer>
        <p>BloodBank © Safiqul Islam, Nura Alam, Mahadi Ahammed, . All rights reserved.</p>
        </footer>

   <!--using FontAwesome--------------->
   <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>


	
</body>
<!--footer--------->

</html>