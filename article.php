<?php
/*
+----------------------------------------------------------------------------+
|     Copyright (c) 2008-2009 by al farisi
|     Website : www.alfarisi.web.id
|               www.indokreatif.net
|     E-mail  : el.numinous@gmail.com
+----------------------------------------------------------------------------+
*/

require_once 'function.php';

session_start();

include ("koneksi.php");

if (isset($_GET['article_id'])) {
	$id = intval($_GET['article_id']);
} else {
	$id = 0;
}

$query = "SELECT * FROM article WHERE article_id={$id}";
$content = mysql_fetch_array(mysql_query($query));

echo "<div>{$content['title']}<br /><br />";
echo "{$content['body']}</div><br /><br />";
	
// komentar
$alert = "<div><span>Berikan Komentar</span>";

if(isset($_POST['kirim'])) {
	$error = false;
	$nama = trim($_POST['nama']);
	$email = check_email($_POST['email']);
	$comment = trim($_POST['comment']);
	$alert .= "<br><br><span style='color:#c00;'>";
	if (strlen($nama) < 2 || strlen($pesan) < 2) {
		$alert .= "Mohon tulis nama dan komentar dengan benar.<br>";
		$error = true;
	}
	if (!$email) {
		$alert .= "Alamat e-mail anda tidak valid.<br>";
		$error = true;
	}
	if (!verify_code($_POST['randomcode'], $_POST['code'])) {
		$alert .= "Kode salah.<br>";
		$error = true;
	}
	if (!$error) {
		$nama = strip_tags($nama);
		$comment = strip_tags($comment);
		mysql_query("INSERT INTO comment (article_id, nama, email, comment, date) VALUES ({$id}, '{$nama}', '{$email}', '{$comment}', '{$tanggal}',NOW() )");
		
		unset($_POST['nama'],$_POST['email'],$_POST['comment'],$_POST['tanggal']);
			
		$alert .= "Terima kasih atas komentar anda..";
	}
}

$alert .= "</span></div><br>";

echo "<hr><a name='komentar'></a> Komentar<br><br>";

$query = mysqli_query("SELECT * FROM comment WHERE article_id={$id} ORDER BY date");
while ($row = mysqli_fetch_array($query)) {
	$nama = $row['nama'];
	$komentar = $row['comment'];
	$datestamp = $row['tanggal'];
	echo "<div style='border:1px solid;'>{$nama}<br />{$datestamp}<br />{$komentar}</div><br />";
}
	
$nama = isset($_POST['nama']) ? $_POST['nama'] : "";
$email = isset($_POST['email']) ? $_POST['email'] : "";
$pesan = isset($_POST['comment']) ? $_POST['comment'] : "";

echo "<a name='postkomentar'></a> {$alert}";

$temp = create_code();
$code1 = $temp[0];
$code2 = $temp[1];

echo "<div>
<form method='POST' action='article.php?id={$id}#postkomentar'>
Nama:<br><input name='nama' size='30' type='text' value='{$nama}'><br><br>
E-mail:<br><input name='email' size='30' type='text' value='{$email}'><br><br>
Silahkan tulis komentar anda :<br><textarea cols='45' rows='5' name='pesan'>{$comment}</textarea><br><br>
Masukkan kode berikut<br> {$code2} 
<input type='hidden' id='randomcode' name='randomcode' value='{$code1}' />
<input maxlength='6' size='6' type='text' name='code' />
<input value=' Kirim ' name='kirim' type='submit' />
</form>
</div>";


?>