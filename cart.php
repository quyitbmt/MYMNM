<?php 
// include('header.php')
require('header.php') ;
?>
<div class="wrapper row3">
  <main class="hoc container clear"> 
    

    <div id="wrapper" class="wp-inner clearfix">
        <div class="section" id="info-cart-wp">
            <div class="section-detail table-responsive">
                <table class="table">
                    <h2 style="text-align: center;">Xem giỏ hàng</h2>
                    <thead>
                        <tr>
                            <td>Mã sản phẩm</td>
                            <td>Ảnh sản phẩm</td>
                            <td>Tên sản phẩm</td>
                            <td>Giá sản phẩm</td>
                            <td>Số lượng</td>
                            <td colspan="2">Thành tiền</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php   
                            if(isset($_GET['id']) && !empty($_GET['id'])){
                                    $id = $_GET['id'];
                                    @$_SESSION['cart_'.$id] += 1;
                                }
                                // cong sp
                                if(isset($_GET['them'])){
                                    $_SESSION['cart_'.$_GET['them']]+=1;
                                }
                                // giam sp
                                if(isset($_GET['tru'])){
                                    $_SESSION['cart_'.$_GET['tru']]--;
                                }
                                // huy sp
                                if(isset($_GET['xoa'])){
                                    $_SESSION['cart_'.$_GET['xoa']]=0;
                                }
                            $thanhtien = 0;
                            foreach($_SESSION as $name => $value){
                                if($value > 0){
                                    if(substr($name,0,5) == 'cart_'){
                                        $id = substr($name,5,strlen($name)-5);
                                        $sql = "SELECT * from tbl_product where id = '".$id."'";
                                        $run = mysqli_query($conn,$sql);
                                        while($row = mysqli_fetch_array($run)){
                                            $tongtien = $row['price'] * $value;

                             
                            
                        ?>
                            <input type="hidden" name="id" value='<?php echo $row["id"];?>'>
                            <td><?php echo $row['masp']?></td>
                            <td>
                                <a href="" title="" class="thumb">
                                    <img src="index.php/../image/product/<?php echo $row['image']?>" alt="">
                                </a>
                            </td>
                            <td>
                                <a href="" title="" class="name-product"><?php echo $row['name']?></a>
                            </td>
                            <td><?php echo $row['price']?></td>
                            <td>
                                <input readonly="readonly" type="text" name="num-order" value="<?php echo $value?>" class="num-order">
                            </td>
                            <td><?php echo number_format($row['price']); ?></td>
                            <td>
                              <?php 
                                echo '<a href="cart.php?them='.$id.'"  >Thêm</a><br><a href="cart.php?tru='.$id.'" >Giảm</a> <a href="cart.php?xoa='.$id.'"  title="" class="del-product"><i class="fa fa-trash-o"></i></a></br></br></br>'; ?>
                            </td>
                        </tr>
                        <?php         }
                                        $thanhtien+=$tongtien;
                                    }
                                }
                            } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="7">
                                <div class="clearfix">
                                    <p id="total-price" class="fl-right">Tổng giá: <span>
                                    <?php 
                                        if($thanhtien == 0){
                                                echo 'Giỏ hàng trống';
                                            }else{
                                                echo number_format($thanhtien).'VNĐ </span>';
                                            }
                                     ?>
                                         
                                     </span></p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="7">
                                <div class="clearfix">
                                    <div class="fl-right">
                                        <a href="checkout.php?id=<?php echo $id?>&thanhtien=<?php echo $thanhtien ?>" title="" id="checkout-cart">Thanh toán</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        
        <br>
    </div>
</div>
