<?php 
	include_once "core.php";
	include_once "database.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Green Propertiesearch</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./STYLE/hedrefooter.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style/search.css">
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


    <div class="show">
        <p>Showing Results</p>
    </div>


    <div class="show_gallery">
        <div class="category1">
        <div class="gallery">
        <img class="i1" src="./images/s1.jpg">
        <div class="desc">
            <p class="size"><b>Sale</b></p>
            <p class="type"><b>House</b></p>
            <a class="link" href=""><b>House for Sale with 80 Perches Land in Dompe</b></a>
            <p>Two storied house 4 bedrooms 3 bathrooms Sitting T.V. Room Dinning area Pantry kitchen Servants qu..<a href=""> See more>></a></p>
        </div>
    </div>
    <div class="gallery">
        <img class="i2" src="./images/s2.jpeg">
        <div class="desc">
            <p class="size"><b>Sale</b></p>
            <p class="type"><b>House</b></p>
            <a class="link" href=""><b>HOUSE FOR SALE AT Kirulapana</b></a>
            <p>20 Perches 4 Bedrooms Upstairs and downstairs Pantry available Garden Barbeque 2+ car parking<a href=""> See more>></a></p>
        </div>
    </div>
</div>

<div class="category2">
    <div class="gallery">
        <img class="i3" src="./images/s4.jpg">
        <div class="desc">
            <p class="size"><b>Sale</b></p>
            <p class="type"><b>House</b></p>
            <a class="link" href=""><b>House with land sale in chilaw</b></a>
            <p>The main house includes the following; Top floor : 4 bedrooms with attached bathrooms and large balconi..<a href=""> See more>></a></p>
        </div>
    </div>

    <div class="gallery">
        <img class="i4" src="./images/s3.jpg">
        <div class="desc">
            <p class="size"><b>Sale</b></p>
            <p class="type"><b>House</b></p>
            <a class="link" href=""><b>Single Story House for Sale in Minuwangoda</b></a>
            <p>Six bedrooms with attached bathrooms large garden area Spacious and quiet neighbourhood Convenient loca...  <a href=""> See more>></a></p>
        </div>
    </div>
</div>
    </div>

    <div class="featured">
        <div class=f_topic>
<p>Featured</p>
</div>
        <div class="f_gallery">
        <img class="if" src="./images/f1.webp">
    </div>

        <div class="f_gallery">
        <img class="if" src="./images/f2.webp">
    </div>

        <div class="f_gallery">
        <img class="if"  src="./images/f3.webp">
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