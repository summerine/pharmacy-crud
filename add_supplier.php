<?php
session_start();
  include_once('connection.php');

  if(isset($_POST['add'])){
    $id_supplier = $_POST['id_supplier'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $kota= $_POST['kota'];
    $no_telpon = $_POST['no_telpon'];
    $sql = "INSERT INTO supplier (id_supplier, nama, alamat, kota, no_telpon) VALUES ('$id_supplier', '$nama', '$alamat', '$kota', '$no_telpon')";

    if(mysqli_query($conn, $sql)){
      $_SESSION['success'] = 'Supplier added successfully';
     }
    else{
      $_SESSION['error'] = 'Something went wrong while adding';
    }
  }
  else{
    $_SESSION['error'] = 'Fill up add form first';
  }

  header('location: index_supplier.php');

?>