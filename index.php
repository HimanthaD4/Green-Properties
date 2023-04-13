<?php 
	include_once "core.php";
	include_once "database.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Green Properties</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./STYLE/homepage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<!---header--->
<body>
    <header>
    <hr>
    <section class="header">
        <div class="top-bar">
            <img src="./IMAGES/Logo.png">
            <div class="top-button">
            <?php    
            if(!isset($_SESSION['user_id'])){
                ?>
                    <a href="./Sign In.php">Sign In </a>
                    <a href="./Sign Up1.php">Sign Up</a>
                <?php
                }
                else{
                ?>
                    <a href="logout.php">Sign Out </a>
                    <a href="User Account1.php">Profile</a>
                <?php
                }
               ?>
            </div>
        </div>
    </section>
    <div>
        <ul>
            <li><a href="./index.php">Home</a></li>
            <li><a href="./land page.php">Land</a></li>
            <li><a href="./house page.php">House</a></li>
            <li><a href="./about us.php">About Us</a></li>
            <li><a href="./Contact us.php">Contact Us</a></li>
        </ul>
    </div>

    <div class="search">
        <input type="text"  name="box" placeholder="Search">
    </div>

    <div>
        <a href = "showing result.php">
        <button type="submit" class="Search_btn"><i class="fa fa-search"></i> </button>
        </a>
    </div>
    </header>
    <!--header-->

    <main class="main">
        <section id="home">
            <div id="slider" class="slider">    

            </div>
        </section>
    </main>

    <h2 id="ftrd">Featured Properties</h2>

    <section class="prop">
        <div class="box">
            <img src="./IMAGES/hou1.jpg" alt"prop3" class="prop3">
            <h3 class="location">Nugegoda</h3>
            <p class="details">
                Nugegoda Vijerama, Architect Designed 2 Storied New Luxury House 12 Perches. 4100 sq ft, 4 Bedrooms (A/C) With Attached Toilets fitted With Quality fitting fully furnished Solar Hot Water, With Double Garage, With and all Other Modern amenities. in a Private Compound.
            </p>
            <h4 class="price">Rs. 65 Million (Negotiable)</h4>
            <button class="click">More</button>
        </div>

        <div class="box">
            <img src="./IMAGES/land1.jpg" alt"prop1" class="prop1">
            <h3 class="location">Kottawa</h3>
            <p class="details">
                residential property in an excellent neighbourhood.120m from old kottawa road. Pleae see google map below for exact location.20' and 15' access road that will be paved at sellers cost. Ancestral property with 100y family ownership.. clear deeds.2 km to Maharagama.
            </p>
            <h4 class="price">Rs. 1 700 000 Per Perch</h4>
            <button class="click">More</button>
        </div>

        <div class="box">
            <img src="./IMAGES/unnamed.jpg" alt"prop2" class="prop2">
            <h3 class="location">Rajagiriya</h3>
            <p class="details">
                This lovely three-bedroom apartment is available for rent at Clearpoint Residencies in Rajagiriya. The apartment offers 2,300 sq.ft of living space and benefits from modern finishes and gorgeous views. The apartment consists of a spacious living room, kitchen/dining, three bedrooms.
            </p>
            <h4 class="price">Rs. 315 000 Per Month </h4>
            <button class="click">More</button>
        </div>

        <div class="box">
            <img src="./IMAGES/hou2.jpg" alt"prop1" class="prop1">
            <h3 class="location">Gampaha</h3>
            <p class="details">
                Completed upstairs House for Sale in Gampaha. 75 meters away from Kandy road. Fully Tiled House consist 3 bedrooms, 2 bathrooms, living, dining, pantry, kitchen, parking for 1 vehicle.Telephone, Electricity, Main Line Water and other necessary facilities.Very convenient location and neighborhood.
            </p>
            <h4 class="price">Lease Price Rs. 75 000</h4>
            <button class="click">More</button>
        </div>
    </section>
   <!--footer-->
    <div class="footer">
        <div class="quick-links">
            <h4 class="underln">QUICK LINKS</h4>
            <a href="./homepage.php">Home</a>
            <a href="./land page.php">Land</a>
            <a href="./house page.php">House</a>
            <a href="./about us.php">About Us</a>
            <a href="./Contact us.php">Contact Us</a>
        </div>

        <div class="contacts">
            <h4 class="underln">CONTACTS</h4>
            <div class="content">
                <div class="info">
                    <span><i class="fa fa-map-marker"></i></span>
                    <span>Green Properties (pvt) Ltd,<br> No.123, Silva Lane,<br> Kaduwela Road, Malabe,<br> Colombo, Sri Lanka. </span>
                </div>
            </div>
            <div class="info">
                <span><i class="fa fa-phone"></i></span>
                <span>Telephone +94 112 224 448 <br> Hotline +94 771 771 771</span>
            </div>
            <div class="info">
                <span><i class="fa fa-envelope"></i></span>
                <span>customer@greenproperties.lk</span>
            </div>
        </div>

        <div class="sci">
            <h4 class="underln">SOCIAL MEDIA</h4>
            <div class="socl">
                <a href="https://www.facebook.com"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                <a href="https://www.instagram.com"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="https://www.linkedin.com"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                <a href="https://www.twitter.com"><i class="fa fa-twitter-square" aria-hidden="true"></i></a> 
            </div>
        </div>
        <div class="aboutus">
            <h4 class="underln">ABOUT US</h4>
            <div class="abinfo">
                <P>You are warmly welcome to www.greenproperty.lk. The leading property sales website in Sri Lanka. Plenty of houses, lands and buildings with updated information for sell, buy or rent. Our main intention is to make an online platform for all your needs accordingly with high rate of user friendliness and accuracy.</P>
            </div>
           
        </div>
        
    </div>
    <div class="footer-bottom">
            &copy; GreenProperties
        </div>
        <!--footer-->

</body>
</html>