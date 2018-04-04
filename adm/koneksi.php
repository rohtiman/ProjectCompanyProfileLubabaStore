<?php

$server="mysql.idhostinger.com";
$username = "u446737837_user";
$password = "timan cah";
$database = "u446737837_lbb";

$conec = mysql_connect($server,$username,$password,$database);
$select_db = mysql_select_db($database, $conec) or die ('gagal koneksi');

?>