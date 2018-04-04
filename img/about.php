<?php
include('header.php');
?>
		
		<!-- MAIN -->
		<div id="main">
			<div class="wrapper cf">
			
			
				
			<!-- page content-->
        	<div id="page-content" class="cf">        	
	        		
	        	<!-- entry-content -->	
	        	<div class="entry-content cf">
	        	
					
						<h3> LUBABA SHOP </h3><br><br>
						<?php
							include ("koneksi.php");
							$query = "SELECT * FROM about";
							$result = mysqli_query($connect, $query);
							if(mysqli_num_rows($result) > 0)
							{
								while($row = mysqli_fetch_array($result))
								{
								
								
						?>
						
							<img style="width:345px; height:175px" <?php
							echo '<img src="images/'. $row['foto'] .'">';?><br><br>
					
						<h3 class="heading">SEJARAH LUBABA</h3>
							<?php echo $row['sejarah_lubada'];?><br><br>
						</div>
						
						<div class="one-third">
						<h3 class="heading">Visi Lubada</h3><br>
						<?php
								echo $row['visi_lubada'];?><br><br>
								
						<h3 class="heading">Misi Lubada</h3><br>
						<?php
								echo $row['misi_lubada'];
							
								}
							}
							?>
					</div>
					
			
			
				</div><!-- ENDS WRAPPER -->
			</div>
		</div>
		
		<!-- ENDS MAIN -->
		
<div class="konten">
</div>

<?php
include('footer.php');
?>