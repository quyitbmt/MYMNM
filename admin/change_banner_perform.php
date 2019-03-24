<?php 

	include("../config/dbconfig.php");
	$id = $_POST['id'];
	


	$image = $_FILES["image"]["name"];
	$fileanhtam = $_FILES["image"]["tmp_name"];
	$result = move_uploaded_file($fileanhtam,'../image/banner/'.$image);
	if(!$result) {
		$image=NULL;
	}

	if($id == ''  ) {		
		echo '
		<script type="text/javascript">
			alert("Sửa bài viết lỗi. Vui lòng điền đầy đủ thông tin!!!");
			window.location.href="http://localhost/mudcappro/admin/?page=change_banner&id=$id";
		</script>';
	} else {
		if($image==NULL) {		
			$sql = "UPDATE banner   WHERE id = '$id'";
		} else { 
			$sql = "UPDATE banner SET  image = '$image' WHERE id = '$id'";
		}
	}

	$run = mysqli_query($conn,$sql);
	echo '
		<script type="text/javascript">
			alert("Sửa banner thành công!!!");
			window.location.href="http://localhost:8080/MNM/webbangame/admin/list_banner.php";
		</script>';
;?>