<?php 
	include_once "core.php";
	include_once "database.php";

?>
<!DOCTYPE html>
<html>
   <head>
      <title>Contact Us</title>
      <link rel="stylesheet" href="./STYLE/Contact Us.css">
      <link rel="stylesheet" href="./STYLE/hedrefooter.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   </head>

   <body>
      <!--header--> 
      <header>
         <hr>
         <section class="header">
             <div class="top-bar">
                 <img src="./Images/Logo.png">
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
     
         <div class="area1"></div>
       <div class="main">
       <div class="title">CONTACT US</div> <br>

       <div class="map"><iframe img align="right" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15843.194049543894!2d79.96418972629873!3d6.91467742006051!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae256db1a6771c5%3A0x2c63e344ab9a7536!2sSri%20Lanka%20Institute%20of%20Information%20Technology!5e0!3m2!1sen!2slk!4v1621868281051!5m2!1sen!2slk" width="500" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div><br>

       <div class="sub-title">CONTACT US </div> 
       <div class="detail">
          Green Properties (pvt) Ltd <br>
          No. 123, Silva Lane, <br>
          Kaduwela Road, <br>
          Malabe, <br>
          Colombo
       </div>

      

       <div class="sub-title">GENERAL NUMBER</div> 
       <div class="detail">
          +94 112 224 448 
       </div>

       <div class="sub-title">HOTLINE NUMBER</div>

       <div class="detail">
          +94 112 224 448 
       </div>

       <div class="sub-title">EMAIL</div>
       <div class="detail">
          info@greenproperties.lk 
       </div>

       <div class="social-media">FOLLOW US ON SOCIAL MEDIA</div><br>

      <div class="icons">

      <a href="https://www.facebook.com">
        <i class="fa fa-facebook-official" aria-hidden="true"></i>
         </a>

         <a href="https://www.instagram.com">
            <i class="fa fa-instagram" aria-hidden="true"></i>
         </a>

         <a href="https://www.linkedin.com">
            <i class="fa fa-linkedin-square" aria-hidden="true"></i>
         </a>
            
         <a href="https://www.twitter.com">
            <i class="fa fa-twitter-square" aria-hidden="true"></i>
         </a>

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
      

   </body>
</html>