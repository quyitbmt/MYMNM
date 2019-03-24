<?php
include('header.php') ?>
 

 <div class="wrapper row3">
  <main class="hoc container clear"> 
    
    <div class="group">
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
    $trang = ($get_trang*1)-1;
  }
  $sql_all = "select * from tbl_post limit $trang,1";
  $run_all = mysqli_query($conn,$sql_all);
?>
      
         <?php
    while($dong_all = mysqli_fetch_array($run_all)){
  ?>
        
        <h6 class="heading font-x3"><?php echo $dong_all["title"];?></h6>
       
        <p><?php echo $dong_all["content"];?></p>
        <footer><a href="#">Read More &raquo;</a></footer>
     
    
    
    <?php } ?>
     <?php
  $sql_trang = "select * from tbl_post";
  $run_trang = mysqli_query($conn,$sql_trang);
  $sosach = mysqli_num_rows($run_trang);
  $sotrang = ceil($sosach/1);
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
  </main>
</div>
<div class="wrapper row3">
 
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Footer Background Image Wrapper -->
<div class="bgded overlay" style="background-image:url('images/demo/backgrounds/background.jpg');"> 
  <!-- ################################################################################################ -->
  <div class="wrapper row4">
    <footer id="footer" class="hoc clear"> 
      <!-- ################################################################################################ -->
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
      <!-- ################################################################################################ -->
    </footer>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row5">
    <div id="copyright" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="#">Domain Name</a></p>
      <p class="fl_right">Template by <a target="_blank" href="https://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
      <!-- ################################################################################################ -->
    </div>
  </div>
  <!-- ################################################################################################ -->
</div>
<!-- End Footer Background Image Wrapper -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="../layout/scripts/jquery.min.js"></script>
<script src="../layout/scripts/jquery.backtotop.js"></script>
<script src="../layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>