<?php include('header.php') ?>
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
                   <form method="post" action="add_post_perform.php" enctype="multipart/form-data">
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12"  for="title">Tên danh mục<span class="required">*</span></label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                       <input type="text" name="title" id="title">
                    </div>
                  </div>
                  <br><br><br>
                 <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Mô tả<span class="required">*</span></label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                    <textarea class="ckeditor" name="content" id="content"></textarea>
                    </div>
                  </div>
                 
             
                  <br><br><br>
  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Ảnh minh họa</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                      <input type="file" name="image" id="upload-thumb">
                    </div>
                  </div>
                  <br><br><br>

                
                 

                  <div class="form-group" style="float: right;">
                    <button type="submit">Thêm mới bài viết</button>
                  </div>
                  <br>

                </div>
                </form>
              </div>
            </div>
            <!-- /page content -->

            <?php include("bottom.php");?>
      </div>
    </div>

  <?php include('footer.php') ?>