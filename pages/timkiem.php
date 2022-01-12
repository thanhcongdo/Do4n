


<!-- Navbar-->
<header>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">Nhóm 5 Gia Dụng</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item active">
          <a class="nav-link" href="../index.php">Trang Chủ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../pages/fullsanpham.php">Tất cả sản phẩm</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../pages/sanphammoi.php">Sản phẩm mới</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../admincp/dangnhap.php">Đăng nhập</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../admincp/dangki.php">Đăng kí</a>
        </li>
      </ul>
    </div>
    <form action="timkiem.php">
    
    <div class="search">
       <input class="form-control mr-sm-2" name="timkiem"  type="search" placeholder="Tìm Kiếm Sản Phẩm" aria-label="Search">
       <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="width: 100%;">Search</button>
  </div>
 
    
</nav>

<header>

  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" style="background-image:url('https://tainghetruewireless.files.wordpress.com/2019/07/nagakawa_banner-tin-tucc9bcc81c-1.jpg') ">
        <div class="carousel-caption">
          <h5>Siêu sale 50%</h5>
          <p>Diễn ra vào 12 - 13/01/2022</p>
        </div>
      </div>
      <div class="carousel-item" style="background-image: url('http://thietbicongnghiepvn.org/wp-content/uploads/2021/03/1.jpg')">
        <div class="carousel-caption">
          <h5>Sản phẩm đa dạng</h5>
          <p>Từ nhiều thương hiệu nổi tiếng trên khắp thế giới. </p>
        </div>
      </div>
      <div class="carousel-item" style="background-image: url('https://shopbigsale.com/wp-content/uploads/2018/01/ma-giam-gia-adayroi-do-gia-dung.jpg')">
        <div class="carousel-caption">
          <h5>Gia dụng giá tốt</h5>
          <p>Không đâu tốt hơn. Nhiều ưu đãi hấp dẫn.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</header>
<!-- Page Content -->
<section class="py-5">
  <div class="container">
    <h1 class="fw-light">ĐỒ GIA DỤNG GIÁ RẺ</h1>
    <p class="lead">Đồ án an khang Tết thịnh vượng </a>!</p>
  </div>
</section>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</header>

<!DOCTYPE html>
<html>
    <head>
        <title> Gia Dụng Giá Rẻ</title>
    </head>
    <body>
    <?php 
 $servername     =   'localhost';
 $username       =   'root';
 $password       =   '';
 $dbname         =   "dogiadung";
 $connection     =   mysqli_connect($servername, $username, $password,"$dbname");
 $tensp = $_GET['timkiem'];
$select = "SELECT sanpham.ID,sanpham.TenSanPham , sanpham.MoTa,sanpham.MoTa,sanpham.Gia,sanpham.TonKho,sanpham.HinhAnh,loaisanpham.tenloaisanpham FROM sanpham, loaisanpham where sanpham.loaisanpham=loaisanpham.id AND sanpham.TenSanPham LIKE '%$tensp%' AND sanpham.trangthai='1' ";
$result = mysqli_query($connection,$select);
?> 

<?php
include('../config/config.php');
    if(isset($_GET['ID'])) {
      $id = $_GET['ID'];
    }
?>

<div class="container">
    <p class="lead">Tất Cả Sản Phẩm   "<?php echo $tensp ?>" Bạn Cần Tìm </p>
  </div>
  <div class="d-flex flex-wrap">
  <?php
    $i = 0;
    while($row = mysqli_fetch_array($result)){
        $i++;
  ?>
  
  
    <div class="loginbox">
                            <a href="../pages/chitietsanpham.php?page_layout=chitiet&ID=<?php echo $row['ID'] ?>" method="POST" class="row img">
                            <img width="300" height="300" src="../uploads/<?php echo $row['HinhAnh']?>"/> 
                            </a>
                            <h5><a ><?php echo $row['TenSanPham']?></a></h5>
                            <p><span><?php echo  number_format($row['Gia'] ). 'đ' ?></span></p>
                            <form action="/DoAn/pages/cart.php" method="post">
                                <input type="number" name="soluong" min="1" max="20" value="1">
                                <p><input type="hidden" name="tensp" value="<?php echo $row['TenSanPham']?>"></p>
                                <button type="hidden" class="btn btn-outline-warning" name="addcart" value="<?php echo $row['Gia']?>"> Đặt hàng</button>
                                <input type="hidden" name="hinh" value="<?php echo $row['HinhAnh']?>">
                            </form>
                        </div>
   
  <?php
  }
  ?>
  </div>
    </body>

</html>

<?php 
    include('footer.php');
?>
<style>
.loginbox{
   align-items: center;
   text-align: center;
   margin-left: 8%;
   margin-bottom: 4%;
}
</style>
<style>
 .carousel-item {
  height: 60vh;
  min-height: 350px;
  background: no-repeat center center scroll;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: contain;
  transition: -webkit-transform 2s ease;
  transition: transform 2s ease;
  transition: transform 2s ease, -webkit-transform 2s ease;
}
</style>