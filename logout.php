<?php 	

    include "database.php";
    include "core.php";
    session_destroy();
    echo "You have logged out successfully!<br/>";
    header("Location:index.php");

?>