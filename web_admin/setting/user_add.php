<?php
include_once "library/inc.seslogin.php";

$Simpan 			= $_POST["Simpan"];
$Update 			= $_POST["Update"];
$Edit 				= $_GET["Edit"];
$Kode				= $_GET["Kode"];

# Tombol Simpan diklik
if(isset($_POST['Simpan']) or isset($_POST["Edit"])){
	# VALIDASI FORM, jika ada kotak yang kosong, buat pesan error ke dalam kotak $pesanError
	$pesanError = array();
	if (trim($_POST['id_user'])=="") {
		$pesanError[] = "Data <b>User Id</b> tidak boleh kosong !";		
	}
	if (trim($_POST['username'])=="") {
		$pesanError[] = "Data <b>username</b> tidak boleh kosong !";		
	}
	if (trim($_POST['nm_user'])=="") {
		$pesanError[] = "Data <b>nm_user</b> tidak boleh kosong !";		
	}
	if (trim($_POST['no_telepon'])=="") {
		$pesanError[] = "Data <b>no_telepon</b> tidak boleh kosong !";		
	}
	if (trim($_POST['password'])=="") {
		$pesanError[] = "Data <b>password</b> tidak boleh kosong !";		
	}
		if (trim($_POST['level'])=="") {
		$pesanError[] = "Data <b>Divisi</b> tidak boleh kosong !";		
	}
	
	# BACA DATA DALAM FORM, masukkan datake variabel
	$id_user		= $_POST['id_user'];
	$username		= strtoupper($_POST['username']);
	$nm_user		= strtoupper($_POST['nm_user']);
	$no_telepon		= $_POST['no_telepon'];
	$password	= $_POST['password'];
	$level	= $_POST['level'];
	$id_klinik	= $_POST['id_klinik'];
	
	if ($Simpan == "Simpan"){
	# VALIDASI USER LOGIN (USERNAME), jika sudah ada akan ditolak
	$cekSql="SELECT * FROM M_USER WHERE id_user='$id_user'";
	$cekQry=mysql_query($cekSql, $koneksidb) or die ("Eror Query 1"); 
	if(mysql_num_rows($cekQry)>=1){
		$pesanError[] = "nm_user <b> $id_user </b> sudah ada, ganti dengan yang lain";
	}}

	# JIKA ADA PESAN ERROR DARI VALIDASI
	if (count($pesanError)>=1 )
		{
		echo '<div class="form-group has-error">';
			$noPesan=0;
			foreach ($pesanError as $indeks=>$pesan_tampil) 
				{				 
					$noPesan++;
					echo "<input type='text' value='$pesan_tampil' class='form-control1' id='inputError1'>";	
				} 
		echo '</div> <br>'; 
		}
	if ($Simpan == "Simpan") {
		# SIMPAN DATA KE DATABASE. 
		// Jika tidak menemukan error, simpan data ke database
		$mysql  	= "INSERT INTO M_USER (id_user, username, nm_user,no_telepon,password,level,id_klinik,recuser, recdate)
						VALUES ('$id_user', 
								'$username', 
								'$nm_user',
								'$no_telepon',
								'".md5($password)."',
								'$level',
								'$id_klinik',
								'".$_SESSION['NIK_Session']."',
								'".date("Y-m-d H:m:s")."')";
		$msQry=mysql_query($mysql, $koneksidb) or die ("Gagal query Simpan");
		if($msQry){
			echo "<meta http-equiv='refresh' content='0; url=?page=User-Data'>";
		}
		exit;
	}
	else if ($Update == "Update") {
	
		# Cek Password baru
		//if (trim($txtPassword)=="") {
			//$sqlPasword = ", password='$txtPassLama'";
		//}
		//else {
		//	$sqlPasword = ",  password ='".md5($txtPassword)."'";
		//}
		# SIMPAN DATA KE DATABASE. 
		// Jika tidak menemukan error, simpan data ke database
		$mysql  	= "UPDATE M_USER set username='$username', nm_user='$nm_user',no_telepon='$no_telepon',password='".md5($password)."',level='$level',id_klinik='$id_klinik',
		               recuserupd='".$_SESSION['NIK_Session']."', recdateupd='".date("Y-m-d H:m:s")."'
		               WHERE id_user='$id_user'";
		$msQry=mysql_query($mysql, $koneksidb) or die ("Gagal query Update");
		if($msQry){
			echo "<meta http-equiv='refresh' content='0; url=?page=User-Data'>";
		}
		exit;
	}	
} // Penutup Tombol Simpan

