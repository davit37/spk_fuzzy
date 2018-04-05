<?php 
if(isset($_GET['page'])){
	$page = $_GET['page'];
	switch($page){
		case 'barang_add':
			include 'page/barang_add.php';
			break;
		case 'admin_add':
			include 'page/admin_add.php';
			break;
		default:
			echo"Halaman Tidak Ditemukan";
			break;

	}
}
?>