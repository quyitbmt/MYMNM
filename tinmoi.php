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
 
<?php include ('footer.php')?>