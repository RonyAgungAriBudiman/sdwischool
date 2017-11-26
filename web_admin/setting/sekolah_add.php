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
	$sekolah_id		= $_POST['sekolah_id'];
	$sekolah_name	= $_POST['sekolah_name'];
	$alamat	= $_POST['alamat'];		
	
	
	if ($Simpan == "Simpan")
	{
	# VALIDASI, jika sudah ada akan ditolak
	$cekSql="SELECT * FROM M_SEKOLAH WHERE  sekolah_id='$sekolah_id'";
	$cekQry=mysql_query($cekSql, $koneksidb) or die ("Eror Query 1"); 
	if(mysql_num_rows($cekQry)>=1)
		{
		$pesanError[] = "$sekolah_name sudah ada, ganti dengan yang lain";
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
		$mysql  	= "INSERT INTO M_SEKOLAH (sekolah_id,sekolah_name,alamat,recuser,recdate,recuserupd,recdateupd)
						VALUES ('$sekolah_id','$sekolah_name','$alamat','".$_SESSION['NIK_Session']."','".date("Y-m-d H:m:s")."','".$_SESSION['NIK_Session']."','".date("Y-m-d H:m:s")."')";
		$msQry=mysql_query($mysql, $koneksidb) or die ("Gagal query Simpan");
		if($msQry)
			{
			echo "<script type='text/javascript'>alert('Proses Simpan Sukses');</script>";
			echo "<meta http-equiv='refresh' content='0; url=?page=Sekolah-Data'>";
			}
		exit;
		}
	else if ($Update == "Update") 
		{
	
		# PROSES UPDATE 
		$mysql  	= "UPDATE M_MENU set sekolah_name='$sekolah_name',alamat='$alamat', recuserupd='".$_SESSION['NIK_Session']."', recdateupd='".date("Y-m-d H:m:s")."'
		               WHERE sekolah_id='$sekolah_id'";
		$msQry=mysql_query($mysql, $koneksidb) or die ("Gagal query Update");
		if($msQry)
			{			
			echo "<script type='text/javascript'>alert('Proses Update Sukses');</script>";
			echo "<meta http-equiv='refresh' content='0; url=?page=Sekolah-Data'>";
			}
		exit;
		}	
} // Penutup Tombol Simpan

# MASUKKAN DATA KE VARIABEL
// Supaya saat ada pesan error, data di dalam form tidak hilang. Jadi, tinggal meneruskan/memperbaiki yg salah
elseif($Edit)
	{	
		//---- query  untuk menampilkan data dari lemparan variabel edit ---//
		$query			= mysql_query("SELECT A.* FROM M_SEKOLAH AS A Where A.sekolah_id = '$Kode'",$koneksidb);
		$qCount	    = mysql_num_rows($query);	
		$qList	    = mysql_fetch_array($query);	
		$sekolah_id			= $qList["sekolah_id"];
		$sekolah_name		= $qList["sekolah_name"];
		$alamat				= $qList["alamat"];
	}	
else
	{	
		$query	= mysql_query("SELECT sekolah_id + 1 AS nobaru FROM M_SEKOLAH ORDER BY indexs DESC LIMIT 1", $koneksidb);
		$Listnobaru	= mysql_fetch_array($query);
		$qCount	= mysql_num_rows($query);
		if($qCount == 1)
				{
					$sekolah_id 	= substr('000000'.$Listnobaru["nobaru"],-5,5);
				}
		else
				{
			        $sekolah_id 	= substr('000000'.'1',-5,5);
				}
	}	

?>

					<h3 class="blank1">ADD SEKOLAH</h3>
							<div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
   

<div class="panel-body panel-body-inputin">
		  <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" name="form1" target="_self">
			<div class="form-group mb-n">
				<label class="col-md-2 control-label">ID SEKOLAH</label>
				<div class="col-md-8">
					<input id="sekolah_id" name="sekolah_id" type="text" value="<?php echo $sekolah_id; ?>"   readonly="" class="form-control1"/>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="form-group mb-n">
				<label class="col-md-2 control-label">NAMA SEKOLAH</label>
				<div class="col-md-8">
					<input id="sekolah_name" name="sekolah_name" type="text" value="<?php echo $sekolah_name; ?>"  required="required" class="form-control1"/>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="form-group mb-n">
				<label class="col-md-2 control-label">ALAMAT</label>
				<div class="col-md-8">
					<input id="alamat" name="alamat" type="text" value="<?php echo $alamat; ?>"  required="required" class="form-control1"/>
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