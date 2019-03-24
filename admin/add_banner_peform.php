<?php 

	include("../config/dbconfig.php");
	

	


	$image = $_FILES["image"]["name"];
	$fileanhtam = $_FILES["image"]["tmp_name"];
	$result = move_uploaded_file($fileanhtam,'../image/banner/'.$image);	
	if(!$result) {
		$image=NULL;
	}


	$sql="insert into banner (image) value('$image')";

	// Cho thực thi câu lệnh SQL trên
	$run = mysqli_query($conn, $sql);
	echo '
		<script type="text/javascript">
			alert("Thêm mới banner thành công!!!");
			window.location.href="http://localhost:8080/MNM/webbangame/admin/list_banner.php";
		</script>';
;?>