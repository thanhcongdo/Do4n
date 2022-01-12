<?php     include('../config/config.php');   
$tenloaisanpham = $_POST['tenloaisanpham'];    
 $trangthai = 1;     
 if(isset($_POST['themloaisp'])){        
$sql_them = "INSERT INTO loaisanpham(tenloaisanpham,trangthai) VALUE ('$tenloaisanpham','$trangthai')";        
 mysqli_query($mysqli,$sql_them);     
header('Location:loaisanpham.php');     
} ?>