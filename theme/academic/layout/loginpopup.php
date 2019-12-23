<div class="cd-popup" role="alert">
   <div class="cd-popup-container">
      <div class="log">
         <h2>Login</h2>
         <form method="post" id="cf_login" class="loginform" action="<?php echo $CFG->httpswwwroot; ?>/login/index.php">
            <div class="inputarea">
                <input type="hidden" name="logintoken" value="<?php echo s(\core\session\manager::get_login_token()); ?>" />
               <input type="text" name="username" id="username1" placeholder="<?php echo get_string('username'); ?>" autocomplete="off" />
               <input type="password" id="password1" name="password" placeholder="<?php echo get_string('password'); ?>" autocomplete="off" />
               <div class="clearfix"></div>
               <?php
                  if (!right_to_left()) { ?>
               <button>Login</button>
               <?php
                  } else { ?>
               <button>Login</button>
               <?php
                  } ?>
            </div>
            <div class="clearfix"></div>
            <label></label>
            <div class="forgotPassword langmenuContainer">
               <?php
                  if(!empty($CFG->registerauth)){
                  	 $authplugin = get_auth_plugin($CFG->registerauth);
                  	 if($authplugin->can_signup()){
                  		//echo html_writer::link($CFG->wwwroot.'/login/signup.php', 'Sign Up');	//TODO   this should come through the language file 	
                  		?>
               <a href="<?php echo $CFG->wwwroot.'/login/signup.php' ?>">Sign Up</a>
               <a href=" <?php echo $CFG->wwwroot.'/login/signup.php' ?>">|</a>
               <?php
                  }
                  }
                  ?>
               <a href=" <?php echo $CFG->wwwroot.'/login/forgot_password.php' ?>">Forgot Your Password</a>
            </div>
            <div class="clearfix"></div>
         </form>
      </div>
      <a href="#0" class="cd-popup-close img-replace">Close</a>
   </div>
   <!-- cd-popup-container -->
</div>
<script type="text/javascript">
   document.getElementById("username1").value = "User Name";
   
           $('input:text').focus(
       function(){
           $(this).val('');
       });
   
    document.getElementById("password1").value = "Password";
             $('input:password').focus(
       function(){
           $(this).val('');
       });
           
       
</script>