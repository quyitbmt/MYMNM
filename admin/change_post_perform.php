<?php 
	// Lấy các dữ liệu bên trang sửa danh mục

	// Chàn dữ liệu vào bảng tbl_category
	// Bước 1: Kết nối đến CSDL 
	include("../config/dbconfig.php");
	$id = $_POST['id'];
	$title = $_POST['title'];
	$content = $_POST['content'];
	
	// Upload hình ảnh
	$image = $_FILES["image"]["name"];
	$fileanhtam = $_FILES["image"]["tmp_name"];
	$result = move_uploaded_file($fileanhtam,'../image/page/'.$image);
	// Bước 2: Chèn dữ liệu vào bảng
	if($title =='' || $content == '') {		
		echo '
		<script type="text/javascript">
			alert("Sửa bài viết lỗi. Vui lòng điền đầy đủ thông tin!!!");
			window.location.href="http://localhost:8080/MNM/webbangame/admin/?page=change_post&id=$id";
		</script>';
	} else {
		if($image==NULL) {		
			$sql = "UPDATE tbl_post SET title = '$title', content = '$content'  WHERE id = '$id'";
		} else {
			$sql = "UPDATE tbl_post SET title = '$title', content = '$content', image = '$image' WHERE id = '$id'";
		}
	}
	// Cho thực thi câu lệnh SQL trên
	$run = mysqli_query($conn,$sql);
	echo '
		<script type="text/javascript">
			alert("Sửa bài viết thành công!!!");
			window.location.href="http://localhost:8080/MNM/webbangame/admin/list_post.php";
		</script>';
;?>