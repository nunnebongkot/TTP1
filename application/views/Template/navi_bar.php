<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script>
	window.fbAsyncInit = function() {
		FB.init({
		  appId      : '414984515515624',
		  xfbml      : true,
		  version    : 'v2.8'
		});	
		FB.getLoginStatus(function(response) {
			if (response.status === 'connected') {
				// document.getElementById('status').innerHTML = 'We are connected.';
				getInfo();
				// document.getElementById('login').style.visibility = 'hidden';
			} else if (response.status === 'not_authorized') {
				document.getElementById('status').innerHTML = 'We are not logged in.'
			} else {
				document.getElementById('status').innerHTML = 'You are not logged into Facebook.';
			}
		});
	};
	(function(d, s, id){
	    var js, fjs = d.getElementsByTagName(s)[0];
	    if (d.getElementById(id)) {return;}
	    js = d.createElement(s); js.id = id;
	    js.src = "//connect.facebook.net/en_US/sdk.js";
	    fjs.parentNode.insertBefore(js, fjs);
		// alert('1');
	}(document, 'script', 'facebook-jssdk'));
	$(document).ready(function(){
		// var id = "<?php echo $id ?>";
		// alert(id);
		// login();
	});
	function getInfo() {
		var id = "<?php echo $id ?>";
		// alert(id);
		if(id != "" && id != 0){
			// alert(id);
			FB.api('/me', 'GET', {fields: 'first_name,last_name,name,id,picture.width(150).height(150)'}, function(response) {
				// alert(response.name);
				// alert('123');
				document.getElementById('picture_fb').src = response.picture.data.url;
				document.getElementById('picture_fb1').src = response.picture.data.url;
				document.getElementById('name_fb').innerHTML = response.name;
				document.getElementById('pro_pic_fb').src = response.picture.data.url;
				document.getElementById('pro_name_fb').innerHTML = response.name;
				
				// document.getElementById('login').style.visibility = 'hidden';
				// document.getElementById('status').innerHTML = "<p><input type='text' name='name' value="+response.name+"></p>";
				// document.getElementById('btn').innerHTML = "<p><button onclick='login()' id='login'>Facebook</button></p>";
			});
		}
	}
</script>
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
				<li><a href="<?php echo site_url("Login/C_login/main_speed")?>">Typing Test</a></li>
				<li><a href="<?php echo site_url("Login/C_login/main_competition")?>">Competition</a></li>
			</ul>
		</div>
		<!-- /.navbar-custom-menu -->
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- User Account Menu -->
            <li class="dropdown user user-menu">
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- The user image in the navbar-->
                <img id ="picture_fb" src="<?php echo base_url(); ?>template/adminlte/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                <!-- hidden-xs hides the username on small devices so only the image appears. -->
				<span class="hidden-xs" id="name_fb"><?php if($id==NULL || $id == 0){echo $pf_fistname." ".$pf_lastname;}?></span>
              </a>
              <ul class="dropdown-menu">
                <!-- The user image in the menu -->
                <li class="user-header">
                  <img id ="picture_fb1" src="<?php echo base_url(); ?>template/adminlte/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
						<p>
						<small>Member</small>
						</p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="<?php echo site_url('/Login/c_login/profile/').$pf_id;?>" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="<?php echo site_url();?>/Login/c_login" class="btn btn-default btn-flat">Sign out</a>
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