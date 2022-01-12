<?php
    include('../config/config.php'); 
    $ID = $_GET['id'];        
          $sql_xoaloaisp = "UPDATE loaisanpham SET trangthai=0 WHERE ID='$ID'";        
        mysqli_query($mysqli,$sql_xoaloaisp);
        header('Location:loaisanpham.php');         
    ?>