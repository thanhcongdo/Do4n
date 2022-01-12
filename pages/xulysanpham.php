<?php
    include('../config/config.php');
    $tensanpham = $_POST['tensanpham'];
    $loaisanpham = $_POST['loaisanpham'];
    $mota = $_POST['mota'];
    $gia = $_POST['gia'];
    $tonkho = $_POST['tonkho'];
    $hinhanh = $_POST['hinhanh'];
    
    // xử lý hình ảnh tải lên
    $permited = array('jpg','png','jpeg');
    $file_name = $_FILES['HinhAnh']['name'];
    $file_size = $_FILES['HinhAnh']['size'];
    $file_temp = $_FILES['HinhAnh']['tmp_name'];

    $div = explode('.',$file_name);
    $file_ext = strtolower(end($div));
    $unique_image = substr(md5(time()),0 ,10).'.'.$file_ext;
    $upload_anh = "../uploads/".$unique_image;

    $trangthai = 1;
        if(isset($_POST['themsp'])){
        move_uploaded_file($file_temp,$upload_anh);
        $sql_themsanpham = "INSERT INTO sanpham(tensanpham,loaisanpham,mota,gia,tonkho,trangthai,hinhanh)
        VALUE ('$tensanpham',(SELECT ID FROM loaisanpham where loaisanpham.tenloaisanpham='$loaisanpham'),'$mota','$gia','$tonkho','$trangthai','$unique_image')";
        mysqli_query($mysqli,$sql_themsanpham);
        header('Location:sanpham.php');
        }
?>




