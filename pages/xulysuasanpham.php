
<?php
    include('../config/config.php'); 
      //$id = $_GET['ID'];
    $ID = $_POST['ID'];
    $tensanpham = $_POST['TenSanPham'];
    $loaisanpham = $_POST['loaisanpham'];
    $MoTa = $_POST['MoTa'];
    $gia = $_POST['Gia'];
    $tonkho = $_POST['TonKho'];
    
    // xử lý hình ảnh tải lên
    $permited = array('jpg','png','jpeg');
    $file_name = $_FILES['HinhAnh']['name'];
    $file_size = $_FILES['HinhAnh']['size'];
    $file_temp = $_FILES['HinhAnh']['tmp_name'];

    $div = explode('.',$file_name);
    $file_ext = strtolower(end($div));
    $unique_image = substr(md5(time()),0 ,10).'.'.$file_ext;
    $upload_anh = "../uploads/".$unique_image;
        if(isset($_POST['sua'])){
        move_uploaded_file($file_temp,$upload_anh);
        if(!empty($file_name)){
          $sql_suasp = "UPDATE sanpham SET sanpham.TenSanPham='$tensanpham', sanpham.MoTa='$MoTa', sanpham.Gia='$gia',
          sanpham.loaisanpham=(SELECT ID FROM loaisanpham where loaisanpham.tenloaisanpham='$loaisanpham'),sanpham.TonKho='$tonkho',sanpham.HinhAnh='$unique_image' WHERE ID='$ID'";
        }
        else{
          $sql_suasp = "UPDATE sanpham SET sanpham.TenSanPham='$tensanpham', sanpham.MoTa='$MoTa', sanpham.Gia='$gia',
          sanpham.loaisanpham=(SELECT ID FROM loaisanpham where loaisanpham.tenloaisanpham='$loaisanpham'),sanpham.TonKho='$tonkho' WHERE ID='$ID'";
        }
        mysqli_query($mysqli,$sql_suasp);
        header('Location:sanpham.php');
        }      
?>