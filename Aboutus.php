<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="aboutus.css">
    <link rel="stylesheet" href="navfooter.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <title>About Us</title>
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
    <section class="banner" id="banner">
        <div class="content">
            <h3><span>A</span>bout <span>U</span>s</h3>
            <p>Bake hut and Caters were established in 2000 by Mr.Damith Namal. Bake hut & Catering Service has been exploring new possibilities to meet the expectations of its clients.Forany festive occasion or a alms giving that is planned our proffessional  team would be there at your disposal. The most reliable and neatly dressed catering staff will swing into action to serve up to your satisfaction. Beside we promise to provide experienced chefs and other coworkers for preparing delicious and mouthwatering dishes to taste and provide high quality festive items.</p>
        </div>
    </section>

    <section>
        <div class="about" id="about">
            <div class="row">
                <div class="col50">
                    <h2 class="titleText"><span>V</span>ision</h2>
                    <p>Momentus moment will be one among the best in providing catering services and rent itms in the country. A company that will provide productive and satisfying service and establish its name in the society.</p>
                </div>
                <div class="col50">
                    <div class="imgBx">
                        <img src="images/img1.jpg" alt="one">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="mission" id="mission">
            <div class="row1">
                <div class="col501">
                    <h2 class="titleText1"><span>M</span>ission</h2>
                    <p>Our mission is to be like a leading Food and Festive items provider in Sri Lanka by offering high quality products, while maintaining a high standard of service, safety and satisfaction that would be exceed our customer's expectations.</p>
                </div>
                <div class="col501">
                    <div class="imgBx1">
                        <img src="images/5.jpg" alt="one">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <br>
    <br>
    
    <div class="footer">
        <div class="inner-footer">
    
            <div class="footer-items">
                <img src="IMG-20230925-WA0011.jpg" alt="logo"><br>
                <h1>Bake Hut & Catering Service</h1>
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
                    <li><i class="fa fa-map-marker" aria-hidden="true"></i>Bake hut,<br>Thotagoda,<br>Gall</li><br><br>
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