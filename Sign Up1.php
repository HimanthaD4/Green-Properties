<?php 
	include_once "core.php";
	include_once "database.php";

?>
<!DOCTYPE html>
<html>

<head>
	<title>Sign Up</title>
	<link rel="stylesheet" href="./STYLE/Sign Up.css">
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
          	<a href="Sign In.php">Sign In </a>
          	
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
		<form method="POST"  action="sign up.php "   enctype="multipart/form-data" >

			<div class=title>Register for User Account</div>
			<div class="details">


				<div class="name">
					<span class="icon1"><i class="fa fa-user-o"></i></span>
					<input type="text" name="name" placeholder="Full Name" required>
				</div>


				<div class="email">
					<span class="icon2"><i class="fa fa-envelope-o"></i></span>
					<input type="text" name="email" placeholder="Email" required>
				</div>


				<div class="password">
					<span class="icon3"><i class="fa fa-key"></i></span>
					<input type="password" name="password" placeholder="Password" required>
				</div>


				<div class="confirm">
					<span class="icon4"><i class="fa fa-key"></i></span>
					<input type="password" name="password2" placeholder="Confirm Password" required>
				</div>

				<div class="user">
					<input type="radio" name="user" value="seller" requied> Seller
					<input type="radio" name="user" value="buyer" requied> Buyer
				  </div>
				
				
			</div>
			

			<div class="signup">
				<a href="./index.php">
				<input type="submit" name="submit" value="Sign Up">
				</a>	
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
						<span>Green Properties (pvt) Ltd,<br> No.123, Silva Lane,<br> Kaduwela Road, Malabe,<br>
							Colombo, Sri Lanka. </span>
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
					<P>You are warmly welcome to www.greenproperty.lk. The leading property sales website in Sri Lanka.
						Plenty of houses, lands and buildings with updated information for sell, buy or rent. Our main
						intention is to make an online platform for all your needs accordingly with high rate of user
						friendliness and accuracy.</P>
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