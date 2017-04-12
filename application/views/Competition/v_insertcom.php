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
							<li><a href="<?php echo site_url("Login/C_login/test_speed")?>">Typing Test</a></li>
							<li class="active"><a href="<?php echo site_url("Login/C_login/main_competition")?>">Competition</a></li>
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
					<h1>Welcome to Typing.com!</h1>
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
										//$data['form'] = "insert_com";
										echo form_open("Login/C_login/insert_com");
									?>
					                <!-- text input -->
						                <div class="form-group">
						                	<label>Title</label>
						                	<input type="text" class="form-control" name="cpt_title" placeholder="Enter ...">
						                </div>
						                <!-- textarea -->
						                <div class="form-group">
						                	<label>Word</label>
						                	<textarea class="form-control" name="cpt_wordset" rows="5" placeholder="Enter ..."></textarea>
						                </div>

						                <!-- select -->
						                <div class="form-group">
						                	<label>Language</label>
						                	<select class="form-control" name="cpt_language">
							                    <option value="0">English</option>
							                    <option value="1">ภาษาไทย</option>
						                	</select>
						                </div>

										<div class="form-group">
						                	<input type="submit" value="Submit">
						                </div>
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

