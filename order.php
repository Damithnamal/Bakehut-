<?php

$connection = mysqli_connect("localhost", "root", "" , "coustomer_details");

if(isset($_POST['save']))
{
	$customer_name = $_POST['customer_name'];
	$customer_address = $_POST['address'];
	$telephone_number = $_POST['phone'];
	$email = $_POST['email'];
	$required_date = $_POST['reqdate'];
	$function_name = $_POST['function_name'];
	$package = $_POST['package'];
	$function_time = $_POST['function_time'];
	$menu_id = $_POST['menu_id'];
	$guest_amount = $_POST['guest_amount'];

	$sql_query = "INSERT INTO customer_details1(customer_name, customer_address, telephone_number,email,required_date, function_name, package, function_time, menu_id, guest_amount)
	VALUES ( '$customer_name', '$customer_address', '$telephone_number', '$email','$required_date', '$function_name', '$package','$function_time', '$menu_id', '$guest_amount')";

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

<html>
<head>
<link rel="stylesheet" href="form.css">
<link rel="stylesheet" href="navfooter.css">
<title>coustomer form</title>
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
            <li><a href="#expert" onclick="toggleMenu();">Rent Item</a></li>
            <li><a href="order.php" onclick="toggleMenu();">Order</a></li>
            <li><a href="Contact.php" onclick="toggleMenu();">Contact Us</a></li>
        </ul>
    </header>
<form class="my-form" action="order.php" method="post">
	
	<div class="formhead" align="center">
		<h1>ORDER FORM</h1>
	</div>

	<table class="tableform" cellspacing=10 align="center">
	<tr>
		<td><label>Cutomer Name</label></td>
		<td><input type="text" name="customer_name" placeholder="Enter name"></td>
	</tr>
	<tr>
		<td><label>Address</label></td>
		<td><input type="text" name="address" placeholder="Enter address"></td>
	</tr>
	<tr>
		<td><label>Telephone number</label></td>
		<td><input type="phone" name="phone" placeholder="Enter telephone number"></td>
	</tr>
	<tr>
		<td><label>Email</label></td>
		<td><input type="email" name="email" placeholder="Enter email">
			<small id="emailHelp" class="form-text.text-muted"></td>
	</tr>
	 <tr>
    <td><label for="reqdate">Required Date   </label></td> 
    <td><input type="date" id="reqdate" name="reqdate" value=""></td>
    </tr>
	<tr>
		<td><label>Function Name</label></td>
		<td><input type="radio" name="function_name" value="wedding" required>Wedding
		   <input type="radio" name="function_name" value="alms_giving" required>Alms Giving
		   <input type="radio" name="function_name" value="other_party" required>Other Party 
		</td>
	</tr>
	<tr>
		<td><label>Package</label></td>
		<td><input type="radio" name="package" value="golden" required>Golden
		   <input type="radio" name="package" value="silver" required>Silver
		   <input type="radio" name="package" value="brownze" required>Brownze 
		</td>
	</tr>
	<tr>
		<td><label>Function time</label></td>
		<td><input type="radio" name="function_time" value="day" required>Day
		   <input type="radio" name="function_time" value="night" required>Night
		   <input type="radio" name="function_time" value="full_day" required>Full Day 
	</td>
	</tr>
	<tr>
		<td><label>Menu Id</label></td>
		<td><select name="menu_id" required>
		    <option selected value="01">01</option>
		    <option value="02">02</option>
		    <option value="03">03</option>
		    </select>
		</td>
	</tr>
	<tr>
		<td></label>Guest Amount</label></td>
		<td><input type="number" name="guest_amount" placeholder="Enter guest amount"></td>
	</tr>
	<tr>
	</tr>
	<tr>
		<td align="center" colspan=2><input class="button" type="submit" name="save" id="submit" value="ORDER"/></td>
	</tr>
	</table>
</form>
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
                    <li><i class="fa fa-map-marker" aria-hidden="true"></i>Bake hut,<br>Meda Thotagoda,<br>Galle</li><br><br>
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