<?php include("header.php");?>
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
				<article >					
							
							<div>
								<?php include ("lihatDetailBerita.php");?>
							</div>
														
					</article>
				<!-- ENDS  Standard -->
			
    		</div>
    		<!-- ENDS posts list -->
			
			<!-- sidebar -->
        	<div id="sidebar">
			
				      
        		<?php include ("menuBerita.php"); ?>
        		
        	</div>
			<!-- ENDS sidebar -->
			
			
			</div><!-- ENDS WRAPPER -->
		</div>
		<!-- ENDS MAIN -->
	<?php include ("footer.php");
		?>