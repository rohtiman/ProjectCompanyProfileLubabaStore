  <?php  
  include "koneksi.php";  
  $ambil_data = mysqli_query($koneksi, "select * from berita order by ID_BERITA desc limit 0,5");  
  while($hasil_data = mysqli_fetch_array($ambil_data)){  
  ?>  
   <div class="format-standard">  
      <div class="feature-image">
		<a href="single.html">
			<img data-src="holder.js/640x240" alt="640x240" src="<?=$hasil_data['gambar'];?>" style="width: 640px; height: 240px;">
		</a>
      </div>
	  
    <div class="box cf"> 
	<br>
		<div class="excerpt">
		<h2><?=$hasil_data['JUDUL'];?></h2><br>
		<p style="text-align:justify;"><?=substr($hasil_data['ISI'],0,500);?></p>  
		<p>  
			<a href="link=lihatDetailBerita.php&id=<?=$hasil_data['ID_BERITA'];?>" class="btn btn-primary">Baca Selengkapnya</a>   
			<a href="#" class="entry-date" align="center"> <?=$hasil_data['TANGGAL'];?></a>
		</p>  
     </div>     
    </div>
	</div>
    <hr>  
  <?php  
  }  
  ?>  