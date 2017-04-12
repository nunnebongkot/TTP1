<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<html>
	<div class="wrapper">
		<header class="main-header">
			<nav class="navbar navbar-static-top">
				<div class="container">
					<div class="navbar-header">
						<a  href="<?php echo site_url("Login/C_login/Main_system")?>" class="navbar-brand"><b>Typing</b>Touch</a>
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
							<i class="fa fa-bars"></i>
						</button>
					</div>
					<div class="collapse navbar-collapse pull-left" id="navbar-collapse">
						<ul class="nav navbar-nav">
							<li><a href="<?php echo site_url("Login/C_login/lesson_system")?>">Tutorial Typing<span class="sr-only">(current)</span></a></li>
							<li class="active"><a href="<?php echo site_url("Login/C_login/main_speed")?>">Typing Test</a></li>
							<li><a href="<?php echo site_url("Login/C_login/main_competition")?>">Competition</a></li>
						</ul>
					</div>
					<!-- /.navbar-custom-menu -->
				</div>
				<!-- /.container-fluid -->
			</nav>
		</header>
	  	<!-- Full Width Column -->

	  	<div class="content-wrapper">
		    <div class="container">
		      <!-- Content Header (Page header) -->
				<section class="content-header">
					<h1>Typing Test</h1>
				</section>	
				<!-- Main content -->
				<section class="content">
					<div class="box box-default">
						<div class="box-header with-border">
							<h3 class="box-title"></h3>
						</div>
						<div class="box-body">
								<div class="row">
									<div class="col-md-2 col-sm-4 col-xs-6"></div>
									<!-- /.col -->
									<div class="col-md-4 col-sm-6 col-xs-12">
										<a href="<?php echo site_url("Login/C_login/test_speedEN")?>">
											<div class="info-box bg-gray disabled color-palette">
												<span class="info-box-icon">
													<img src="http://www.huaykaewpalace.com/private_folder/us.png" width="60" height="60">
												</span>

												<div class="info-box-content">
													<span class="info-box-text"></span>
													<span class="info-box-number">English</span>

													<div class="progress">
														<div class="progress-bar" style="width: 100%"></div>
													</div>
													<span class="progress-description">
														Speed typing test in English
													</span>
												</div>
												<!-- /.info-box-content -->
											</div>
										</a>
										<!-- /.info-box -->
									</div>
									<!-- /.col -->
									<div class="col-md-1 col-sm-3 col-xs-6"></div>
									<!-- /.col -->
									<div class="col-md-4 col-sm-6 col-xs-12">
										<a href="<?php echo site_url("Login/C_login/test_speedTH")?>">
											<div class="info-box bg-gray disabled color-palette">
												<span class="info-box-icon">
													<img src="http://www.huaykaewpalace.com/private_folder/th.png" width="60" height="60">
												</span>

												<div class="info-box-content">
													<span class="info-box-text"></span>
													<span class="info-box-number">Thai</span>

													<div class="progress">
														<div class="progress-bar" style="width: 100%"></div>
													</div>
													<span class="progress-description">
														ทดสอบพิมพ์เร็วภาษาไทย
													</span>
												</div>
												<!-- /.info-box-content -->
											</div>
										</a>
										<!-- /.info-box -->
									</div>
									<!-- /.col -->
									<div class="col-md-2 col-sm-3 col-xs-6"></div>
									<!-- /.col -->
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
