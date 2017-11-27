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
	$id_marital		= $_POST['id_marital'];
	$nama_marital	= $_POST['nama_marital'];	
	
	
	if ($Simpan == "Simpan")
	{
	# VALIDASI, jika sudah ada akan ditolak
	$cekSql="SELECT * FROM M_MARITAL WHERE  id_marital='$id_marital'";
	$cekQry=mysql_query($cekSql, $koneksidb) or die ("Eror Query 1"); 
	if(mysql_num_rows($cekQry)>=1)
		{
		$pesanError[] = "$nama_marital sudah ada, ganti dengan yang lain";
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
		$mysql  	= "INSERT INTO M_MARITAL (id_marital,nama_marital,recuser,recdate,recuserupd,recdateupd)
						VALUES ('$id_marital','$nama_marital','".$_SESSION['NIK_Session']."','".date("Y-m-d H:m:s")."','".$_SESSION['NIK_Session']."','".date("Y-m-d H:m:s")."')";
		$msQry=mysql_query($mysql, $koneksidb) or die ("Gagal query Simpan");
		if($msQry)
			{
			echo "<script type='text/javascript'>alert('Proses Simpan Sukses');</script>";
			echo "<meta http-equiv='refresh' content='0; url=?page=Marital-Data'>";
			}
		exit;
		}
	else if ($Update == "Update") 
		{
	
		# PROSES UPDATE 
		$mysql  	= "UPDATE M_MARITAL set nama_marital='$nama_marital',recuserupd='".$_SESSION['NIK_Session']."', recdateupd='".date("Y-m-d H:m:s")."' WHERE id_marital='$id_marital'";
		$msQry=mysql_query($mysql, $koneksidb) or die ("Gagal query Update");
		if($msQry)
			{			
			echo "<script type='text/javascript'>alert('Proses Update Sukses');</script>";
			echo "<meta http-equiv='refresh' content='0; url=?page=Marital-Data'>";
			}
		exit;
		}	
} // Penutup Tombol Simpan

# MASUKKAN DATA KE VARIABEL
// Supaya saat ada pesan error, data di dalam form tidak hilang. Jadi, tinggal meneruskan/memperbaiki yg salah
elseif($Edit)
	{	
		//---- query  untuk menampilkan data dari lemparan variabel edit ---//
		$query			= mysql_query("SELECT A.* FROM M_MARITAL AS A Where A.id_marital = '$Kode'",$koneksidb);
		$qCount	    = mysql_num_rows($query);	
		$qList	    = mysql_fetch_array($query);	
		$id_marital			= $qList["id_marital"];
		$nama_marital		= $qList["nama_marital"];
	}
?>

					<h3 class="blank1">ADD STATUS PERNIKAHAN</h3>
							<div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
   

<div class="panel-body panel-body-inputin">
		  <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" name="form1" target="_self">
			<div class="form-group mb-n">
				<label class="col-md-2 control-label">ID SP</label>
				<div class="col-md-8">
					<input id="id_marital" name="id_marital" type="text" value="<?php echo $id_marital; ?>" <?php if ($Edit) { echo "readonly";} ?>   class="form-control1"/>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="form-group mb-n">
				<label class="col-md-2 control-label">NAMA STATUS</label>
				<div class="col-md-8">
					<input id="nama_marital" name="nama_marital" type="text" value="<?php echo $nama_marital; ?>"  required="required" class="form-control1"/>
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