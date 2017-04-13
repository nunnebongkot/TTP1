
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
              <h3 class="box-title">Choose Your Lesson For English</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="box-group" id="accordion">
                <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                <div class="panel box box-primary">
                  <div class="box-header with-border">
                    <h4 class="box-title">
					
					<?php foreach($lesson->result() as $item) {?>
						<?php if($item->tt_language=='0'){ ?>
							<?php //if($item->lg_pf_id == NULL) { ?>
								<a href="<?php echo site_url('/login/C_login/Tutorial_system/').$item->tt_id;?>/0">
							<?php //} ?>
                        <?php echo "บทที่่ ".$item->tt_id." แป้น ".$item->tt_lesson;?>
						<BR>
                      </a>
					<?php }}?>
				
                    </h4>
                  </div>
                  <!--<div id="collapseOne" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                    <div class="box-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                      wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                      eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                      assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                      nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                      farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                      labore sustainable VHS.
                    </div
                  </div>-->
                </div>
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
              <h3 class="box-title">Choose Your Lesson For Thai</h3>
            </div>
          <!-- /.box-header -->
            <div class="box-body">
              <div class="box-group" id="accordion">
                <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                <div class="panel box box-primary">
                  <div class="box-header with-border">
                    <h4 class="box-title">
					
					<?php foreach($lesson->result() as $item) {?>
						<?php if($item->tt_language=='1'){ ?>
							<?php //if($item->lg_pf_id == NULL) { ?>
								<a href="<?php echo site_url('/login/C_login/Tutorial_system/').$item->tt_id;?>/1">
							<?php //} ?>
                        <?php echo "บทที่่ ".$item->tt_id." แป้น ".$item->tt_lesson;?>
						<BR>
                      </a>
					<?php }}?>
				
                    </h4>
                  </div>
                  <!--<div id="collapseOne" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                    <div class="box-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                      wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                      eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                      assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                      nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                      farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                      labore sustainable VHS.
                    </div
                  </div>-->
                </div>
          
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