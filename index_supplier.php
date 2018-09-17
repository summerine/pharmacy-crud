
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
        <a href="#addnew" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Add Supplier</a>
       
      </div>
    </div>
      <div class="container-fluid">
      <div class="row">
        <table id="myTable" class="table table-bordered table-striped">
          <thead>
            <th>ID Supplier</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Kota</th>
            <th>No. Telpon</th>
            <th>Action</th>
          </thead>
          <tbody>
            <?php
              include_once('connection.php');
              $sql = "SELECT * FROM supplier";
               $query = mysqli_query($conn, $sql);
              while($row = mysqli_fetch_assoc($query)){
                echo
                "<tr>
                  <td>".$row['id_supplier']."</td>
                  <td>".$row['nama']."</td>
                  <td>".$row['alamat']."</td>
                  <td>".$row['kota']."</td>
                  <td>".$row['no_telpon']."</td>
                  <td>
                    <a href='#edit_".$row['id_supplier']."' class='btn btn-success btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span> Edit</a>

                  <a href='#delete_".$row['id_supplier']."' class='btn btn-danger btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-trash'></span> Delete</a>
                  
                  </td>
                </tr>";
                include('edit_delete_supplier.php');
              }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<?php include ('supplier_modal.php') ?>
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


</script>
</body>
</html>