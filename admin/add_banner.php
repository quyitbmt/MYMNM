<?php
  // Kết nối đến CSDL
include('header.php')
 
?>
<?php    include("../config/dbconfig.php"); ?>
  </head>

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
                  <h1>ĐĂNG BÀI VIẾT MỚI</h1>
                    <form method="POST" action="add_banner_peform.php" enctype="multipart/form-data">
                   <div class="form-group">
                  </div>
                 
                        <br><br><br>
                      <div>
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Ảnh minh họa</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                      <input type="file" name="image" id="upload-thumb">
                    </div>

                  </div>
                        
                        <br><br>
                        <button type="submit" name="btn-submit" id="btn-submit">Thêm mới</button>
                    </form>
              </div>
            </div>
            <!-- /page content -->

          
      </div>
    </div>

  <?php include('footer.php') ?>