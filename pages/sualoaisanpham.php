<?php
include('../config/config.php');
    if(isset($_GET['id'])) {
      $id = $_GET['id'];
    }
?>
<?php
include('../config/config.php');
    $sql_lietke_loaisanpham ="SELECT loaisanpham.id,loaisanpham.tenloaisanpham FROM loaisanpham where trangthai='1' and id='$id'";
    $query_lietke_loaisanpham = mysqli_query($mysqli,$sql_lietke_loaisanpham);
    $row = mysqli_fetch_array($query_lietke_loaisanpham)
?>
<head>
  <title>Loại Sản phẩm</title>
</head><body>
<div class="container">
<h2>Sửa loại sản phẩm</h2>



<form action="xulysualoaisanpham.php" method="POST"  >
<label for="fname">ID Loại Sản Phẩm:</label>
<input type="text" id="fname" name="id" readonly="readonly" value=" <?php echo $row['id'] ?>" ><br><br>
<label for="fname">Tên Sản Phẩm:   </label>
<input type="text" id="fname" name="tenloaisanpham" value=" <?php echo $row['tenloaisanpham'] ?>" ><br><br>
<a href="loaisanpham.php"><button class="btn btn-outline-success" type="submit" name="sualoaisp">Sửa loại sản phẩm</button> </a>
</form>

  
  </div>
</body>

</html>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<style>.container {
  width: 300px;
  clear: both;
  
}
body{
  align-content: center;
}
.container input {
  width: 100%;
  clear: both;
}</style>
