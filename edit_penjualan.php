<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['edit'])){
		$id_penjualan = $_POST['id_penjualan'];
		$nama_pembeli = $_POST['nama_pembeli'];
		$id_obat = $_POST['id_obat'];
		$nama_obat = $_POST['nama_obat'];
		$jumlah = $_POST['jumlah'];
		$tgl_jual= $_POST['tgl_jual'];
		$id_pegawai = $_POST['id_pegawai'];
		$sql = "UPDATE penjualan SET nama_pembeli = '$nama_pembeli', id_obat = '$id_obat', nama_obat = '$nama_obat', jumlah = '$jumlah', tgl_jual = '$tgl_jual', id_pegawai = '$id_pegawai' WHERE id_penjualan = '$id_penjualan'";
	
		 if(mysqli_query($conn, $sql)){
			$_SESSION['success'] = 'Penjualan updated successfully';
		 }
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating penjualan';
		}
	}
	else{
		$_SESSION['error'] = 'Select penjualan to edit first';
	}

	header('location: index_penjualan.php');

session_destroy();
?>