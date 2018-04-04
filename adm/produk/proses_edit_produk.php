<?php
	include("../koneksi.php");
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$kategori = $_POST['kategori'];
	$spek = $_POST['spek'];
	$harga = $_POST['harga'];
	  $foto = $_FILES['gambar']['name'];
        $tmp = $_FILES['gambar']['tmp_name'];
        $tipe = $_FILES['gambar']['type'];
	if(isset($_POST['submit'])){
        if($tipe=="image/jpeg" || $tipe=="image/png" || $tipe=="image/jpg"){
    $fotobaru = date('dmYHis').$foto;
  $path = "../../images/".$fotobaru;
   if(move_uploaded_file($tmp, $path)){
	$sql = mysql_query("update produk set nama='$nama', kategori='$kategori', spek='$spek', harga='$harga', gambar='$fotobaru'" . " where id='$id'")
			or die("Query failed with Error : ".mysql_error());
	if($sql){
		header("location:data_produk.php");
	}
   }
   else{
	   $sql = mysql_query("update produk set nama='$nama', kategori='$kategori', spek='$spek', harga='$harga' " . " where id='$id'")
			or die("Query failed with Error : ".mysql_error());
	if($sql){
		header("location:data_produk.php");
	}
   }
   } else if($foto==""){
       $sql = mysql_query("update produk set nama='$nama', kategori='$kategori', spek='$spek', harga='$harga'" . " where id='$id'")
			or die("Query failed with Error : ".mysql_error());
	if($sql){
		header("location:data_produk.php");
	}
   }else{
    echo"<script>window.alert('Maaf, Hanya file JPEG/JPG/PNG untuk Gambar..!')</script>";
    echo"<script>document.location='data_produk.php';</script>"; 
}
	}
        
?>