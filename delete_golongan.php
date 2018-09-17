<?php
	include_once('connection.php');

	if(isset($_GET['id'])){
		$sql = "DELETE FROM golongan WHERE id = '".$_GET['id']."'";
		if(mysqli_query($conn, $sql)){
		 	$_SESSION['success'] = 'Golongan deleted successfully';
		}	
		else{
			$_SESSION['error'] = 'Something went wrong in deleting Golongan';
		}
	}

	else{
		$_SESSION['error'] = 'Select Tipe to delete first';
	}

	header('location: index_golongan.php');
?>