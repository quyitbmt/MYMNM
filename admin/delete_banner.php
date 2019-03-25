<?php 


	$id = $_GET['id'];


	include("../config/dbconfig.php");

	// Xóa dữ liệu trong bảng		
	$sql = "delete from banner where id = '".$id."'";

	// Cho thực thi câu lệnh SQL trên
	$run = mysqli_query($conn,$sql);
	echo '
		<script type="text/javascript">
			alert("Xóa banner thành công!!!");
			window.location.href="http://localhost:8080/webbanhang/admin/list_banner.php";
		</script>';
;?>