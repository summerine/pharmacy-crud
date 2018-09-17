<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['add'])){
		$id_obat = $_POST['id_obat'];
		$nama = $_POST['nama'];
		$tipe = $_POST['tipe'];
		$golongan = $_POST['golongan'];
		$tgl_expire = $_POST['tgl_expire'];
		$harga_beli = $_POST['harga_beli'];
		$harga_jual = $_POST['harga_jual'];
		$id_supplier = $_POST['id_supplier'];
		$stok= $_POST['stok'];
		$sql = "INSERT INTO obat (id_obat, nama, tipe, golongan, tgl_expire, harga_beli, harga_jual, id_supplier, stok) VALUES ('$id_obat', '$nama', '$tipe', '$golongan', '$tgl_expire', '$harga_beli' , '$harga_jual', '$id_supplier', '$stok')";


		if(mysqli_query($conn, $sql)){
			$_SESSION['success'] = 'Obat added successfully';
		 }
		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: index.php');

session_destroy();
?>