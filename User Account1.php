<?php 
	include_once "core.php";
	include_once "database.php";
  if(!isset($_SESSION['user_id'])){
    header("Location: index.php");
}else{
  $user_id=$_SESSION["user_id"];
}


?>
<!DOCTYPE html>
<html>

<head>
  <title>User Account</title>
  <link rel="stylesheet" href="./STYLE/User Account.css">
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
            if(isset($_SESSION['user_id'])){
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
    <form action="./User Account.php" method="POST" enctype="multipart/form-data">
    
      <div class="title">USER ACCOUNT</div>


      <div class="page">
        <img align="left" class="image" src="./IMAGES/User logo.png" id="profile_image" height="250" width="250"><br>
      </div>


      <div class="newAd">
        <a href="./New Ad.php">Click here</a><br>
        <p>Create New Ad</p>
      </div>

      <div class="change">
      <label for="file-ip-2">Change</label>
      <input type="file" value="Change" name="image" id="file-ip-2" onchange="previewImage(event);">
      </div>
      
      <?php 
                    $sql ="SELECT * from useraccount WHERE id='$user_id'" ; 
                    if(mysqli_query($conn, $sql)){ 
                    $result=mysqli_query($conn, $sql); 
                    while($row = mysqli_fetch_assoc($result)){ 
                        $oid = $row['id']; 
                        if (isset($_POST['id']))
           
                ?>

                    <input type="text" id="id" name="id" value="<?php echo $row["id"]?>"hidden>
      <div class="details">

        <div class="user">

        <?php
            
        ?>
        
          <input type="radio" name="user" value="seller" requied> Seller
          <input type="radio" name="user" value="buyer" requied> Buyer
          
        </div>

        <div class="boxset">
          <div style="display:flex">
            <div style="width:33.3%">
              <div class="sub-topic">Full Name <br> <input type="text" class="box" value="<?php echo $row["name"]?>" name="name"
                  required>
              </div>
              <div class="sub-topic">Address <br> <input type="text" class="box" value="<?php echo $row["address"]?>"  name="address"
                required>
            </div>
              <div class="sub-topic">Email <br> <input type="email" class="box" value="<?php echo $row["email"]?>"  name="email"
                  required>
              </div>
            </div>

            <div style="width:33.3%">
              <div class="sub-topic">Phone Number <br> <input type="text" class="box" value="<?php echo $row["phone"]?>"
                  name="phone" required> </div>


              <div class="sub-topic">Province <br>
                <select name="province" value="<?php echo $row["province"]?>" class="box">
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

              <div class="sub-topic">Password <br> <input type="password"  name="password" class="box"
              value="<?php echo $row["password"]?>" required>
              </div>
              

            </div>
          </div>
        </div>

      </div>

      <div class="save">
        <input type="submit" name="submit" value="Save Changes">
      </div>
      <?php
                    }
                  }
              ?>                  

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
            <span>Green Properties (pvt) Ltd,<br> No.123, Silva Lane,<br> Kaduwela Road, Malabe,<br> Colombo, Sri Lanka.
            </span>
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
          <P>You are warmly welcome to www.greenproperty.lk. The leading property sales website in Sri Lanka. Plenty of
            houses, lands and buildings with updated information for sell, buy or rent. Our main intention is to make an
            online platform for all your needs accordingly with high rate of user friendliness and accuracy.</P>
        </div>
      </div>

    </div>
    <div class="footer-bottom">
      &copy; GreenProperties
    </div>
  </footer>
  <!---footer--->

  <script>
    function previewImage(event) {
      var image = new FileReader;
      image.onload = function () {
        var preview = document.getElementById('profile_image');
        preview.src = image.result;
      }
      image.readAsDataURL(event.target.files[0]);
    }
  </script>

</body>

</html>