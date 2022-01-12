<?php
include('../config/config.php');
    if(isset($_GET['ID'])) {
      $id = $_GET['ID'];
    }
?>
<?php
    $sql_lietke_sanpham ="SELECT sanpham.ID,sanpham.TenSanPham , sanpham.MoTa,sanpham.Gia,loaisanpham.tenloaisanpham,sanpham.TonKho,sanpham.HinhAnh FROM sanpham, loaisanpham where sanpham.ID = $id AND sanpham.loaisanpham=loaisanpham.id ";
    $query_lietke_sanpham = mysqli_query($mysqli,$sql_lietke_sanpham);
    $row = mysqli_fetch_array($query_lietke_sanpham)
?>

<?php 
 $servername     =   'localhost';
 $username       =   'root';
 $password       =   '';
 $dbname         =   "dogiadung";
 $connection     =   mysqli_connect($servername, $username, $password,"$dbname");
$select = "SELECT * FROM `loaisanpham` where trangthai='1'";
$result = mysqli_query($connection,$select);
?> 




<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>



  <html>

<head>
  <title>Sản phẩm</title>
</head>
<div class="container">
<h2>Sửa sản phẩm</h2>
<body>
<form action="xulysuasanpham.php" method="POST" enctype="multipart/form-data">
<label for="fname">ID Sản Phẩm:</label>
<input type="text" id="fname" name="ID" readonly="readonly" value=" <?php echo $row['ID'] ?>" ><br><br>
<label for="fname">Tên Sản Phẩm:</label>
<input type="text" id="fname" name="TenSanPham" value=" <?php echo $row['TenSanPham'] ?>" ><br><br>
<label for="lname">Mô Tả:</label>
<input type="text" id="lname" name="MoTa" value="<?php echo $row['MoTa']?>" ><br><br>
<label for="lname">Giá Tiền:</label>
<input type="text" id="lname" name="Gia" value="<?php echo $row['Gia']?>" ><br><br>
<label for="lname">Loại Sản Phẩm:</label>
<div class="form-group">
                    <select name="loaisanpham">
                    <option selected='selected' name="tenloaisanpham" disabled="disabled" value=" <?php echo $row['tenloaisanpham'] ?>">    <?php echo $row['tenloaisanpham'] ?>    </option>
                        <?php foreach($result as $key => $value){ ?>                         
                          <option value="<?= $value['tenloaisanpham'];?>"><?= $value['tenloaisanpham']; ?></option> 
                        <?php } ?>
                    </select>
   </div><br>
<label for="lname">Tồn Kho:</label>
<input type="text" id="lname" name="TonKho" value="<?php echo $row['TonKho'];?>" ><br><br>
<label>Hình Ảnh:</label><br>
<img width="150" height="150" src="../uploads/<?php echo $row['HinhAnh']?>"/><br>
<input type="file" name="HinhAnh"  value="<?php echo $row['HinhAnh']?>" ><br><br>
<a href="sanpham.php"><button class="btn btn-outline-success" type="submit" name="sua">Sửa sản phẩm</button> </a>
</form>

  </div>
  
</body>

</html>
<style>.container {
  width: 500px;
  clear: both;
  
}
body{
  align-content: center;
}
.container input {
  width: 100%;
  clear: both;
}</style>
