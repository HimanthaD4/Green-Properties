<?php 
	include_once "core.php";
	include_once "database.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about us</title>
    <link rel="stylesheet" href="./STYLE/about us.css">
    <link rel="stylesheet" href="./STYLE/hedrefooter.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    	<!---header--->
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
                <input type="text" name="box" placeholder="Search">
            </div>
        
            <div>
            <a href = "showing result.php">
        <button type="submit" class="Search_btn"><i class="fa fa-search"></i> </button>
        </a>
            </div>
            </header>
            <!---header--->
    
<div class="div1 clearfix">

<div class="div2">

<h1> About Us </h1>
<div class="div3">


<img src="https://images.livemint.com/img/2020/12/07/600x338/N14GZ143_1607357410548_1607357418511.jpg " class="photo">


</div>

</div>


<div class="div4">

<p class="aboutp"> You are warmly welcome to <br>
www.greenproperties.lk. The <br>
leading property sales website in <br>
Srilanka. Plenty of house,lands <br>
and buildings with updated information <br>
for sell, buy or rent. Our main intentions <br>
to make an online platform for all <br>
your needs accordingly with high <br>
rate of user friendliness and accuracy.</p>


</div>


</div>

   <!---footer--->
   <footer>
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
</footer>
    <!---footer--->

</body>
</html>