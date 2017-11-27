<?php
//include_once "library/inc.seslogin.php";

$Simpan 			= $_POST["Simpan"];
$Update 			= $_POST["Update"];
$Edit 				= $_GET["Edit"];
$Kode				= $_GET["Kode"];

# Tombol Simpan diklik
if(isset($_POST['Simpan']) or isset($_POST["Update"])){
	# VALIDASI FORM, jika ada kotak yang kosong, buat pesan error ke dalam kotak $pesanError
	$pesanError = array();
	
	# BACA DATA DALAM FORM, masukkan datake variabel
	$id_gender		= $_POST['id_gender'];
	$nama_gender	= $_POST['nama_gender'];	
	
	
	if ($Simpan == "Simpan")
	{
	# VALIDASI, jika sudah ada akan ditolak
	$cekSql="SELECT * FROM M_GENDER WHERE  id_gender='$id_gender'";
	$cekQry=mysql_query($cekSql, $koneksidb) or die ("Eror Query 1"); 
	if(mysql_num_rows($cekQry)>=1)
		{
		$pesanError[] = "$nama_gender sudah ada, ganti dengan yang lain";
		}
	}
	

	# JIKA ADA PESAN ERROR DARI VALIDASI
	if (count($pesanError)>=1 )
		{
		echo "<div class='alert alert-error'>";
		echo "<button type='button' class='close' data-dismiss='alert'><i class='icon-remove'></i></button><strong>";
			$noPesan=0;
			foreach ($pesanError as $indeks=>$pesan_tampil) 
				{				 
					$noPesan++;
					echo "&nbsp;&nbsp;$pesan_tampil<br>";	
				} 
		echo "</strong></div> <br>"; 
		}
	else if ($Simpan == "Simpan") 
		{
		# SIMPAN DATA KE DATABASE. 
		// Jika tidak menemukan error, simpan data ke database
		$mysql  	= "INSERT INTO M_GENDER (id_gender,nama_gender,recuser,recdate,recuserupd,recdateupd)
						VALUES ('$id_gender','$nama_gender','".$_SESSION['NIK_Session']."','".date("Y-m-d H:m:s")."','".$_SESSION['NIK_Session']."','".date("Y-m-d H:m:s")."')";
		$msQry=mysql_query($mysql, $koneksidb) or die ("Gagal query Simpan");
		if($msQry)
			{
			echo "<script type='text/javascript'>alert('Proses Simpan Sukses');</script>";
			echo "<meta http-equiv='refresh' content='0; url=?page=Gender-Data'>";
			}
		exit;
		}
	else if ($Update == "Update") 
		{
	
		# PROSES UPDATE 
		$mysql  	= "UPDATE M_GENDER set nama_gender='$nama_gender',recuserupd='".$_SESSION['NIK_Session']."', recdateupd='".date("Y-m-d H:m:s")."' WHERE id_gender='$id_gender'";
		$msQry=mysql_query($mysql, $koneksidb) or die ("Gagal query Update");
		if($msQry)
			{			
			echo "<script type='text/javascript'>alert('Proses Update Sukses');</script>";
			echo "<meta http-equiv='refresh' content='0; url=?page=Gender-Data'>";
			}
		exit;
		}	
} // Penutup Tombol Simpan

# MASUKKAN DATA KE VARIABEL
// Supaya saat ada pesan error, data di dalam form tidak hilang. Jadi, tinggal meneruskan/memperbaiki yg salah
elseif($Edit)
	{	
		//---- query  untuk menampilkan data dari lemparan variabel edit ---//
		$query			= mysql_query("SELECT A.* FROM M_GENDER AS A Where A.id_gender = '$Kode'",$koneksidb);
		$qCount	    = mysql_num_rows($query);	
		$qList	    = mysql_fetch_array($query);	
		$id_gender			= $qList["id_gender"];
		$nama_gender		= $qList["nama_gender"];
	}
?>

					<h3 class="blank1">ADD JENIS KELAMIN</h3>
							<div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
   

<div class="panel-body panel-body-inputin">
		  <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" name="form1" target="_self">
			<div class="form-group mb-n">
				<label class="col-md-2 control-label">ID JK</label>
				<div class="col-md-8">
					<input id="id_gender" name="id_gender" type="text" value="<?php echo $id_gender; ?>" <?php if ($Edit) { echo "readonly";} ?>   class="form-control1"/>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="form-group mb-n">
				<label class="col-md-2 control-label">JENIS KELAMIN</label>
				<div class="col-md-8">
					<input id="nama_gender" name="nama_gender" type="text" value="<?php echo $nama_gender; ?>"  required="required" class="form-control1"/>
				</div>
				<div class="clearfix"> </div>
			</div>
			 <div class="panel-footer">
			        <input type="submit"  <?php if ($Edit) { echo "value=Update name=Update";} else { echo "value=Simpan name=Simpan";} ?>  class="btn-success btn" />

			</div>
		</form>
	</div>
		</div>
		</div>
		</div>