<?php 
require_once "library/inc.connection.php";

if(isset($_POST['btnLogin'])){
	$pesanError = array();
	if ( trim($_POST['txtUser'])=="") {
		$pesanError[] = "Data <b> Username </b>  tidak boleh kosong !";		
	}
	if (trim($_POST['txtPassword'])=="") {
		$pesanError[] = "Data <b> Password </b> tidak boleh kosong !";		
	}
	
	# Baca variabel form
	$txtUser 	= $_POST['txtUser'];
	$txtPassword = $_POST['txtPassword'];
	
	//$txtUser 	= "admin";
//$txtPassword ="admin";
	
	# JIKA ADA PESAN ERROR DARI VALIDASI
	if (count($pesanError)>=1 ){
		echo "<div class='alert alert-error'>";
		echo "<button type='button' class='close' data-dismiss='alert'>
											<i class='icon-remove'></i></button>

										<strong>
											";
			$noPesan=0;
			foreach ($pesanError as $indeks=>$pesan_tampil) { 
			$noPesan++;
				echo "&nbsp;&nbsp; $noPesan. $pesan_tampil<br>";	
			} 
		echo "</strong></div> <br>"; 
		
		// Tampilkan lagi form login
		include "sign-in.php";
	}
	else 
	{
		# LOGIN CEK KE TABEL USER LOGIN
		$mySql = "SELECT A.* FROM M_USER AS A  WHERE A.id_user='".$txtUser."' AND A.password='".md5($txtPassword)."'";
		$myQry = mysql_query($mySql, $koneksidb) or die ("Query Salah");
		$myData= mysql_fetch_array($myQry);
		
		echo 1;
		# JIKA LOGIN SUKSES
		if(mysql_num_rows($myQry) > 0) {
			$_SESSION['Ses_User'] = $myData['id_user']; 
			$_SESSION['Ses_Nama'] = $myData['nm_user'];   
			$_SESSION['Ses_Sekolah'] = $myData['sekolah_id'];
			// Refresh
			echo "<meta http-equiv='refresh' content='0; url=index.php?page=Halaman-Utama'>";
		}
		else {
			 include "sign-in.php";
		}
	}
} // End POST
?>
 
