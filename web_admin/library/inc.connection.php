<?php
error_reporting(0);

$msHost	= "localhost";
$msUser	= "root";
$msPass	= "";

// mengatur koneksi dan disimpan dalam satu variabel
$koneksidb = mysql_connect($msHost, $msUser, $msPass, true);

// mengatur pemilihan database sesuai koneksi
mysql_select_db('db_sdwischool', $koneksidb );


?>