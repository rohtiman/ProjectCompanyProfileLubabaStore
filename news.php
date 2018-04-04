<!doctype html>

<?php include ("header.php"); 
include ("koneksi.php");

?>
<!-- HEADER -->
		<header>
			<div class="wrapper cf">
				
				<div id="logo">
					<a href="index.php"><img  src="img/logo.png" alt="Simpler"></a>
				</div>
				
				<!-- nav -->
				<ul id="nav" class="sf-menu">
					<li><a href="index.php"><span>HOME</span></a></li>
					<li><a href="product-all.php">PRODUCT</a></li>
					<li class="current-menu-item"><a href="news.php">NEWS</a></li>
					<li><a href="carier.php">CARIER</a></li>
					<li><a href="contact.php">CONTACT</a></li>
					<li><a href="about.php">ABOUT</a></li>
				</ul>
				<div id="combo-holder"></div>
				<!-- ends nav -->

			</div>
		</header>
		<!-- ENDS HEADER -->
		<!-- MAIN -->
		<div id="main">
			<div class="wrapper cf">
			
				
				<!-- posts list -->
	        	<div id="posts-list" class="cf">        	
	        		
	        		
	        		
				<!-- Standard -->
				
			<!-- this is pagination -->
			
					<?php
						include ("koneksi.php");
						$perPages = 3 ; //perhalaman
						$page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
						$star = ($page > 1) ? ($page * $perPages) - $perPages : 0;

						$query = "SELECT * FROM berita order by TANGGAL desc limit $star, $perPages";
						$result2 = mysqli_query($connect, $query);
						$result = mysqli_query($connect, "select * from berita");
						$total = mysqli_num_rows($result);

						$pages = ceil($total/$perPages);

						while($row = mysqli_fetch_assoc($result2)){
								?>
					<!-- end pahination -->
<article >					

  
<div class="format-standard">  
      <div class="span4">
		<a <?php echo "<a href='detailberita.php?ID_BERITA=".$row['ID_BERITA']."'>";?>
			<img  style="width: 640px; height: 240px;" <?php  echo '<img src="images/'. $row['GAMBAR'] .'">';?> 
		</a>
      </div>
	  
    <div class="box cf"> 
	<br>
		<div class="excerpt">
		<a <?php echo "<a href='detailberita.php?ID_BERITA=".$row['ID_BERITA']."'>";?>
		<h3><?php echo $row['JUDUL'];?><br></h3></a>
		<p style="text-align:justify;"><?=substr($row['ISI'],0,253);?></p>  
		<p>  
			<a <?php echo "<a href='detailberita.php?ID_BERITA=".$row['ID_BERITA']."'>";?> Baca Selengkapnya</a>   
			<a href="#" class="entry-date" align="center"> <?=$row['TANGGAL'];?></a>
		</p>  
     </div>     
    </div>
	</div>
    <hr>  
  <?php  
  }
  ?>  
</article>
					<!-- ENDS  Standard -->
				<div align="center">
							<?php 
								for($i=1; $i<=$pages; $i++){?>
								<a href="?halaman=<?php echo $i;?>"><b><?php echo $i;?></b></a>	
							<?php
								}
							 ?>
							
						</div>	
					
				
        		</div>
        		<!-- ENDS posts list -->
			
				<!-- sidebar -->
				
        	<div id="sidebar">
			
				      
        		<?php include ("menuBerita.php"); ?>
        		
        	</div>
			<!-- ENDS sidebar -->
			
			
			</div><!-- ENDS WRAPPER -->
		</div>
	</div>
		<!-- ENDS MAIN -->
	
<?php include ("footer.php"); ?>