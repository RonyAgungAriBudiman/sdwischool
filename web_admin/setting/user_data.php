<?php
include_once "library/inc.seslogin.php";


// Periksa ada atau tidak variabel Kode pada URL (alamat browser)
if ($_GET["Delete"] == "Delete") {
if(isset($_GET['Kode'])){
	// Hapus data sesuai Kode yang didapat di URL
	$mysql = "DELETE FROM M_USER WHERE id_user='".$_GET['Kode']."'";
	$msQry = mysql_query($mysql, $koneksidb) or die ("Error hapus data");
	if($myQry){
		// Refresh halaman
		echo "<meta http-equiv='refresh' content='0; url=?page=User-Data'>";
	}
}
}

?>
					<h3 class="blank1">DATA USER</h3>
					 <div class="xs tabls">
						<div class="bs-example4" data-example-id="contextual-table">

<a href="?page=User-Add" target="_self"><button type="button" class="btn btn-primary">ADD DATA</button></a>
<br/><br/>
<table id="sample-table-2" class="table table-bordered">
<thead>
      <tr>
        <th width="24"><b>No</b></th>
		<th width="231"><b>User Id</b></th>
        <th width="231"><b>User Name</b></th>
        <th width="170"><b>Nama</b></th>
		<th width="170"><b>Divisi</b></th>
        <th colspan="2" align="center" ><b>Tools</b><b></b></th>
        </tr>
 </thead>
      <?php
	$mysql 	= "SELECT A.* FROM M_USER AS A ORDER BY A.id_user ASC";
	$msQry 	= mysql_query($mysql, $koneksidb)  or die ("Query  salah ");
	$nomor  = 0; 
	while ($msData = mysql_fetch_array($msQry)) {
		$nomor++;
		$Kode = $msData['id_user'];
	?>
      <tr>
        <td><?php echo $nomor; ?></td>
		<td><?php echo $msData['id_user']; ?></td>
        <td><?php echo $msData['username']; ?></td>
        <td><?php echo $msData['nm_user']; ?></td>
		<td><?php echo $msData['level']; ?></td>
        <td width="41" align="center"><a href="?page=User-Add&Edit=Edit&Kode=<?php echo $Kode; ?>" target="_self" alt="Edit Data" class="lnr lnr-pencil" title="Edit"></a></td>
        <td width="45" align="center"><a href="?page=User-Data&Delete=Delete&Kode=<?php echo $Kode; ?>" target="_self" title="Delete" class="lnr lnr-trash" alt="Delete Data" onclick="return confirm('ANDA YAKIN AKAN MENGHAPUS DATA PENTING INI ... ?')"></a></td>
      </tr>
      <?php } ?>
    </table>
     </div>
					     </div>