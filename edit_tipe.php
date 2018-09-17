<?php
	include_once('connection.php');

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$tipe = $_POST['tipe'];
		$keterangan = $_POST['keterangan'];
		$sql = "UPDATE tipe SET tipe = '$tipe', keterangan = '$keterangan' WHERE id = '$id'";
	
		 if(mysqli_query($conn, $sql)){
			$_SESSION['success'] = 'Tipe updated successfully';
		 }
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating tipe';
		}
	}
	else{
		$_SESSION['error'] = 'Select tipe to edit first';
	}

	header('location: index.php');

?>