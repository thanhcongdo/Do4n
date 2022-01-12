
<?php
    include('../config/config.php'); 
    $id = $_POST['id'];
    $tenloaisanpham = $_POST['tenloaisanpham'];
   
        if(isset($_POST['sualoaisp'])){
        $sql_sualoaisp="UPDATE loaisanpham set tenloaisanpham='$tenloaisanpham' where id='$id'";     
        mysqli_query($mysqli,$sql_sualoaisp);
        header('Location:loaisanpham.php');
        }      
?>