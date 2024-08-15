<?php

$connection = mysqli_connect("localhost", "root", "" , "coustomer_details");

if(isset($_POST['save']))
{
	$customer_name = $_POST['cusname'];
	$customer_address = $_POST['cusaddress'];
	$telephone_number = $_POST['contactnumber'];
	$email = $_POST['email'];
	$required_date = $_POST['reqdate'];
	$return_date = $_POST['retdate'];
	$cabana = $_POST['cabana'];
	$hut1 = $_POST['hut1'];
	$hut2 = $_POST['hut2'];
	$hut3 = $_POST['para'];
    $hut4 = $_POST['alu'];
    $pchair = $_POST['poly'];
    $bchair = $_POST['bla'];
    $rdish = $_POST['rd'];
    $cdish = $_POST['cd'];
    $plate = $_POST['pla'];
    $hplate = $_POST['hpla'];
    $spoon = $_POST['sp'];
    $fork = $_POST['fork'];
    $knive = $_POST['kn'];
    $tray = $_POST['tray'];
    $glass = $_POST['gla'];
    $csause = $_POST['cup'];
    $icup = $_POST['ice'];
    $chef = $_POST['Chef'];
    $wcordinator = $_POST['we'];
    $pchef = $_POST['pastrychef'];
    $schef = $_POST['souschef'];
    $pwarmer = $_POST['plaw'];
    $defeezer = $_POST['de'];
    $fan = $_POST['stf'];
    $pots1 = $_POST['lp'];
    $pots2 = $_POST['lp2'];
    $gas = $_POST['gc'];

	$sql_query = "INSERT INTO rent_item(customer_name, customer_address, telephone_number,email,required_date, return_date, cabana, hut1,hut2, parabon_hut,aluminium_hut,polypropline_chairs,blanket_chairs,rice_dishes,curry_dishes,plates,half_plates,spoons,forks,knives,trays,glasses,cup_sause,ice_cream_cup,chef,wedding_cordinator,pastry_chef,sous_chef,plates_warmer,defeezer,stand_fan,small_aluminium_pots,large_aluminium_pots,gas_cookers)
	VALUES ( '$customer_name', '$customer_address', '$telephone_number', '$email','$required_date', '$return_date', '$cabana','$hut1', '$hut2', '$hut3', '$hut4', '$pchair', '$bchair', '$rdish', '$cdish', '$plate', '$hplate', '$spoon', '$fork', '$knive', '$tray', '$glass', '$csause', '$icup', '$chef', '$wcordinator', '$pchef', '$schef', '$pwarmer', '$defeezer', '$fan', '$pots1', '$pots2', '$gas')";

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
    <link rel="stylesheet" type="text/css" href="engine1/style.css" />
    <script type="text/javascript" src="engine1/jquery.js"></script>

    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="rentStyle.css">
    <script src="https://kit.fontawesome.com/8515a2bc4d.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="top-home">
    <div class="top-home-left" id="top-left-id">
        <h2 class="home">Place Your Order Here...</h2>
    </div>
    <div class="top-home-right" id="top-right-id">
        <ul class="navigation">
            <li><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Service</a></li>
            <li><a href="#">Rent Item</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </div>
</div>
<div class="slider">
    <!-- Start WOWSlider.com BODY section -->
    <div id="wowslider-container1">
        <div class="ws_images"><ul>
            <li><img src="data1/images/4e7ca5ce004a4940_edit_1_65.jpg" alt="Your Favourite Dishes.." title="Your Favourite Dishes.." id="wows1_0"/></li>
            <li><img src="data1/images/banquet.jpg" alt="Luxery Chairs..." title="Luxery Chairs..." id="wows1_1"/></li>
            <li><a href="http://wowslider.com/vi"><img src="data1/images/cateringtentgastronomytentrukuevent960x560.jpg" alt="jquery slideshow" title="Tent" id="wows1_2"/></a></li>
            <li><img src="data1/images/mexicanfoodcateringspread.png" alt="Your Favourite Tools..." title="Your Favourite Tools..." id="wows1_3"/></li>
        </ul></div>
        <div class="ws_bullets"><div>
            <a href="#" title="Your Favourite Dishes.."><span><img src="data1/tooltips/4e7ca5ce004a4940_edit_1_65.jpg" alt="Your Favourite Dishes.."/>1</span></a>
            <a href="#" title="Luxery Chairs..."><span><img src="data1/tooltips/banquet.jpg" alt="Luxery Chairs..."/>2</span></a>
            <a href="#" title="Tent"><span><img src="data1/tooltips/cateringtentgastronomytentrukuevent960x560.jpg" alt="Tent"/>3</span></a>
            <a href="#" title="Your Favourite Tools..."><span><img src="data1/tooltips/mexicanfoodcateringspread.png" alt="Your Favourite Tools..."/>4</span></a>
        </div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.com/vi">angular carousel</a> by WOWSlider.com v7.7</div>
        <div class="ws_shadow"></div>
    </div>
    <script type="text/javascript" src="engine1/wowslider.js"></script>
    <script type="text/javascript" src="engine1/script.js"></script>
    <!-- End WOWSlider.com BODY section -->
</div>
<div class="home-bar">
    <div class="left-side"><h2 class="home">Rent Your Choices...</h2></div>
    <div class="right-side"></div>
</div>
<form class="my-form" action="rent.php" method="post">



    <div class="customer-details">
        <label for="cusname">&nbsp;Customer Name:              </label> <br><input type="text" id="cusname" name="cusname" value="">
       &nbsp; &nbsp; &nbsp; <label for="reqdate">Required Date:   </label> <input type="date" id="reqdate" name="reqdate" value=""><br><br>
        <label for="cusaddress">&nbsp;Customer Address:          </label> <br><input type="text" id="cusaddress" name="cusaddress" value=""><!-- <br><br>-->
        &nbsp; &nbsp; &nbsp;  <label for="retdate">Return Date:   </label> <input type="date" id="retdate" name="retdate" value=""> <br><br>
         <label for="contactnumber">&nbsp;Contact Number:          </label> <br><input type="text" id="contactnumber" name="contactnumber" value="">
       <br><br>
        <label for="email">&nbsp;Customer Email:          </label> <br><input type="text" id="email" name="email" value="">
    </div>
    <br>
    <br>
    <br>
    <br>
    <div class="service-row">
        <div class="service-row-inner">
            <div class="service-content" id="tent">
                <div class="content-icon"><i class="fas fa-umbrella-beach"></i></div>
                  <h3 class="content-title">
                    Soft Drinks
                </h3><table border="1">
                    <thead>
                    <tr>
                        <th>types</th>
                        <th>Quntity</th>
                    </tr>
                        <tr>
                            <td>
                                <input type="checkbox" id="cabana" name="cabana" value="">
                                <label for="cabana">coca cola:              </label>
                            </td>
                            <td>
                                <select id="cabana" name="cabana">
                                    <option value="0">0</option>
                                    <option value="1">10</option>
                                    <option value="2">20</option>
                                    <option value="3">30</option></select><br>

                            </td>
                        </tr>
                    <tr>
                        <td>
                            <input type="checkbox" id="hut1" name="hut1" value="">
                            <label for="hut1">sprite:              </label>
                        </td>
                        <td>
                            <select id="hut1" name="hut1">
                                <option value="0">0</option>
                                <option value="1">10</option>
                                <option value="2">20</option>
                                <option value="3">30</option>
                                <option value="4">40</option></select><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" id="hut2" name="hut2" value="">
                            <label for="hut2">fanta:              </label>
                        </td>
                        <td>
                            <select id="hut2" name="hut2">
                                <option value="0">0</option>
                                <option value="1">10</option>
                                <option value="2">20</option>
                                <option value="3">30</option>
                                <option value="4">40</option></select><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" id="para" name="para" value="">
                            <label for="para">pepsi:              </label>
                        </td>
                        <td>
                            <select id="para" name="para">
                                <option value="0">0</option>
                                <option value="1">10</option>
                                <option value="2">20</option>
                                <option value="3">30</option>
                                <option value="4">40</option></select><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" id="alu" name="alu" value="">
                 <label for="alu">cream soda:              </label>
                        </td>
                        <td>
                            <select id="alu" name="alu">
                                <option value="0">0</option>
                                <option value="1">10</option>
                                <option value="2">20</option>
                                <option value="3">30</option>
                                <option value="4">40</option></select><br>

                        </td>
                    </tr>
                    </thead>
            </table>

            </div>
            <div class="service-content">
                <div class="content-icon"><i class="fas fa-couch"></i></div>
                <h3 class="content-title">
                    Ice cream
                </h3>
                <table border="1">
                    <thead>
                        <tr>
                            <th>
                                Types
                            </th>
                            <th>
                                Quntity
                            </th>
                        </tr>
                    <tr>
                        <td>
                            <input type="checkbox" id="poly" name="poly" value="">
                            <label for="poly">Vanila:              </label>
                        </td>
                        <td>
                            <select id="poly" name="poly">
                                <option value="0">0</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                                <option value="150">150</option>
                                <option value="200">200</option></select><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" id="bla" name="bla" value="">
                            <label for="bla">Chocalate:              </label>
                        </td>
                        <td>
                            <select id="bla" name="bla">
                                <option value="0">0</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                                <option value="150">150</option>
                                <option value="200">200</option></select>
                        </td>
                    </tr>
                    </thead>
                </table>

            </div>
            <div class="service-content">
                <div class="content-icon"><i class="fas fa-utensils"></i></div>
                <h3 class="content-title">
                    Pastry
                </h3>
                <table border="1">
                    <thead>
                    <tr>
                        <th>
                            Types
                        </th>
                        <th>
                            Quntity
                        </th>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" id="rd" name="rd" value="">
                            <label for="rd">Fish Bun:              </label>
                        </td>
                        <td>
                            <select id="rd" name="rd">
                                <option value="0">0</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                                <option value="150">150</option>
                                <option value="200">200</option></select><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" id="cd" name="cd" value="">
                            <label for="cd">Eag Bun:              </label>
                        </td>
                        <td>
                            <select id="cd" name="cd">
                                <option value="0">0</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                                <option value="150">150</option>
                                <option value="200">200</option></select><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" id="pla" name="pla" value="">
                            <label for="pla">Rolls:              </label>
                        </td>
                        <td>
                            <select id="pla" name="pla">
                                <option value="0">0</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                                <option value="150">150</option>
                                <option value="200">200</option></select><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" id="hpla" name="hpla" value="">
                            <label for="hpla"> Pizza:              </label>
                        </td>
                        <td>
                            <select id="hpla" name="hpla">
                                <option value="0">0</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                                <option value="150">150</option>
                                <option value="200">200</option></select><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" id="sp" name="sp" value="">
                            <label for="sp">Sandwich Ban:              </label>
                        </td>
                        <td>
                            <select id="sp" name="sp">
                                <option value="0">0</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                                <option value="150">150</option>
                                <option value="200">200</option></select><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" id="fork" name="fork" value="">
                            <label for="fork">Omlet Bun:              </label>
                        </td>
                        <td>
                            <select id="fork" name="fork">
                                <option value="0">0</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                                <option value="150">150</option>
                                <option value="200">200</option></select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" id="kn" name="kn" value="">
                            <label for="kn">Burger:              </label>
                        </td>
                        <td>
                            <select id="kn" name="kn">
                                <option value="0">0</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                                <option value="150">150</option>
                                <option value="200">200</option></select><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" id="tray" name="tray" value="">
                            <label for="tray">Chicken Burger:              </label>
                        </td>
                        <td>
                            <select id="tray" name="tray">
                                <option value="0">0</option>
                                <option value="2">2</option>
                                <option value="5">5</option>
                                <option value="10">10</option>
                                <option value="20">20</option></select>

                        </td>
                    </tr>
                    </thead>
                </table>

            </div>
        </div>

    </div>
    <!--<div class="space"></div>-->
    <div class="service-row">
        <div class="service-row-inner">
            <div class="service-content">
                <div class="content-icon"><i class="fas fa-mug-hot"></i></div>
                <h3 class="content-title">
                    Service
                </h3>
                <table border="1">
                    <thead>
                    <tr>
                        <th>
                           Types
                        </th>
                        <th>
                            Quntity
                        </th>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" id="gla" name="gla" value="">
                            <label for="gla">Nescaffe machine:              </label>
                        </td>
                        <td>
                            <select id="gla" name="gla">
                                <option value="0">0</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                                <option value="150">150</option>
                                <option value="200">200</option></select><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" id="cup" name="cup" value="">
                            <label for="cup">Coffe machine:              </label>
                        </td>
                        <td>
                            <select id="cup" name="cup">
                                <option value="0">0</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                                <option value="150">150</option>
                                <option value="200">200</option></select><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" id="ice" name="ice" value="">
                            <label for="ice">Faluda machine:              </label>
                        </td>
                        <td>
                            <select id="ice" name="ice">
                                <option value="0">0</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                                <option value="150">150</option>
                                <option value="200">200</option></select>
                        </td>
                    </tr>
                    </thead>
                </table>


            </div>
            <div class="service-content">
                <div class="content-icon"><i class="fas fa-concierge-bell"></i></div>
                <h3 class="content-title">
                    Other
                </h3><table border="1">
                <thead>
                <tr>
                    <th>
                        Types
                    </th>
                    <th>
                        Quntity
                    </th>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" id="Chef" name="Chef" value="">
                        <label for="">Staff:              </label>
                    </td>
                    <td>
                        <select id="Chef" name="Chef">
                            <option value="0">0</option>
                            <option value="5">5</option>
                            <option value="10">10</option>
                            <option value="15">15</option>
                            <option value="20">20</option></select><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" id="we" name="we" value="">
                        <label for="we">Defference:              </label>
                    </td>
                    <td>
                        <select id="we" name="we">
                            <option value="0">0</option>
                            <option value="1">1</option></select><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" id="Pastry Chef" name="pastrychef" value="">
                        <label for="Pastry Chef">Decoration:              </label>
                    </td>
                    <td>
                        <select id="Pastry Chef" name="pastrychef">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option></select><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" id="Sous Chef" name="souschef" value="">
                        <label for="Sous Chef">Bottel cooler:              </label>
                    </td>
                    <td>
                        <select id="Sous Chef" name="souschef">
                            <option value="0">0</option>
                            <option value="5">5</option>
                            <option value="10">10</option>
                            <option value="15">15</option>
                            <option value="20">20</option></select><br>
                    </td>
                </tr>
                </thead>
            </table>

                    <!--=======================================-->
            </div>
            <div class="service-content">
                <div class="content-icon"><i class="fas fa-align-center"></i></div>
                <h3 class="content-title">
               Choirs
                </h3>
                <table border="1">
                    <thead>
                    <tr>
                        <th>
                            Types
                        </th>
                        <th>
                            Quntity
                        </th>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" id="plaw" name="plaw" value="">
                            <label for="plaw">:              </label>
                        </td>
                        <td>
                            <select id="plaw" name="plaw">
                                <option value="0">0</option>
                                <option value="5">5</option>
                                <option value="10">10</option>
                                <option value="15">15</option>
                                <option value="20">20</option></select><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" id="de" name="de" value="">
                            <label for="de">Hot Driaty:              </label>
                        </td>
                        <td>
                            <select id="de" name="de">
                                <option value="0">0</option>
                                <option value="1">1</option></select><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" id="stf" name="stf" value="">
                            <label for="stf">Tea:              </label>
                        </td>
                        <td>
                            <select id="stf" name="stf">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option></select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" id="lp" name="lp" value="">
                            <label for="lp">Small Aluminium Pots:              </label>
                        </td>
                        <td>
                            <select id="lp" name="lp">
                                <option value="0">0</option>
                                <option value="5">5</option>
                                <option value="10">10</option>
                                <option value="15">15</option>
                                <option value="20">20</option></select>

                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" id="lp2" name="lp2" value="">
                            <label for="lp2">Large Aluminium Pots:              </label>
                        </td>
                        <td>
                            <select id="lp2" name="lp2">
                                <option value="0">0</option>
                                <option value="5">5</option>
                                <option value="10">10</option>
                                <option value="15">15</option>
                                <option value="20">20</option></select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" id="gc" name="gc" value="">
                            <label for="gc">Coffe:              </label>
                        </td>
                        <td>
                            <select id="gc" name="gc">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option></select>
                        </td>
                    </tr>
                    </thead>
                </table>


            </div>
        </div>

    </div>


        <p align="right">
            <input class="button" type="submit" name="save" id="submit" value="submit">
            <input type="reset" name="Clear" value="Clear">
        </p>
</form>
<div class="relese"></div>
</body>
</html>