<?php
include "koneksi.php";
$detail = $_GET['ID_BERITA'];
$query = ("SELECT * FROM berita WHERE ID_BERITA='".$detail."'");
$sql = mysqli_query($connect, $query); // Eksekusi / Jalankan query dari var query
while($row = mysqli_fetch_array($sql)) {

?>

<div class="format-standard">
  <div class="span4">
	<a>
		<img style="width: 640px; height: 240px; float:left; margin-right:10px;" <?php  echo '<img src="images/'. $row['GAMBAR'] .'">';?>
	</a>
	</div><br>
	
    <div class="box cf">
	<br>
		<div class="excerpt">
      <div class="content-heading"><h2><?=$row['JUDUL'];?></h2></div><br>
      <p><a href="#" class="btn btn-inverse">Diposkan pada <?=$row['TANGGAL'];?></a> </p>
      <p style="text-align:justify;"><?=$row['ISI'];?></p>
      <div style="clear:both;"></div>
    </div>
  </div>
<?php
}

?>