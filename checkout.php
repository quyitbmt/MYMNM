<?php
include('header.php') ?>

<?php
include("config/dbconfig.php");
$id = $_GET['id'];
$thanhtien = $_GET['thanhtien'];
$sql = "SELECT * from tbl_product where id=".$id;
$run = mysqli_query($conn, $sql);
$i = 0;
while ($row = mysqli_fetch_array($run)) {
    $i++;
    ;?>
    <div class="wrapper row3">
  <main class="hoc container clear"> 
    <table>
    <div class="content"> 
        <div class="section" id="breadcrumb-wp">
            <div class="wp-inner">
                <div class="section-detail clearfix">
                    <h2 style="text-align: center;">THÔNG TIN ĐẶT HÀNG</h2>
                    <ul class="list-breadcrumb fl-right">
                       
                    </ul>
                </div>
            </div>
        </div>
        <form method="POST" action="checkout_perform.php" name="form-checkout">
            <div id="wrapper" class="wp-inner clearfix">
              <td>
                <div class="section" id="customer-info-wp">
                    <div class="section-head">
                        <h1 class="section-title">Thông tin khách hàng</h1>
                    </div>
                    <div class="section-detail">
                       <!--  <form method="POST" action="pages/checkout_perform.php" name="form-checkout"> -->
                        <div class="form-row clearfix">
                            <div class="form-col fl-left">
                                <label for="fullname">Họ tên</label>
                                <input type="text" name="tenkhachhang" id="fullname">
                            </div>
                            <div class="form-col fl-right">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email">
                            </div>
                        </div>
                        <div class="form-row clearfix">
                            <div class="form-col fl-left">
                                <label for="address">Địa chỉ</label>
                                <input type="text" name="diachi" id="address">
                            </div>
                            <div class="form-col fl-right">
                                <label for="phone">Số điện thoại</label>
                                <input type="tel" name="phone" id="phone">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-col">
                                <label for="notes">Ghi chú</label>
                                <textarea name="note"></textarea>
                            </div>
                        </div>
                    </div>
                </div></td>
                <td>
                <div class="section" id="order-review-wp">
                    <div class="section-head">
                        <h1 class="section-title">Thông tin đơn hàng</h1>
                    </div>
                    <div class="section-detail">
                        <table class="shop-table">
                           
                            <tbody>
                                <input type="hidden" name="idproduct" value='<?php echo $row["id"];?>'>
                                <tr class="cart-item">
                                    <td class="product-name" name=""><?php echo $row["name"];?></td>
                                    <td class="product-total" ><?php echo $row["price"];?></td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <input type="hidden" name="tongtien" value="<?php echo $thanhtien; ?>">
                                <tr class="order-total">
                                    <td>Tổng đơn hàng:</td>
                                    <td><strong class="total-price"><?php echo $thanhtien; ?></strong></td>
                                </tr>
                               
                            <?php } ?>
                        </tfoot>
                    </table>
                    <div id="payment-checkout-wp">
                        <ul id="payment_methods">
                            <li>
                                <input type="radio" id="direct-payment" name="payment" value="Thanh toán tại cửa hàng">
                                <label for="direct-payment">Thanh toán tại cửa hàng</label>
                            </li>
                            <li>
                                <input type="radio" id="payment-home" name="payment" value="Thanh toán tại cửa hàng">
                                <label for="payment-home">Thanh toán tại nhà</label>
                            </li>
                        </ul>
                    </div>
                    <div class="place-order-wp clearfix">
                        <input type="submit" id="order-now" value="Đặt hàng">
                    </div>
                </div>
            </div>
            </td>
        </form>
    </div>
    </table>
</div></div>
<?php 
include('footer.php') ?>
</div>
</body>
</html>
