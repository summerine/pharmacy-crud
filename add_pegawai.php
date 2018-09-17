<?php
session_start();
  include_once('connection.php');

  if(isset($_POST['add'])){
    $id_pegawai = $_POST['id_pegawai'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $no_telpon= $_POST['no_telpon'];
    $posisi = $_POST['posisi'];
    $sql = "INSERT INTO pegawai (id_pegawai, nama, alamat, no_telpon, posisi) VALUES ('$id_pegawai', '$nama', '$alamat', '$no_telpon', '$posisi')";

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

  header('location: index_pegawai.php');

?>