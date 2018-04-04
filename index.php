<?php include ("banner.php"); 


?>
<!-- HEADER -->
		<header>
			<div class="wrapper cf">
				
				<div id="logo">
					<a href="index.php"><img  src="img/logo.png" alt="Simpler"></a>
				</div>
				
				<!-- nav -->
				<ul id="nav" class="sf-menu">
					<li class="current-menu-item"><a href="index.php"><span>HOME</span></a></li>
					<li><a href="product-all.php">PRODUCT</a></li>
					<li><a href="news.php">NEWS</a></li>
					<li><a href="carier.php">CARIER</a></li>
					<li><a href="contact.php">CONTACT</a></li>
					<li><a href="about.php">ABOUT</a></li>
				</ul>
				<div id="combo-holder"></div>
				<!-- ends nav -->

				
				
				<!-- SLIDER -->				
				<div id="home-slider" class="lof-slidecontent">
					
					<div class="preload"><div></div></div>
					
					<!-- slider content --> 
					<div class="main-slider-content" >
					<ul class="sliders-wrap-inner">
					    <li>
					          <img src="images/Laptop-Repair-Banner-1.jpg" style="width:950px;height:370px" title="" alt="alt" />           
					       
					    </li>
					    
					    <li>
					          <img src="images/banner-laptop.jpg" style="width:950px;height:370px" title="" alt="alt" />           
					         
					    </li>
					    
					    <li>
					          <img src="images/banner2.jpg" style="width:950px;height:370px" title="" alt="alt" />           
					         
					    </li>
					    
					    <li>
					          <img src="images/1479221407HP-Laptop-Banner.jpg" style="width:950px;height:370px" title="" alt="alt" />           
					          
					    </li>
					    
					    <li>
					          <img src="images/lenovo-laptop-service-centre-in-gurgaon.jpg" style="width:950px;height:370px" title="" alt="alt" />           
					         
					    </li>
					   
					    
					  </ul>  	
					</div>
					<!-- ENDS slider content --> 
				           
					<!-- slider nav -->
					<div class="navigator-content">
					  <div class="navigator-wrapper">
					        <ul class="navigator-wrap-inner">
					           <li><img src="images/Laptop-Repair-Banner-1.jpg" style="width:190px;height:95px" alt="alt" /></li>
					           <li><img src="images/banner-laptop.jpg" style="width:190px;height:95px" alt="alt" /></li>
					           <li><img src="images/banner2.jpg" style="width:190px;height:95px" alt="alt" /></li>
					           <li><img src="images/1479221407HP-Laptop-Banner.jpg" style="width:190px;height:95px" alt="alt" /></li>
					           <li><img src="images/lenovo-laptop-service-centre-in-gurgaon.jpg" style="width:190px;height:95px" alt="alt" /></li>
					        </ul>
					  </div>
					  <div class="button-next">Next</div>
					  <div  class="button-previous">Previous</div>
					  <!-- REMOVED TILL FIXED <div class="button-control"><span>STOP</span></div> -->
					</div> 
					<!-- slider nav -->
					
					
				          
			  </div> 
				<!-- ENDS SLIDER -->





			</div>
		</header>
		<!-- ENDS HEADER -->

		
		<!-- MAIN -->
		<div id="main">
			<div class="wrapper cf">
			
				
			<!-- featured -->
			<!-- portfolio content-->
        	 <div id="portfolio-content" class="cf"> 
				
				
				<!-- Filter container -->
				<h1>PRODUK TERBARU</h1><br>
				<div id="filter-container" class="cf">
				
					
					

						<?php
						include ("koneksi.php");
						$query = "select * from produk order by id desc limit 0,6"; // Query untuk menampilkan semua data produk
						$result = mysqli_query($connect, $query);// Eksekusi / Jalankan query dari variabel query
						if(mysqli_num_rows($result) > 0)
						{
						$no=1;
					
							while($row=mysqli_fetch_array($result))
							{
						?>
						
					
						<figure class="pc">
								<a class="thumb"><img style="width:345px;height:175px"  <?php  echo '<img src="images/'. $row['gambar'] .'">';?> </a><br>
								<figcaption>
								<?php echo "<a href='single.php?id=".$row['id']."'>";?><h3 class="heading"><?php echo $row["nama"];?><br></h3></a>
								<a href="single.php?detail=<?php $row["id"];?>" action="single.php?detail=<?php $row["id"];?>">
								IDR <?php echo $row["harga"];?><br></figcaption>
						</figure>
						<?php
							$no++;
							}
							}
							?>
					
			</div>
			</div>
			
			<!-- ENDS featured -->
			</div>
			
			
			
		</div><!-- ENDS WRAPPER -->
		
		
		<!-- ENDS MAIN -->
		
		<?php include ("footer.php");
		?>
	