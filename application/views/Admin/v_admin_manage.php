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
											    	<a href="<?php echo site_url('/Login/C_login/admin_select_update/').$row->cpt_id."/";?>" class="btn btn-social-icon btn-facebook">
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

</html>