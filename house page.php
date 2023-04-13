<?php 
	include_once "core.php";
	include_once "database.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Green Propertieshouse</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./STYLE/hedrefooter.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style/house.css">
</head>
<!---header--->
<body>
    <header>
    <hr>
    <section class="header">
        <div class="top-bar">
            <img src="./images/Logo.png">
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

    <div class="d2">
        <p class="p1">Houses and Apartments</p>
        
                </div>

                <div class="g_block">


                    <div class="gallery">
                        <img src="./images/house1.jpg" alt="House sale"class="i1">
                        <div class="desc">
                            <p class="size"><b>Sale</b></p>
                            <p class="type"><b>House</b></p>
                            <a class="link" href=""><b>Super Bargain in Colombo 7 for $1190. Great for Residential ...</b></a>
                            <p>Fully air conditioned, Four bedrooms en suite, at Bullers Lane in a prestigious location amidst of several dip..<a href=""> See more>></a></p>
                        </div>
                    </div>
                    
                    
                        <div class="gallery">
                    <img src="images/house2.jpg" alt="House lease" class="i2">
                    <div class="desc">
                        <p class="size"><b>Lease</b></p>
                        <p class="type"><b>Apartment</b></p>
                        <a class="link" href=""><b>  20000 Sq Ft @ Commercial Building For Lease at Battaramulla ...</b></a>
                        <p>1. Distance to Ja Ela Highway interchange is 5.0 km 2. Distance from Ekala clock tower 1.2 km 3. Distance <a href=""> See more>></a></p>
                    </div>
                    </div>
                    
                    
                    
                    <div class="gallery">
                    <img src="images/house3.jpg" alt="House Rent" class="i3">
                    <div class="desc">
                        
                        <p class="size"><b>Rent</b></p>
                        <p class="type"><b>House</b></p>
                        <a class="link" href=""><b>Brand New One Bedroom Apartment in Border Dehiwala</b></a>
                        <p>This is situated at the border of Dehiwala and very beginning of Hotel Road, Mount Lavinia. This mentione... <a href=""> See more>></a></p>
                    </div>
                    </div>
                    </div>
                    

                    <div class="features">
                        <p >Featured Houses and Apartments</p>
                        </div>
                        <div class="f_block">
                        <div class="f_gallery">
                        <img class="im" src="./images/h1.jpg">
                        
                        </div>
                        
                        <div class="f_gallery">
                            <img class="im" src="./images/h2.jpg">
                            
                            </div>
                            <div class="f_gallery">
                                <img class="im" src="./images/h4.jpeg">
                                
                                </div>
                                <div class="f_gallery">
                                    <img class="im" src="./images/h3.jpg">
                                    
                                    </div>
                                    <div class="f_gallery">
                                        <img class="im" src="./images/h5.jpg">
                                        
                                        </div>
                                    </div>

                                    <div class="box">
                                        <ul>
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li><a href="#">>></a></li>
                                        
                                        </ul>
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
                <a href="https://www.linkedin.com""><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
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