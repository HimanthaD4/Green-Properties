<?php 
	include_once "core.php";
	include_once "database.php";

?>

<?php
    if(isset($_POST['submit'])){
        
        $type = $_POST['propertytype'];
        $province = $_POST['Province'];
       // $img1 = $_POST['upload1'];
      //  $img2 = $_POST['upload2'];
       // $img3 = $_POST['upload3'];
        $des = $_POST['message'];

/*
        $image_name = $_FILES['upload1']['name'];
        $image_path = "./IMAGES/ad/";
        $target_file = $image_path.$image_name;

        if(move_uploaded_file($_FILES ["image1"]["tmp_name"], $target_file))
        
        $image_name = $_FILES['upload2']['name'];
        $image_path = "./IMAGES/ad/";
        $target_file = $image_path.$image_name;

        if(move_uploaded_file($_FILES ["image2"]["tmp_name"], $target_file))
        
        $image_name = $_FILES['upload3']['name'];
        $image_path = "./IMAGES/ad/";
        $target_file = $image_path.$image_name;

        if(move_uploaded_file($_FILES ["image3"]["tmp_name"], $target_file))
        */
        
        {

        $sql = "INSERT INTO newadvetiesment ( adType ,province ,description )
                VALUES ('$type','$province','$des');";
   
            if(mysqli_query($conn,$sql)){
                
                header("Location: Online Payment1.php");
              
             }else
             {
              echo "error1";
              }     

    }       
}


?>