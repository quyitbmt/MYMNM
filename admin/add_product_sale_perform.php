<?php 
	//  Kết nối đến CSDL
	include("../config/dbconfig.php");
	
	//Lấy các dữ liệu bên trang Thêm mới bài viết
	$name = $_POST['name'];
	$masp = $_POST['masp'];
	$price = $_POST['price'];
	$category = $_POST['category'];
	$chitiet = $_POST['chitiet'];
	$giamgia = $_POST['giamgia'];

	// Upload hình ảnh
	$image = $_FILES["image"]["name"];
	$fileanhtam = $_FILES["image"]["tmp_name"];
	$result = move_uploaded_file($fileanhtam,'../image/product/'.$image);
	if(!$result) {
		$image=NULL;
	}

	// Chèn dữ liệu vào bảng tbl_product
	$sql="insert into tbl_product_sale (name,masp,price,image,category,chitiet,giamgia) value('$name','$masp','$price','$image','$category','$chitiet','$giamgia')";

	// Cho thực thi câu lệnh SQL trên
	$run = mysqli_query($conn, $sql);
	echo '
		<script type="text/javascript">
			alert("Thêm mới sản phẩm thành công!!!");
			window.location.href="http://localhost:8080/webbanhang/admin/list_product_sale.php";
		</script>';
;?>