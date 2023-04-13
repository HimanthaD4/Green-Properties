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
    <link rel="stylesheet" href="./STYLE/hedrefooter.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./style/land.css">
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
        <p class="p1">Lands</p>
        
                </div>
                <div class="gallery">
                    <img src="images/land 2.jpg" alt="Land sale"class="i1">
                    <div class="desc">
                        <p class="size"><b>38.2 P</b></p>
                        <p class="type"><b>Bare Land</b></p>
                        <a class="link" href=""><b>Valuble land for sale in Henamulla</b></a>
                        <p>A 38.2 Perch square block of residential land situated in Henamulla, Panadura facing the Bolgoda River<a href=""> See more>></a></p>
                    </div>
                </div>

                <div class="gallery">
                    <img src="images/sale.jpeg" alt="Land rent" class="i2">
                    <div class="desc">
                        <p class="size"><b>92 P</b></p>
                        <p class="type"><b>Bare Land</b></p>
                        <a class="link" href=""><b>Ekala prime block</b></a>
                        <p>1. Distance to Ja Ela Highway interchange is 5.0 km 2. Distance from Ekala clock tower 1.2 km 3. Distance <a href=""> See more>></a></p>
                    </div>
                    </div>

                    <div class="gallery">
                        <img src="images/land 3.jpg" alt="Land lease" class="i3">
                        <div class="desc">
                            
                            <p class="size"><b>2 Acres</b></p>
                            <p class="type"><b>Bare Land</b></p>
                            <a class="link" href=""><b>Kandy city!!Prime properties</b></a>
                            <p>Super Land in Kandy City!!! Great View, Prime Property by Asiri Hospital. Only 25 Lakhs a perch, 2 blocks left.  <a href=""> See more>></a></p>
                        </div>
                        </div>

                        <div class="features">
                            <p class="p4"><b>Featured Lands</b></p>
                            </div>
                            <div class="f_gallery">
                                <img class="im" src="images/img 5.jpg">
                                
                                </div>
                                <div class="f_gallery">
                                    <img class="im" src="images/img4.jpeg">
                                    
                                    </div>
                                    <div class="f_gallery">
                                        <img class="im" src="images/img6.jpg">
                                        
                                        </div>
                                        <div class="f_gallery">
                                            <img class="im"src="images/img 7.jpg">
                                            
                                            </div>
                                            <div class="f_gallery">
                                                <img class="im" src="images/img8.jpg">
                                                
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