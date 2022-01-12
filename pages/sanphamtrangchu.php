<?php 
 $servername     =   'localhost';
 $username       =   'root';
 $password       =   '';
 $dbname         =   "dogiadung";
 $connection     =   mysqli_connect($servername, $username, $password,"$dbname");
$select = "SELECT sanpham.ID,sanpham.TenSanPham , sanpham.MoTa,sanpham.MoTa,sanpham.Gia,sanpham.TonKho,sanpham.HinhAnh,loaisanpham.tenloaisanpham 
FROM sanpham, loaisanpham 
WHERE sanpham.loaisanpham=loaisanpham.id AND sanpham.trangthai='1' LIMIT 4";
$result = mysqli_query($connection,$select);
?> 
<div id="fh5co-services" class="fh5co-bg-section">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-4 text-center">
					<div class="feature-center animate-box fadeIn animated-fast" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="icon-credit-card"></i>
						</span>
						<h3>Thanh Toán Nhanh Chóng</h3>
						<p>Thanh toán dễ dàng với nhiều phương thức</p>
						<p><a href="#" class="btn btn-primary btn-outline">Chi Tiết</a></p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 text-center">
					<div class="feature-center animate-box fadeIn animated-fast" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="icon-wallet"></i>
						</span>
						<h3>Tiết Kiệm Tiền</h3>
						<p>Giá rẻ nhất! Không đâu rẻ hơn</p>
						<p><a href="#" class="btn btn-primary btn-outline">Chi Tiết</a></p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 text-center">
					<div class="feature-center animate-box fadeIn animated-fast" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="icon-paper-plane"></i>
						</span>
						<h3>Miễn Phí Vận Chuyển</h3>
						<p>Miễn phí vận chuyển trong nước và nhiều ưu đã ship 0đ</p>
						<p><a href="#" class="btn btn-primary btn-outline">Chi Tiết</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
  <div><br><br><br></div>
 <!--  thẻ mặt hàng mới mới-->
  <section class="discount_section  layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <h2>
              MẶT HÀNG MỚI NHẤT
            </h2>
            <h2 class="main_heading">
              GIẢM GIÁ 50%
            </h2>
                <h5>
                    Cùng vô vàn deal lớn hấp dẫn!!
                </h5>


            <div class="">
            <button type="button" class="btn btn-outline-dark" a href="../DoAn/pages/sanphammoi.php">  MUA NGAY</button>  </a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="img-box">
            <img src="https://satovietnhat.com.vn/Upload/images/kinh-nghiem-chon-do-gia-dung-2.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Thẻ mặt hàng mới-->

<!-- thẻ hiển thị sản phẩm -->
  <div class="container">
    <p class="lead">Dành Riêng Cho Bạn</p>
  </div>
  <?php
include('../DoAn/config/config.php');
    if(isset($_GET['ID'])) {
      $id = $_GET['ID'];
    }
?>
  <div class="d-flex flex-wrap">
  <?php
    $i = 0;
    while($row = mysqli_fetch_array($result)){
        $i++;
  ?>
  
   <div class="loginbox">
                            <a href="../DoAn/pages/chitietsanpham.php?page_layout=chitiet&ID=<?php echo $row['ID'] ?>" method="POST" class="row img">
                                <img src="../DoAn/uploads/<?php echo $row['HinhAnh']?>" alt="" width="300px" height="255px">
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
  <!-- thẻ hiển thị sản phẩm -->

<!-- thẻ hiển thị về sản phẩm -->
  <section class="about_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                VỀ SẢN PHẨM
              </h2>

            </div>
            <p>
              Chúng tôi luôn đặt chất lượng sản phẩm lên hàng đầu và chúng tôi luôn cung cấp
              cho khách hàng những sản phẩm mới nhất và chất lượng nhất
            </p>
            <button type="button" class="btn btn-outline-dark" a href="../DoAn/pages/fullsanpham.php">  Xem thêm</button>  </a>
            
            
           
          </div>
        </div>
        <div class="col-md-6">
          <div class="img-box">
            <img src="https://cf.shopee.vn/file/11dc9fbadfbecb9497e5837d78de630c" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
<!-- thẻ hiển thị về sản phẩm -->

  
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<div class = "site_info_box_group">
<style>
.loginbox{
   align-items: center;
   text-align: center;
   margin-left: 8%;
   margin-right: auto;
   margin-bottom: 4%;
}
</style>
