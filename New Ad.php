<?php 
	include_once "core.php";
	include_once "database.php";

?>
<!DOCTYPE html>
<html>
<head>
	<title>New Ad</title>
  <link rel="stylesheet" href="./STYLE/New Ad.css">
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
    <form action="New Ad1.php" method = "POST" enctype="multipart/form-data">


      <h2>New Advertisement</h2>
      <div class="sub-topic">Select ad type <br>

        <select name="propertytype"  class="box">
           <option value="House">House</option>          
           <option value="Land">Land</option>      
           <option value="Apartment">Apartment</option>
        </select> 	
     </div>
      

      <div class="sub-topic">Province <br>
        <select name="Province" class="box">
           <option value="Central Province">Central Province</option>
           <option value="Estren Province">Estren Province</option>
           <option value="Northren Province">Northren Province</option>
           <option value="North Central Province">North Central Province</option>
           <option value="North Westren Province">North Westren Province</option>
           <option value="Sabaragamuwa Province">Sabaragamuwa Province</option>
           <option value="Southren Province">Southren Province</option>
           <option value="Uva Province">Uva Province</option>
           <option value="Westran Province">Westran Province</option>
        </select> 	
     </div>
    
     
       <div class="Upload-img">

        <h4 class="upload-topic"> Upload Your Images</h4>
        <div class="center">
          <div class="form-input">
            
            <label for="file-ip-1">Upload Image</label>
            <input type="file" name="upload1"  id="file-ip-1" accept="image/*" onchange="showPreview(event);">
            <div class="preview">
              <img id="file-ip-1-preview">
            </div>
          </div>
        </div>
        
        <div class="center">
          <div class="form-input">
            <label for="file-ip-1">Upload Image</label>
            <input type="file" name="upload2" id="file-ip-1" accept="image/*" onchange="showPreview(event);">
            <div class="preview">
              <img id="file-ip-1-preview">
            </div>
          </div>
        </div>
    
        <div class="center">
          <div class="form-input">
            <label for="file-ip-1">Upload Image</label>
            <input type="file" name="upload3" id="file-ip-1" accept="image/*" onchange="showPreview(event);">
            <div class="preview">
              <img id="file-ip-1-preview">
            </div>
          </div>
        </div>
        
       </div>

      
      <div class="addes">
        <h3>Ad Description</h3><br>
          <textarea class="wrapper" name = "message" rows="5" cols="50" placeholder="Type your description here"></textarea> 
      </div>


      <div class="pay_post">
 
       <input  type="submit" value="Post and pay" name="submit">
      </div>
     
   
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