<?php 
	include_once "core.php";
	include_once "database.php";

?>
<!DOCTYPE html>
<html>
   <head>
      <title>Online Payment</title>
      <link rel="stylesheet" href="./STYLE/Online Payment.css">
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
                <a href="#">Sign Out </a>
                <a href="./User Account.php">Profile</a>
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
  

    <div class="area1"></div>
    <div class="main">
        <form method="POST" action="Online Payment.php">
       <div class="title" >Online Payment</div>

<div class="details">
    <div class="btn">
        <p class="p1">Card Type</p> <p class="p2">:</p> <input type="radio"  name="card"  value="Credit Card" requied> <img src="./IMAGES/visa card.png" height="20" width="45">
        <input type="radio"  name="card"  value="Debit Card" requied> <img src="./IMAGES/master card.png" height="20" width="38">
    </div>
    <div class="inputDetails">
        <div class="Cnumber">
            <p class="p1">Card Number</p><p class="p2">:</p> <input type="text" name="name" class="det" placeholder="Valid Card Number">
        </div>
       <br>
        <div class="amount">
            <p class="p1">Amount</p><p class="p2">:</p>  <input type="text" name="amount" class="det" placeholder="Rs 00.00">
        </div>
        <br>
        <div class="dateNmounth">
            <p class="p1">Expire Month and Year</p> <p class="p2">:</p>   <input type="text" name="date" class="det" placeholder="MM / YY"> 
        </div>  
        <br>
        <div class="cvn">
            <p class="p1">CVN</p><p class="p2">:</p>  <input type="text" name="cvn" class="det" placeholder="000">
        </div>
        <br>
    </div>
</div>
    <div class="agree"> 
        <input type="radio" >I here by authorize the debit to my master/visa account in favor of Green Properties (pvt) Ltd.
    </div>
    
    <div class="submit">
        <input type="submit" name="submit" value="Submit">
    </div>
 </form>
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