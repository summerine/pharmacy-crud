<?php
	include_once('connection.php');

	if(isset($_GET['id'])){
		$sql = "DELETE FROM tipe WHERE id = '".$_GET['id']."'";
		if(mysqli_query($conn, $sql)){
		 	$_SESSION['success'] = 'Tipe deleted successfully';
		}	
		else{
			$_SESSION['error'] = 'Something went wrong in deleting Tipe';
		}
	}

	else{
		$_SESSION['error'] = 'Select Tipe to delete first';
	}

	header('location: index_tipe.php');
?>