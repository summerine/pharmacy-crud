<?php
	include_once('connection.php');

	if(isset($_GET['id_pegawai'])){
		$sql = "DELETE FROM pegawai WHERE id_pegawai = '".$_GET['id_pegawai']."'";
		if(mysqli_query($conn, $sql)){
		 	$_SESSION['success'] = 'pegawai deleted successfully';
		}	
		else{
			$_SESSION['error'] = 'Something went wrong in deleting pegawai';
		}
	}

	else{
		$_SESSION['error'] = 'Select pegawai to delete first';
	}

	header('location: index_pegawai.php');
?>