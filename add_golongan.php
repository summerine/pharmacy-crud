<?php
session_start();
	include_once('connection.php');

	if(isset($_POST['add'])){
		$id = $_POST['id'];
		$golongan = $_POST['golongan'];
		$keterangan= $_POST['keterangan'];
		$sql = "INSERT INTO golongan (id, golongan, keterangan) VALUES ('$id', '$golongan', '$keterangan')";

	if(mysqli_query($conn, $sql)){
			$_SESSION['success'] = 'Golongan added successfully';
		 }
		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: index_golongan.php');

?>