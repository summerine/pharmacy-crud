<?php
	session_start();
	include_once('connection.php');

	if(isset($_GET['id_obat'])){
		$sql = "DELETE FROM obat WHERE id_obat = '".$_GET['id_obat']."'";
		if(mysqli_query($conn, $sql)){
		 	$_SESSION['success'] = 'Obat deleted successfully';
		}	
		else{
			$_SESSION['error'] = 'Something went wrong in deleting obat';
		}
	}

	else{
		$_SESSION['error'] = 'Select obat to delete first';
	}

	header('location: index.php');
?>