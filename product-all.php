
	
		<?php
			include "header.php";
		?>
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
					<li class="current-menu-item"><a href="product-all.php">PRODUCT</a></li>
					<li><a href="news.php">NEWS</a></li>
					<li ><a href="carier.php">CARIER</a></li>
					<li><a href="contact.php">CONTACT</a></li>
					<li><a href="about.php">ABOUT</a></li>
					
				</ul>
				</nav>
				<div id="combo-holder"></div>
				<!-- ends nav -->

			</div>
		</header>
		<!-- MAIN -->
		<div id="main">
			<div class="wrapper cf">
	
				
			<!-- portfolio content-->
        	<div id="portfolio-content" class="cf">  
				
				<ul id="filter-buttons">
					<li><a href="#" data-filter="*" class="selected">Show All</a></li>
					<li><a href="#" data-filter=".pc">PC and Laptop</a></li>
					<li><a href="#" data-filter=".mobile">Mobile Phone</a></li>
					<li><a href="#" data-filter=".acc">Accesories</a></li>
				</ul>
                    <div  align="right">
									<form method="GET" action="pencarianproduk.php" enctype="multipart/form-data">
                                                                            <input class="search" type="text" name="search" style="width: 200px">&nbsp;&nbsp;<input type="submit" value="Search" style="width: 100px" />
									</form>
								</div>

				<!-- Filter container -->
				<div id="filter-container" class="cf">

						<?php
						include "koneksi.php";
						
						$query = "SELECT * FROM produk ORDER BY id DESC"; // Query untuk menampilkan semua data produk
						$result = mysqli_query($connect, $query);// Eksekusi / Jalankan query dari variabel query
						if(mysqli_num_rows($result) > 0)
						{
							while($row = mysqli_fetch_array($result))
							{
						?>
								<?php
								if($row['kategori'] == "1"){
									?>
									<figure class="pc">
										<a class="thumb"><img style="width:345px;height:175px" <?php  echo '<img src="images/'. $row['gambar'] .'">';?> </a>
										<figcaption>
										<?php echo "<a href='single.php?id=".$row['id']."'>";?><h3 class="heading"><?php echo $row["nama"];?><br></h3></a>
										<a href="single.php?detail=<?php $row["id"];?>" action="single.php?detail=<?php $row["id"];?>">
										IDR <?php echo rupiah($row["harga"]);?><br></figcaption>
										
									</figure>	
								<?php
								}
								?>
								<?php
								if($row['kategori'] == "2"){
									?>
									<figure class="mobile">
										<a class="thumb"><img style="width:345px;height:175px" <?php  echo '<img src="images/'. $row['gambar'] .'">';?> </a>
										<figcaption>
										<?php echo "<a href='single.php?id=".$row['id']."'>";?><h3 class="heading"><?php echo $row["nama"];?><br></h3></a>
										<a href="single.php?detail=<?php $row["id"];?>"  action="single.php?detail=<?php $row["id"];?>">
										IDR <?php echo rupiah($row["harga"]);?><br></figcaption>
									</figure>
								<?php
								}
								?>
								<?php
								if($row['kategori'] == "3"){
									?>
									<figure class="acc">
										<a class="thumb"><img style="width:345px;height:175px" <?php  echo '<img src="images/'. $row['gambar'] .'">';?> </a>
										<figcaption>
										<?php echo "<a href='single.php?id=".$row['id']."'>";?><h3 class="heading"><?php echo $row["nama"];?><br></h3></a>
										<a href="single.php?detail=<?php $row["id"];?>"  action="single.php?detail=<?php $row["id"];?>">
										IDR <?php echo rupiah($row["harga"]);?><br></figcaption>
									</figure>
								<?php
								}
								?>
					<?php
							}
						}
					?>
				
				
				</div>
			</div>
				
			</div>
			<!-- ENDS featured -->
		
			
			
			</div><!-- ENDS WRAPPER -->
			
		</div>
		<!-- ENDS MAIN -->

		
	<?php
		include "footer.php";
	?>
		
	