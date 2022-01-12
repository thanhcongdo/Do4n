<?php
    session_start();
    include ('thuvien.php');
    if(!isset($_SESSION['giohang'])) $_SESSION['giohang']=[];
    //làm rỗng giỏ hàng
    if(isset($_GET['delcart'])&&($_GET['delcart']==1)) unset($_SESSION['giohang']);
    //xóa sp trong giỏ hàng
    if(isset($_GET['delid'])&&($_GET['delid']>=0)){
       array_splice($_SESSION['giohang'],$_GET['delid'],1);
    }
    //lấy dữ liệu từ form
    if(isset($_POST['addcart'])&&($_POST['addcart'])){
        $hinh=$_POST['hinh'];
        $tensp=$_POST['tensp'];
        $gia=$_POST['gia'];
        $soluong=$_POST['soluong'];

        //kiem tra sp co trong gio hang hay khong?

        $fl=0; //kiem tra sp co trung trong gio hang khong?

        for ($i=0; $i < sizeof($_SESSION['giohang']); $i++) { 
            
            if($_SESSION['giohang'][$i][1]==$tensp){
                $fl=1;
                $soluongnew=$soluong+$_SESSION['giohang'][$i][3];
                $_SESSION['giohang'][$i][3]=$soluongnew;
                break;

            }
            
        }
        //neu khong trung sp trong gio hang thi them moi
        if($fl==0){
            //them moi sp vao gio hang
            $sp=[$hinh,$tensp,$gia,$soluong];
            $_SESSION['giohang'][]=$sp;
        }

       // var_dump($_SESSION['giohang']);
    }




?>

<!DOCTYPE html>
<html lang="en">

<head>



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
  </div>
  <form action="pages/timkiem.php">
    
    <div class="search">
        <input class="form-control mr-sm-2" name="timkiem"  type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    
</nav>
    <title> Gia Dụng Giá Rẻ Giỏ Hàng</title>
 

     
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>
    <body>
    <div class="">
        <div class=" ">
            <div class="boxtrai mr" id="bill">
                <div class="row" >
                    <form action="donhang.php" method =post>
                    <h1>THÔNG TIN NHẬN HÀNG</h1>
                    <p>Vui lòng chọn địa chỉ giao hàng</p>
                    <table class="thongtinnhanhang">
                        <tr>
                            <td width="20%">Họ tên <span style="color: red;">*</span></td>
                            <td><input type="text" name="hoten" required></td>
                        </tr>
                        <tr>
                            <td>Địa chỉ <span style="color: red;">*</span></td>
                            <td><input type="text" name="diachi" required></td>
                        </tr>
                        <tr>
                            <td>Điện thoại <span style="color: red;">*</span></td>
                            <td><input type="text" name="dienthoai" required></td>
                        </tr>
                        <tr>
                            <td>Email <span style="color: red;">*</span></td>
                            <td><input type="text" name="email" required></td>
                        </tr>
                    </table>
                </div>
                <div class="">
                    <h1>GIỎ HÀNG</h1>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                            <th>STT</th>
                            <th>Hình</th>
                            <th>Tên sản phẩm</th>
                            <th>Đơn giá</th>
                            <th>Số lượng</th>
                            <th>Thành tiền</th>
                            <th>Xóa</th>
                        </tr>
                         </thead> 
                    
                        <?php echo showgiohang(); ?>
                    </table>
                </div>
                <div class="">
                    <input type="submit" value="ĐỒNG Ý ĐẶT HÀNG" name="dongydathang">
                    <a href="cart.php?delcart=1"><input type="button" value="XÓA GIỎ HÀNG"></a>
                    <a href="../index.php"><input type="button" value="TIẾP TỤC ĐẶT HÀNG"></a>
                </div>
                </form>
            </div>
</body>
<?php 
        include('footer.php');

?>

</html>
