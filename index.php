<?php

$page = isset($_GET['page']) ? $_GET['page'] : 'home';
$path = "{$page}.php";

// require './inc/header.php';

// if (file_exists($path)) {
//     require "{$path}";
// } else {
//     require "./pages/404.php";
// }

// require './inc/footer.php';
if (file_exists($path)) {
	if($page == 'login'){
    	require "{$path}";
	}else{
		
		
		require "{$path}";
		
	}
} 
?>