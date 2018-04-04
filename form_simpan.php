<html>
<head> 
	<title>Aplikasi CRUD dengan PHP</title>
</head>
<body> 
	<h1>Tambah Foto</h1>  
	<form method="post" action="proses_simpan.php" 
	enctype="multipart/form-data">  
	<table cellpadding="8">  
	<tr>    
	<td>Sejarah lubada</td>    
	<td><input type="text" name="sejarah_lubada"></td>  
	</tr>  
	<tr>    
	<td>visi lubada</td>    
	<td><input type="text" name="visi_lubada"></td>
	</tr>  
	<tr>    
	<td>misi lubada</td>   
	<td><input type="text" name="misi_lubada"></td>
	</tr>  
	<tr>    
	<td>Foto</td>    
	<td><input type="file" name="foto"></td> 
	</tr> 
	</table>   
	<hr>  
	<input type="submit" value="Simpan">  
	<a href="index.php"><input type="button" 
	value="Batal"></a>  
</form>
</body>
</html>