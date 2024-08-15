<?php

$connection = mysqli_connect('localhost','root','','coustomer_details');
$table = '';
$query = "SELECT* FROM rent_item";

$result_set = mysqli_query($connection,$query);

if($result_set){
    //echo mysqli_num_rows($result_set). "Records found.<hr>";

    while($record = mysqli_fetch_assoc($result_set))
    {
        $table .='<tr>';
        $table .='<td>'. $record['rent_id'] . '</td>';
        $table .='<td>'. $record['customer_name'] . '</td>';
        $table .='<td>'. $record['customer_address'] . '</td>';
        $table .='<td>'. $record['telephone_number'] . '</td>';
        $table .='<td>'. $record['email'] . '</td>';
        $table .='<td>'. $record['required_date'] . '</td>';
        $table .='<td>'. $record['return_date'] . '</td>';
        $table .='<td>'. $record['cabana'] . '</td>';
        $table .='<td>'. $record['hut1'] . '</td>';
        $table .='<td>'. $record['hut2'] . '</td>';
        $table .='<td>'. $record['parabon_hut'] . '</td>';
        $table .='<td>'. $record['aluminium_hut'] . '</td>';
        $table .='<td>'. $record['polypropline_chairs'] . '</td>';
        $table .='<td>'. $record['blanket_chairs'] . '</td>';
        $table .='<td>'. $record['rice_dishes'] . '</td>';
        $table .='<td>'. $record['curry_dishes'] . '</td>';
        $table .='<td>'. $record['plates'] . '</td>';
        $table .='<td>'. $record['half_plates'] . '</td>';
        $table .='<td>'. $record['spoons'] . '</td>';
        $table .='<td>'. $record['forks'] . '</td>';
        $table .='<td>'. $record['knives'] . '</td>';
        $table .='<td>'. $record['trays'] . '</td>';
        $table .='<td>'. $record['glasses'] . '</td>';
        $table .='<td>'. $record['cup_sause'] . '</td>';
        $table .='<td>'. $record['ice_cream_cup'] . '</td>';
        $table .='<td>'. $record['chef'] . '</td>';
        $table .='<td>'. $record['wedding_cordinator'] . '</td>';
        $table .='<td>'. $record['pastry_chef'] . '</td>';
        $table .='<td>'. $record['sous_chef'] . '</td>';
        $table .='<td>'. $record['plates_warmer'] . '</td>';
        $table .='<td>'. $record['defeezer'] . '</td>';
        $table .='<td>'. $record['stand_fan'] . '</td>';
        $table .='<td>'. $record['small_aluminium_pots'] . '</td>';
        $table .='<td>'. $record['large_aluminium_pots'] . '</td>';
        $table .='<td>'. $record['gas_cookers'] . '</td>';
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
            <th>Rent id</th>
            <th>Customer Name</th>
            <th>Customer Address</th>
            <th>Telephone Number</th>
            <th>Email</th>
            <th>Required Date</th>
            <th>Return Date</th>
            <th>Cabana(10*10)</th>
            <th>hut(10*20)</th>
            <th>hut(20*30)</th>
            <th>parabon hut</th>
            <th>aluminium hut</th>
            <th>polypropline chairs</th>
            <th>blanket chairs</th>
            <th>rice dishes</th>
            <th>curry dishes</th>
            <th>plates</th>
            <th>half plates</th>
            <th>spoons</th>
            <th>forks</th>
            <th>knives</th>
            <th>trays</th>
            <th>glasses</th>
            <th>cup sause</th>
            <th>ice cream cup</th>
            <th>chef</th>
            <th>wedding cordinator</th>
            <th>pastry chef</th>
            <th>sous chef</th>
            <th>plates warmer</th>
            <th>defeezer</th>
            <th>stand_fan</th>
            <th>small_aluminium_pots</th>
            <th>large_aluminium_pots</th>
            <th>gas_cookers</th>
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
