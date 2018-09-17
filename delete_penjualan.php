<?php
include_once('connection.php');


if (isset($_GET['id_penjualan'])) {
	$sql = "DELETE FROM penjualan WHERE id_penjualan = '".$_GET['id_penjualan']." '";
		if(mysqli_query($conn, $sql)){
		 	$_SESSION['success'] = 'Penjualan deleted successfully';
		}	
		else{
			$_SESSION['error'] = 'Something went wrong in deleting Penjualan';
		}
	}

	else{
		$_SESSION['error'] = 'Select Penjualan to delete first';
	}

	header('location: index_penjualan.php');

?>