<?php 
	include_once "core.php";
	include_once "database.php";
     if(isset($_SESSION['user_id'])){
        header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sign In</title>
</head>


    <link rel="stylesheet" href="./STYLE/Sign In.css">
	<link rel="stylesheet" href="./STYLE/hedrefooter.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<body>

	<!---header--->
    <header>
    <hr>
    <section class="header">
        <div class="top-bar">
            <img src="./IMAGES/Logo.png">
            <div class="top-button">
				
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
<form action="#" method = "post" >

<?php 
                if($_SERVER['REQUEST_METHOD'] == "POST"){
                    $email = $_POST['Email'];
                    $pass = $_POST['password'];
                    $password =$pass;
                    $sql = "SELECT * FROM useraccount WHERE email='$email' AND password='$password'";
                    $result = $conn->query($sql);
    
                    if($result->num_rows > 0){
                        
                        $row=$result->fetch_assoc();
                        $_SESSION["user_id"] = $row['id']; 
                        header("Location: User Account1.php");
                    }else{
                        echo "<script>alert('User Name or Password Incorrect')</script>";
                    }
                    // echo "Error: 3" . $sql . "<br>" . mysqli_error($con);
                }

            ?>

	<div class = "title" >Sign In for Your Account</div>
	<div class="details">
		<div class="email">
	   <span class="icon" ><i class="fa fa-envelope-o"></i></span>
	   <input type="text" name="Email" placeholder="Email" required>
	   </div>
		<div class="password">
	   <span class="icon2"><i class="fa fa-key"></i></span>
	   <input type="password" name = "password" placeholder="Password" required>
		   </div>
	</div>
	<div class="signin">
	   <input type="submit"  value="Sign In">
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