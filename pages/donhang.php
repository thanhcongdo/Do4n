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
          <a class="nav-link" href="">Sản phẩm mới</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../admincp/dangnhap.php">Đăng nhập</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../admincp/dangki.php">Đăng kí</a>
        </li>
      </ul>
    </div>
  </div>
  <form action="pages/timkiem.php">
    
    <div class="search">
        <input class="form-control mr-sm-2" name="timkiem"  type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</nav>

<header>
<?php
    session_start();
    include('thuvien.php');
    if(isset($_POST['dongydathang']) && ($_POST['dongydathang'])){
        //lấy thông tin kh
        $HoTen=$_POST['hoten'];
        $DiaChi=$_POST['diachi'];
        $SĐT=$_POST['dienthoai'];
        $Email=$_POST['email'];
        $TongTien=tongdonhang();
        $pttt=0;

        //tạo đơn hàng mới
        $iddonhang=taodonhang($HoTen, $DiaChi, $SĐT, $Email, $TongTien, $pttt);

        //lấy thông tin giỏ hàng từ session + id đơn hàng vừa tạo
        //insert vào bảng giỏ hàng
        for($i=0; $i< sizeof($_SESSION['giohang']); $i++){
            $TenSP=$_SESSION['giohang'][$i][1];
            $HinhSP=$_SESSION['giohang'][$i][0];
            $DonGia=$_SESSION['giohang'][$i][2];
            $SoLuong=$_SESSION['giohang'][$i][3];
            $ThanhToan=$DonGia*$SoLuong;
            taogiohang($TenSP, $HinhSP, $DonGia, $SoLuong, $ThanhToan, 0);
        }


        //show đơn hàng
        $ttkh='Bạn đã tạo thành công. <br><h1>Mã đơn hàng:""</h1>
                <h2>THÔNG TIN NHẬN HÀNG</h2>
                <table class="thongtinnhanhang">
                <tr>
                    <td width="20%">Họ tên <span style="color: red;">*</span></td>
                    <td>'.$HoTen.'</td>
                </tr>
                <tr>
                    <td>Địa chỉ <span style="color: red;">*</span></td>
                    <td>'.$DiaChi.'</td>
                </tr>
                <tr>
                    <td>Điện thoại <span style="color: red;">*</span></td>
                    <td>'.$SĐT.'</td>
                </tr>
                <tr>
                    <td>Email <span style="color: red;">*</span></td>
                    <td>'.$Email.'</td>
                </tr>
                </table>';
                $ttgh=showgiohang();


        //unset giỏ hàng session

        //echo "Bạn đã tạo thành công. Đơn hàng của bạn là: ";
    }
?>
<!DOCTYPE html>
<html lang="en">


    <body>
            <div class="container">
                <div class="cart-top-wrap">
                    <div class="cart-top">
                        <div class="cart-top-cart cart-top-item">
                        <i class="fas fa-shopping-cart"></i>
                        </div>
                        <div class="cart-top-adress cart-top-item">
                        <i class="fas fa-map-marker-alt "></i>
                        </div>
                        <div class="cart-top-payment cart-top-item">
                        <i class="fas fa-money-check-alt"></i>
                        </div>
                    </div>
                </div>
            </div>
            <table class="table table-bordered">
    <tr>
    <th>STT</th>
    <th>Hình</th>
    <th>Tên sản Phẩm</th>
    <th>Đơn giá</th>
    <th>Số lượng</th>
    <th>Thành tiền</th>
    <th>Xoá</th>
    </tr>
            </table>
        
        <h1>GIỎ HÀNG</h1>
        <table class="table table-bordered">
             
            <tr>
            <th>STT</th>
            <th>Hình</th>
            <th>Tên sản Phẩm</th>
            <th>Đơn giá</th>
            <th>Số lượng</th>
            <th>Thành tiền</th>
             <th>Xoá</th>
            </tr>
            <?php $ttgh ?>
        </table>
        <?php echo $ttkh;?>
</body>

</html>
<?php 
    include('footer.php');
?>
<style>


</style>