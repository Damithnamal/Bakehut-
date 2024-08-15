<?php
$connection = mysqli_connect("localhost", "root", "","admin_details");
   
if(isset($_POST['submit']))
    {
        if(!empty($_POST['admin_id']) && !empty($_POST['admin_name']) &&!empty($_POST['user_name']) && !empty($_POST['password']) )
        {
            $admin_id = $_POST['admin_id'];
            $first_name = $_POST['admin_name'];
            $username = $_POST['user_name'];
            $password = $_POST['password'];
        
    
            $query = "INSERT INTO `ladmin_login1`(`admin_id`, `admin_name`, `user_name`, `password`)
             VALUES ('$admin_id','$first_name','$username','$password' )";
            
            if (mysqli_query($connection, $query))
            {
                //echo "New Admin Inserted";
            }
            else
            {
                //echo "Insertion Failed";
            }
        }

    }    
   
?>

<!DOCTYPE html>
<html lang ="en">
    <head>
        <meta charset="UTF-8">
        <title>
           New Admin Form
        </title>
        <link rel="stylesheet" href="resource\css\form.css">
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
            <li><a href="admindetails.php" onclick="toggleMenu();">Admin Details</a></li>
            <li><a href="cutomerdetails.php" onclick="toggleMenu();">Order Details</a></li>
            <li><a href="rentdetails.php" onclick="toggleMenu();">Rent Item Details</a></li>
            <li><a href="contactdetails.php" onclick="toggleMenu();">Customer Comments</a></li>
            <li><a href="login.php" onclick="toggleMenu();">Logout</a></li>
        </ul>
    </header>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
   
    <div class ="add">
        <form action ="newadmin.php" method ="post">
            
        <div class="formhead" align="center">
                <legend><h1>Add New Admin Form</h1></legend>
        </div>

                <table class="tableform" cellspacing=10 align="center">
                    <tr>
                        <td><lable>Admin ID:</lable></td>
                        <td><input type="text" name="admin_id"  placeholder="admin id" ></td>
                    </tr>

                    <tr>
                        <td><lable>Admin Name :</lable></td>
                        <td><input type="text" name="admin_name"  placeholder="first name" ></td>
                    </tr>

                    <tr>
                        <td><lable>Username :</lable></td>
                        <td><input type="text" name="user_name"  placeholder="username" ><td>
                    </tr>

                    <tr>
                        <td><lable>Password :</lable></td>
                        <td><input type="text" name="password"  placeholder="password" ></td>
                    </tr>
                    <tr>
                   </tr>
                   <tr>
                   </tr>
                    <tr>
                        <td align="center" colspan=2><button class="btn-secondary text-light" type = "submit" name ="submit"> Add New Admin </button>
                    </tr>
            </table>
        </form>
    </div>
    <br>
     <br>
      <br>
       <br>
        <br>
     <br>

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