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
	$sm_no		= $_POST['sm_no'];
	$pg_no		= $_POST['pg_no'];
	$pg_name	= $_POST['pg_name'];
	$pg_image	= $_POST['pg_image'];
	$pg_link	= $_POST['pg_link'];	
	
	
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
		//CREATE NO
		$mysql		= mysql_query("SELECT  pg_no from M_MENU where sm_no = '$sm_no' order by pg_no desc", $koneksidb);
		if(mysql_num_rows($mysql)>=1)
		{
		$mydata		= mysql_fetch_array($mysql);
		$nomor		= $mydata['pg_no'];
		$next		= $nomor + 1;
		$pg_no		= $next;
		}
		else
		{
		$pg_no = $sm_no+1;
		}
		//CREATE NO
		# SIMPAN DATA KE DATABASE. 
		// Jika tidak menemukan error, simpan data ke database
		$mysql  	= "INSERT INTO M_MENU (mn_no,sm_no,pg_no,pg_name,
						nourut,type,pg_title,pg_image,pg_link,
						recuser,recdate,recuserupd,recdateupd)
						VALUES ('$mn_no','$sm_no','$pg_no','$pg_name','$nourut',
						'S','$pg_name','$pg_image','$pg_link',
						'".$_SESSION['Ses_User']."','".date("Y-m-d H:m:s")."',
						'".$_SESSION['Ses_User']."','".date("Y-m-d H:m:s")."')";
		$msQry=mysql_query($mysql, $koneksidb) or die ("Gagal query Simpan");
		if($msQry)
			{
			echo "<script type='text/javascript'>alert('Proses Simpan Sukses');</script>";
			echo "<meta http-equiv='refresh' content='0; url=?page=Program-Data'>";
			}
		exit;
		}
	else if ($Update == "Update") 
		{
	
		# PROSES UPDATE 
		$mysql  	= "UPDATE M_MENU set pg_name='$pg_name',
		 			  pg_title='$pg_name',nourut='$nourut',pg_image='$pg_image',
						pg_link='$pg_link', recuserupd='".$_SESSION['Ses_User']."', 
						recdateupd='".date("Y-m-d H:m:s")."'
		               WHERE pg_no='$pg_no' and type='P' ";
		$msQry=mysql_query($mysql, $koneksidb) or die ("Gagal query Update");
		if($msQry)
			{			
			echo "<script type='text/javascript'>alert('Proses Update Sukses');</script>";
			echo "<meta http-equiv='refresh' content='0; url=?page=Program-Data'>";
			}
		exit;
		}	
} // Penutup Tombol Simpan

# MASUKKAN DATA KE VARIABEL
// Supaya saat ada pesan error, data di dalam form tidak hilang. Jadi, tinggal meneruskan/memperbaiki yg salah
if($Edit)
	{	
		//---- query  untuk menampilkan data dari lemparan variabel edit ---//
		$mysql			= mysql_query("SELECT A.* FROM M_MENU AS A Where A.pg_no = '$Kode' and A.type = 'S'", $koneksidb);
		$myCount	    = mysql_num_rows($mysql);	
		$mydata	    	= mysql_fetch_array($mysql);	
		$mn_no			= $mydata["mn_no"];
		$sm_no			= $mydata["sm_no"];
		$pg_no			= $mydata["pg_no"];
		$pg_name		= $mydata["pg_name"];
		$pg_image		= $mydata["pg_image"];
		$pg_link		= $mydata["pg_link"];
		$nourut		= $mydata["nourut"];
	}	
	

?>

					<h3 class="blank1">ADD PROGRAM</h3>
							<div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
   

<div class="panel-body panel-body-inputin">
		  <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" name="form1" target="_self">

					<input id="pg_no" name="pg_no" type="hidden" value="<?php echo $pg_no; ?>"   readonly="" class="form-control1"/>

		    <div class="form-group mb-n">
				<label class="col-md-2 control-label">MENU</label>
				<div class="col-md-8">
					 <select class="form-control" id="mn_no" name="mn_no"  <? if ($Edit == "Edit") { echo "disabled = disabled";} ?> >
				 
						<option value="<?php echo $mn_no; ?>"  selected> <?php echo $pg_name; ?></option> 
	   	
								  <?php				
									$result 	= mysql_query("SELECT mn_no,pg_name FROM M_MENU WHERE type = 'M' Order By pg_no", $koneksidb) ;
									while($row=mysql_fetch_array($result))
									{
									$mn_no		=$row['mn_no'];
									$pgname_m		=$row['pg_name'];		
									print "<option value='$mn_no'>$pgname_m</option>";
									}
									?>
				</select>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="form-group mb-n">
				<label class="col-md-2 control-label">SUB MENU</label>
				<div class="col-md-8">
					 <select class="form-control" id="sm_no" name="sm_no"  <? if ($Edit == "Edit") { echo "disabled = disabled";} ?> >
				 
						<option value="<?php echo $sm_no; ?>"  selected> <?php echo $pg_name; ?></option> 
	   	
								  <?php				
									$result 	= mysql_query("SELECT sm_no,pg_name FROM M_MENU WHERE type = 'S' Order By sm_no", $koneksidb) ;
									while($row=mysql_fetch_array($result))
									{
									$sm_no		=$row['sm_no'];
									$pgname_s		=$row['pg_name'];		
									print "<option value='$sm_no'>$pgname_s</option>";
									}
									?>
				</select>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="form-group mb-n">
				<label class="col-md-2 control-label">NAMA PROGRAM</label>
				<div class="col-md-8">
					<input id="pg_name" name="pg_name" type="text" value="<?php echo $pg_name; ?>"  required="required" class="form-control1"/>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="form-group mb-n">
				<label class="col-md-2 control-label">IMAGE</label>
				<div class="col-md-8">
					<input id="pg_image" name="pg_image" type="text" value="<?php echo $pg_image; ?>"   class="form-control1"/>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="form-group mb-n">
				<label class="col-md-2 control-label">LINK</label>
				<div class="col-md-8">
					<input id="pg_link" name="pg_link" type="text" value="<?php echo $pg_link; ?>"  required="required" class="form-control1"/>
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