<?php  $mn_no_filter 	=   $_POST["mn_no_filter"];   

if(!($mn_no_filter))
	{
		$mn_no_filter = $qresult['mn_no'];
	}

	if($mn_no_filter)
		{
				$Q1 		= mysql_query("SELECT * FROM M_MENU where type='M' and sm_no = '$mn_no_filter'", $koneksidb) ;
				$JmlQ1		= mysql_num_rows($Q1);												
				$rowQ1		= mysql_fetch_array($Q1);
				$mn_no	= $rowQ1['mn_no'];									
				$pg_name		= $rowQ1['pg_name'];						
		}	

?>

		    <div class="form-group mb-n">
				<label class="col-md-2 control-label">MAIN MENU</label>
				<div class="col-md-6">
<select name="mn_no_filter" id="mn_no_filter"  class="form-control"  >
<option value= "<?php if ($mn_no_filter == $mn_no_filter) { echo $mn_no_filter;} if ($mn_no_filter == ""){ echo "";} ?>" selected ><?php echo $pg_name;?></option>
  		    <?php
 										$result 	= mysql_query("SELECT pg_name,mn_no FROM M_MENU where type='M' Order By mn_no", $koneksidb) ;
										
										while($row=mysql_fetch_array($result))
										{
											$mn_no		=$row['mn_no'];
											$pg_name	=$row['pg_name'];						
											print "<option value=$mn_no>$pg_name</option>";
										 }
				?>
  			
  </select>
  				</div>
				<div class="clearfix"> </div>
			</div>