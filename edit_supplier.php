<?php
	include_once('connection.php');

	if(isset($_POST['edit'])){
		$id_supplier = $_POST['id_supplier'];
		$nama= $_POST['nama'];
		$alamat = $_POST['alamat'];
		$kota = $_POST['kota'];
		$no_telpon= $_POST['no_telpon'];
		$sql = "UPDATE supplier SET nama = '$nama', alamat = '$alamat', kota = '$kota', no_telpon = '$no_telpon'  WHERE id_supplier = '$id_supplier'";
	
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

	header('location: index_supplier.php');

?>