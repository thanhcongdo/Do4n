
<form action="xulydangky.php" method="POST" enctype="multipart/form-data" >
    <link rel="stylesheet" type="text/css" href="dangki.css">
    <div class="container">
      <h1> Đăng Ký Thành Viên</h1>
      <p>Vui lòng điển đầy đủ thông tin bên dưới.</p>
      <hr>

      <label for="fname"><b>Họ tên người đăng kí</b></label>
      <input type="text" placeholder="Nhập Họ Tên" name="HoTen" required >

      <label for="fname"><b>Tên tài khoản</b></label>
      <input type="text" placeholder="Nhập tên tài khoản" name="TenTaiKhoan" required >

      <label for="fname"><b>Mật khẩu</b></label>
      <input type="password" placeholder="Nhập Mật Khẩu" name="MatKhau" required >

      <label for="fname"><b>Email</b></label>
      <input type="text" placeholder="Nhập Email" name="Email" required="@gmail.com">

      <label for="fname"><b>Số điện thoại</b></label>
      <input type="text" placeholder="Nhập Số Điện Thoại" name="SDT" required >

      <label for="fname"><b>Địa chỉ</b></label>
      <input type="text" placeholder="Nhập Địa Chỉ" name="DiaChi" required>
      
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Tôi chấp nhận các điều khoản sử dụng
      </label>    
      <a href="dangki.php"><button type="submit" class="btn btn-danger" name="dangky"> Đăng ký </button></a>
    </div>
   
    
  </form>

<?php
  include('../pages/footer.php');
?>
  
