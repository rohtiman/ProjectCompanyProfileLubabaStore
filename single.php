<!doctype html> 
<html class="no-js">

	<? include "header.php" ;?>
		
		<!-- MAIN -->
		<div id="main">
			<div class="wrapper cf">
			
			
			<!-- masthead -->

			<?php
			include "koneksi.php";
			$detail=$_GET['id'];
			$query = "SELECT * FROM produk WHERE id='".$detail."'";
			$sql = mysqli_query($connect, $query); // Eksekusi / Jalankan query dari var query
			while($row = mysqli_fetch_array($sql))
							{
						?>
			<div class="masthead cf">
				<?php  echo $row['nama'];?>
			</div>
			<!-- ENDS masthead -->

			
				
			<!-- posts list -->
        	<div id="posts-list" class="cf">        	
	        	<a href="product-all.php"><< Back to Product</a><br>	
	        		
				<!-- Standard -->
				<article class="format-standard">
					<div class="feature-image">
						<img style="width:650px;height:380px" <?php  echo '<img src="images/'. $row['gambar'] .'">';?> 
					</div>
					<div class="box cf">
						
						<div class="excerpt">
							<div class="post-heading" ><?php  echo $row['nama'];?></div><h5>IDR <?php echo $row["harga"]?></h5><br>
							<div class="entry-content">
								<p>
								</p>
							</div>
							
							
						</div>
						
							
					</div>
				</article>
				<!-- ENDS  Standard -->
				
	
    		</div>
    		<!-- ENDS posts list -->
			
			<!-- sidebar -->
        	<article class="format-standard">
        		
        		<div class="box cf">
	        		
	        		
	        		<div class="excerpt">
						<div class="entry-content">
							<h4>Details</h4><br>
						<?php  echo $row['spek'];?>
						</div>
	        		</div>
        		
        		</div>
        		
        	</article>
			<!-- ENDS sidebar -->
			<?
							}
			?>
			
			</div><!-- ENDS WRAPPER -->
		</div>
		<!-- ENDS MAIN -->
		
	<?php include "footer.php" ;?>
		
	</body>

</html>