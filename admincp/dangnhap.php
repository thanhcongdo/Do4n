<?php 
    session_start();
    include('../config/config.php');
    if(isset($_POST['dangnhap'])) 
    {
        $tentaikhoan = addslashes($_POST['TenTaiKhoan']);
        $matkhau = addslashes($_POST['MatKhau']);


        if (!$tentaikhoan || !$matkhau) {
            echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. <a href='javascript: history.go(-1)'>Trở lại</a>";
            exit;
        }


        $sql_dangnhap = "SELECT TenTaiKhoan,MatKhau,IsAdmin FROM taikhoan WHERE TenTaiKhoan='$tentaikhoan' AND TrangThai ='1' ";
        $query = mysqli_query($mysqli,$sql_dangnhap);    
        if (mysqli_num_rows($query) == 0) {
        echo "Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Xác nhận</a>";
        exit;
                                             }
        //Lấy mật khẩu trong database ra
        $row = mysqli_fetch_array($query);

        //So sánh 2 mật khẩu có trùng khớp hay không
         if ($matkhau != $row['MatKhau']) {
        echo "Mật khẩu không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
                                            }
        

        $_SESSION['TenTaiKhoan'] = $tentaikhoan;
        if ($row['IsAdmin']!=0){
            header('Location:admin.php');
            die();
        }
        else
        {
            header('Location:../index.php');
            die();
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="dangnhap.css">

<title>ĐăngNhập</title>
<body>
    <h1><i></i></h1>
    <div class="loginbox">
    <img src="imgs/avatarlogin.png" class="avatar">
        <h1>Đăng Nhập</h1>

        <form action="" method="POST">
            <p>Tên Tài Khoản</p>
            <input type="text" name="TenTaiKhoan" placeholder="Tên tài khoản">
            <p>Mật khẩu</p>
            <input type="password" name="MatKhau" placeholder="Mật khẩu">
            <input type="submit" name="dangnhap" value="Đăng nhập"><br>
            <a href="forgotpass.php">Forgot your password?</a><br>
            <a href="dangki.php">Don't have an account?</a>
        </form>

    </div>
</body>

</head>
</html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<style> 
.body{
    background-image:url('../img/backgroundlogin.jpg')
}
</style>