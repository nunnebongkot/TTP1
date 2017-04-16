<html>
	<div class="wrapper">
		
	  <!-- Full Width Column -->
		<div class="content-wrapper">
		    <div class="container">
		      <!-- Content Header (Page header) -->
				<section class="content-header">
					<h1>All Competition</h1>
				</section>

				<section class="content">
					<div class="box box-default">
						<div class="box-header with-border">
							<h3 class="box-title"></h3>
							<div class="pull-right">
								<a href="<?php echo site_url('/Login/C_login/admin_insert');?>">
									<button type="button" class="btn-lg btn-info">
										<i class="fa fa-plus-circle"></i> Create
									</button>
								</a>
							</div>
						</div>
						<div class="box-body">
							<div class="box">
								<!-- /.box-header -->
								<div class="box-body no-padding">
									<table class="table table-striped">
										<tbody>
											<tr>
												<th rowspan="2"><center><h4>No.</h4></center></th>
											  	<th rowspan="2" width="200px"><center><h4>Title</h4></center></th>
											    <th rowspan="2"><center><h4>Language</h4></center></th>
											    <th rowspan="2" width="500px"><center><h4>Word Set</h4></center></th>
											    <th colspan="2"><center><h4>Manage</h4></center></th>
											</tr>
											<tr>
											    <th><center>Edit</center></th>
											    <th><center>Delete</center></th>
											</tr>

											<?php $index = 1; ?>
											<?php foreach($com->result() as $row) { ?>
											<tr>
											    <td><center><?php echo $index++; ?></center></td>
											    <td><?php echo $row->cpt_title; ?></td>
											    <td><center>
													<?php 
														if($row->cpt_language==0){
															echo '<img src="http://www.funtasy.info/images/800px-english-language-iconsvg.png" width="45" height="30" title="English">';
														}else{
															echo '<img src="https://cdn.countryflags.com/thumbs/thailand/flag-400.png" width="45" height="30" title="ภาษาไทย">';
														}
													?></center>
												</td>
											    <td><?php echo $row->cpt_wordset; ?></td>
											    <td><center>
											    	<a href="<?php echo site_url('/Login/C_login/admin_update/').$row->cpt_id."/";?>"  alt="" class="btn btn-social-icon btn-facebook" id ='opener1' onclick="set_value('	<?php echo $row->cpt_id; ?>','<?php echo $row->cpt_title; ?>','<?php echo $row->cpt_wordset; ?>','<?php echo $row->cpt_language; ?>');">
														<i class="fa fa-edit"></i>
													</a></center>
												</td>
											    <td><center>
													<a href="<?php echo site_url('/Login/C_login/admin_delete/').$row->cpt_id."/";?>" class="btn btn-social-icon btn-google">
														<i class="fa fa-close"></i>
													</a></center>
												</td>
											</tr>
											<?php } ?>
										</tbody>
									</table>
								</div>
							<!-- /.box-body -->
							</div>
						<!-- /.box-body -->
						</div>
					</div>
					<!-- /.box -->
				</section>
				<!-- /.content -->

			</div>
		</div>

		<footer class="main-footer">
			<div class="container">
				<div class="pull-right hidden-xs">
				</div>
			</div>
		<!-- /.container -->
		</footer>
	</div>


	<div id="dialog1" class="da-panel-content" title="Edit Competition" style="padding: 0px">
		<?php 
		$data['class'] = "da-form";
		echo form_open('Login/C_login/admin_update', $data); 
		?>
			<!-- text input -->
            <div class="form-group">
            	<label>Title</label>
            	<input type="text" class="form-control" id="cpt_title" name="cpt_title" placeholder="Enter ...">
            </div>
            <!-- textarea -->
            <div class="form-group">
            	<label>Word</label>
            	<textarea class="form-control" id="cpt_wordset" name="cpt_wordset" rows="5" placeholder="Enter ..."></textarea>
            </div>

            <!-- select -->
            <div class="form-group">
            	<label>Language</label>
            	<select class="form-control" id="cpt_laguage" name="cpt_language">
                    <option value="0">English</option>
                    <option value="1">ภาษาไทย</option>
            	</select>
            </div>

			<div class="form-group">
            	<input type="submit" value="Submit">
          	<?php
			echo form_close();
			?>        
            </div>

			
		</form>
	</div> 

</html>
<script>
	//---------- DIALOG CODE
    $(function() 
		{
		  
			$( "#dialog1" ).dialog(
				{
					autoOpen: false,
					resizable: false,
					width: 600,
					modal: true
				}
			);
	   
			$( "#opener" ).click(
				function() 
				{
					$( "#dialog1" ).dialog( "open" );
				}
			);
		}
	);

    //----------- set value on click to input
    function set_value(cpt_id, cpt_title, cpt_wordset, cpt_language){
        $( "#cpt_id" ).val(cpt_id); 										//set value to input by id
        $( "#cpt_title" ).val(cpt_title); 
        $( "#cpt_wordset" ).val(cpt_wordset); 
        $( "#cpt_language" ).val(cpt_language);									//set value to input by id
        $( "#dialog1" ).dialog( "open" ); 								//open dialog
    }
	
	
</script>