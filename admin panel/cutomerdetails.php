<?php

$connection = mysqli_connect('localhost','root','','coustomer_details');
$table = '';
$query = "SELECT* FROM customer_details1";

$result_set = mysqli_query($connection,$query);

if($result_set){
    //echo mysqli_num_rows($result_set). "Records found.<hr>";

    while($record = mysqli_fetch_assoc($result_set))
    {
        $table .='<tr>';
        $table .='<td>'. $record['customer_id'] . '</td>';
        $table .='<td>'. $record['customer_name'] . '</td>';
        $table .='<td>'. $record['customer_address'] . '</td>';
        $table .='<td>'. $record['telephone_number'] . '</td>';
        $table .='<td>'. $record['email'] . '</td>';
        $table .='<td>'. $record['required_date'] . '</td>';
        $table .='<td>'. $record['function_name'] . '</td>';
        $table .='<td>'. $record['package'] . '</td>';
        $table .='<td>'. $record['function_time'] . '</td>';
        $table .='<td>'. $record['menu_id'] . '</td>';
        $table .='<td>'. $record['guest_amount'] . '</td>';
        $table .='</tr>';

    }
    $table .= '</table>'; 
}
?>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>order details</title>
    <style>

        body{
            background-image:url(5.jpg);
            background-position:center;
	        background-size:cover;
        }
        table{
            border-collapse: collapse;
            background-color:rgb(0,0,0,0.6);
            color:#FFFFFF;
            text-align:center;
            border-radius:15px 15px 0px 0px
        }
        td,th{border: 1px solid black; padding: 10px;}
</style>

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
            <li><a href="admindetails.php" onclick="toggleMenu();">Admin details</a></li>
            <li><a href="cutomerdetails.php" onclick="toggleMenu();">Order Details</a></li>
            <li><a href="rentdetails.php" onclick="toggleMenu();">Rent Item Details</a></li>
            <li><a href="contactdetails.php" onclick="toggleMenu();">Customer Comments</a></li>
            <li><a href="login.php" onclick="toggleMenu();">Logout</a></li>
        </ul>
    </header>
<section>
<main>
    <table class="customerdetails">
        <thead>
            <tr>
            <th>Customer id</th>
            <th>Customer Name</th>
            <th>Customer Address</th>
            <th>Telephone Number</th>
            <th>Email</th>
            <th>Required Date</th>
            <th>Function Name</th>
            <th>Function Time</th>
            <th>Menu id</th>
            <th>Guest Amount</th>
            </tr>';
        </thead>

        <?php echo $table; ?>
    </table>
</main>
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
