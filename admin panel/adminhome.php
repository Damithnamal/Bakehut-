<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>home</title>

    <link rel="stylesheet" type="text/css" href="resource/css/adminhome.css">
    <link rel="stylesheet" type="text/css" href="resource/css/navfooter.css">
</head>
<body>

<header>
        <a class="navbar-brand" href="#"><img src="images/logo_trans.png"></a>
        <a href="#" class="logo">Thusara Renters and Caters<span>.</span></a>
        <div class="menuToggle" onclick="toggleMenu();"></div>
        <ul class="navigation">
            <li><a href="adminhome.php" onclick="toggleMenu();">Home</a></li>
            <li><a href="newadmin.php" onclick="toggleMenu();">Add Admin</a></li>
            <li><a href="admindetails.php" onclick="toggleMenu();">Add Admin</a></li>
            <li><a href="cutomerdetails.php" onclick="toggleMenu();">Order Details</a></li>
            <li><a href="rentdetails.php" onclick="toggleMenu();">Rent Item Details</a></li>
            <li><a href="contactdetails.php" onclick="toggleMenu();">Customer Comments</a></li>
            <li><a href="login.php" onclick="toggleMenu();">Logout</a></li>
        </ul>
    </header>
 
<section id = "team">
    <div class = "container">
        <h1>OUR TEAM</h1>
        <div class="row">
        <div class="col-md-3 profile-pic text-center">
        <div class="img-box">
        
        <img src="resource\img\IMG-20190627-WA0047.jpg" class="img-responsive">
            <ul>
             <a href = "" ><li><i class="fa fa-facebook"></i></li></a>
             <a href = ""><li><i class="fa fa-twitter"></i></li></a>
             <a href = ""><li><i class="fa fa-linkedin"></i></li></a>
            </ul>
        </div>
            <h2>Janitha Theekshana</h2>
            <h3>GAL/IT/2019/F/0020</h3>
        </div>

        <div class="col-md-3 profile-pic text-center">
        <div class="img-box">
        
        <img src="resource\img\IMG-20210729-WA0004.jpg" class="img-responsive">
            <ul>
             <a href = "" ><li><i class="fa fa-facebook"></i></li></a>
             <a href = ""><li><i class="fa fa-twitter"></i></li></a>
             <a href = ""><li><i class="fa fa-linkedin"></i></li></a>
            </ul>
        </div>
            <h2>Awishka Vimukthi</h2>
            <h3>GAL/IT/2019/F/0004</h3>
        </div>

        <div class="col-md-3 profile-pic text-center">
        <div class="img-box">
        
        <img src="resource\img\IMG-20210729-WA0005.jpg" class="img-responsive">
            <ul>
             <a href = "" ><li><i class="fa fa-facebook"></i></li></a>
             <a href = ""><li><i class="fa fa-twitter"></i></li></a>
             <a href = ""><li><i class="fa fa-linkedin"></i></li></a>
            </ul>
        </div>
            <h2>Githmi Kavindi</h2>
            <h3>GAL/IT/2019/F/0007</h3>
        </div>

        <div class="col-md-3 profile-pic text-center">
        <div class="img-box">
        
        <img src="resource\img\Screenshot_2021-08-07-09-51-16-1.png" class="img-responsive">
            <ul>
             <a href = "" ><li><i class="fa fa-facebook"></i></li></a>
             <a href = ""><li><i class="fa fa-twitter"></i></li></a>
             <a href = ""><li><i class="fa fa-linkedin"></i></li></a>
            </ul>
        </div>
            <h2>Jagath Chandana</h2>
            <h3>GAL/IT/2019/F/0018</h3>
        </div>
        </div>
    </div>
</section>

<div class="footer">
		<div class="inner-footer">

			<div class="footer-items">
				<img src="logo_transparessent.png" alt="logo"><br>
				<h1>Thusara Renters and Caters</h1>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti impedit maiores, voluptate vel incidunt et magni eveniet neque! Fugit molestiae culpa cum ut illo velit dicta quo veritatis saepe nemo.</p>
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
					<li><i class="fa fa-map-marker" aria-hidden="true"></i>Walasmulla Road,<br>Meda Pansala Handiya,<br>Hakmana</li><br>
					<li><i class="fa fa-phone" aria-hidden="true"></i>041-2286864/071-6072065</li>
					<li><i class="fa fa-envelope" aria-hidden="true"></i>thusararenters@gmail.com</li>
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
			Copyright &copy; Thusara Renters and Caters. All rights reserved.
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