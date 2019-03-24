
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Bookstores | Trang thêm mới sách</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
  
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  <script src="../js/tinymce/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>   
  </head>
<?php
  // Kết nối đến CSDL
    include("../config/dbconfig.php");
?>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <?php include("top.php");?>

            <!-- page content -->
            <div class="right_col" role="main">
              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="wrap clearfix">
        <div id="sidebar" class="fl-left">
            <ul id="list-cat">
                <li>
                    <a href="change_pass.php" title="">Đổi mật khẩu</a>
                </li>
                <li>
                    <a href="login.php" title="">Thoát</a>
                </li>
            </ul>
        </div>
                  <h1>THÔNG TIN TÀI KHOẢN</h1>
                  <?php
                         
                           include("../config/dbconfig.php");
                           mysqli_set_charset($conn, 'UTF8');
                          
                           $sql = "SELECT * from tbl_user";
                           $run = mysqli_query($conn, $sql);
                           $i = 0;
                           while ($row = mysqli_fetch_array($run)) {
                            $i++;
                        ;?>
                  <form method="post" action="change_pass.php" enctype="multipart/form-data">
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12"  for="product-name">Tên hiển thị<span class="required">*</span></label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                       <input type="text" name="display-name" id="display-name" value="<?php echo $row["name"];?>" readonly="readonly"
                    </div>
                  </div>
                  <br><br><br>
                  <div class="form-group">
                    <label for="product-code" class="control-label col-md-3 col-sm-3 col-xs-12">Tên đăng nhập<span class="required">*</span></label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="text" name="username" id="username" placeholder="admin" readonly="readonly" value="<?php echo $row["username"];?>">
                    </div>
                  </div>
                  <br><br><br>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Email<span class="required">*</span></label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                     <input type="email" name="email" id="email" value="<?php echo $row["email"];?>" readonly="readonly">
                    </div>
                  </div>
                 
                  
                  <br><br><br>
                  
                
                    
                 
                  
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Địa chỉ<span class="required">*</span></label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                    <textarea name="address" id="address" readonly="readonly" style="cursor: not-allowed; background: #f3f3f3;"><?php echo $row["address"];?></textarea>
                    </div>
                  </div>
                 
                
                 

                  <div class="form-group" style="float: right;">
                    <button type="submit">Thay đổi thông tin</button>
                  </div>
                  <br>

                </div>
                 <?php
                              }
                              ;?>
                </form>
              </div>
            </div>
            <!-- /page content -->

            <?php include("bottom.php");?>
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  
  </body>
</html>