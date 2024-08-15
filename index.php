<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

    <!-- Bootstrap core CSS -->
   <link href="assets/css/bootstrap.min.css" rel="stylesheet">
   <link href="navbar test/bootstrap-4.5.3-dist/bootstrap-4.5.3-dist/js">

    <!--css Footer-->
    <link href="navfooter.css" rel="stylesheet">

    <!--css slider-->
    <link href="slider.css" rel="stylesheet">

      <!--link rel="stylesheet" href="bootstrap.min.css"-->
      <link rel="stylesheet" href="assets/css/layout.css">

    <title>Home</title>
</head>
<body>
  <header>
    <a class="navbar-brand" href="#"><img src="IMG-20230925-WA0011.jpg"></a>
    <a href="#" class="logo">Bake hut & Catering Service<span>.</span></a>
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
 <br>
 <br>
 <br>
<!--slider-->
   <section class="slider-section">
        <div id="myCarousel" class="carousel slide caption-animate carousel-fade" data-ride="carousel">

 <!-- Indicators -->

   <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
   </ol>

   <!-- Wrapper for slides -->

   <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="images/slides/1.jpg" alt="slide">
            <div class="carousel-caption fadeInRight">
                <h3><span class="colorChange">Bake hut </span>& Catering Service</h3>
            </div>
        </div>
            <div class="item ">
                <img src="images/slides/2.jpg" alt="slide">
                <div class="carousel-caption fadeInRight">
                    <h3><span class="colorChange">Bake hut </span>& Catering Service</h3>
                </div>
        </div>
        <div class="item ">
            <img src="images/slides/3.jpg" alt="slide">
            <div class="carousel-caption fadeInRight">
            <h3><span class="colorChange">Bake hut </span>& Catering Service</h3>
            </div>
        </div>
        <div class="item ">
            <img src="images/slides/4.jpg" alt="slide">
                <div class="carousel-caption fadeInRight">
                <h3><span class="colorChange">Bake hut </span>& Catering Service</h3>
                </div>
        </div>
        <div class="item ">
            <img src="images/slides/5.jpg" alt="slide">
            <div class="carousel-caption fadeInRight">
            <h3><span class="colorChange">Bake hut </span>& Catering Service</h3>
            </div>
        </div>
    </div>
  
<!-- Left and right controls -->
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</section>

<section class="about-us">

   <div class="container">

      <div class="row">

         <div class="col-md-12">

            <div class="main-topic-box">

               <h1><span class="colorChange">Welcome</span></h1>
               <h3>Bake hut & Catering Service</h3>

               <img src="title-icon2.png" alt="">

            </div>

            <p>Bake hut & Catering Service were established in 2023 by Mr. Damith Namal. 
            Bake hut & Catering Service has been exploring new possibilities to meet the 
               expectations of its clients, Irrespective of any occasion, party or a function
               that is planned, you can knock at our doors and our professional team would be 
               there at your disposal.

            </p>

            <div class="bottom-about">

               <a href="Aboutus.php" class="main-button">Read More</a>

            </div>

         </div>

      </div>

   </div>

</section>

    <!--Footer-->
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