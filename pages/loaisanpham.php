<?php
  include('../config/config.php');
    $sql_lietke_loaisanpham ="SELECT * FROM loaisanpham where loaisanpham.trangthai='1'";
    $query_lietke_loaisanpham = mysqli_query($mysqli,$sql_lietke_loaisanpham);
?>
<?php 
include('../admincp/sidebaradmin.php');
?>   


<body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<h2>Loại Sản phẩm</h2>
<a href="pages/themloaisanpham.php">
<p><a href="themloaisanpham.php"><button class="btn btn-outline-success" type="submit" name="submit">Thêm mới</button> </a></p></a>
<table class="table table-bordered">
  <thead>
    <tr>
    <th>ID</th>
    
    <th>Loại sản Phẩm</th>
    
    </tr>
  </thead>
  <tbody>
  <?php
    $i = 0;
    while($row = mysqli_fetch_array($query_lietke_loaisanpham)){
        $i++;
  ?>
  <tr>
    <td><?php echo $i   ?></td>
    <td><?php echo $row['tenloaisanpham']?></td>
    <td> 
    <a href="sualoaisanpham.php?page_layout=sua&id=<?php echo $row['id'] ?>"><button class="btn btn-success" type="submit" name="">Sửa</button>
    <a onclick="return Xoa('<?php echo $row['tenloaisanpham']; ?>')" href="xoaloaisanpham.php?page_layout=xoa&id=<?php echo $row['id'] ?>"><button class="btn btn-danger" type="submit" name="xoaloaisp">Xoá</button> </a>
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