<?php 
	include_once "core.php";
	include_once "database.php";

?>
<?php
include_once './database.php';

 if(isset($_POST['submit'])){

    $type = $_POST['card'];
    $number = $_POST['name'];
    $amount = $_POST['amount'];
    $date = $_POST['date'];
    $cvn = $_POST['cvn'];


    $sql = "INSERT INTO payment (type , number , ammount , expiredate , cvn ) 
            VALUES ('$type','$number','$amount','$date','$cvn');";
        if(mysqli_query($conn,$sql)){
            header("Location: index.php");
            
        }else{
        echo "error1";
        }
    }
?>    