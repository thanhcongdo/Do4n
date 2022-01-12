<?php
    include('../config/config.php'); 
    $ID = $_GET['ID'];        
          $sql_suasp = "UPDATE sanpham SET trangthai=0 WHERE ID='$ID'";        
        mysqli_query($mysqli,$sql_suasp);
        header('Location:sanpham.php');         
    ?>