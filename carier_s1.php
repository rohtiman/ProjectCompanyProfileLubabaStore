<?php include('header.php'); ?>

		<!-- HEADER -->
		<header>
			<div class="wrapper cf">
				
				<div id="logo">
					<a href="index.php"><img  src="img/logo.png" alt="Simpler"></a>
				</div>
				<!-- nav -->
				<nav>
				<!-- nav -->
				<ul id="nav" class="sf-menu">
					<li><a href="index.php"><span>HOME</span></a></li>
					<li><a href="product-all.php">PRODUCT</a></li>
					<li><a href="news.php">NEWS</a></li>
					<li class="current-menu-item"><a href="carier.php">CARIER</a></li>
					<li><a href="contact.php">CONTACT</a></li>
					<li><a href="about.php">ABOUT</a></li>
					
				</ul>php">ABOUT</a></li>
				</ul>
				</nav>
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

		        	<!-- masthead -->
					<div class="masthead cf">
						CARIER
					</div>
					<!-- ENDS masthead -->     	


					<!-- Standard -->
					<!-- this is pagination -->
					<?php
						include ("koneksi.php");
						$perPages = 3 ; //perhalaman
						$page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
						$star = ($page > 1) ? ($page * $perPages) - $perPages : 0;

						$query = ("SELECT * from carier where jenjang = 's1' order by date_post desc limit $star, $perPages");
						$result2 = mysqli_query($connect, $query);
						$result = mysqli_query($connect, "select * from carier");
						$total = mysqli_num_rows($result);

						$pages = ceil($total/$perPages);

						while($row = mysqli_fetch_assoc($result2)){
								?>
					  <article class="format-standard">
						
							<div class="box cf">
								<div class="entry-date" align="center"><?php echo $row["DATE_POST"]; ?></div>
								
								<div class="excerpt">
									<a href="" class="post-heading" ><?php echo $row["JABATAN"];?></a>
							
									<p><?php  echo $row["REQUIREMENT"];?>
										</p>
									<p>Awal mulai pendaftaran <?php  echo $row["AWAL_REQ"];?></p>
									<p>Dan lowongan ini berahir pada <?php  echo $row["AKHIR_REQ"];?></p>
									<p><b>Gaji sebesar <?php  echo "Rp ", rupiah($row["GAJI"], 2);?></b></p>
								</div>

							</div>
						</article>
						
					  
						<?php   
						}
					
					?>  
							<div align="center">
							<?php 
								for($i=1; $i<=$pages; $i++){?>
								<a href="?halaman=<?php echo $i;?>"><?php echo $i;?></a>	
							<?php
								}
							 ?>
							
						</div>



						
						
					<!-- ENDS  Standard -->

					<!-- page-navigation -->
					<div class="page-navigation cf">
						<div class="nav-next"><a href="#"></a></div>
						<div class="nav-previous"><a href="#"></a></div>
					</div>
					<!--ENDS page-navigation -->
					
				
        		</div>
        		<!-- ENDS posts list -->
			
				<!-- sidebar -->
        	<aside id="sidebar">
        		
        		<ul>
	        		
	        		<li class="block">
		        		<h4>JOB VACANCIES</h4>
						<ul>
							<li class="cat-item"><a href="carier_s1.php">S1<span class="post-counter"></span></a></li>
							<li class="cat-item"><a href="carier_d3.php">D3<span class="post-counter"></span></a></li>
							<li class="cat-item"><a href="carier_sma_smk.php">SMA / SMK<span class="post-counter"></span></a></li>
						</ul>
	        		</li>
	        		
        			<li class="block">
		        		<h4>INFORMATION</h4>
						<ul>
							<li class="cat-item"><a href="Regular_Recruitment.php" >Regular Recruitment</a></li>
							<li class="cat-item"><a href="Recruiment_Process.php">Recruiment Process</a></li>
						</ul>
	        		</li>

        		</ul>
        		
        	</aside>
			<!-- ENDS sidebar -->
			
			
			</div><!-- ENDS WRAPPER -->
		</div>
		<!-- ENDS MAIN -->
		
<?php include('footer.php'); ?>	
		