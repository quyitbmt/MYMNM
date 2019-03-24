<!DOCTYPE html>

<html>
<head>
<title>Mudcappro</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">

<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
    
    <div id="logo" class="fl_left">
      <h1><a href="index.php">QUANGHIEN</a></h1>
    </div>
    <div id="quickinfo" class="fl_right">
      <ul class="nospace inline">
        <li><strong>HOTLINE:</strong><br>
          +00 (123) 456 7890</li>
         <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Nhập từ khóa tìm kiếm" aria-label="Search" name="s">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit"  ><a href="search_page_perform.php">Search</a></button>
    </form>
      </ul>

    </div>
      
  </header>
</div>

<div class="bgded overlay" style="background-image:url('images/demo/backgrounds/x.jpg');"> 
 
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

                            <div id="cart-wp" class="fl-right">
                                <a href="?page=cart" title="" id="btn-cart">
                                    <i class="fa fa-shopping-basket"></i>
                                    <span id="num">5</span>
                                </a>
                            </div> </li>
       
      </ul>
      
    </nav>
  </div>
  
  <div id="pageintro" class="hoc clear"> 
    
    <div class="flexslider basicslider">
      <ul class="slides">
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
        <li>
          <article>
           
            <p>Sảm phẩm mới</p>
            <h3 class="heading"><?php echo $row["title"];?></h3>
            <p>Cập nhập sản phẩm mới nhất từ <?php echo $row["title"];?></p>
            <footer><a class="btn"  href="chitietloaisanpham.php?id=<?php echo $row['id'];?>">Bắt đầu</a></footer>
             
          </article>
        </li>
      
       <?php
                  }
                  ;?>
      </ul>
    </div>
    
  </div>
 
</div>
  
<div class="wrapper row3">
   
    
     
  <section class="hoc container clear"> 
   

 
    <div class="sectiontitle">
      <h6 class="heading">Sản phẩm </h6>
      <p>Toàn bộ sản phẩm </p>
    </div>
   
    <div class="group elements">
       <?php
                              // Bước 1: Kết nối đến CSDL
                                include("../config/dbconfig.php");
 
                              if (isset($_POST['s'])) {
                                    if ($_POST['s'] != '') {
                                    $s = $_POST['s'];
                                    $sql = "select * from tbl_product where id LIKE '%$s%' or name LIKE '%$s%' order by id asc";
                                    }
                                }else{
                                    $sql = "select * from tbl_product order by id asc"; 
                                    }
                              //Bước 2: Hiển thị các dữ liệu trong bảng ra đây
                                
                                $run = mysqli_query($conn, $sql);
                                $i = 0;
                                while ($row = mysqli_fetch_array($run)) {
                                  $i++;
                                  ;?>
       
     
     
     
      <article class="one_quarter" style="margin-top: 10px"><a href="#" ><img  src="index.php/../image/product/<?php echo $row['image']?>" alt=""></a>
        <div class="txtwrap">
          <h4 class="heading"><?php echo $row["name"];?></h4>
          <p><?php echo $row["price"];?></p>
          <footer><a href="chitietsanpham.php?id=<?php echo $row['id'];?>">Read More &raquo;</a></footer>
        </div>
      </article>
      <?php } ?>
      
    </div>
   
    <div class="clear"></div>
     
    

  </section>
   
</div>

<!-- <div class="wrapper row3">
  <main class="hoc container clear"> 
    
    <div class="content"> 
     
      <nav class="pagination">
        <ul>
          <li><a href="#">&laquo; Previous</a></li>
          <li><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><strong>&hellip;</strong></li>
          <li><a href="#">6</a></li>
          <li class="current"><strong>7</strong></li>
          <li><a href="#">8</a></li>
          <li><a href="#">9</a></li>
          <li><strong>&hellip;</strong></li>
          <li><a href="#">14</a></li>
          <li><a href="#">15</a></li>
          <li><a href="#">Next &raquo;</a></li>
        </ul>
      </nav>
     
    </div>
   
    <div class="clear"></div>
  </main>
</div>

<div class="bgded overlay" style="background-image:url('images/demo/backgrounds/x1.jpg');"> 

  <div class="wrapper row4">
    <footer id="footer" class="hoc clear"> 
     
      <div class="one_quarter first">
        <h6 class="heading">Mudcappro</h6>
        <p>Sit amet hendrerit commodo feugiat pharetra lorem praesent vitae magna at metus pulvinar.</p>
        <p>Aliquam suspendisse elit quisque et cursus nulla aenean tincidunt massa condimentum.</p>
      </div>
      <div class="one_quarter">
        <h6 class="heading">Praesent vitae</h6>
        <nav>
          <ul class="nospace">
            <li><a href="#"><i class="fa fa-lg fa-home"></i></a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Terms</a></li>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Cookies</a></li>
            <li><a href="#">Disclaimer</a></li>
          </ul>
        </nav>
        <ul class="faico clear">
          <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a class="faicon-dribble" href="#"><i class="fa fa-dribbble"></i></a></li>
          <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
          <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
          <li><a class="faicon-vk" href="#"><i class="fa fa-vk"></i></a></li>
        </ul>
      </div>
      <div class="one_quarter">
        <h6 class="heading">Suspendisse potenti</h6>
        <article>
          <h2 class="nospace font-x1"><a href="#">Erat volutpat nam</a></h2>
          <time class="font-xs" datetime="2045-04-06">Friday, 6<sup>th</sup> April 2045</time>
          <p>Massa ac semper nibh sem eu quam sed id nisl sed pulvinar ligula in turpis proin nisl purus iaculis eget et bibendum quis dictum lorem tellus.</p>
        </article>
      </div>
      <div class="one_quarter">
        <h6 class="heading">Sodales aliquam</h6>
        <ul class="nospace linklist">
          <li><a href="#">Ut suscipit vestibulum dolor</a></li>
          <li><a href="#">Nulla sed justo id metus</a></li>
          <li><a href="#">Interdum integer vel ante ut</a></li>
          <li><a href="#">Odio egestas pretium vivamus</a></li>
        </ul>
      </div>
      
    </footer>
  </div>
 
  <div class="wrapper row5">
    <div id="copyright" class="hoc clear"> 
     
      <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="#">Domain Name</a></p>
      <p class="fl_right">Template by <a target="_blank" href="https://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
     
    </div>
  </div>
  
</div> -->


<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>

<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>