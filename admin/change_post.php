<?php include('header.php') ?>
  
<?php
  // Kết nối đến CSDL
    include("../config/dbconfig.php");
?>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container" >
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <?php include("top.php");?>

            <!-- page content -->
            <div class="right_col" role="main">
              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="clearfix">
              
              <h3 id="index" class="fl-left">Sửa danh mục</h3>
        </div>

                    <form method="post" action="change_post_perform.php" enctype="multipart/form-data">
                        <?php
                              // Bước 1: Kết nối đến CSDL
                               include("../config/dbconfig.php");
                               $id = $_GET["id"];
                              //Bước 2: Hiển thị các dữ liệu trong bảng ra đây
                               $sql = "select * from tbl_post where id = ".$id;
                               $run = mysqli_query($conn,$sql);
                               $row = mysqli_fetch_array($run);
                        ?>
                 <div class="form-group">
                     <input type="hidden" name="id" value='<?php echo $row["id"];?>'>
                    <label class="control-label col-md-3 col-sm-3 col-xs-12"  for="product-name">Tên sản phẩm<span class="required">*</span></label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                     <input type="text" name="title" id="title" value="<?php echo $row["title"];?>">
                    </div>
                  </div>
                  
                  <br><br><br>
                   <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Mô tả<span class="required">*</span></label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                    <textarea name="content" id="content" class="ckeditor"><?php echo $row["content"];?></textarea>
                    </div>
                  </div>
                  <br><br><br>
                 <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Ảnh minh họa</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                     <input type="file" name="image" id="upload-thumb">
                            <img src="index.php/../image/post/<?php echo $row["image"];?>" alt="">
                    </div>
                  </div>
                 
                  
                 

                
                 

                  <div class="form-group" style="float: right;">
                    <button type="submit">Sửa bài viết</button>
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