<?php
include('header.php') ?>
  
<div class="wrapper row3">
   
    
     
  <section class="hoc container clear"> 
   

 
    <div class="sectiontitle">
      <h6 class="heading">Sản phẩm </h6>
      <p>Toàn bộ sản phẩm </p>
    </div>
   
    <div class="group elements">
       <?php
                              // Bước 1: Kết nối đến CSDL
                                include("config/dbconfig.php");
 
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



<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>

<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>