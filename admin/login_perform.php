<?php
//Khai báo sử dụng session
session_start();
    //Kết nối tới database
include('../config/dbconfig.php');

$email = $_POST['email'];
$password = $_POST['password'];
$sql_check = mysqli_query($conn,"select * from tbl_user where email = '$email'");
$dem = mysqli_num_rows($sql_check);
if($dem == 0)
{
  $_SESSION['thongbaoloi'] = "Tài khoản không tồn tại";
  echo "
  <script language='javascript'>
    alert('Tài khoản không tồn tại');
    window.open('http://localhost/mudcappro/admin/login.php','_self', 1);
  </script>
  ";
}
else
{
  $sql_check2 = mysqli_query($conn,"select * from tbl_user where email = '$email' and password = '$password'");
  $dem2 = mysqli_num_rows($sql_check2);
  if($dem2 == 0)
    echo "
  <script language='javascript'>
    alert('Mật khẩu đăng nhập không đúng');
    window.open('http://localhost/mudcappro/admin/login.php','_self', 1);
  </script>
  ";
  else
  {
    $row = mysqli_fetch_array($sql_check2);

    $_SESSION['email'] = $email;

    echo "
    <script language='javascript'>
      alert('Đăng nhập thành công');
      window.open('http://localhost/mudcappro/admin/list_product.php','_self', 1);
    </script>
    ";

  }
}
?>