<?php
include_once "library/inc.seslogin.php";

$Simpan 			= $_POST["Simpan"];
$Update 			= $_POST["Update"];
$Edit 				= $_GET["Edit"];
$Kode				= $_GET["Kode"];

# Tombol Simpan diklik
if(isset($_POST['Simpan']) or isset($_POST["Update"])){
	# VALIDASI FORM, jika ada kotak yang kosong, buat pesan error ke dalam kotak $pesanError
	$pesanError = array();
	
	# BACA DATA DALAM FORM, masukkan datake variabel
	$mn_no		= $_POST['mn_no'];
	$pg_name	= rtrim($_POST['pg_name']);	
	$nourut	= rtrim($_POST['nourut']);	
	
	
	if ($Simpan == "Simpan")
	{
	# VALIDASI, jika sudah ada akan ditolak
	$cekSql="SELECT * FROM M_MENU WHERE  pg_name='$pg_name'";
	$cekQry=mysql_query($cekSql, $koneksidb) or die ("Eror Query 1"); 
	if(mysql_num_rows($cekQry)>=1)
		{
		$pesanError[] = "$pg_name sudah ada, ganti dengan yang lain";
		}
	}
	

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
	else if ($Simpan == "Simpan") 
		{
		# SIMPAN DATA KE DATABASE. 
		// Jika tidak menemukan error, simpan data ke database
		$mysql  	= "INSERT INTO M_MENU (mn_no,sm_no,pg_no,pg_name,
						nourut,type,pg_title,pg_image,pg_link,
						recuser,recdate,recuserupd,recdateupd)
						VALUES ('$mn_no','$mn_no','$mn_no','$pg_name','$nourut',
						'M','$pg_name','lnr lnr-indent-increase','#',
						'".$_SESSION['Ses_User']."','".date("Y-m-d H:m:s")."',
						'".$_SESSION['Ses_User']."','".date("Y-m-d H:m:s")."')";
		$msQry=mysql_query($mysql, $koneksidb) or die ("Gagal query Simpan");
		if($msQry)
			{
			echo "<script type='text/javascript'>alert('Proses Simpan Sukses');</script>";
			echo "<meta http-equiv='refresh' content='0; url=?page=Menu-Data'>";
			}
		exit;
		}
	else if ($Update == "Update") 
		{
	
		# PROSES UPDATE 
		$mysql  	= "UPDATE M_MENU set pg_name='$pg_name', pg_title='$pg_name',nourut='$nourut', recuserupd='".$_SESSION['Ses_User']."', recdateupd='".date("Y-m-d H:m:s")."'
		               WHERE mn_no='$mn_no'";
		$msQry=mysql_query($mysql, $koneksidb) or die ("Gagal query Update");
		if($msQry)
			{			
			echo "<script type='text/javascript'>alert('Proses Update Sukses');</script>";
			echo "<meta http-equiv='refresh' content='0; url=?page=Menu-Data'>";
			}
		exit;
		}	
} // Penutup Tombol Simpan

# MASUKKAN DATA KE VARIABEL
// Supaya saat ada pesan error, data di dalam form tidak hilang. Jadi, tinggal meneruskan/memperbaiki yg salah
elseif($Edit)
	{	
		//---- query  untuk menampilkan data dari lemparan variabel edit ---//
		$mysql			= mysql_query("SELECT A.* FROM M_MENU AS A Where A.mn_no = '$Kode'", $koneksidb);
		$myCount	    = mysql_num_rows($mysql);	
		$mydata	    = mysql_fetch_array($mysql);	
		$mn_no			    = $mydata["mn_no"];
		$pg_name			= $mydata["pg_name"];
	}	
else
	{	
		$mysql		= mysql_query("SELECT  mn_no from M_MENU where mn_no <> '9000' order by mn_no desc", $koneksidb);
		
		if(mysql_num_rows($mysql)>=1)
		{
		$mydata		= mysql_fetch_array($mysql);
		$nomor		= $mydata['mn_no'];
		$next		= $nomor + 500;
		$mn_no		= $next;
		}
		else
		{
		$mn_no = 1000;
		}

	}	

?>

					<h3 class="blank1">ADD MENU</h3>
							<div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
   

<div class="panel-body panel-body-inputin">
		  <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" name="form1" target="_self">
			<div class="form-group mb-n">
				<label class="col-md-2 control-label">ID MENU</label>
				<div class="col-md-8">
					<input id="mn_no" name="mn_no" type="text" value="<?php echo $mn_no; ?>" size="10" maxlength="6"  readonly="" class="form-control1"/>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="form-group mb-n">
				<label class="col-md-2 control-label">NAMA MENU</label>
				<div class="col-md-8">
					<input id="pg_name" name="pg_name" type="text" value="<?php echo $pg_name; ?>" size="10" maxlength="50" required="required" class="form-control1"/>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="form-group mb-n">
				<label class="col-md-2 control-label">NO URUT</label>
				<div class="col-md-8">
					<input id="nourut" name="nourut" type="number" value="<?php echo $nourut; ?>"  required="required" class="form-control1"/>
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