<?php
	include_once('connection.php');

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$golongan = $_POST['golongan'];
		$keterangan = $_POST['keterangan'];
		$sql = "UPDATE golongan SET golongan = '$golongan', keterangan = '$keterangan' WHERE id = '$id'";
	
		 if(mysqli_query($conn, $sql)){
			$_SESSION['success'] = 'Golongan updated successfully';
		 }
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating golongan';
		}
	}
	else{
		$_SESSION['error'] = 'Select golongan to edit first';
	}

	header('location: index_golongan.php');

?>