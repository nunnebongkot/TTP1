<html>
	<div class="wrapper">
		
	  <!-- Full Width Column -->
		<div class="content-wrapper">
		    <div class="container">
		      <!-- Content Header (Page header) -->
				<section class="content-header">
					<h1>Edit Competition</h1>
				</section>

				<section class="content">
					<div class="box box-default">
						<div class="box-header with-border">
							<h3 class="box-title"></h3>
						</div>
						<div class="box-body">
							<div class="row">
								<div class="col-md-3"></div>
								<div class="col-md-6">
									<?php
										
										echo form_open("Login/C_login/admin_update");
									?>

						                <!-- text input -->
						                <?php foreach($com->result() as $row) { ?>
						
							                <div class="form-group">
							                	<label>Title</label>
							                	<input type="text" class="form-control" name="cpt_title" value="<?php echo $row->cpt_title; ?>">
							                	<input type="hidden" class="form-control" name="cpt_id"  value="<?php echo $row->cpt_id; ?>">
							                </div>
							                <!-- textarea -->
							                <div class="form-group">
							                	<label>Word</label>
							                	<textarea class="form-control" name="cpt_wordset" rows="5"><?php echo $row->cpt_wordset; ?></textarea>
							                </div>

							                <!-- select -->
							                <div class="form-group">
							                	<label>Language</label>
							                	<select class="form-control" name="cpt_language">
							                		<?php 
														if($row->cpt_language==0){
															echo '<option value="0">English</option>';
														}else{
															echo '<option value="1">ภาษาไทย</option>';
														}
													?>
							                		
							                	</select>
							                </div>

											<div class="form-group">
							                	<input type="submit" value="Submit">
							                </div>
						                <?php } ?>
					              	<?php
										echo form_close();
									?>
					            </div>
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
</html>

