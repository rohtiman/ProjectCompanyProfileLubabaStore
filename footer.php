
<!-- FOOTER -->
		<footer>
			<div class="wrapper cf">
			
				<!-- widgets -->
				<ul  class="widget-cols cf">
					<li class="first-col">
					<h4>RECENT POSTS</h4>
						<article>
						<?php  

  include "koneksi.php";  
  $query =("select * from berita order by ID_BERITA desc limit 1");
  $result = mysqli_query($connect, $query);
  if(mysqli_num_rows($result) > 0) {
  
  while($row = mysqli_fetch_array($result)){  
  ?> 
  
<div class="format-standard">  
    
	  
    <div class="box cf"> 
	<br>
		<div class="excerpt">
		<a <?php echo "<a href='detailberita.php?ID_BERITA=".$row['ID_BERITA']."'>";?>
		<h5><?=substr($row['JUDUL'],0,50);?><br></h5></a>
		<p style="text-align:justify;"><?=substr($row['ISI'],0,50);?></p>  
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
}
  ?>  
</article>
</li>
<li class="second-col">
						
						<div class="widget-block">
							<h4>ABOUT</h4>
							<p>Jl. Mandurorejo Kajen, Nyamok, Kajen, Pekalongan, Jawa Tengah 51161 </p><a href="about.php">selengkapnya</a> 
						</div>
						
					</li>
					
					<li class="third-col">
					<?php
							include ("koneksi.php");
							$query = "SELECT * FROM about";
							$result = mysqli_query($connect, $query);
							if(mysqli_num_rows($result) > 0)
							{
								while($row = mysqli_fetch_array($result))
								{
								
								
						?>
						
						<div class="widget-block">
							<h4 class="heading">Visi Lubada</h4>
						<?php
								echo $row['visi_lubaba'];?><br><br>
								
						<h4 class="heading">Misi Lubada</h4>
						<?php
								echo $row['misi_lubaba'];
							
								
							}
						}
							?>
						</div>
		         		
					</li>
					
					<li class="fourth-col">
						
						<div class="widget-block">
							<h4>MENU</h4>
							<ul>
								<li class="cat-item"><a href="index.php" >HOME</a></li>
								<li class="cat-item"><a href="product-all.php" >PRODUCT</a></li>
								<li class="cat-item"><a href="news.php" >NEWS</a></li>
								<li class="cat-item"><a href="carier.php" >CAREER</a></li>
								<li class="cat-item"><a href="about.php" >ABOUT</a></li>
								<li class="cat-item"><a href="contact.php" >CONTACT</a></li>
							</ul>
						</div>
		         		
					</li>	
				</ul>
				<!-- ENDS widgets -->	
				
				
				<!-- bottom -->
				<div class="footer-bottom">
					<div class="left">by <a href="http://luiszuno.com" >lubaba 2017</a></div>
						<ul id="social-bar" class="cf sb">
							<li><a href="https://www.facebook.com/Lubaba-electronic-1495953383810934/"  title="Become a fan" class="facebook">Facebbok</a></li>

						</ul>
				</div>	
				<!-- ENDS bottom -->
			
			</div>
		</footer>
		<!-- ENDS FOOTER -->
		
	</body>
	
	
	
</html>	
	