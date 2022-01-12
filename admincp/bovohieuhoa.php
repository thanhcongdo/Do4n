<?php
    include('../config/config.php'); 
    $ID = $_GET['ID'];        
          $sql_taikhoan = "UPDATE taikhoan SET trangthai=1 WHERE ID='$ID'";        
        mysqli_query($mysqli,$sql_taikhoan);
        header('Location:quanlitaikhoan.php');         
    ?>