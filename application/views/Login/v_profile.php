<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<div class="content-wrapper">
    <div class="container">
		<div class="col-md-2"></div>
		<div class="col-md-8">
		  <!-- Content Header (Page header) -->
		  <!-- Main content -->
		  <section class="content">
			<div class="box box-primary">
				<div class="box-header with-border">
					<h1 class="box-title"><b>PROFILE</b></h1>
				</div>
				<div class="box-body">
					<div class="col-md-8">
						<dl class="dl-horizontal">
						<dt>Name :</dt>
						<dd id="pro_name_fb"><?php if($id==NULL || $id == 0){echo $pf_fistname." ".$pf_lastname;}?></dd>
						<dt>E-mail :</dt>
						<dd><?php echo $pf_email;?></dd>
						<dt>About me :</dt>
						<dd><?php echo $pf_bio;?></dd>
					  </dl>
					</div>
					<div class="col-md-4 pull-right"><img id ="pro_pic_fb" src="<?php echo base_url(); ?>template/adminlte/dist/img/user2-160x160.jpg" class="user-image" alt="User Image"></div>
				</div>
				
			  <!-- /.box-body -->
			</div>
			<!-- /.box -->
		  </section>
		  <!-- /.content -->
		</div>
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="container">
      <div class="pull-right hidden-xs">
      </div>
    </div>
    <!-- /.container -->
  </footer>
</div>