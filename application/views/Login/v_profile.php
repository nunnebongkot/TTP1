<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<div class="content-wrapper">
 <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="<?php echo $pf_profileImage; ?>" alt="User profile picture">
              <h3 class="profile-username text-center"><?php echo $pf_fistname." ".$pf_lastname;?></h3>
              <ul class="list-group list-group-unbordered">
                 <li class="list-group-item">
                  <b>Firstname</b> <a class="pull-right"><?php echo $pf_fistname;?></a>
                </li>
				<li class="list-group-item">
                  <b>Lastname</b> <a class="pull-right"><?php echo$pf_lastname;?></a>
                </li>
				<li class="list-group-item">
                  <b>Email</b> <a class="pull-right"><?php echo $pf_email;?></a>
                </li>
              </ul>

              <a href="#" class="btn btn-primary btn-block"><b>Member</b></a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a data-toggle="tab">Profile</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <!-- Post -->
                <div class="post">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="<?php echo $pf_profileImage; ?>" alt="user image">
                        <span class="username">
                          <a><?php echo $pf_fistname." ".$pf_lastname;?></a>
                          <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
                    <span class="description">Typing Touch Program - About me</span>
                  </div>
                  <!-- /.user-block -->
                  <p><?php echo $pf_bio;?></p>

                </div>
              
                </div>
                <!-- /.post -->
              </div>
              <!-- /.tab-pane -->
              
             
            </div>
            <!-- /.tab-content -->
        </div>
          <!-- /.nav-tabs-custom -->
      </div>
      <!-- /.row -->

  </section>
  
</div>