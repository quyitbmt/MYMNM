<?php
require('header.php'); ?>


<div class="wrapper row3" style="margin-top: 0px">
  <main class="hoc container clear"> 

    
    <div class="group" >
      <table>
      <div class="one_half first">
       
        <td style="height: 100px">
        <h6 class="heading font-x2">Trang tin game</h6>
       
        <p>Tổng hợp tất cả các tin tức mới nhất game mới nhất</p>
        <footer><a href="tinmoi.php">Chi tiết &raquo;</a></footer>
        </td>
       <td>
      </div>
      <div class="one_half"><a href="#"><img style="max-width: 190%" src="images/product/dvmc5.jpg"></a></div>
      </td>
    </div>
   </table>
   
    <div class="clear"></div>
  </main>
</div>
<div class="wrapper row3">
 
</div>
<form action="search_page_perform.php">
    
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
    $trang = ($get_trang*9)-9;
  }
  $sql_all = "select * from tbl_product limit $trang,9";
  $run_all = mysqli_query($conn,$sql_all);
?>
 
    <div class="sectiontitle">
      <h6 class="heading">Sản phẩm </h6>
      <p>Toàn bộ sản phẩm </p>
    </div>
   
    <div class="group elements" style="width: 1200px" >
      
        <?php
         $sql = "select * from tbl_product order by id asc limit $trang,9";
                                $run = mysqli_query($conn, $sql);
                                $i = 0;
  while ($row = mysqli_fetch_array($run)) {
                                  $i++;
                                  ;?>
     
     
     
      <article class="one_quarter" style="margin-top: 10px"><a href="#" ><img style="width: 200px"  src="index.php/../image/product/<?php echo $row['image']?>" alt=""></a>
        <div class="txtwrap" >
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
  $sql_trang = "select * from tbl_product";
  $run_trang = mysqli_query($conn,$sql_trang);
  $sosach = mysqli_num_rows($run_trang);
  $sotrang = ceil($sosach/8);
  if ($sotrang == 0){
    echo ' Không có sách nào!';
  }
  else{
    echo ' Trang:';
  }
  for($b=1;$b<=$sotrang;$b++){
    echo '<a href="?trang='.$b.'" style="text-decoration:none">'.' '.$b.' '.'</a>';
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

<div class="wrapper row3">
   
    
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
    $trang = ($get_trang*9)-9;
  }
  $sql_all = "select * from tbl_product_sale limit $trang,9";
  $run_all = mysqli_query($conn,$sql_all);
?>
 
    <div class="sectiontitle">
      <h6 class="heading">Sản phẩm sale</h6>
      <p>Toàn bộ sản phẩm sale</p>
    </div>
   
    <div class="group elements" style="width: 1200px">
      
        <?php
         $sql = "select * from tbl_product_sale order by id asc limit $trang,9";
                                $run = mysqli_query($conn, $sql);
                                $i = 0;
  while ($row = mysqli_fetch_array($run)) {
                                  $i++;
                                  ;?>
     
     
     
      <article class="one_quarter" style="margin-top: 10px"><a href="#" >
        <figure><a href="#"><img  src="index.php/../image/product/<?php echo $row['image']?>" alt="">
          <figcaption>
            <time ><strong style="font-size: 10px">-<?php echo number_format($row["giamgia"]) ;?>%</strong> </time>
          </figcaption>
        </figure>
        <div class="txtwrap" >
          <h4 class="heading" style="text-align: center;color: red"><?php echo $row["name"];?></h4>
          <p style="text-align: center;color: red"><?php echo number_format($row["price"]) ;?></p>
           <table>
          <td><footer><a href="chitietsanphamsale.php?id=<?php echo $row['id'];?>">Chi tiết &raquo;</a></footer></td>
          <td>
           <footer><a href="chitietsanphamsale.php?id=<?php echo $row['id'];?>">Mua ngay &raquo;</a></footer></td>
           </table>
        </div>
      </article>
      <?php } ?>
      
    </div>
    <?php
  $sql_trang = "select * from tbl_product_sale";
  $run_trang = mysqli_query($conn,$sql_trang);
  $sosach = mysqli_num_rows($run_trang);
  $sotrang = ceil($sosach/8);
  if ($sotrang == 0){
    echo ' Không có sách nào!';
  }
  else{
    echo ' Trang:';
  }
  for($b=1;$b<=$sotrang;$b++){
    echo '<a href="?trang='.$b.'" style="text-decoration:none">'.' '.$b.' '.'</a>';
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
     
    </form>

  </section>
   
</div>

<?php 
include('footer.php') ?>
</div>
</body>
</html>