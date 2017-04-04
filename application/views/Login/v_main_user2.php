<div class="wrapper">

  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="../../index2.html" class="navbar-brand"><b>Typing</b>Touch</a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo site_url("Login/C_login/Tutoral_system")?>">Tutorial Typing<span class="sr-only">(current)</span></a></li>
            <li><a href="#">Fast Typing</a></li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- User Account Menu -->
            <li class="dropdown user user-menu">
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- The user image in the navbar-->
                <!--<img src="<?php echo base_url(); ?>template/adminlte/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">-->
                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                
				<span class="hidden-xs"><?php echo $first_name." ".$last_name; ?></span>
				
              </a>
              <ul class="dropdown-menu">
                <!-- The user image in the menu -->
                <li class="user-header">
                  <!--<img src="<?php echo base_url(); ?>template/adminlte/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">-->
						<p>
						<?php echo $first_name." ".$last_name; ?>
						<small>Member</small>
						</p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="#" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
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
        <h1>
          Typing Lessons
          <small>Version 1.0</small>
        </h1>
      </section>

      <!-- Main content -->
         <!-- Main content -->
      <section class="content">
        <div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title"></h3>
          </div>
          <div class="box-body">
            <div class="col-lg-3 col-xs-6">
			  <!-- small box -->
			  <div class="small-box bg-yellow">
				<div class="inner">
				  <h3>Tutorial</h3>

				  <p>Typing Lessons</p>
				</div>
				<div class="icon">
				  <i class="ion ion-person-add"></i>
				</div>
				<a href="<?php echo site_url("Login/C_login/Lesson_system")?>" class="small-box-footer">
				  Start Now <i class="fa fa-arrow-circle-right"></i>
				</a>
			  </div>
			</div>
			
			<div class="col-lg-3 col-xs-6">
			  <!-- small box -->
			  <div class="small-box bg-red">
				<div class="inner">
				  <h3>Fast</h3>

				  <p>Fast Typing</p>
				</div>
				<div class="icon">
				  <i class="ion ion-pie-graph"></i>
				</div>
				<a href="#" class="small-box-footer">
				  More info <i class="fa fa-arrow-circle-right"></i>
				</a>
			  </div>
			</div>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="container">
      <div class="pull-right hidden-xs">
        <b>Version</b> 2.3.8
      </div>
      <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
      reserved.
    </div>
    <!-- /.container -->
  </footer>
</div>