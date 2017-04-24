<script>
			  window.fbAsyncInit = function() {
				FB.init({
				  appId      : '414984515515624',
				  xfbml      : true,
				  version    : 'v2.8'
				});
				
				 FB.getLoginStatus(function(response) {
		    	if (response.status === 'connected') {
		    		document.getElementById('status').innerHTML = 'We are connected.';
		    		document.getElementById('login').style.visibility = 'hidden';
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
		}(document, 'script', 'facebook-jssdk'));
		
		// login with facebook with extra permissions
		function login() {
		// alert("Test");
			FB.login(function(response) {
				if (response.status === 'connected') {
					getInfo();
		    		// document.getElementById('status').innerHTML = 'We are connected.';
		    		// document.getElementById('login').style.visibility = 'hidden';
					
		    	} else if (response.status === 'not_authorized') {
		    		document.getElementById('status').innerHTML = 'We are not logged in.';
		    	} else {
		    		document.getElementById('status').innerHTML = 'You are not logged into Facebook.';
		    	}
			}, {scope: 'email'});
		// getInfo();
		}
		
		// getting basic user info
		function getInfo() {
			FB.api('/me', 'GET', {fields: 'first_name,last_name,name,id,picture.width(150).height(150)'}, function(response) {
				// document.getElementById('status').innerHTML = "<img src='" + response.picture.data.url + "'>";
				// document.getElementById('status').innerHTML = response.name;
				// alert(response.picture.data.url);
				var url = "<?php echo site_url();?>/login/c_login/check_login_facebook/"+response.id+"/"+response.first_name+"/"+response.last_name;
				// window.open(url);
				window.location.href = url;
			});
		}
</script>
<html lang="en">
  <head>
    <meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="1023508659894-abue3djqd9u78pc673a5lvd8ofjknjel.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
  </head>
 
    <!--<div class="g-signin2" data-onsuccess="onSignIn" data-theme="dark"></div>-->
	<!--<a href="#" onclick="signOut();">Sign out</a>-->
    <script>
      function onSignIn(googleUser) {
        // Useful data for your client-side scripts:
        var profile = googleUser.getBasicProfile();
        console.log("ID: " + profile.getId()); // Don't send this directly to your server!
        console.log('Full Name: ' + profile.getName());
        console.log('Given Name: ' + profile.getGivenName());
        console.log('Family Name: ' + profile.getFamilyName());
        console.log("Image URL: " + profile.getImageUrl());
        console.log("Email: " + profile.getEmail());

        // The ID token you need to pass to your backend:
        var id_token = googleUser.getAuthResponse().id_token;
        console.log("ID Token: " + id_token);
		var url = "<?php echo site_url();?>/login/c_login/check_login_google/"+profile.getId()+"/"+profile.getGivenName()+"/"+profile.getFamilyName();
		//console.log(url);
		window.location.href = url;

      };
   
  function signOut() {
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
      console.log('User signed out.');
    });
  }
</script>
  
</html>
       
	   <!-- Top content -->
        <div class="top-content">
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>Typing Touch Program.</strong></h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Login to our site</h3>
                            		<p>Enter your username and password to log on:</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-key"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
								<?php
									$data['form'] = "login-form";
									echo form_open("Login/C_login/check_login",$data);
								?>
			                    <form role="form" action="" method="post" class="login-form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-username">Username</label>
			                        	<input type="text" name="username" placeholder="Username..." class="form-username form-control" id="form-username">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password">Password</label>
			                        	<input type="password" name="password" placeholder="Password..." class="form-password form-control" id="form-password">
			                        </div>
			                        <button type="submit" class="btn">Sign in!</button>
			                        <div class="ed-account">
                   						<center>Don't have an account?&nbsp;<a href="<?php echo site_url();?>/login/c_login/register">Register</a></center> 
               						</div>
								<?php
									echo form_close();
								?>
		                    </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 social-login">
                        	<h3>...or login with:</h3>
                        	<div class="social-login-buttons" >
	                        	<div class="btn btn-link-1 btn-link-1-facebook" onclick="login()">
	                        		<i class="fa fa-facebook"></i> Facebook
	                        	</div>
	                        	<div class="btn btn-link-3  g-signin2"  data-onsuccess="onSignIn" data-theme="dark">
	                        		<i class="fa fa-google-plus"></i> Google Plus
	                        	</div>
							</div>
						</div>
					</div>
                </div>
            </div>
            
        </div>
