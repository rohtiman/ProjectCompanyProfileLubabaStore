<?php
//
include "koneksi.php";

// Ambil Data yang Dikirim dari Form
$sejarah = $_POST['sejarah_lubada'];
$visi = $_POST['visi_lubada'];
$misi = $_POST['misi_lubada'];
$gambar = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];

  
// Rename nama fotonya dengan menambahkan tanggal dan jam upload
$fotobaru = date('dmYHis').$gambar;

// Set path folder tempat menyimpan fotonya
$path = "images/".$fotobaru;

// Proses upload
if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil 

  // Proses simpan ke Database
  $query = "INSERT INTO about VALUES('".$sejarah."', '".$visi."','".$misi."', '".$fotobaru."')";
  $sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query 

  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    header("location: about.php"); // Redirect ke halaman index.php
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke 
database.";
    echo "<br><a href='form_simpan.php'>Kembali Ke 
Form</a>";
  }
}else{
  // Jika gambar gagal diupload, Lakukan :
  echo "Maaf, Gambar gagal untuk diupload.";
  echo "<br><a href='form_simpan.php'>Kembali Ke 
Form</a>";
}
?>