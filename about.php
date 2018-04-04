<?php
include("header.php");
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
					<li><a href="news.php">NEWS</a></li>
					<li><a href="carier.php">CARIER</a></li>
					<li><a href="contact.php">CONTACT</a></li>
					<li class="current-menu-item"><a href="about.php">ABOUT</a></li>
				</ul>
				<div id="combo-holder"></div>
				<!-- ends nav -->

			</div>
		</header>
		<!-- ENDS HEADER -->

		<!-- MAIN -->
		<div id="main">
			<div class="wrapper cf">
			
			
				
			<!-- page content-->
        	<div id="page-content" class="cf">        	
	        		
	        	<!-- entry-content -->	
	        	<div class="entry-content cf">
	        	
					
						
						<?php
							include "koneksi.php";
							$query = "SELECT * FROM about where id_about=001";
							$result = mysqli_query($connect, $query);
							if(mysqli_num_rows($result) > 0)
							{
								while($row = mysqli_fetch_array($result))
								{
								
								
						?>
						
							<img style="width:650px; height:175px" <?php
							echo '<img src="images/'. $row['logo'] .'">';?><br><br>
					
						<h3 class="heading">SEJARAH LUBABA</h3>
							<?php echo $row['sejarah_lubaba'];?><br><br>
						</div>
						
						
						<h3 class="heading">VISI LUBABA</h3><br>
						<?php
								echo $row['visi_lubaba'];?><br><br>
								
						<h3 class="heading">MISI LUBABA</h3><br>
						<?php
								echo $row['misi_lubaba'];
							
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
include("footer.php");
?>