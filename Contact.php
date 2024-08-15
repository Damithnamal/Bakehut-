<?php
  $connection = mysqli_connect("localhost","root","","admin_details");

  if (isset($_POST['save'])) {
    $name     =$_POST['name'];
    $email     =$_POST['email'];
    $number   =$_POST['number'];
    $message  =$_POST['message'];

    $sql_query = "INSERT INTO contact(customer_name, email, phone, customer_message)
    VALUES ('$name','$email','$number','$message')";

if(mysqli_query($connection, $sql_query))
{
  //echo "1 Record added";
}
else
{
  //echo "Database query failed" .$sql. "" .mysqli_error($connection);
}
  
  }  
?>





<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- adding font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <!-- adding style css -->
  <link rel="stylesheet" href="contact.css">
  <link rel="stylesheet" href="navfooter.css">
  <title>Contact Us</title>
</head>
<body>
  
  <header>
    <a class="navbar-brand" href="#"><img src="IMG-20230925-WA0011.jpg"></a>
    <a href="#" class="logo">Bake Hut & Catering Service<span>.</span></a>
    <div class="menuToggle" onclick="toggleMenu();"></div>
    <ul class="navigation">
        <li><a href="index.php" onclick="toggleMenu();">Home</a></li>
        <li><a href="Aboutus.php" onclick="toggleMenu();">About</a></li>
        <li><a href="menu.php" onclick="toggleMenu();">Menu</a></li>
        <li><a href="rent.php" onclick="toggleMenu();">Rent Item</a></li>
        <li><a href="order.php" onclick="toggleMenu();">Order</a></li>
        <li><a href="Contact.php" onclick="toggleMenu();">Contact Us</a></li>
    </ul>
 </header>

  <section class="banner" id="banner">
   <div class="container">
    <div class="form-sections">
      <!-- Form left -->
      <div class="Form-left">
        <h1><span>G</span>et  <span>I</span>n  <span>T</span>ouch</h1><br>
        <div class="line"></div> <!--border-bottom line-->
        <p>We have a dedicated team of Customer Services agents who will be able to answer any questions that you may have. </p><br><br>
         
        <!--first Heading -->
        <h4>ADDRESS</h4>
         <span>Bake hut & Catering Service,Walasmulla Road,Meda Pansala Handiya,Hakmana</span>
         <hr><br><br>

         <!--second Heading -->
        <h4>PHONE</h4>
         <span>041-2286864/071-6072065</span>
         <hr><br><br>

       <!--third Heading -->
        <h4>EMAIL</h4>
         <span>thusararenters@gmail.com</span>
         <hr> <br>

         <!-- social media icons -->
          <a href="#" class="fa fa-facebook"></a>
          <a href="#" class="fa fa-twitter"></a>
          <a href="#" class="fa fa-google"></a>
          <a href="#" class="fa fa-linkedin"></a>
          <a href="#" class="fa fa-youtube"></a>
      </div>

      <!-- form right -->
      <div class="Form-right">
        <h1><span>C</span>ontact  <span>U</span>s</h1><br>
        <div class="line"></div>
        <!-- form -->
        <form action="Contact.php" method="post">
          <label for="name"><h5>NAME</h5></label>
          <input type="text" name="name" id="name"><br><br>
          <label for="email"><h5>EMAIL</h5></label>
          <input type="email" name="email" id="email"><br><br>
          <label for="number"><h5>PHONE</h5></label>
          <input type="number" name="number" id="number"><br><br>
          <label for="message"><h5>YOUR MESSAGE</h5></label>
          <textarea name="message" id="message" cols="50" rows="7"></textarea><br>
          <input class="button" type="submit" name="save" id="submit" value="submit">
        </form>
      </div>
    </div>
    </div>
  </section>
  
  <div class="footer">
    <div class="inner-footer">

        <div class="footer-items">
            <img src="IMG-20230925-WA0011.jpg" alt="logo"><br>
            <h1>Bake hut & Catering Service</h1>
            <p>Bake hut & Catering Service were established in 2023 by Mr. Damith Namal. 
            Bake hut & Catering Service has been exploring new possibilities to meet the 
               expectations of its clients, Irrespective of any occasion, party or a function
               that is planned, you can knock at our doors and our professional team would be 
               there at your disposal.</p>
        </div>

        <div class="footer-items">
            <h2>Quick Links</h2>
            <div class="border"></div>
            <ul>
                <a href=""><li>Home</li></a>
                <a href=""><li>About Us</li></a>
                <a href=""><li>Services</li></a>
                <a href=""><li>Portfolio</li></a>
                <a href=""><li>Contact Us</li></a>
            </ul>
        </div>

        
        <div class="footer-items">
            <h2>Contact Us</h2>
            <div class="border"></div>
            <ul>
                <li><i class="fa fa-map-marker" aria-hidden="true"></i>Bake hut,<br>Thotagoda,<br>Galle</li><br><br>
                <li><i class="fa fa-phone" aria-hidden="true"></i>041-2286864/071-6072065</li>
                <li><i class="fa fa-envelope" aria-hidden="true"></i>bakehut@gmail.com</li>
            </ul>
            <div class="social-media">
                <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a>
            </div>
        </div>
        
    </div>
    <div class="footer-bottom">
        Copyright &copy; Bake hut & Catering Service. All rights reserved.
    </div>
 </div>

  <script type="text/javascript">
      window.addEventListener('scroll',function(){
          const header = document.querySelector('header');
          header.classList.toggle("sticky", window.scrollY > 0);
      });

      function toggleMenu(){
          const menuToggle = document.querySelector('.menuToggle');
          const navigation = document.querySelector('.navigation');
          menuToggle.classList.toggle('active');
          navigation.classList.toggle('active');
      }

  </script>
  

</body>
</html>