# MASUKKAN DATA KE VARIABEL
// Supaya saat ada pesan error, data di dalam form tidak hilang. Jadi, tinggal meneruskan/memperbaiki yg salah
elseif($Edit)
	{	
		//---- query  untuk menampilkan data dari lemparan variabel edit ---//
		$qres_ten			= mysql_query("SELECT A.* FROM M_USER AS A Where A.id_user = '$Kode'", $koneksidb);
		$qqres_tenCount	    = mysql_num_rows($qres_ten);	
		$qListqres_ten	    = mysql_fetch_array($qres_ten);	
		$id_user		    = $qListqres_ten["id_user"];
		$username				= $qListqres_ten["username"];
		$nm_user 				= $qListqres_ten["nm_user"];
		$no_telepon 				= $qListqres_ten["no_telepon"];
		$password 			= $qListqres_ten["password"];;
		$level 			= $qListqres_ten["level"];
		$id_klinik 			= $qListqres_ten["id_klinik"];
	}	
else
	{	
		$id_user		    = isset($_POST['id_user']) ? $_POST['id_user'] : '';
		$username				= isset($_POST['username']) ? $_POST['username'] : '';
		$nm_user 				= isset($_POST['nm_user']) ? $_POST['nm_user'] : '';
		$no_telepon 				= isset($_POST['no_telepon']) ? $_POST['no_telepon'] : '';
		$password 			= isset($_POST['password']) ? $_POST['password'] : '';
		$level 			= isset($_POST['level']) ? $_POST['level'] : '';
		$id_klinik 			= isset($_POST['id_klinik']) ? $_POST['id_klinik'] : '';
	}	

?>

					<h3 class="blank1">ADD USER</h3>
							<div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
   

<div class="panel-body panel-body-inputin">

<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" name="form1" target="_self">


			<div class="form-group mb-n">
				<label class="col-md-2 control-label">USER ID</label>
				<div class="col-md-8">
<input id="id_user" name="id_user" type="text" value="<?php echo $id_user; ?>" class="form-control1" required="required" />
				</div>
				<div class="clearfix"> </div>
			</div>
			
			<div class="form-group mb-n">
				<label class="col-md-2 control-label">USER NAME</label>
				<div class="col-md-8">
<input id="username" name="username" type="text" value="<?php echo $username; ?>" class="form-control1" required="required" />
				</div>
				<div class="clearfix"> </div>
			</div>

			<div class="form-group mb-n">
				<label class="col-md-2 control-label">NAMA LENGKAP</label>
				<div class="col-md-8">
<input id="nm_user"  name="nm_user" type="text" value="<?php echo $nm_user; ?>" class="form-control1" required="required" />
				</div>
				<div class="clearfix"> </div>
			</div>
			
			<div class="form-group mb-n">
				<label class="col-md-2 control-label">NO TELPON</label>
				<div class="col-md-8">
<input id="no_telepon" name="no_telepon" type="text" value="<?php echo $no_telepon; ?>" class="form-control1" required="required" />
				</div>
				<div class="clearfix"> </div>
			</div>

			<div class="form-group mb-n">
				<label class="col-md-2 control-label">PASSWORD</label>
				<div class="col-md-8">
<input name="password" type="password" class="form-control1" required="required" />
				</div>
				<div class="clearfix"> </div>
			</div>
			
			<div class="form-group mb-n">
				<label class="col-md-2 control-label">KLINIK</label>
				<div class="col-md-8">
<select name="id_klinik" class="form-control1" required>
	  <?php if ($Edit) { echo "<option value=$id_klinik >$nama_klinik</option>";}?>
  		<?php
		  $mysql = "SELECT * FROM M_KLINIK ORDER BY id_klinik";
		  $msQry = mysql_query($mysql, $koneksidb) or die ("Gagal Query");
		  while ($msData = mysql_fetch_array($msQry)) {
			if ($id_klinik == $msData['id_klinik']) {
				$cek = " selected";
			} else { $cek=""; }
			echo "<option value='$msData[id_klinik]' $cek>$msData[nama_klinik]</option>";
		  }
		  $mySql ="";
		  ?>
  			
  </select>
				</div>
				<div class="clearfix"> </div>
			</div>
   
   			<div class="form-group mb-n">
				<label class="col-md-2 control-label">LEVEL</label>
				<div class="col-md-8">
<select name="level" class="form-control1" required>
	  <?php if ($Edit) { echo "<option value=$level >$level</option>";}?>
  		<?php
		  $mysql = "SELECT * FROM M_LEVEL ORDER BY level";
		  $msQry = mysql_query($mysql, $koneksidb) or die ("Gagal Query");
		  while ($msData = mysql_fetch_array($msQry)) {
			if ($level == $msData['level']) {
				$cek = " selected";
			} else { $cek=""; }
			echo "<option value='$msData[level]' $cek>$msData[level]</option>";
		  }
		  $mySql ="";
		  ?>
  			
  </select>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="panel-footer">
        <input type="submit"  <?php if ($Edit) { echo "value=Update name=Update";}
	  														   else { echo "value=Simpan name=Simpan";} ?>  class="btn-success btn" />
															   
			</div>
</form>
	</div>
	
  
					
		</div>
		</div>
		</div>