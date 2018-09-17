<?php
	include_once('connection.php');

	if(isset($_POST['edit'])){
		$id_pegawai = $_POST['id_pegawai'];
		$nama= $_POST['nama'];
		$alamat = $_POST['alamat'];
		$no_telpon = $_POST['no_telpon'];
		$posisi = $_POST['posisi'];
		$sql = "UPDATE pegawai SET nama = '$nama', alamat = '$alamat', no_telpon = '$no_telpon', posisi = '$posisi'  WHERE id_pegawai = '$id_pegawai'";
	
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