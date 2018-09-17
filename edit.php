<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['edit'])){
		$id_obat = $_POST['id_obat'];
		$nama = $_POST['nama'];
		$tipe = $_POST['tipe'];
		$golongan = $_POST['golongan'];
		$tgl_expire = $_POST['tgl_expire'];
		$harga_beli = $_POST['harga_beli'];
		$harga_jual = $_POST['harga_jual'];
		$id_supplier = $_POST['id_supplier'];
		$stok = $_POST['stok'];
		$sql = "UPDATE obat SET nama = '$nama', tipe = '$tipe', golongan = '$golongan', tgl_expire = '$tgl_expire', harga_beli = '$harga_beli', harga_jual = '$harga_jual', id_supplier = '$id_supplier', stok = '$stok' WHERE id_obat = '$id_obat'";
	
		 if(mysqli_query($conn, $sql)){
			$_SESSION['success'] = 'Obat updated successfully';
		 }
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating obat';
		}
	}
	else{
		$_SESSION['error'] = 'Select obat to edit first';
	}

	header('location: index.php');

session_destroy();
?>