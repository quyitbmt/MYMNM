<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
<title>BanGame</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="slide.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="../dist/stylesheets/superslides.css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript">

</script>
</head>
<body id="top">

<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
    
    <div id="logo" class="fl_left">
      <!--<h1><a href="index.php">Hoàng Anh Quý</a></h1>-->
      <a href="index.php" ><img src="image/logo/gameshop.jpg" style="width: 200px; height: 100px"></a>
    </div>
    <div id="quickinfo" class="fl_right">
      <ul class="nospace inline">
        <li><strong>HOTLINE:</strong><br>
          77777777777</li>
           <div class="section" id="filter-wp" s>
        <div class="wp-inner">
            <div class="section-detail">
                <ul class="list-item clearfix" style="list-style: none">
                    <li>
                        <form method="POST" action="">
                            <select style="padding: none" name="filter_price">
                                <option value="1">Lọc theo giá</option>
                                <option value="2">1.000.000đ - 2.000.000đ</option>
                                <option value="3">2.000.000đ - 3.000.000đ</option>
                                <option value="4">3.000.000đ - 4.000.000đ</option>
                                <option value="5">Trên 4.000.000đ</option>
                            </select>
                            <button type="submit" name="btn-filter-price" id="btn-filter-price">Lọc</button>
                        </form>
                    </li>
                    <li>
                        <form method="POST" action="" id="form-s-product">
                            <input type="text" name="s-product" id="s-product" placeholder="Tìm kiếm">
                            <button type="submit" name="btn-s-product" id="btn-s-product"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
   
      </ul>

    </div>
      
  </header>
</div>


 
  <div class="wrapper row2">
    <nav id="mainav" class="hoc clear"> 
      
      <ul class="clear">
        <li class="active"><a href="index.php" style="color: white">TRANG CHỦ</a></li>
        <li><a class="drop" href="sanphamall.php" style="cursor: pointer;">Sản phẩm</a>
         
           
              <ul>
                <?php
                              // Bước 1: Kết nối đến CSDL
                                include("config/dbconfig.php");

                              //Bước 2: Hiển thị các dữ liệu trong bảng ra đây
                               $sql = "select * from tbl_category";
                               $run = mysqli_query($conn,$sql);
                                $i = 0;
                                while ($row = mysqli_fetch_array($run)) {
                                  $i++;
                                  ;?>
               
                <li><a  href="chitietloaisanpham.php?id=<?php echo $row['id'];?>"><?php echo $row["title"];?></a></li>
              <?php
                  }
                  ;?>
              </ul>
            
       
           
          
        </li>
        <li><a href="tinmoi.php">Tin tức</a>
          
        </li>
        <li><a href="khuyenmai.php">Khuyến mãi</a></li>
        <li><a href="hotro.php">Hỗ trợ</a></li>
         <li>
             <a href="cart.php?id=<?php echo $row['id'] ?>" title="" id="btn-cart">
                                    <i class="fa fa-shopping-basket"></i>
                                
                                </a>
                         <!--    <div id="cart-wp" class="fl-right">
                                <a href="cart.php?id=<?php echo $row['id'] ?>"" title="" id="btn-cart">
                                    <i class="fa fa-shopping-basket"></i>
                                
                                </a>
                            </div> --> </li>
       
      </ul>
      
    </nav>
    
  </div>

  
 

   
    
    <section class="hoc container clear"> 
 <div class="neoslideshow" >
   <?php 
        include("config/dbconfig.php");
        $sql = "SELECT * from banner  where image order by id ";
        $run = mysqli_query($conn, $sql);
        $i = 0;
        while ($row = mysqli_fetch_array($run)) {
        $i++;
        ;?>
  
  <img src="index.php/../image/banner/<?php echo $row['image']?>" style="width: 975px"/>
    <?php } ?>
<script type="text/javascript">
  $(function() {
    $('.neoslideshow img:gt(0)').hide();
    setInterval(function(){
      $('.neoslideshow :first-child').fadeOut()
         .next('img').fadeIn()
         .end().appendTo('.neoslideshow');}, 
      2000);
})
</script>
</section>

</div>
