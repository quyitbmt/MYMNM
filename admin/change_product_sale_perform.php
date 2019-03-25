<?php 
	// Lấy các dữ liệu bên trang sửa danh mục

	// Chàn dữ liệu vào bảng tbl_product
	// Bước 1: Kết nối đến CSDL 
	include("../config/dbconfig.php");
	$id = $_POST['id'];
	$name = $_POST['name'];
	$masp = $_POST['masp'];
	$price = $_POST['price'];
	$category = $_POST['category'];
	$chitiet = $_POST['chitiet'];
	$giamgia = $_POST['giamgia'];

	$image = $_FILES["avata"]["name"];
	$fileanhtam = $_FILES["avata"]["tmp_name"];
	$result = move_uploaded_file($fileanhtam,'../image/product/'.$image);
	if(!$result) {
		$image=NULL;
	}

	// Bước 2: Chèn dữ liệu vào bảng
	if($id == '' || $name =='' || $masp == '' || $price =='' || $category =='') {		
		echo '
		<script type="text/javascript">
			alert("Sửa danh mục lỗi. Vui lòng điền đầy đủ thông tin!!!");
			window.location.href="http://localhost:8080/webbanhang/admin/change_product_sale&id=$id";
		</script>';
	} else {
		$sql = "UPDATE tbl_product_sale SET name='$name', masp='$masp', price='$price', image='$image',category='$category',chitiet='$chitiet',giamgia='$giamgia'   WHERE id='$id'";
	}
	
	// Cho thực thi câu lệnh SQL trên
	$run = mysqli_query($conn,$sql);
	echo '
		<script type="text/javascript">
			alert("Sửa sản phẩm thành công!!!");
			window.location.href="http://localhost:8080/webbanhang/admin/list_product_sale.php";
		</script>';
;?>