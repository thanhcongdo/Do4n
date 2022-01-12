<?php
  include('../config/config.php');
    $hoten = $_POST['HoTen'];
    $tentaikhoan = $_POST['TenTaiKhoan'];
    $matkhau = $_POST['MatKhau'];
    $email = $_POST['Email'];
    $sdt = $_POST['SDT'];
    $diachi = $_POST['DiaChi'];
    $IsAdmin =  0;
    $TrangThai = 1;

    $sql_dangky = "SELECT TenTaiKhoan FROM taikhoan WHERE TenTaiKhoan='$tentaikhoan'";
    $query = mysqli_query($mysqli,$sql_dangky); 
    $messagetb = "Tài khoản đã tồn tại!";
    $messagetc = "Đăng kí thành công!";
 
    if (mysqli_num_rows($query) !=0 ) {
      echo "<script type='text/javascript'>alert('$message') ; window.location='dangki.php' </script>";
      exit;
      
                                         }
    else{
      
  if(isset($_POST['dangky'])) {
    $sql_dangky = "INSERT INTO taikhoan(HoTen,TenTaiKhoan,MatKhau,Email,SDT,DiaChi,IsAdmin,TrangThai) 
    VALUES ('$hoten','$tentaikhoan','$matkhau','$email','$sdt','$diachi','0','1')";
    mysqli_query($mysqli,$sql_dangky);
 
 
    echo "<script type='text/javascript'>alert('$messagetc') ; window.location='dangnhap.php' </script>";
    exit;

    }
  }
?>