
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tambah Produk</title>
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
    <link href="../assets/css/basic.css" rel="stylesheet" />
    <link href="../assets/css/custom.css" rel="stylesheet" />
	<link href="../assets/css/bootstrap-fileupload.min.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">LUBABA</a>
            </div>

            <div class="header-right">
                <a href="../logout.php" onclick="return confirm('anda yakin akan keluar?')" class="btn btn-danger" title="Logout"><i class="fa fa-exclamation-circle fa-2x"></i></a>

            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <img src="../images/icon-profil.png" class="img-thumbnail" />

                            <div class="inner-text">
                                <?php echo $_SESSION['user']['nama']; ?>
                            
                            </div>
							<?php 
							$month= date ("m"); 
							$year=date("Y"); 
							$day=date("d"); 
							//menampilkan hari ini  
							  ?>
							<div class="inner-text"><?php echo date("d F Y ",mktime(0,0,0,$month,$day,$year)); ?></div>
							 <?php
							//cek tanggal 1 hari sekarang 
							$s=date ("w", mktime (0,0,0,$month,1,$year)); 
							for ($ds=1;$ds<=$s;$ds++) { 
							echo "<td style=\"font-family:arial;color:#B3D9FF\" align=center valign=middle bgcolor=\"#FFFFFF\"> 
							</td>";} 
							?>
                        </div>
                    </li>
                    <li>
                        <a class="" href="../home.php" onclick="return confirm('anda yakin ingin keluar dari jendela ini?')"><i class="fa fa-dashboard "></i>Home</a>
                    </li>
					<li>
                        <a class="active-menu" href="data_produk.php" onclick="return confirm('anda yakin ingin keluar dari jendela ini?')"><i class="fa fa-desktop "></i>Produk</a>
                    </li>
                    
					<li>
                        <a href=""><i class="fa fa-flash "></i>Tabel Akun <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a class="" href="../tabel_akun/data_akun.php"><i class="fa fa-toggle-on"></i>Data Akun</a></li>
                        </ul>
                    </li>
                </ul>

            </div>

        </nav>
			<div id="page-wrapper">
				<div id="page-inner">
					<div class="row">
						<div class="col-md-12">
							<h1 class="page-head-line">PRODUK</h1>
						</div>
					</div>
					<div class="col-md-12 col-sm-6 col-xs-12">
						<div class="panel panel-info">
                        <div class="panel-heading">
                           Tambah Produk
                        </div>
						<?php
						include('../koneksi.php');?>
                        <div class="panel-body">
                            <form role="form" method="post" action="prosestambah.php" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Nama Produk</label>
                                    <input class="form-control" type="text" name="nama" required="required">
                                </div>
								<div class="form-group">
                                    <label>Kategori</label>
                                    <select name="kategori" required="required" class="form-control">
									<?php
										$sql = mysql_query("select * from kategori")
										or die("Error Query : ".mysql_error());
										while($data = mysql_fetch_array($sql)){
									?>
									<option value="<?php echo $data['idkategori']?>" /><?php echo $data['idkategori'].' - '.$data['namakategori']?>
										<?php } ?>
									</select>
                                </div>
								<div class="form-group">
                                    <label>Spesifikasi</label>
                                    <textarea class="form-control" rows="5" name="spek" required="required"></textarea>
                                </div>
								<div class="form-group">
                                    <label>Harga</label>
                                    <input class="form-control" type="text" name="harga" required="required">
                                </div>
                                <div class="form-group">
                                    <label>Gambar</label>
                                    <input class="form-control" type="file" name="gambar" >
                                </div>
								<div align="center">
								<button type="submit" name="submit"  class="btn btn-success">Simpan </button> &nbsp
								<button type="reset" name="reset" class="btn btn-danger">Batal </button>
								</div>
                            </form>
                            </div>
                        </div>
						<div align="right"><a href="data_produk.php" class="bt_green"><strong>Kembali ke data produk...</strong></a></div>
                    </div>
				</div>
			</div>
    </div>
    <div id="footer-sec">
        &copy; 2014 YourCompany | Design By : <a href="http://www.binarytheme.com/" target="_blank">BinaryTheme.com</a>
    </div>
    <script src="../assets/js/jquery-1.10.2.js"></script>
    <script src="../assets/js/bootstrap.js"></script>
    <script src="../assets/js/jquery.metisMenu.js"></script>
    <script src="../assets/js/custom.js"></script>
	<script src="../assets/js/bootstrap-fileupload.js"></script>
</body>
</html>
