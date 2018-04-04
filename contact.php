<?php include('header.php'); ?>

<script type="text/javascript">
					function initialize() {
						var latlng = new google.maps.LatLng(-34.397, 150.644);
						var myOptions = {
						  zoom: 8,
						  center: latlng,
						  mapTypeId: google.maps.MapTypeId.ROADMAP
					};
					var map = new google.maps.Map(document.getElementById("map_canvas"),
					    myOptions);
					}
				</script> 
				<script>
				var mincar = 8;
					pola_nama=/^[a-zA-Z0-9\_\-]{8,100}$/;
					pola_email=/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
					
					function validasi_input(){
			if (formku.nama.value == ""){
				alert("nama masih kosong!");
				formku.nama.focus();
				return (false);

			}
			
			if (formku.nama.value.length < mincar){
				alert("panjang nama minimal 8 karakter!");
				formku.nama.focus();
				return (false);

				
			}
			
			if (!pola_email.test(formku.email.value)){
				alert('Penulisan email tidak benar');
				formku.email.focus();
				return (false);
			}
			if (formku.komentar.value == ""){
				alert("komentar masih kosong!");
				formku.komentar.focus();
				return (false);
				
			}
			
			return (true);
			
		}
	</script>
	
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
					<li class="current-menu-item"><a href="contact.php">CONTACT</a></li>
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
			
			<!-- page content-->
        	<div id="page-content" class="cf">
			
			
				<!-- Map -->
				<script type="text/javascript">
					function initialize() {
						var latlng = new google.maps.LatLng(-34.397, 150.644);
						var myOptions = {
						  zoom: 8,
						  center: latlng,
						  mapTypeId: google.maps.MapTypeId.ROADMAP
					};
					var map = new google.maps.Map(document.getElementById("map_canvas"),
					    myOptions);
					}
				</script> 
				
				<div id="map-holder">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.845516858549!2d109.5854502
					1435853!3d-7.027437770797669!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e701febf60499d1%3A0x
					334a0b5b24065c6e!2sLubada+Jaya!5e0!3m2!1sid!2sid!4v1491208782371" width="900px" height="320px" frameborder="0" style="border:0" allowfullscreen></iframe>
					<div id="map-content">
						<h3>LOKASI</h3><br>
							  <?php
							include "koneksi.php";
							$query = "select * from contact";
							$result = mysqli_query($connect, $query);
							if(mysqli_num_rows($result) > 0)
							{
								while($row = mysqli_fetch_array($result))
								{
									echo $row['lokasi'];?><br><br>
						
								<h3 class="heading">Email</h3><br>
								<?php
						
								echo $row['email'];?><br><br>
								
								<h3 class="heading">No. HP</h3>
								<br>08<?php echo $row['no_hp'];
							?><hr>
									<?php
									}
									
								}
							?>
						
						
					</div>
					</div>
					</div>
							
				</div>		

   <!--start: Container -->
    	<div class="container"> 
        <center><div class="title" style="margin-left: ;"><h3>Berikan masukan untuk kami, Agar kami bisa melayani anda lebih baik lagi...</h3></div></center>
            <form id="formku" method="post" action="proses.php" onsubmit="validasi_input()">
				<table style="font-style: oblique; font-weight: bold; margin-left: 140px;">
					<tr>
						<td width="150">Nama</td>
						<td width="30">:</td>
						<td width="550"><input type="text" name="nama" size="30" class="required" minlength="3" placeholder="Nama Anda" /></td>
					</tr>
					<tr>
						<td width="150">E-mail</td>
						<td width="30">:</td>
						<td width="550"><input type="text" name="email" size="30" class="required email" minlength="3" placeholder="Alamat Email" /></td>
					</tr>
					<tr>
						<td width="150">Komentar</td>
						<td width="30">:</td>
						<td width="550"><input type="text" name="komentar" size="30" class="required" minlength="3" placeholder="Komentar Anda " /></td>
					</tr>
					<tr>
						<td width="150"></td>
						<td width="30"></td>
						<td width="550"><input class="button" type="submit" value="Kirim"/></td>
					</tr>
				</table>
			</form>
		</div>
		<!-- END start: Container -->

		<!-- KOMENTAR -->
<div class="komentar" align="center">
	<?php


	echo "<head><title>My Guest Book</title></head>";
	$fp = fopen("guestbook.txt","r");
	echo "<table border=0>";

	while ($isi = fgets($fp,250))
	{
	$pisah = explode("|",$isi);
	echo "<tr><td>$pisah[0], $pisah[1]</td></tr>";
	echo "<tr><td><font color=brown>$pisah[2]</font>, Bilang</td></tr>";
	echo "<tr><td>$pisah[4]</td></tr>
	<tr><td>&nbsp;</td><td>&nbsp;</td></tr>";
	}
	echo "</table>";

?>
</div>

<?php
include ('footer.php');
?>