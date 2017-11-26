<?php
include_once "library/inc.seslogin.php";

$view_button 	= $_POST["view_button"];
$id_user_filter = $_POST["id_user"];
$Simpan		 	= $_POST["Simpan"];

if (($view_button))
{
	# VALIDASI FORM, jika ada kotak yang kosong, buat pesan error ke dalam kotak $pesanError
	$pesanError = array();
	if (trim($_POST['id_user_filter'])=="" or trim($_POST['id_user_filter'])=="--Pilih User--") {
		$pesanError[] = "Data <b>User</b> tidak boleh kosong !";		
	}

	
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
	}
}
else if ($Simpan)
{
	$jumCB 			= $_POST["jumCB"];
	
	//delete data first
//	$qAuthDev 		= mysql_query("Delete from M_AUTH_USER where id_user = '$id_user_filter'");
	
	for($i=1;$i<=$jumCB;$i++)
		{
			$cb 		= $_POST['cb'.$i];	
		
			if (!empty($cb))
				{	
					$pg_no 	 			 = $_POST['pg_no'.$i];			
					$Auth 			 	 = $_POST['Auth'.$i];
					$Auth_dev			 = $_POST['cb'.$i];
					
					if ($Auth == '')
						{ 
							$Auth = '1';
						}	
						
					if (!empty($Auth_dev))
						{	
						$Auth_dev='Y';
						} 
					else 
						{
						$Auth_dev='N';
						}
				
					$mysql   = "select * from M_AUTH_USER where id_user='".$id_user_filter."' and pg_no='".$pg_no."' order by pg_no";
					$msQry 	 = mysql_query($mysql, $koneksidb);
					$msCount = mysql_num_rows($msQry);
					if ($msCount > 0)
					{
					$sql = "UPDATE M_AUTH_USER SET Auth='".$Auth."',Auth_dev='".$Auth_dev."',recuser='".$_SESSION['NIK_Session']."',recdate='".date("Y-m-d H:m:s")."' where pg_no='".$pg_no."' and id_user='".$id_user_filter."'"; 						
					$result= mysql_query($sql, $koneksidb)  or die ("Query Update"); 	
					}
					else
					{
					$sql = "INSERT INTO M_AUTH_USER (id_user,pg_no,Auth,Auth_dev,recuser,recdate) VALUES ('".$id_user_filter."','".$pg_no."','".$Auth."','".$Auth_dev."','".$_SESSION['NIK_Session']."','".date("Y-m-d H:m:s")."')";					
					$result= mysql_query($sql, $koneksidb)  or die ("Query Insert"); 	
					}
				}
			else
				{	
					$pg_no 	= $_POST['pg_no'.$i];					
					$sql 	= "delete from M_AUTH_USER where id_user ='$id_user_filter' and  pg_no = '$pg_no' ";						
					$result= mysql_query($sql, $koneksidb)  or die ("Query Delete "); 		
				}		
		
		}
		echo "<script type='text/javascript'>alert('Proses Simpan Sukses');</script>";
}

?>

					<h3 class="blank1">AUTORITAS USER</h3>
					 <div class="xs tabls">
						<div class="bs-example4" data-example-id="contextual-table">
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" name="form1" target="_self" id="form1">
<?php
			include "filter/user_id.php";
			include "filter/mn_no.php";
			include "filter/view_button.php";
