<?php
  include('../config/config.php');
    $sql_lietke_sanpham ="SELECT sanpham.ID,sanpham.TenSanPham , sanpham.MoTa,sanpham.MoTa,sanpham.Gia,sanpham.TonKho,sanpham.HinhAnh,loaisanpham.tenloaisanpham FROM sanpham, loaisanpham where sanpham.loaisanpham=loaisanpham.id AND sanpham.trangthai='1'";
    $query_lietke_sanpham = mysqli_query($mysqli,$sql_lietke_sanpham);
?>

<?php 
include('../admincp/sidebaradmin.php');
?>   

<body>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@400&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<h2>Sản phẩm</h2>
<a href="pages/themloaisanpham.php">
<p><a href="themmoisanpham.php"><button class="btn btn-outline-success" type="submit" name="submit">Thêm mới</button> </a></p></a>
<table class="table table-bordered">
  <thead>
    <tr>
    <th>ID</th>
    <th>Tên sản Phẩm</th>
    <th>Loại sản Phẩm</th>
    <th>Mô tả sản phẩm</th>
    <th>Giá tiền</th>
    <th>Tồn kho</th>
    <th>Hình ảnh</th>
    <th>Lựa chọn</th>
    </tr>
  </thead>
  <tbody>
  <?php
    $i = 0;
    while($row = mysqli_fetch_array($query_lietke_sanpham)){
        $i++;
  ?>
  <tr>
    <td><?php echo $i   ?></td>
    <td><?php echo $row['TenSanPham']?></td>
    <td><?php echo $row['tenloaisanpham']?></td>
    <td><?php echo $row['MoTa']?></td>
    <td><?php echo $row['Gia']?></td>
    <td><?php echo $row['TonKho']?></td>
    <td><img width="150" height="150" src="../uploads/<?php echo $row['HinhAnh']?>"/> </td>
    <td> 
    <a href="suasanpham.php?page_layout=sua&ID=<?php echo $row['ID'] ?>"><button class="btn btn-success" type="submit" name="">Sửa</button>
    <a onclick="return Xoa('<?php echo $row['TenSanPham']; ?>')" href="xoasanpham.php?page_layout=xoa&ID=<?php echo $row['ID'] ?>"><button class="btn btn-danger" type="submit" name="xoasp">Xoá</button> </a>
    </td>
    
  </tr>
  <?php
  }
  ?>
  <script>
  function Xoa(name){
    return confirm("Bạn có chắc muốn xoá sản phẩm " + name + " này không ?")

  }
  </script>


  </tbody>
</table>
<div class="trangtruocsau">
<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Trang trước</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Trang sau</span>
      </a>
    </li>
  </ul>
</nav>
</div>
</body>
<style>
     .trangtruocsau
    {
        margin: 0 auto; /* Căn giữa block element */
  width: 500px; /* Phải thiết lập width */

  padding: 20px;

    }
</style>
<style>
    body{
        margin-left: 4%;
    }
</style>