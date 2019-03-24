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
                  <h1>THÊM SẢN PHẨM MỚI</h1>
                     <form method="post" action="change_product_sale_perform.php" enctype="multipart/form-data">
                    <?php
                              // Bước 1: Kết nối đến CSDL
                               include("../config/dbconfig.php");
                               $id = $_GET["id"];
                              //Bước 2: Hiển thị các dữ liệu trong bảng ra đây
                               $sql = "select * from tbl_product_sale where id = ".$id;
                               $run = mysqli_query($conn,$sql);
                               $row = mysqli_fetch_array($run);
                        ?>
                  <div class="form-group">
                     <input type="hidden" name="id" value='<?php echo $row["id"];?>'>
                    <label class="control-label col-md-3 col-sm-3 col-xs-12"  for="product-name">Tên sản phẩm<span class="required">*</span></label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                     <input type="text" name="name" id="name" value="<?php echo $row["name"];?>">
                    </div>
                  </div>
                  <br><br><br>
                  <div class="form-group">
                    <label for="product-code" class="control-label col-md-3 col-sm-3 col-xs-12">Mã sản phẩm<span class="required">*</span></label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                    <input type="text" name="masp" id="masp" value="<?php echo $row["masp"];?>">
                    </div>
                  </div>
                  <br><br><br>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Giá sản phẩm<span class="required">*</span></label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                      <input type="text" name="price" id="price" value="<?php echo $row["price"];?>">
                    </div>
                  </div>
                 
                  
                  <br><br><br>
                  
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Hãng<span class="required">*</span></label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <select name="category">
                        <?php              
                        //Hiển thị các dữ liệu trong bảng tbl_nxb ra đây
                        $sql1 = "select * from tbl_category";
                        $run1= mysqli_query($conn,$sql1);
                        while ($row1 = mysqli_fetch_array($run1)) {
                        ;?>
                             <option value="<?php echo $row1["id"];?>"><?php echo $row1["title"];?></option>
                        <?php
                        }
                        ;?>
                        </select>
                    </div>
                  </div>
                  <br><br><br>

                 <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Ảnh minh họa</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                      <input type="file" name="avata" id="upload-thumb">
                        <img width="100px" src="index.php/../../image/product/<?php echo $row['image']?>" alt="">
                    </div>
                  </div>
                  <br><br><br>
                    <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Mô tả<span class="required">*</span></label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                      <textarea name="chitiet" id="chitiet" class="ckeditor"><?php echo $row["chitiet"];?></textarea>
                    </div>
                  </div>
                    <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Giảm giá<span class="required">*</span></label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                      <input type="text" name="giamgia" id="giamgia" value="<?php echo $row["giamgia"];?>">
                    </div>
                  </div>
                
                 

                  <div class="form-group" style="float: right;">
                    <button type="submit">Sửa sản phẩm sale</button>
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