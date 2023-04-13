<?php 
	include_once "core.php";
	include_once "database.php";

?>
<?php
    include_once './database.php';

    if(isset($_POST['submit'])){

       
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password2 = $_POST['password2'];
        $type = $_POST['user'];
        

        $sql = "INSERT INTO useraccount (name , email , password , type ) 
                VALUES ('$name','$email','$password','$type');";
        if(mysqli_query($conn,$sql)){
           
                        
                
                header("Location: User Account1.php");
            }else{
                
            }
    }

?>