?>
<br />
<table id="sample-table-2" class="table table-bordered">
   <tr>
           	<td colspan="8">
                <div align="center">		
         		<input name="Simpan"  <?php if ((!($view_button)) && (!($Simpan))) { echo "disabled=disabled";} ?> type="submit" id="Simpan" value="Simpan" onClick="return confirm('Anda yakin untuk simpan ?')" class="btn-primary btn" />
               	</div>
			</td>
  </tr>
    <thead>
      <tr>
        <th width="30"><b>NO</b></th>
        <th width="400"><strong>MENU</strong></th>
		<th><strong>TITLE</strong></th>
		<th width="50"><strong>LEVEL</strong></th>
        <td width="50" align="center"><b>CHECK
            <input type="checkbox" name="allbox" value="check" onclick="checkAll(0);" />
		    </b></td>
            
        </tr>
       </thead>
      <?php
	# MENJALANKAN QUERY FILTER DI ATAS
	if (($id_user_filter <> ''))
{
		if (($view_button) || ($Simpan))
			{					  					
			$mysql = "select * from M_MENU where mn_no like '%$mn_no_filter%' order by pg_no";
			$msQry 	= mysql_query($mysql, $koneksidb)  or die ("Query  salah ");
			$no = 0 ;
			while ($msData	= mysql_fetch_array($msQry))
					 {
						 $no++ ;
					 	$mn_no		= $msData['mn_no'];
					 	$sm_no 	    = $msData['sm_no'];
						$pg_no 	    = $msData['pg_no'];
					 	$pg_name 	= $msData['pg_name'];
						$pg_title	= $msData['pg_title'];
						
						//cek authority
						$qAuth = mysql_query("SELECT * FROM M_AUTH_USER 
											WHERE id_user = '$id_user_filter' and pg_no = '$pg_no'", $koneksidb) or die ("Query  salah ") ;
						$qAuthCount	= mysql_num_rows($qAuth);
						$qListAuth	= mysql_fetch_array($qAuth);	
						$Auth	= $qListAuth['Auth'];		
						$i		= $Auth;	
				echo"
						<tr>
						<td align=left valign=center >$no</td>
						<td align=left valign=center >$pg_name</td>
						<td align=left valign=center >$pg_title</td>
						"; ?>
				<td id="k1<?php echo $no; ?>" align="center" valign="middle" class="judul-br"> 
                <select name="Auth<?php echo $no; ?>"  id="Auth<?php echo $no; ?>" class="input-mini">
						<?php
								$qAuth = mysql_query("SELECT * FROM M_AUTH_USER 
													WHERE id_user = '".$id_user_filter."' And ltrim(pg_no) = '".$pg_no."'", $koneksidb) ;
								$qAuthCount	= mysql_num_rows($qAuth);
								$qListAuth	= mysql_fetch_array($qAuth);	
								$Auth	= $qListAuth['Auth'];		
								$i		= $Auth;	

								if ($qAuthCount == 0)
								{
									print "<option value=''>-</option>";
								}
							
								print "<option value='$Auth'>$i</option>";
							
								for ($i=1;$i<=5;$i++) 
								{
									//if ($i != $Auth && $i !=2 && $i !=5 && $i !=6  && $i !=7 && $i !=8)  
									{
									echo "<option value=\"$i\">$i</option>";
									}
								} 
							
						?>
              </select>		
		</td>
			
		<td id="k2<?php echo $no; ?>">
		<div align="center">
			<?php
				//query Lembur
				$qProgram		= mysql_query("SELECT * FROM M_AUTH_USER Where id_user = '$id_user_filter' and pg_no = '$pg_no'" , $koneksidb)or die ("Query  salah ");
				$qProgramCount	= mysql_num_rows($qProgram);	
						
			?>
			<input type="checkbox" onclick=warnalatar("cb<?php echo $no; ?>",<?php echo $no; ?>) name="cb<?php echo $no; ?>" <?php if ($qProgramCount == 1) { echo "checked";}?>>
			<?php
			?>				
		  </div></td>
		            <?php print "	
					<input type=hidden name=pg_no$no value=$pg_no>";					
		?>	
		</tr>
				<?php						
					}
}	}					
				?>								
	</table>
	<br>
	<input type="hidden" name="jumCB" id="jumCB" value=<? echo $no; ?>>
	<input type="hidden" name="id_user" value=<?php echo $id_user_filter; ?>>
	<?php	echo "</form>"; ?> 
</div>
</div>
