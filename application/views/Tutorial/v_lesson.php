<div class="wrapper">
  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a  class="navbar-brand"><b>Typing</b>Touch</a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>
		<div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo site_url("Login/C_login/lesson_system")?>">Tutorial Typing<span class="sr-only">(current)</span></a></li>
            <li><a href="#">Fast Typing</a></li>
          </ul>
        </div>
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
	
  <div class="content-wrapper">
    <div class="container">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
			Typing Lessons
        </h1>
       
      </section>

      <!-- Main content -->
      <section class="content">
	  <!-- Thai-->
     <div class="col-md-6">
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Choose Your Lesson For Thai</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="box-group" id="accordion">
                <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
				<?php
				$index = 0;
				foreach($query as $item){
				?>
                <div class="panel box box-primary">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a href="<?php echo site_url("Login/C_login/Tutorial_system/").$item->tt_id; ?>">
                        <?php echo "บทที่่ ".$item->tt_type." แป้น ".$item->tt_lesson_th;?>
                      </a>
                    </h4>
                  </div>
                </div>
				<?php
				}
				?>
                <!-- /.box-lesson -->
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.close ThAI -->
		
		<div class="col-md-6">
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Choose Your Lesson For English</h3>
            </div>
          <!-- /.box-header -->
            <div class="box-body">
              <div class="box-group" id="accordion">
                <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
				<?php
				
				foreach($query as $item){
				?>
                <div class="panel box box-primary">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a href="<?php echo site_url("Login/C_login/Tutorial_system_en/").$item->tt_id; ?>">
                        <?php echo "บทที่่ ".$item->tt_type." แป้น ".$item->tt_lesson_en;?>
                      </a>
                    </h4>
                  </div>
                </div>
				<?php
				}
				?>
                <!-- /.box-lesson -->
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
		
      </section>
	  
	
	  
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
</div>