<?php
include('../koneksi.php');
  $id = $_GET['id'];
  $query = "DELETE FROM kategori WHERE idkategori=$id";
  $data = mysql_query($query);
  if ($query) {
    echo"<script>window.alert('Hapus Berhasil..!')</script>";
    echo"<script>document.location='kategori.php';</script>"; 
  } else {
    echo"<script>window.alert('Hapus Gagal..!')</script>";
    echo"<script>document.location='kategori.php';</script>";
  }
?>