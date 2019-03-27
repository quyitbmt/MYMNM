<?php 


	$id = $_GET['id'];


	include("../config/dbconfig.php");

	// Xóa dữ liệu trong bảng		
	$sql = "select * from banner where id = '".$id."'";

	// Cho thực thi câu lệnh SQL trên
	$run = mysqli_query($conn,$sql);

	while ($row = mysqli_fetch_array($run)) {
		# code...
		unlink("./image/banner/'".$row['image']."'");
	}
	//Xoa du lieu trong bang
	$sql = "delete from banner where id = '".$id."'";

	$run = mysqli_query($conn,$sql);
	echo '
		<script type="text/javascript">
			alert("Xóa banner thành công!!!");
			window.location.href="http://localhost:8080/webbanhang/admin/list_banner.php";
		</script>';
;?>