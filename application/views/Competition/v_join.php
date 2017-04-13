<html>
	<div class="wrapper">
		
	  <!-- Full Width Column -->
		<div class="content-wrapper">
		    <div class="container">
		      <!-- Content Header (Page header) -->
				<section class="content-header">
					<h1>All Games</h1>
				</section>

				<section class="content">
					<div class="box box-default">
						<div class="box-body">
							<div class="box">
								<!-- /.box-header -->
								<div class="box-body no-padding">
									<table class="table table-striped">
										<tbody>
											<tr>
												<th><center>Title</center></th>
												<th></th>
												<th><center>Language</center></th>
												<th><center>Participants</center></th>
												<th><center>Tests taken</center></th>
											</tr>
											<?php foreach($com->result() as $row) { ?>
												<tr>
													<td><?php echo $row->cpt_title; ?></td>
													<td><center>
														<a href="<?php echo site_url('/Login/C_login/test_competition/').$row->cpt_id."/".$row->cpt_language;?>">
															<button type="button" class="btn btn-warning">Join</button>
														</a>
													</button></center></td>
													<td><center><?php echo $row->cpt_language; ?></center></td>
													<td><center>xxx</center></td>
													<td><center><?php echo $row->cpt_count; ?></center></td>
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

