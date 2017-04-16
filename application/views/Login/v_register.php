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
                			<h3>Sign up now</h3>
                    		<p>Fill in the below to get instant access:</p>
                		</div>
                		<div class="form-top-right">
                			<i class="fa fa-pencil"></i>
                		</div>
                    </div>
                    <div class="form-bottom">
					<?php
						$data['form'] = "login-form";
						echo form_open("Login/C_login/insert_regis",$data);
					?>
						<input type="hidden" name="pf_fbId_gmId" value="<?php echo $id; ?>" />
							
								<div class="form-group">
									<label class="sr-only" for="form-firstname">Username</label>
									<input type="text" name="pf_username" placeholder="Username..." value="" class="form-firstname form-control" required>
								</div>
								<div class="form-group">
									<label class="sr-only" for="form-firstname">Password</label>
									<input type="password" name="pf_password" placeholder="Password..." value="" class="form-firstname form-control" required>
								</div>
	                    	<div class="form-group">
	                    		<label class="sr-only" for="form-firstname">First name</label>
								<?php
								if(!$fname){
								?>
									<input type="text" name="pf_fistname" placeholder="First name..." value="" class="form-firstname form-control" id="form-firstname" required>
								<?php
								}else{
								?>
									
									<input type="text" placeholder="<?php echo $pf_fistname; ?>" class="form-firstname form-control" id="form-firstname" disabled>
									<input type="hidden"  name="pf_fistname" value="<?php echo $pf_fistname;?>;" />
								<?php
								}
								?>
							</div>
	                        <div class="form-group">
	                    		<label class="sr-only" for="form-firstname">Last name</label>
								<?php
								if(!$lname){
								?>
									<input type="text" name="pf_lastname" placeholder="Last name..." class="form-lastname form-control" required>
								<?php
								}else{
								?>
									<input type="text" placeholder="<?php echo $pf_lastname; ?>" class="form-lastname form-control" disabled>
									<input type="hidden" name="pf_lastname" value="<?php echo $pf_lastname; ?>" />
								<?php
								}
								?>
							</div>
							<div class="form-group">
								<label class="sr-only" for="form-email">Email</label>
								<input type="text" name="pf_email" placeholder="Email..." class="form-email form-control" id="form-email" required>
							</div>
	                        <div class="form-group">	                      
								<label class="sr-only" for="form-about">About</label>
								<textarea name="pf_bio" placeholder="About..." class="form-control" rows="5" id="form-about" required></textarea>
	                        </div>
	                        <button type="submit" class="btn">Sign me up!</button>
	                    <?php
							echo form_close();
						?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>