<?php
include('header.php') ?>
  
<div class="wrapper row3">
  <main class="hoc container clear"> 
   
     
     
  <section class="hoc container clear"> 
      <?php
            if(isset($_GET['trang'])){
                $get_trang = $_GET['trang'];
            }
            else{
                $get_trang = '';
            }
            if ($get_trang == '' || $get_trang == 1){
                $trang = 0;
            }
            else
            {
                $trang = ($get_trang*8)-8;
            }


            ?>
 
    <div class="sectiontitle">
      <h6 class="heading">Sản phẩm</h6>
      <p>Toàn bộ sản phẩm theo hãng</p>
    </div>
   
    <div class="group elements" style="width: 1200px">
      
         <?php
                      // $cat = $_GET['id'];
                    $id = $_GET['id'];
                    include("config/dbconfig.php");
                    if (isset($_POST['filter_price'])){
                        if (isset($_POST['s-product'])) {
                            if ($_POST['s-product'] != ''){
                                $s = $_POST['s-product'];
                                switch($_GET['filter_price']){
                                    case "1":
                                        $sql="select * FROM tbl_product WHERE name like $s order by id asc limit $trang,8"; 
                                    break;
                                    case "2":
                                        $sql="select * FROM tbl_product WHERE name like $s  and price between 1000000 and 2000000 order by id asc limit $trang,8";   
                                    break;
                                    case "3":
                                        $sql="select * FROM tbl_product WHERE name like $s  and price between 2000000 and 3000000 order by id asc limit $trang,8";   
                                    break;
                                    case "4":
                                        $sql="select * FROM tbl_product WHERE name like $s and price between 3000000 and 4000000 order by id asc limit $trang,8";   
                                    break;
                                    case "5":
                                        $sql="select * FROM tbl_product WHERE name like $s and price price >= 5000000 order by id asc limit $trang,8";   
                                    break;
                                    default:
                                      $sql="select * FROM tbl_product WHERE name like $s andder by id asc limit $trang,8";   
                                      break;
                                  }
                            }
                        }else{
                            switch($_POST['filter_price']){
                                case "1":
                                    $sql="select * FROM tbl_product WHERE  price between 0 and 1000000 order by id asc limit $trang,8"; 
                                break;
                                case "2":
                                    $sql="select * FROM tbl_product WHERE  price between 1000000 and 2000000 order by id asc limit $trang,8";   
                                break;
                                case "3":
                                    $sql="select * FROM tbl_product WHERE  price between 2000000 and 3000000 order by id asc limit $trang,8";   
                                break;
                                case "4":
                                    $sql="select * FROM tbl_product WHERE  price between 3000000 and 4000000 order by id asc limit $trang,8";   
                                break;
                                case "5":
                                    $sql="select * FROM tbl_product WHERE  price >= 5000000 order by id asc limit $trang,8";   
                                break;
                                default:
                                  $sql="select * FROM tbl_product WHERE category like $id order by id asc limit $trang,8";   
                                  break;
                              } 
                        }
                    }else {
                        if (isset($_POST['s-product'])){
                            if ($_POST['s-product'] != ''){
                                $s = $_POST['s-product'];
                                $sql = "select * from tbl_product where id LIKE '%$s%' or name LIKE '%$s%' order by id asc limit $trang,8";
                            }
                        }else{
                            $sql = "SELECT * from tbl_product where category like '%$id%'  limit $trang,8"; 
                        }
                    }
                      $run = mysqli_query($conn, $sql);
                      $i = 0;
                      while ($row = mysqli_fetch_array($run)) {
                        $i++;
                    ;?>
     
     
     
    <article class="one_quarter" style="margin-top: 10px"><a href="#" ><img  src="index.php/../image/product/<?php echo $row['image']?>" alt=""></a>
        <div class="txtwrap">
          <h4 style="text-align: center;" class="heading"><?php echo $row["name"];?></h4>
          <p  style="text-align: center;"><?php echo number_format($row["price"]) ;?>đ</p>
          <table>
          <td><footer><a href="chitietsanpham.php?id=<?php echo $row['id'];?>">Chi tiết &raquo;</a></footer></td>
          <td>
           <footer><a href="chitietsanpham.php?id=<?php echo $row['id'];?>">Mua ngay &raquo;</a></footer></td>
           </table>
        </div>
      </article>
      <?php } ?>
      
    </div>
    <?php
  $sql_trang = "select * from tbl_product where category = '$_GET[id]'";
  $run_trang = mysqli_query($conn,$sql_trang);
  $sosach = mysqli_num_rows($run_trang);
  $sotrang = ceil($sosach/8);
  if ($sotrang == 0){
    echo ' Không có sản phẩm nào !';
  }
  else{
    echo ' Trang:';
  }
  for($b=1;$b<=$sotrang;$b++){
    echo '<a href="?xem=chitietloaisanpham&id='.$_GET['id'].'&trang='.$b.'" style="text-decoration:none">'.' '.$b.' '.'</a>';
  }
?>
<?php
  echo '</br>';
  if($get_trang >= 1){
    echo ' Trang hiện tại: '.$get_trang;
  }
  if($get_trang == '' && $sotrang >= 1){
    echo ' Trang hiện tại: 1';
  }
?> 
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