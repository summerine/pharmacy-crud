<?php
session_start();
	include_once('connection.php');

	if(isset($_POST['add'])){
		$id = $_POST['id'];
		$tipe = $_POST['tipe'];
		$keterangan= $_POST['keterangan'];
		$sql = "INSERT INTO tipe (id, tipe, keterangan) VALUES ('$id', '$tipe', '$keterangan')";

		if(mysqli_query($conn, $sql)){
			$_SESSION['success'] = 'Tipe added successfully';
		 }
		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: index_tipe.php');

?>