<?php
include_once "library/inc.seslogin.php";


// Periksa ada atau tidak variabel Kode pada URL (alamat browser)
if ($_GET["Delete"] == "Delete") {
if(isset($_GET['Kode'])){
	// Hapus data sesuai Kode yang didapat di URL
	$mysql = "DELETE FROM M_NEGARA WHERE id_negara='".$_GET['Kode']."'";
	$msQry = mysql_query($mysql, $koneksidb) or die ("Error hapus data");
	if($myQry){
		// Refresh halaman
		echo "<meta http-equiv='refresh' content='0; url=?page=Negara-Data'>";
	}
}
}
?>

					<h3 class="blank1">DATA NEGARA</h3>
					 <div class="xs tabls">
						<div class="bs-example4" data-example-id="contextual-table">

<a href="?page=Negara-Add" target="_self"><button type="button" class="btn btn-primary">ADD DATA</button></a>
<br/><br/>
<table id="sample-table-2" class="table table-bordered">
<thead>
      <tr>
        <th width="24"><b>NO</b></th>
		<th><b>ID NEGARA</b></th>
        <th><b>NAMA NEGARA</b></th>
        <th colspan="2" align="center" ><b>TOOLS</b></th>
        </tr>
 </thead>
      <?php
	$mysql 	= "SELECT A.* FROM M_NEGARA AS A ORDER BY A.id_negara ASC";
	$myQry 	= mysql_query($mysql, $koneksidb)  or die ("Query  salah ");
	$nomor  = 0; 
	while ($myData = mysql_fetch_array($myQry)) {
		$nomor++;
		$Kode = $myData['id_negara'];
	?>
      <tr>
        <td><?php echo $nomor; ?></td>
		<td><?php echo $myData['id_negara']; ?></td>
        <td><?php echo $myData['nama_negara']; ?></td>
        <td width="41" align="center"><a href="?page=Negara-Add&Edit=Edit&Kode=<?php echo $Kode; ?>" target="_self" alt="Edit Data" class="lnr lnr-pencil" title="Edit"></a></td>
        <td width="45" align="center"><a href="?page=Negara-Data&Delete=Delete&Kode=<?php echo $Kode; ?>" target="_self" title="Delete" class="lnr lnr-trash" alt="Delete Data" onclick="return confirm('ANDA YAKIN AKAN MENGHAPUS DATA PENTING INI ... ?')"></a></td>
      </tr>
      <?php } ?>
    </table>
					   </div>
					     </div>