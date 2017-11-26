<?php
if(empty($_SESSION['Ses_User'])) {
	echo "<center>";
	echo "<br> <br> <b>Maaf Akses Anda Ditolak!</b> <br>
		  Silahkan masukkan Data Login Anda dengan benar untuk bisa mengakses halaman ini.";
	echo "</center>";
	include_once "index.php";
	exit;
	//echo "<meta http-equiv='refresh' content='0; url=index.php'>";
}
?>