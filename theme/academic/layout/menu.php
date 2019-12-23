<!-- Start header top section -->
<div class="top-section">
   <div class="container-fluid">
      <div class="row-fluid">
         <div class="pull-left social-icons">
            <?php if($hasfacebook) { ?>
            <a href="<?php echo $hasfacebook; ?>" target="_blank" >           
            <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <?php }else { ?>
            <?php } ?>
            <?php if($hastwitter) { ?>
            <a href="<?php echo $hastwitter; ?>" target="_blank" >
            <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <?php }else { ?>
            <?php } ?>
            <?php if($hasgoogleplus) { ?>
            <a href="<?php echo $hasgoogleplus; ?>" target="_blank" >           
            <i class="fa fa-google-plus" aria-hidden="true"></i>
            </a>
            <?php }else { ?>
            <?php } ?>
         </div>
         <div class="pull-left contact-topbar">
            <span>
            <?php if($timing) { ?>   
            <i class="fa fa-clock-o"></i> <?php echo $timing ?>
            <?php }else { ?>
            <?php } ?>
            </span> 
            <span>
            <?php if($email) { ?>
            <i class="fa fa-envelope"></i> <?php echo $email ?>
            <?php }else { ?>
            <?php } ?>
            </span>
         </div>
          <div class="loginsection pull-right">
            <?php if(isloggedin()){
               if(isguestuser()){
               ?>
            <i class="fa fa-sign-in" aria-hidden="true"></i> <a class="login cd-popup-trigger" href="<?php echo new moodle_url('/login/index.php', array('sesskey'=>sesskey())), get_string('login') ?> "> 
            <?php echo get_string('login') ?>
            </a>
            <?php require_once(dirname(__FILE__).'/loginpopup.php'); ?>
            <?php
               }else{
               ?>
            <?php echo $OUTPUT->user_menu(); ?>	
            <?php
               }
               }else{ ?>	
            <?php
               if(!empty($CFG->registerauth)){
               	 $authplugin = get_auth_plugin($CFG->registerauth);
               	 if($authplugin->can_signup()){
               		
               		?>
            <i class="fa fa-user" aria-hidden="true"></i> <a class="signup" href="<?php echo $CFG->wwwroot.'/login/signup.php' ?>">Register</a>
            <?php
               }
               }
               ?>
            <i class="fa fa-sign-in" aria-hidden="true"></i><a class="login cd-popup-trigger" href="<?php echo new moodle_url('/login/index.php', array('sesskey'=>sesskey())), get_string('login') ?> "><?php echo get_string('login') ?>
            </a>
            <?php require_once(dirname(__FILE__).'/loginpopup.php'); ?>
            <?php
               }
               ?>
         </div>
         <!-- end div .loginsection -->
         <div class="clearfix"></div>
      </div>
   </div>
</div>
<!-- End header top section -->
<div class="topshadow-con">
   <div class="topshadow"></div>
</div>
<!-- Start header custom section -->
<div class="custom-section">
   <div class="container-fluid">
      <div class="pull-left">
         <a class="logo" href="<?php echo $CFG->wwwroot;?>"><img src="<?php echo $logourl?>" alt="" /> </a>
      </div>
      <header role="banner" class="navbar <?php echo $html->navbarclass ?> pull-right">
         <nav role="navigation" class="navbar-inner">
            <?php echo $OUTPUT->navbar_home(); ?>
            <?php echo $OUTPUT->navbar_button(); ?>
            <?php //echo $OUTPUT->user_menu(); ?>
            <?php //echo $OUTPUT->search_box(); ?>
             <?php echo $OUTPUT->navbar_plugin_output(); ?>
            <div class="nav-collapse collapse pull-right">
               <?php echo $OUTPUT->custom_menu(); ?>
               <ul class="nav pull-right">
                  <li><?php echo $OUTPUT->page_heading_menu(); ?></li>
               </ul>
            </div>
         </nav>
      </header>
      <div class="clearfix"></div>
   </div>
</div>
<!-- End header custom section -->