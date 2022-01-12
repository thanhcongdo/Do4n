<?php 
      $servername     =   'localhost';
      $username       =   'root';
      $password       =   '';
      $dbname         =   "dogiadung";
      $connection     =   mysqli_connect($servername, $username, 
      $password,"$dbname");

      $select = "SELECT * FROM `loaisanpham` where trangthai='1'";
      $result = mysqli_query($connection,$select);
      $message = '';
      if(isset($_POST['submit']))
      {
          $tenloaisanpham       =   $_POST['tenloaisanpham'];
          
      
          // Attempt insert query execution
          $insert = "INSERT INTO loaisanpham (tenloaisanpham,trangthai) VALUES ('$tenloaisanpham', 1)";
          if(mysqli_query($connection, $insert)){
              $message =  "Thành  Công";
          }         
          
          // Close connection
          mysqli_close($connection);
      } 
?>




  <html>

<head>
  <title>Thêm sản phẩm</title>
</head>

<body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <div class="container">
  <h2>Thêm sản phẩm</h2>
    <form action="xulysanpham.php" method="POST" enctype="multipart/form-data">
    <label for="fname">Tên Sản Phẩm:</label>
    <input type="text" id="fname" name="tensanpham" required><br><br>
    <label for="lname">Mô Tả:</label>
    <input type="text" id="lname" style="width:475px;height:60px" name="mota"required><br><br>
    <label for="lname">Giá Tiền:</label>
    <input type="text" id="lname" name="gia"required><br><br>
    <label for="lname">Loại Sản Phẩm:</label>
    <div class="form-group">
                    <select name="loaisanpham">
                        <option>Chọn loại sản phẩm</option>
                        <?php foreach($result as $key => $value){ ?>
                          <option value="<?= $value['tenloaisanpham'];?>"><?= $value['tenloaisanpham']; ?></option> 
                        <?php } ?>
                    </select>
   </div><br>
    <label for="lname">Tồn Kho:</label>
    <input type="text" id="lname" name="tonkho"required><br><br>
    <label>Tải ảnh lên:</label><br>
    <input type="file" name="HinhAnh"required><br><br>
    <a href="sanpham.php"><button class="btn btn-outline-success" type="submit" name="themsp">Thêm mới</button> </a>
</form>
    
    
  </div>
  
</body>

</html>
<style>.container {
  width: 500px;
  clear: both;
}

.container input {
  width: 100%;
  clear: both;
}</style>
