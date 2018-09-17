<?php
	include_once('connection.php');

	if(isset($_GET['id_supplier'])){
		$sql = "DELETE FROM supplier WHERE id_supplier = '".$_GET['id_supplier']."'";
		if(mysqli_query($conn, $sql)){
		 	$_SESSION['success'] = 'supplier deleted successfully';
		}	
		else{
			$_SESSION['error'] = 'Something went wrong in deleting supplier';
		}
	}

	else{
		$_SESSION['error'] = 'Select supplier to delete first';
	}

	header('location: index_supplier.php');
?>