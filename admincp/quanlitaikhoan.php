
<?php
  include('../config/config.php');
    $sql_taikhoan ="SELECT * FROM taikhoan WHERE IsAdmin ='0' ";
    $query_taikhoan = mysqli_query($mysqli,$sql_taikhoan);
?>
<?php 
include('../admincp/sidebaradmin.php');
?>   
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<table class="table table-bordered">
  <thead>
    <tr>
    <th>Họ Tên</th>
    <th>Tên Tài Khoản</th>
    <th>Email</th>
    <th>SĐT</th>
    <th>Địa chỉ</th>
    <th>Trạng Thái</th>
    </tr>
  </thead>
  <tbody>
  <?php
    $i = 0;
    while($row = mysqli_fetch_array($query_taikhoan)){
        $i++;
  ?>
  <tr>
  <td><?php echo $row['HoTen']?></td>
    <td><?php echo $row['TenTaiKhoan']?></td>
    <td><?php echo $row['Email']?></td>
    <td><?php echo $row['SDT']?></td>
    <td><?php echo $row['DiaChi']?></td>
    <td>
    <?php 
    if($row['TrangThai'] == 0){
        echo ('Vô Hiệu Hoá'); 
    }
    ?>
    <?php 
    if($row['TrangThai'] != 0){
        echo ('Đang Sử Dụng'); 
    }
    ?>
    </td>  
    
    <td> 
    <a onclick="return vohieuhoa('<?php echo $row['TenTaiKhoan']; ?>')" href="vohieuhoa.php?page_layout=vohieuhoa&ID=<?php echo $row['ID'] ?>"><button class="btn btn-danger" type="submit" name="vohieuhoa">Vô hiệu hoá</button> </a>
    <a onclick="return bovohieuhoa('<?php echo $row['TenTaiKhoan']; ?>')" href="bovohieuhoa.php?page_layout=vohieuhoa&ID=<?php echo $row['ID'] ?>"><button class="btn btn-success" type="submit" name="bovohieuhoa">Bỏ Vô hiệu hoá</button> </a>
    </td>
    

    
  </tr>
  <?php
  }
  ?>
  <script>
  function vohieuhoa(name){
    return confirm("Bạn có chắc muốn vô hiệu hoá tài khoản " + name + " này không ?")

  }
  </script>
    <script>
  function bovohieuhoa(name){
    return confirm("Bạn có chắc muốn cấp quyền hoạt động tài khoản " + name + " này không ?")

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