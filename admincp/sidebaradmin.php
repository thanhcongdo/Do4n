<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sliding Menu</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@400&display=swap" rel="stylesheet">
</head>
<body>
    <div class="main-menu">
        <ul>
            <section class="home">
                <a href="../../DoAn/admincp/admin.php"><li class="menu-item"><i class="fa fa-home"></i>Trang Chủ Admin</li></a>
                <a href="../pages/sanpham.php"><li class="menu-item"><i class="fa fa-bell"></i>Sản Phẩm</li></a>
                <a href="../pages/loaisanpham.php"><li class="menu-item"><i class="fa fa-paper-plane"></i>Loại Sản Phẩm</li></a>
                <a href="../../DoAn/admincp/quanlitaikhoan.php"><li class="menu-item"><i class="fa fa-globe"></i>Quản Lý Tài Khoản</li></a>
                <a href="https://github.com/thanhcongdo/Do4n.git"><li class="menu-item"><i class="fa fa-github"></i>Github</li></a>
                <a href="https://facebook.com"><li class="menu-item"><i class="fa fa-facebook"></i>Facebook</li></a>
                <a href="https://twitter.com"><li class="menu-item"><i class="fa fa-twitter"></i>Twitter</li></a>
                <a href="https://www.instagram.com/"><li class="menu-item"><i class="fa fa-instagram"></i>Instagram</li></a>
                <a href="../index.php"><li class="menu-item"><i class="fa fa-sign-out"></i>Đăng Xuất</li></a>
            </section>
          
        </ul>
    </div>
</body>
</html>
<style>
    *, body{
    margin:0;
    padding:0;
}
body{
    background-color: #ebebeb;
    font-family: 'Fira Sans', sans-serif;
}

.main-menu{
    background-color: #fff;
    border-top-right-radius: 10px;
    border-bottom-right-radius: 10px;
    box-shadow: 0px 0px 20px #d4d4d4;

    width: 70px;
    height: 100vh;

    position: fixed;
    top:0;
    left:0;
    
    overflow-x: hidden;
    overflow-y: hidden;
    white-space: nowrap;
    
    transition: .3s ease;
}

.main-menu:hover{
    width : 250px;
    overflow-y: scroll;
}

.main-menu .menu-item{
    padding: 10px;
}
.main-menu .menu-item:hover{
    background-color: #d6d6d6;
    cursor: pointer;
}

.main-menu .menu-item .fa{
    color: gray;
    width:40px;
    font-size: 25px;
    padding: 10px;
}

.main-menu .menu-item:hover > .fa{
    color: #1d0daa;
}

section.home{
    background-color: #f3f3f3;
}

::-webkit-scrollbar {
    width: 5px;
  }

  ::-webkit-scrollbar-track {
    background: transparent !important;
  }
  
  ::-webkit-scrollbar-thumb {
    background: #bbbbbb;
    border-radius: 10px;
  }
</style>