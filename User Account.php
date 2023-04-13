<?php 
	include_once "core.php";
	include_once "database.php";

?>
<?php
include_once './database.php';

 if(isset($_POST['submit'])){
    $id = $_POST["id"]; 
    //$type = $_POST['user'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $province = $_POST['province'];
    $password = $_POST['password'];
    
   //  $image_name = $_FILES['image']['name'];
   //  $image_path = "./IMAGES/user/";
   //  $target_file = $image_path.$image_name;

    //if(move_uploaded_file($_FILES ["image"]["tmp_name"], $target_file)){

      $sql = "UPDATE useraccount SET name = '$name', phone = ' $phone' , address = '$address', province = '$province' , email = ' $email ', password = '$password' , type = ' $password' WHERE id = '$id'";
      if(mysqli_query($conn,$sql)){
         header("Location: User Account1.php");
      }else{
         echo "error";
      }
    //}

   
 }
?>