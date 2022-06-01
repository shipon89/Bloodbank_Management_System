    <?php
        include('config.php');
    ?>
<!--doctype html-->
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE-edge">
<meta name="viewport" content="width=device-width, intial-scale=1.0">
<title>Contact</title>
	<!--style----->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/contact-form.css">
    
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
	
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

     



<!--contact------------------------->
<section id="contact">

    <div class="fcf-body">

        <div id="fcf-form">
        <h3 style="text-align: center;" class="fcf-h3">Contact us</h3>
    
        <form id="fcf-form-id" class="fcf-form-class" method="post">
            
            <div class="fcf-form-group">
                <label for="Name" class="fcf-label">Your name</label>
                <div class="fcf-input-group">
                    <input type="text" id="Name" name = "your_name" class="fcf-form-control" required>
                </div>
            </div>

            <div class="fcf-form-group">
                <label for="number" class="fcf-label">Your number</label>
                <div class="fcf-input-group">
                    <input type="number" id="number" name = "your_no" class="fcf-form-control" required>
                </div>
            </div>
    
            <div class="fcf-form-group">
                <label for="Email" class="fcf-label">Your email address</label>
                <div class="fcf-input-group">
                    <input type="email" id="Email" name = "email_address" class="fcf-form-control" required>
                </div>
            </div>
    
            <div class="fcf-form-group">
                <label for="Message" class="fcf-label">Your message</label>
                <div class="fcf-input-group">
                    <textarea id="Message" name="msg" class="fcf-form-control" rows="6" maxlength="3000" required></textarea>
                </div>
            </div>
            <center>
            <div class="fcf-form-group">
                
                <button type="submit" id="fcf-button" name = "submit_info" class="fcf-btn fcf-btn-primary fcf-btn-lg fcf-btn-block" style="text-align: center;">Send Message</button>
            </div>
        </center>
        </form>
        </div>
    
    </div>

    <?php

        if(isset($_POST["submit_info"])){
            $names = $_POST["your_name"];
            $mobiles = $_POST["your_no"];
            $emails = $_POST["email_address"];
            $messg = $_POST["msg"];
            $sql = "INSERT INTO contact_us(your_name, your_no, email_address,msg)
            VALUES('$names', '$mobiles', '$emails','$messg');";
           if ($conn->query($sql) === TRUE) {
              echo '<script type="text/JavaScript">  
              alert("Send Message Successfull, Thanks for Your Concern");
              </script>';
            }
            
            else {
              echo "Send Message Unsuccessfull " . $conn->error;
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