<?php  $id_user_filter 	=   $_POST["id_user_filter"];   

if(!($id_user_filter))
	{
		$id_user_filter = $qresult['id_user'];
	}

	if($id_user_filter)
		{
				$Q1 		= mysql_query("SELECT * FROM M_USER where id_user = '$id_user_filter' order by nm_user" , $koneksidb) ;
				$JmlQ1		= mysql_num_rows($Q1);												
				$rowQ1		= mysql_fetch_array($Q1);
				$id_user	= $rowQ1['id_user'];									
				$nm_user		= $rowQ1['nm_user'];						
		}	

?>

		    <div class="form-group mb-n">
				<label class="col-md-2 control-label">USER</label>
				<div class="col-md-6">
<select name="id_user_filter" id="id_user_filter" class="form-control"  >
<option value= "<?php if ($id_user_filter == $id_user_filter) { echo $id_user_filter;} if ($id_user_filter == ""){ echo "";} ?>" selected><?php echo $nm_user;?></option>
  		    <?php
 										$result 	= mysql_query("SELECT id_user,nm_user FROM M_USER Order By nm_user", $koneksidb) ;
										
										while($row=mysql_fetch_array($result))
										{
											$id_user=$row['id_user'];
											$nm_user	=$row['nm_user'];						
											print "<option value=$id_user>$nm_user</option>";
										 }
				?>
  			
  </select>
    				</div>
				<div class="clearfix"> </div>
			</div>