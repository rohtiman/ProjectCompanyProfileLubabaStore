<?php
include('../koneksi.php');
if(isset($_POST['submit'])){
	$id = $_POST['id'];
	$nama	= $_POST['nama'];
	
	$sql	= 'update kategori set namakategori="'.$nama.'" where idkategori="'.$id.'"';
	$query	= mysql_query($sql);
	

	if ($query == true) {
		header('Location: kategori.php');
	} else {
		header('Location: editktg.php');
	}
}
?>