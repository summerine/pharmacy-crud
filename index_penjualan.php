<?php

session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="ANSI">
	<title>Apotek</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="datatable/dataTable.bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
</head>
<body>
<div class="container-fluid">
	<h1 class="page-header text-center">Sistem Informasi Apotek</h1>
	<div class="row">
			<div class="row">
			<?php
				if(isset($_SESSION['error'])){
					echo
					"
					<div class='alert alert-danger text-center'>
						<button class='close'>&times;</button>
						".$_SESSION['error']."
					</div>
					";
					unset($_SESSION['error']);
				}
				if(isset($_SESSION['success'])){
					echo
					"
					<div class='alert alert-success text-center'>
						<button class='close'>&times;</button>
						".$_SESSION['success']."
					</div>
					";
					unset($_SESSION['success']);
				}
			?>
			</div>
			<nav class="navbar navbar-default"> 
		<div class="container-fluid">
			<div class="navbar-header">
			</div>
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown"> Data Obat <span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="index.php">Data Obat</a></li>
					<li><a href="index_tipe.php">Data Tipe</a></li>
					<li><a href="index_golongan.php">Data Golongan</a> </li>
				</ul>
				</li>
				<li><a href="index_pegawai.php">Data Pegawai</a></li>
				<li><a href="index_supplier.php">Data Supplier</a></li>
				<li><a href="index_penjualan.php">Data Penjualan</a> </li>
			</ul>
		</div>
	</nav>
			<div class="container-fluid">
			<div class="row">
				<a href="#addnew" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Add Penjualan</a>
			</div>
		</div>
			<div class="container-fluid">
			<div class="row">
				<table id="myTable" class="table table-bordered table-striped">
					<thead>
						<th>ID Penjualan</th>
						<th>Nama Pembeli</th>
						<th>ID Obat</th>
						<th>Nama Obat</th>
						<th>Jumlah</th>
						<th>Tanggal Jual</th>
						<th>ID Pegawai</th>
						<th>Action</th>
					</thead>
					<tbody>
						<?php
							include_once('connection.php');
							$sql = "SELECT * FROM penjualan";
							 $query = mysqli_query($conn, $sql);
							while($row = mysqli_fetch_assoc($query)){
							 	echo
								"<tr>
							 		<td>".$row['id_penjualan']."</td>
							 		<td>".$row['nama_pembeli']."</td>
							 		<td>".$row['id_obat']."</td>
							 		<td>".$row['nama_obat']."</td>
							 		<td>".$row['jumlah']."</td>
							 		<td>".$row['tgl_jual']."</td>
							 		<td>".$row['id_pegawai']."</td>
							 		<td>
							 			<a href='#edit_".$row['id_penjualan']."' class='btn btn-success btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span> Edit</a>

									<a href='#delete_".$row['id_penjualan']."' class='btn btn-danger btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-trash'></span> Delete</a>
									
									</td>
							 	</tr>";
							 	include('edit_delete_penjualan.php');
							}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<?php include('penjualan_modal.php') ?>

<script src="jquery/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="datatable/jquery.dataTables.min.js"></script>
<script src="datatable/dataTable.bootstrap.min.js"></script>

<!-- generate datatable on our table -->
<script>
$(document).ready(function(){
	//inialize datatable
    $('#myTable').DataTable();

    //hide alert
    $(document).on('click', '.close', function(){
    	$('.alert').hide();
    })
});

<?php
session_destroy();
?>

</script>
</body>
</html>