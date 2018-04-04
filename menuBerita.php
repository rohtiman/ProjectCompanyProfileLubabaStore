<?php
include "koneksi.php";
$ambil_recent = mysqli_query($connect, "select ID_BERITA,JUDUL,TANGGAL from berita order by rand() limit 20");

?>
<div class="well sidebar-nav">
    <ul class="nav nav-list">
        <li class="nav-header">Menu</li>
        <li><a href="news.php">&rarr; Lihat Berita</a></li>
        <li class="nav-header">Baca Juga</li>
        <ul type="square">
        	<?php
				while($hasil_recent= mysqli_fetch_array($ambil_recent)){
        			echo "<li>&rarr;<a href='detailberita.php?ID_BERITA=$hasil_recent[ID_BERITA]'>".$hasil_recent['JUDUL']."</a></li>";
				}
			?>
        </ul>
    </ul>
</div><!--/.well ko-->

	