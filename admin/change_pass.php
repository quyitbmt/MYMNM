

<?php include('header.php') ?>
  
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
                    <a href="?page=info_account" title="">Chi tiết thông tin</a>
                </li>
                <li>
                    <a href="?page=login" title="">Thoát</a>
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
                  <form method="post" action="change_pass_perform.php" enctype="multipart/form-data">
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12"  for="product-name">Email<span class="required">*</span></label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                       <input type="text" name="email" id="email" >
                    </div>
                  </div>
                  <br><br><br>
                  <div class="form-group">
                    <label for="product-code" class="control-label col-md-3 col-sm-3 col-xs-12">Mật khẩu cũ<span class="required">*</span></label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                       <input type="password" name="pass_old" id="pass-old">
                    </div>
                  </div>
                  <br><br><br>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Mật khẩu mới<span class="required">*</span></label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                     <input type="password" name="pass_new" id="pass-new">
                    </div>
                  </div>
                 
                  
                  <br><br><br>
                  
                
                    
                 
                  
               <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Xác nhận mật khẩu mới<span class="required">*</span></label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                      <input type="password" name="confirm_pass" id="confirm-pass">
                    </div>
                  </div>
                 
                 
                
                 

                  <div class="form-group" style="float: right;">
                    <button type="submit">Cập nhập</button>
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

  <?php include('footer.php') ?>