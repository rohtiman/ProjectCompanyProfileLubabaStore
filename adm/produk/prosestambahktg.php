<?php
//
include "koneksi.php";

// Ambil Data yang Dikirim dari Form
$id = $_POST['id'];
$nama = $_POST['nama'];
 // Proses simpan ke Database
  $query = "INSERT INTO kategori VALUES('".$id."', '".$nama."')";
  $sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query 

  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    header("location: kategori.php"); // Redirect ke halaman index.php
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke 
database.";
    echo "<br><a href='kategori.php'>Kembali Ke Form</a>";
  }

?>