
<?php
include('../config/config.php');
    if(isset($_GET['ID'])) {
      $id = $_GET['ID'];
    }
?>
<?php
include('../config/config.php');
    $sql_lietke_loaisanpham ="SELECT sanpham.TenSanPham ,sanpham.MoTa,sanpham.Gia,sanpham.TonKho,sanpham.HinhAnh from sanpham WHERE ID='$id'";
    $query_lietke_loaisanpham = mysqli_query($mysqli,$sql_lietke_loaisanpham);
    $row = mysqli_fetch_array($query_lietke_loaisanpham)
?>
<html lang="en">
<head>
  <title>Thông tin chi tiết sản phẩm <?php echo $row['TenSanPham']?></title>
  <link href="https://fonts.googleapis.com/css?family=Bentham|Playfair+Display|Raleway:400,500|Suranna|Trocchi" rel="stylesheet">
</head>

<body>
  <div class="wrapper">
    <div class="product-img">
    <img width="330" height="420" src="../uploads/<?php echo $row['HinhAnh']?>"/>
    </div>
    <div class="product-info">
      <div class="product-text">
        <h1><?php echo $row['TenSanPham']?></h1>
        <h2>by Group 5</h2>
        <p><?php echo $row['MoTa']?></p>
      </div>
      <div class="product-price-btn">
        
        <button type="button">Mua Ngay</button>
        <p><span><?php echo  number_format($row['Gia'] ). 'đ' ?></span></p>
      </div>
    </div>
  </div>

</body>

</html>
<style>
  
body {
  background-color: #fdf1ec;
}

.wrapper {
  height: 420px;
  width: 654px;
  margin: 50px auto;
  border-radius: 7px 7px 7px 7px;

  -webkit-box-shadow: 0px 14px 32px 0px rgba(0, 0, 0, 0.15);
  -moz-box-shadow: 0px 14px 32px 0px rgba(0, 0, 0, 0.15);
  box-shadow: 0px 14px 32px 0px rgba(0, 0, 0, 0.15);
}

.product-img {
  float: left;
  height: 420px;
  width: 327px;
}

.product-img img {
  border-radius: 7px 0 0 7px;
}

.product-info {
  float: left;
  height: 420px;
  width: 327px;
  border-radius: 0 7px 10px 7px;
  background-color: #ffffff;
}

.product-text {
  height: 300px;
  width: 327px;
}

.product-text h1 {
  margin: 0 0 0 38px;
  padding-top: 52px;
  font-size: 29px;
  color: #474747;
}

.product-text h1,
.product-price-btn p {
  font-family: 'Bentham', serif;
}

.product-text h2 {
  margin: 0 0 10px 100px;
  font-size: 13px;
  font-family: 'Raleway', sans-serif;
  font-weight: 400;
  text-transform: uppercase;
  color: #d2d2d2;
  letter-spacing: 0.2em;
}

.product-text p {
  height: 125px;
  margin: 0 0 0 21px;
  font-family:  Times 'Times New Roman', Times, serif;
  color: #8d8d8d;
  line-height: 1.7em;
  font-size: 15px;
  font-weight: lighter;
  overflow: hidden;
}

.product-price-btn {
  height: 103px;
  width: 327px;
  margin-top: 17px;
  position: relative;
}

.product-price-btn p {
  display: inline-block;
  position: absolute;
  top: -13px;
  height: 50px;
  font-family: 'Trocchi', serif;
  margin: 50 0 0 -194px;
  font-size: 28px;
  font-weight: lighter;
  color: #474747;
}

span {
  display: inline-block;
  height: 50px;
  font-family: 'Suranna', serif;
  font-size: 34px;
}

.product-price-btn button {
  display: inline-block;
  height: 50px;
  width: 176px;
  margin: 0 40px 0 80px;
  box-sizing: border-box;
  border: transparent;
  border-radius: 60px;
  font-family: 'Raleway', sans-serif;
  font-size: 14px;
  font-weight: 500;
  text-transform: uppercase;
  letter-spacing: 0.2em;
  color: #ffffff;
  background-color: #9cebd5;
  cursor: pointer;
  outline: none;
}

.product-price-btn button:hover {
  background-color: #79b0a1;
}
</style>