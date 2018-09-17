<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['add'])){
		$id_penjualan = $_POST['id_penjualan'];
		$nama_pembeli = $_POST['nama_pembeli'];
		$id_obat = $_POST['id_obat'];
		$nama_obat = $_POST['nama_obat'];
		$jumlah = $_POST['jumlah'];
		$tgl_jual = $_POST['tgl_jual'];
		$id_pegawai = $_POST['id_pegawai'];
		$sql = "INSERT INTO penjualan (id_penjualan, nama_pembeli, id_obat, nama_obat, jumlah, tgl_jual, id_pegawai) VALUES ('$id_penjualan', '$nama_pembeli', '$id_obat', '$nama_obat', '$jumlah', '$tgl_jual' , '$id_pegawai')";


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